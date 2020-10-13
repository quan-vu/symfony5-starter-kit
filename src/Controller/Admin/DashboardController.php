<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Conference;
use App\Entity\Comment;


class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    // public function index(): Response
    // {
    //     // redirect to some CRUD controller
    //     // $routeBuilder = $this->get(CrudUrlGenerator::class)->build();

    //     // return $this->redirect($routeBuilder->setController(OneOfYourCrudController::class)->generateUrl());

    //     // // you can also redirect to different pages depending on the current user
    //     // if ('jane' === $this->getUser()->getUsername()) {
    //     //     return $this->redirect('...');
    //     // }

    //     // you can also render some template to display a proper Dashboard
    //     // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
    //     return $this->render('admin/dashboard.html.twig');
    // }

    // public function configureDashboard(): Dashboard
    // {
    //     return Dashboard::new()
    //         ->setTitle('Symfony5 Starter Kit');
    // }
    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            // the name visible to end users
            ->setTitle('ACME Corp.')
            // you can include HTML contents too (e.g. to link to an image)
            ->setTitle('<img src="..."> ACME <span class="text-small">Corp.</span>')
            ->setTitle('Symfony5 Starter Kit')

            // the path defined in this method is passed to the Twig asset() function
            ->setFaviconPath('favicon.svg')

            // the domain used by default is 'messages'
            ->setTranslationDomain('my-custom-domain')

            // there's no need to define the "text direction" explicitly because
            // its default value is inferred dynamically from the user locale
            ->setTextDirection('ltr')
        ;
    }

    // public function configureMenuItems(): iterable
    // {
    //     yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
    //     // yield MenuItem::linkToCrud('The Label', 'icon class', EntityClass::class);
    // }

    public function configureMenuItems(): iterable
    {
        return [
            MenuItem::linkToDashboard('Dashboard', 'fa fa-home'),
            MenuItem::linkToCrud('Conference', 'fa fa-home', Conference::class),
            // MenuItem::linkToDashboard('Dashboard', 'fa fa-home'),

            MenuItem::section('Conference'),
            MenuItem::linkToCrud('Conferences', 'fa fa-home', Conference::class),
            MenuItem::linkToCrud('Comments', 'fa fa-home', Comment::class),
            
            // MenuItem::section('Users'),
            // MenuItem::linkToCrud('Comments', 'fa fa-comment', Comment::class),
            // MenuItem::linkToCrud('Users', 'fa fa-user', User::class),
        ];
    }
}
