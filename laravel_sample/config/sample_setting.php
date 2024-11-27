<?php

return [
    'mpi' => [
        'redirect_url' => 'http://localhost:8000/mpi/result'
    ],
    'token' => [
        'token_api_key' => env('TOKEN_API_KEY'),
    ],
    'rakuten' => [
        'success_url' => 'http://localhost:8000/rakuten/result?result=SUCCESS',
        'error_url' => 'http://localhost:8000/rakuten/result?result=ERROR',
        'push_url' => 'http://localhost:8000/push/rakuten'
    ]
];
