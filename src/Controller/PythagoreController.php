<?php

// src/Controller/PythagoreController.php

namespace App\Controller;

use App\Utility\PythagoreUtility;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PythagoreController extends AbstractController
{
    private $pythagoreUtility;

    public function __construct(PythagoreUtility $pythagoreUtility)
    {
        $this->pythagoreUtility = $pythagoreUtility;
    }

    #[Route('/pythagore', name: 'app_pythagore')]
    public function index(): Response
    {
        return $this->render('pythagore/index.html.twig', [
            'controller_name' => 'PythagoreController',
        ]);
    }

    /**
     * @Route("/pythagore/view", name="pythagore_view")
     */
    #[Route('/pythagore/view', name: 'pythagore_view')]
    public function displayPythagoreAction(): Response
    {
        $tableHtml = $this->pythagoreUtility->display();

        return $this->render('displayPythagore.html.twig', [
            'tableHtml' => $tableHtml,
            'name' => 'SOSSA Fulbert',
        ]);
    }
}
