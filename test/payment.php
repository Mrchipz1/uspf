<?php 
require 'Flutterwave.php';
use Flutterwave\Account;
use Flutterwave\Flutterwave;

//merchantKey and apiKey can be found in your flutter developer console
//env can be production or staging depending on your stage of development
$merchantKey = ""; //can be found on flutterwave dev portal
$apiKey = ""; //can be found on flutterwave dev portal
$env = "staging"; //this can be production when ready for deployment
Flutterwave::setMerchantCredentials($merchantKey, $apiKey, $env, 1); //version is optional and can be 1 or 2, when not passed, it defaults to 1

$paymentDetails = [
  "amount" => "",
  "currency" => "",
  "narration" => "",
  "firstname" => "",
  "lastname" => "",
  "email" => "",
  "phonenumber" => "",
  "country" => ""
];

$accountNumber = ""; //account number you want to charge
$bankCode = "";
$passCode = ""; //4 to 6 digit security pin, it will be mapped to the account
$ref = ""; //unique transaction ref
$responseUrl = ""; //url on your server to call back for SA banks (optional)
$authModel = ""; //authentication model, can be AUTH or NOAUTH
$accountToken = ""; //gotten after successful charge, used for recurrent payment (optional)
$result = Account::charge($accountNumber, $bankCode, $passCode, $paymentDetails, $ref, $responseUrl, $authModel, $accountToken);
if ($result->isSuccessfulResponse()) {
  echo("Charge Works");
}

$resp = $result->getResponseData();
$parameter = $resp['data']['authparams'][0]['validateparameter'];
$value = ""; //sent to account owners number
$ref = $resp['data']['transactionreference'];

$result2 = Account::validate($parameter, $value, $ref);

if ($result2->isSuccessfulResponse()) {
  echo("Successfully validated");
}

