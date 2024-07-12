<?php
namespace Fagathe\MonSite\Controller\Website;

use Fagathe\Framework\Controller\AbstractController;

use Fagathe\Framework\Helpers\DateTimeHelperTrait;
use Fagathe\MonSite\Service\JSON\SEOService;
use Fagathe\MonSite\Service\Website\DefaultService;
use Symfony\Component\HttpFoundation\Response;

final class DefaultController extends AbstractController
{
    use DateTimeHelperTrait;

    private DefaultService $service;
    private SEOService $seoService;

    public function __construct()
    {
        $this->service = new DefaultService;
        $this->seoService = new SEOService;
    }

    /**
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('website/home/index.twig', [...$this->service->getData(), 'seo' => $this->seoService->getSEO('homePage')]);
    }
}