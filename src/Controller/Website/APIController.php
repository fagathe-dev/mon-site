<?php
namespace Fagathe\MonSite\Controller\Website;

use Fagathe\Framework\Controller\AbstractController;

use Fagathe\Framework\Helpers\DateTimeHelperTrait;
use Fagathe\MonSite\Service\Website\DefaultService;
use Symfony\Component\HttpFoundation\Response;

final class APIController extends AbstractController
{
    use DateTimeHelperTrait;

    private DefaultService $service;

    public function __construct()
    {
        $this->service = new DefaultService;
    }

    /**
     * @return Response
     */
    public function getSingleProject(array $params): Response
    {
        $id = (int) $params["id"];
        return $this->json($this->service->findProjetById($id));
    }
}