<?php

use Fagathe\Framework\Env\Env;

define('APP_ENV', Env::getEnv('APP_ENV'));
define('APP_DEBUG', Env::getEnv('APP_DEBUG'));

define('APP_VERSION', Env::getEnv('APP_VERSION'));
define('APP_NAME', Env::getEnv('APP_NAME'));
define('APP_SEO_TITLE', Env::getEnv('APP_SEO_TITLE'));
define('APP_LINKEDIN_URL', Env::getEnv('APP_LINKEDIN_URL'));
define('APP_GITHUB_URL', Env::getEnv('APP_GITHUB_URL'));
define('APP_PHONE_NUMBER', Env::getEnv('APP_PHONE_NUMBER'));
define('APP_EMAIL_CONTACT', Env::getEnv('APP_EMAIL_CONTACT'));
define('APP_GOOGLE_TAGMANAGER', Env::getEnv('APP_GOOGLE_TAGMANAGER'));