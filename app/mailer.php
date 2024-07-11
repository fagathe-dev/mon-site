<?php 

// TRANSFORMER LES CONFIGS EN CONSTANTES 
return [
     'SMTP' => 'YOUR SMTP', 
     'PORT' => 'SMTP PORT',
     'ENCRYPTION' => [
        'ENABLED' => '', // SET true || false
        'ENCRYPTION_PROTOCOL' => 'ssl|tls'
     ],
     'CREDENTIALS' => (object) [
          'USERNAME' => 'YOUR EMAIL ADDRESS',
          'PASSWORD' => 'YOUR PASSWORD'
     ],
];