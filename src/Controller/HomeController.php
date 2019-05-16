<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HomeController extends AbstractController
{
	/**
	 * @route ("/", name="app_home_index")
	 */
	public function index()
	{
		return $this->render('home.html.twig');
	}
}
