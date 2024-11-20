<?php

return [
    'mpi' => [
        'redirect_url' => 'http://localhost:8000/mpi/result'
    ],
    'token' => [
        'token_api_key' => 'cd76ca65-7f54-4dec-8ba3-11c12e36a548'
    ],
    'rakuten' => [
        'success_url' => 'http://localhost:8000/rakuten/result?result=SUCCESS',
        'error_url' => 'http://localhost:8000/rakuten/result?result=ERROR',
        'push_url' => 'http://localhost:8000/push/rakuten'
    ]
];
