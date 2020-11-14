<?php

namespace App\Controller;

use App\Entity\Clothe;
use App\Entity\Recommendation;
use App\Entity\Group;
use App\Entity\Picture;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Buandier');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Vêtements', 'fas fa-tshirt', Clothe::class);
        yield MenuItem::linkToCrud('Recommendations', 'fas fa-mitten', Recommendation::class);
        yield MenuItem::linkToCrud('Groupes', 'fas fa-users', Group::class);
        yield MenuItem::linkToCrud('Images', 'fas fa-images', Picture::class);
        yield MenuItem::linkToCrud('Utilisateurs', 'fas fa-user', User::class);
    }
}
