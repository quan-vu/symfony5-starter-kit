<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class ConferenceController extends AbstractController
{
    /**
     * @Route("/conference", name="conference")
     */
    public function index(Request $request)
    {
    	$greet = '';
		if ($name = $request->query->get('hello')) {
			$greet = sprintf('Hello %s!', htmlspecialchars($name));
		}

        return $this->render('conference/index.html.twig', [
            'controller_name' => 'ConferenceController',
            'greet' => $greet
        ]);
    }
}
