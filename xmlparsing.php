<?php

	$xmlstr = <<<XML
<?xml version="1.0" encoding="utf-8" ?>
<UPay>
<MerchantID> merchantID </MerchantID>
<OrderID> orderID </OrderID>
<Status> status </Status>
<StatusCode> statusCode </StatusCode>
<Amount> amount </Amount>
<Date> date </Date>
<TransactionRef> transactionRef </TransactionRef>
<PaymentRef> paymentRef </PaymentRef>
<PaymentGateway> paymentGateway </PaymentGateway>
<ResponseCode> responseCode </ResponseCode>
<ResponseDescription> responseDescription </ResponseDescription>
<CurrencyCode> currencyCode </CurrencyCode>
<AmountDiscrepancyCode> amountDiscrepancyCode1456 </AmountDiscrepancyCode>
</UPay>
XML;
	
	
	
	
	
	
	
	
	/*
	$response = file_get_contents('http://example.com/path/to/api/call?param1=5');
	$response = new SimpleXMLElement($response);
    */
	
	$movies = new SimpleXMLElement($xmlstr);
    echo $movies->AmountDiscrepancyCode;
   // echo $movies->movie->{'great-lines'}->line;
	
	
	
?>

<!--
<br/><br/>
https://fcmbwebpay.firstcitygrouponline.com/customerportal/MerchantServices/UpayTransac
tionStatus.ashx?MERCHANT_ID=<merchant_id>&ORDER_ID=<order_id>>&CURR_CODE=<curr_code>&AMO
UNT=<amount>
-->