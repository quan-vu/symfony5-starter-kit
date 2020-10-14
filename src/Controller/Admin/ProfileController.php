<?php

namespace App\Controller\Admin;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Controller\Admin\AdminBaseController;


class ProfileController extends AdminBaseController
{
    
    /**
     * @Route("/profile", name="admin_profile_index")
     */
    public function index(): Response
    {
        // return $this->redirect($routeBuilder->setController(OneOfYourCrudController::class)->generateUrl())
        return $this->render('admin/profile/index.html.twig');
    }
}
