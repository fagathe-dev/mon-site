<?php

define("DOCUMENT_ROOT", dirname(__DIR__));
define("RESSOURCES_DIR", dirname(__DIR__) . '/public/');
define("TEMPLATE_DIR", [dirname(__DIR__) . '/templates/']);
define("ERROR_TEMPLATE_DIR", dirname(__DIR__) . '/vendor/fagathe/framework/src/Exception/views/');
define("CUSTOM_ERROR_TEMPLATE_DIR", dirname(__DIR__) . '/templates/errors/');

require_once "settings.php";