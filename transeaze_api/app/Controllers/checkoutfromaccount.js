
i - Charge (For collecting payment from a bank account)
	
//All parameters except for merchantid should be 
//encrypted with the API key using the TripleDES algorithm. 
{
  "merchantid": "Merchant Key",
  "narration":"(Encrypted Narration)",
  "accountnumber":"(Encrypted Account number to debit)",
  "bankcode":"(Encrypted Bank Code)",
  "passcode":"(Encrypted Passcode)",
  "amount":"(Encrypted Amount)",        
  "currency":"(Encrypted Currency)",        
  "firstname":"(Encrypted First Name)",
  "lastname":"(Encrypted Last Name)",
  "email":"(Encrypted Email)",
  "transactionreference":"(Encrypted Transaction Reference)",
  "accounttoken":"(Encrypted accounttoken)",
  "authmodel":"(Encrypted authmodel)" //[AUTH, NOAUTH],
  "phonenumber":"(Encrypted phone number)",
  "responseurl":"(Encrypted Response URL)"
}




http://staging1flutterwave.co:8080/pwc/rest/account/pay

1 - initiate transaction with account number 

parameter expected

{
 	"merchantid": "Merchant Key",
	"validateoption": "(Optional: Encrypted Validate Option)", //Can be SMS, VOICE, HWTOKEN or USSD
	"country": "(Optional: Encrypted Country)",
	"narration":"(Encrypted Narration)",
	"accountnumber":"(Encrypted Account number to debit)",
	"bankcode":"(Encrypted Bank Code)",
	"passcode":"(Optional: Encrypted Passcode)", //mapped to account number and MUST be the same on subsequent calls for a specific account number
	"amount":"(Encrypted Amount)",        
	"currency":"(Encrypted Currency)",        
	"firstname":"(Encrypted First Name)",
	"lastname":"(Encrypted Last Name)",
	"email":"(Encrypted Email)",
	"transactionreference":"(Encrypted Transaction Reference)" //must be unique for every API call 
}

http://staging1flutterwave.co:8080/pwc/rest/account/pay

2 - incase of otp error resend otp

parameter expected

{
    "validateoption": "Encrypted validate option", //SMS or VOICE
    "merchantid": "Merchant Key",
    "transactionreference": "Encrypted transactionReference"
}

http://staging1flutterwave.co:8080/pwc/rest/account/pay/resendotp

3 - validate pending transaction from a bank account

{
  "merchantid": "(Merchant Key)",
  "otp":"(Encrypted OTP)",
  "transactionreference":"(Encrypted Transaction Reference)"
}

http://staging1flutterwave.co:8080/pwc/rest/account/pay/validate





functions for encrypting transactions 

// this is the getKey function that generates an encryption Key for you by passing your Secret Key as a parameter.
function getKey(seckey){
    var md5 = require('md5');
    var keymd5 = md5(seckey);
    var keymd5last12 = keymd5.substr(-12);

    var seckeyadjusted = seckey.replace('FLWSECK-', '');
    var seckeyadjustedfirst12 = seckeyadjusted.substr(0, 12);

    return seckeyadjustedfirst12 + keymd5last12;
}

// This is the encryption function that encrypts your payload by passing the stringified format and your encryption Key.
function encrypt(key, text){
    var CryptoJS = require('crypto-js');
    var forge    = require('node-forge');
    var utf8     = require('utf8');
    var cipher   = forge.cipher.createCipher('3DES-ECB', forge.util.createBuffer(key));
    cipher.start({iv:''});
    cipher.update(forge.util.createBuffer(text, 'utf-8'));
    cipher.finish();
    var encrypted = cipher.output;
    return ( forge.util.encode64(encrypted.getBytes()) );
}


/**** THIS ENCRYPTION SECTION IS FOR FRONT END ECRYPTION***/

// Encryption can also be done at the front end using `RSA Encryption`:

function getPublicKey(){
  // write function to generate Public Key here using RSA Encryption
  // see cryptico docs on how to do that.
}
chargeDataGlobal = { "// Enter your payload here" };
var newdata = {PBFPubKey:chargeDataGlobal.PBFPubKey, client:cryptico.encrypt(JSON.stringify(chargeDataGlobal),getPublicKey()).cipher};