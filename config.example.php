<?php
// Copy this file to config.php and add your LIVE/SANDBOX PesaPal credentials.
// NEVER commit config.php to a public repository.
return [
    'pesapal' => [
        'consumer_key' => 'YOUR_PESAPAL_CONSUMER_KEY',
        'consumer_secret' => 'YOUR_PESAPAL_CONSUMER_SECRET',
        'environment' => 'sandbox', // sandbox or live
        'callback_url' => 'https://YOUR-DOMAIN.example/payment/callback.php',
        'ipn_url' => 'https://YOUR-DOMAIN.example/payment/ipn.php'
    ],
    'sidai' => [
        'account_name' => 'SIDAI CBO',
        'account_number' => '1354195051'
    ],
    'app' => [
        'timezone' => 'Africa/Nairobi',
        'currency_whitelist' => ['KES','USD']
    ]
];
