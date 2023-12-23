<?php

return [
    'merchantId'    => env('MIDTRANS_MERCHANT_ID'),
    'serverKey'     => env('MIDTRANS_SERVER_KEY'),
    'clientKey'     => env('MIDTRANS_CLIENT_KEY'),
    'isProduction'  => env('MIDTRANS_IS_PRODUCTION'),
    'isSanitized'   => env('MIDTRANS_IS_SANITIZED'),
    'is3ds'         => env('MIDTRANS_IS_3DS'),
];