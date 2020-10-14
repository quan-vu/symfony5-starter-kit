<?php

namespace App\Controller\Admin;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Controller\Admin\AdminBaseController;
use App\Entity\Conference;
use App\Entity\Comment;


class DashboardController extends AdminBaseController
{
    
    /**
     * @Route("/admin", name="admin_dashboard_index")
     */
    public function index(): Response
    {
        // return $this->redirect($routeBuilder->setController(OneOfYourCrudController::class)->generateUrl())
        return $this->render('admin/dashboard/index.html.twig');
    }
}
