<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Payuumoney extends CI_Controller 
{

//Code for how to integrate payumoney payment gateway in codeigniter
// Merchant key here as provided by Payu
$key = "your key";
// Merchant Salt as provided by Payu
$salt = "your salt id";
$productinfo="Accourding to your requirement";
$firstname='Payu payment gateway';
$amount="500";
$phone='+91-9*********';
$email='payu@yourmail.com';
// End point - change to https://secure.payu.in for LIVE mode
$PAYU_BASE_URL = "https://secure.payu.in";
 
if(empty($posted['txnid'])) {
// Generate random transaction id
$txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
$txnid = $posted['txnid'];
}
$hash = '';
 
// Hash Sequence
//Please add Sequence according this format
//$hashSequence =     "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
$hashdata = ($key."|".$txnid."|".$amount."|".$productinfo."|".$firstname."|".$email."|||||||||||".$salt);
$hash = strtolower(hash("sha512", $hashdata));
?>
 
<form action="https://secure.payu.in/_payment" method="post" name="payuForm" class="integrate PayUmoney payment gateway in codeigniter">
<input class="PayUmoney payment gateway in codeigniter" type="hidden" name="key" value="<?php echo $key ?>" />
<input class="PayUmoney payment gateway in codeigniter" type="hidden" name="hash" value="<?php echo $hash ?>"/>
<input class="PayUmoney payment gateway in codeigniter" type="hidden" name="txnid" value="<?php echo $txnid ?>" />
<table>
<tr>
<td class="integrate PayUmoney payment gateway in codeigniter"><input type="hidden" name="amount" value="<?php echo $amount ?>" /></td>
<td class="integrate PayUmoney payment gateway in codeigniter"><input  type="hidden" name="firstname" id="firstname" value="<?php echo $firstname ?>" /></td>
</tr>
<tr>
<td class="integrate PayUmoney"><input type="hidden" name="email" id="email" value="<?php echo $email; ?>" /></td>
</tr>
<tr>
<td colspan="3" class="payment gateway in codeigniter"><input type="hidden" name="productinfo" value="<?php echo $productinfo ?>" /></td>
</tr>
<tr>
<td colspan="3" class="PayUmoney payment gateway in codeigniter"><input type="hidden" name="surl" value="<?php echo base_url();?>/index.php/success_payment/?email=<?php echo $email; ?>" size="64" /></td>
</tr>
<tr>
<td colspan="3" class="PayUmoney"><input type="hidden" name="furl" value="<?php echo base_url();?>/index.php/fail_url" size="64" /></td>
</tr>
<tr>
<td colspan="4" class="PayUmoney"><input style="float: right;   margin-left: 469px;  background-color: #469000;font-size: 17px;  color: #fff; padding: 2px 17px;  border-radius: 9px;" type="submit" value="Proceed for Payment" /></td>
 
</tr>
</table>
</form>
}
?>