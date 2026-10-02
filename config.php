<?php
return [
 'pesapal'=>[
  'consumer_key'=>'YOUR_PESAPAL_CONSUMER_KEY',
  'consumer_secret'=>'YOUR_PESAPAL_CONSUMER_SECRET',
  'environment'=>'sandbox',
  'callback_url'=>'https://YOUR-DOMAIN.example/payment/callback.php',
  'ipn_url'=>'https://YOUR-DOMAIN.example/payment/ipn.php',
  'notification_id'=>'YOUR_REGISTERED_IPN_ID'
 ],
 'sidai'=>['account_name'=>'SIDAI CBO','account_number'=>'1354195051'],
 'app'=>['timezone'=>'Africa/Nairobi','currency_whitelist'=>['KES','USD']]
];
