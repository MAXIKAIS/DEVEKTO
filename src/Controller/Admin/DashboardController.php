<?php

namespace App\Controller\Admin;

use App\Entity\Contact;
use App\Entity\Interest;
use App\Entity\Picture;
use App\Entity\Portfolio;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\CrudUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        $routeBuilder = $this->get(CrudUrlGenerator::class)->build();

        return $this->redirect($routeBuilder->setController(PortfolioCrudController::class)->generateUrl());
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('DEVEKTO');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToCrud('Interest', 'far fa-clipboard', Interest::class);
        yield MenuItem::linkToCrud('Portfolio', 'far fa-images', Portfolio::class);
        yield MenuItem::linkToCrud('Picture', 'far fa-images', Picture::class);
        yield MenuItem::linkToCrud('Contact', 'far fa-address-book', Contact::class);
    }
}
