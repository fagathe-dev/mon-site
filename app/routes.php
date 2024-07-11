<?php

use Fagathe\Framework\Router\Route;
use Fagathe\MonSite\Controller\DefaultController;

return [
    new Route('/', name: 'app.default', action: DefaultController::class . "@index", methods: ["GET", 'POST']),
    new Route('/login', name: 'app.login', action: DefaultController::class . "@index", methods: ["GET", 'POST']),
    new Route('/blog/{slug}-{id}', name: 'app.blog', action: DefaultController::class . "@index", requirements: ['id' => '\d+'], methods: ["GET", 'POST']),
];