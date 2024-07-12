<?php
namespace Fagathe\MonSite\Controller;

use Fagathe\Framework\Controller\AbstractController;

use Fagathe\Framework\Helpers\DateTimeHelperTrait;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

final class DefaultController extends AbstractController
{
    use DateTimeHelperTrait;

    /**
     * @param array $params
     * 
     * @return Response
     */
    public function index(array $params): Response
    {

        return $this->render('website/home/index.twig');
    }

    /**
     * @return Response
     */
    public function pong(): Response
    {
        return $this->render('base.twig');
    }
}