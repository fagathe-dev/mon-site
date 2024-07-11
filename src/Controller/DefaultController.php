<?php
namespace Fagathe\MonSite\Controller;


use Fagathe\Framework\Database\Model\UserModel;
use Fagathe\MonSite\Form\UserForm;
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
        $request = Request::createFromGlobals();
        $userModel = new UserModel();
        $user = $userModel->find(3);
        $form = $this->createForm(UserForm::class, $user->toArray());

        $form->handleRequest($request);
        if ($form->isSubmitted()) {
        }

        return $this->render('web/index.twig', compact('form'));
    }

    /**
     * @return Response
     */
    public function pong(): Response
    {
        return $this->render('base.twig');
    }
}