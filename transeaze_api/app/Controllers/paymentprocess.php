<?php
namespace App\Controllers;
require BASE_PATH . '/dbhandler/util/functions.php';

use App\Renders\ApiView;
use Slim\Http\Request;
use Slim\Http\Response;
use Psr\Log\LoggerInterface;

final class paymentprocess {
    private $view;
    private $logger;
    private $DBcon;
    private $session;
    private $phash;

    public function __construct(ApiView $view, LoggerInterface $logger, $cdb, $sess, $phash){
        $this->view = $view;
        $this->logger = $logger;
        $this->DBcon = $cdb;
        $this->session = $sess;
        $this->phash = $phash;
    } 

    public function test(Request $request, Response $response, $args){
        $input = $request->getParsedBody();
        $uEmail = htmlspecialchars($input['email']);
        $uPass = htmlspecialchars($input['password']);

        $message = ['message' => "You're already logged in!", 'data' => $uEmail];
        return $this->view->render($request, $response, $message, 401);
    }

    public function searchfinger($fingerdata){
        $sql = "SELECT * FROM bvn WHERE (LF1=:fingerdata) OR (LF2=:fingerdata) OR (LF3=:fingerdata) OR (LF4=:fingerdata) OR (LF5=:fingerdata) OR (RF1=:fingerdata) OR (RF2=:fingerdata) OR (RF3=:fingerdata) OR (RF4=:fingerdata) OR (RF5=:fingerdata)";
        $stmt = $this->DBcon->prepare($sql); 
        $stmt->bindParam(':fingerdata', $fingerdata);
        $stmt->execute();
        $res = $stmt->fetch();
        if($res < 1){
            return null;
        }else{
            return $res;
        }
    }

    public function getbvndetails($fingerdata){
        return null;
    }

    public function getBanksUsingbvn($bvnid){
        $sql = "SELECT * FROM bankdetails WHERE (bvnId=:bvnid)";
        $stmt = $this->DBcon->prepare($sql);
        $stmt->bindParam(':bvnid', $bvnid);
        $stmt->execute();
        $res = $stmt->fetchall();
        if($res < 1){
            return null;
        }else{
            return $res;
        }
    }   

    public function getBankDetails($bankId){
        $sql = "SELECT * FROM bankdetails WHERE (id=:bankId)";
        $stmt = $this->DBcon->prepare($sql);
        $stmt->bindParam(':bankId', $bankId);
        $stmt->execute();
        $res = $stmt->fetchall();
        if($res < 1){
            return null;
        }else{
            return $res;
        }
    }

    public function getKey($seckey){
      $hashedkey = md5($seckey);
      $hashedkeylast12 = substr($hashedkey, -12);

      $seckeyadjusted = str_replace("FLWSECK-", "", $seckey);
      $seckeyadjustedfirst12 = substr($seckeyadjusted, 0, 12);

      $encryptionkey = $seckeyadjustedfirst12.$hashedkeylast12;
      return $encryptionkey;

    }

    public function payviacard(){ // set up a function to test card payment.
    
        error_reporting(E_ALL);
        ini_set('display_errors',1);
        
        $data = array('PBFPubKey' => 'FLWPUBK-e634d14d9ded04eaf05d5b63a0a06d2f-X',
        'cardno' => '5438898014560229',
        'currency' => 'NGN',
        'country' => 'NG',
        'cvv' => '789',
        'amount' => '300',
        'expiryyear' => '19',
        'expirymonth' => '09',
        'suggested_auth' => 'pin',
        'pin' => '3310',
        'email' => 'tester@flutter.co',
        'IP' => '103.238.105.185',
        'txRef' => 'MXX-ASC-4578',
        'device_fingerprint' => '69e6b7f0sb72037aa8428b70fbe03986c');
        
        $SecKey = 'FLWSECK-bb971402072265fb156e90a3578fe5e6-X';
        
        $key = getKey($SecKey); 
        
        $dataReq = json_encode($data);
        
        $post_enc = encrypt3Des( $dataReq, $key );

        var_dump($dataReq);
        
        $postdata = array(
         'PBFPubKey' => 'FLWPUBK-e634d14d9ded04eaf05d5b63a0a06d2f-X',
         'client' => $post_enc,
         'alg' => '3DES-24');
        
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, "https://ravesandboxapi.flutterwave.com/flwv3-pug/getpaidx/api/charge");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postdata)); //Post Fields
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 200);
        curl_setopt($ch, CURLOPT_TIMEOUT, 200);
        
        
        $headers = array('Content-Type: application/json');
        
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        
        $request = curl_exec($ch);
        
        if ($request) {
            $result = json_decode($request, true);
            echo "<pre>";
            print_r($result);
        }else{
            if(curl_error($ch))
            {
                echo 'error:' . curl_error($ch);
            }
        }
        
        curl_close($ch);
    }
    


    public function encrypt3Des($data, $key){
        $encData = openssl_encrypt($data, 'DES-EDE3', $key, OPENSSL_RAW_DATA);
        return base64_encode($encData);
    }

    public function verifyUser(Request $request, Response $response, $args){
        $readinput = json_decode($request->getBody());
        $verifyParams = $this->verifyRequiredParams($readinput, array('fingerdetails'));   
        if($verifyParams['e']){
            $data = ['message' => substr($verifyParams['m'], 0, -2)];
            return $this->view->render($request, $response, $data, 401);
        }  
        $fingerdetails = htmlspecialchars($readinput->fingerdetails);
        $searchFinger = $this->searchfinger($fingerdetails);
        // search banks beloging to finger using bvn
        $searchbanks = $this->getBanksUsingbvn($searchFinger['id']);
        $listOfFinger = array();
        foreach ($searchFinger as $key => $value) {
            if($value == $fingerdetails){
                $listOfFinger[] = $key;
            }
        } 

        $userFinger = array_filter($listOfFinger, "is_string");
        if(count($userFinger) > 1){
            $messageAboutFinger = "something went wrong";
            $rescode = 201;
        }else{
            $messageAboutFinger = "we are all set";
            $rescode = 200;
        }

        $message = ['banks' => $searchbanks, 'userfinger' => $userFinger[0], 'messageAboutFinger' => $messageAboutFinger, 'fingercode' => $rescode];
        return $this->view->render($request, $response, $message, 200);
    }

    public function getBankProps(Request $request, Response $response, $args){
        $readinput = json_decode($request->getBody());
        $verifyParams = verifyRequiredParams($readinput, array('bankid'));    
        if($verifyParams['e']){
            $data = ['message' => "The following required field(s) is either missing or empty: " .substr($verifyParams['m'], 0, -2), 'fields' => substr($verifyParams['m'], 0, -2)];
            // $data = ['message' => substr($verifyParams['m'], 0, -2)];
            return $this->view->render($request, $response, $data, 401);
        }    
        $bankId = htmlspecialchars($readinput->bankid);
        $bankdetails = $this->getBankDetails($bankId);
        $message = ['bankdetails' => $bankdetails];
        return $this->view->render($request, $response, $message, 200);
    }
}
