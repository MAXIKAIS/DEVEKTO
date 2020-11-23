<?php

namespace App\Controller;

use App\Repository\PortfolioRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="app_index")
     */
    public function index(PortfolioRepository $portfolioRepository)
    {
        return $this->render('home.html.twig', [
            'h1Title' => 'DEVKTO!',
            'portfolios' => $portfolioRepository->findAll(),
        ]);
    }
}

