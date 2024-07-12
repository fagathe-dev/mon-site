<?php

use Fagathe\Framework\Router\Route;
use Fagathe\MonSite\Controller\Website\APIController;
use Fagathe\MonSite\Controller\Website\DefaultController;

return [
    new Route('/', name: 'website_home_index', action: DefaultController::class . "@index", methods: ["GET", 'POST']),
    new Route('/website/api/project/{id}', name: 'website_api_get_single_project', action: APIController::class . "@getSingleProject", requirements: ['id' => '\d+'], methods: ['GET']),
    new Route('/website/api/xp/{id}', name: 'website_api_get_single_xp', action: APIController::class . "@getSingleExperience", requirements: ['id' => '\d+'], methods: ['GET']),
];