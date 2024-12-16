<?php

return [
    'paths' => ['api/*', 'sanctum/csrf-cookie'],
    'allowed_methods' => ['OPTION', 'GET', 'POST', 'PATCH', 'DELETE'],
    'allowed_origins' => ['http://localhost:8000'],
];