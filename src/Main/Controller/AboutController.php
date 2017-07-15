<?php 

namespace Main\Controller;

use Symfony\Component\HttpFoundation\Response;
use Litton\App;

class AboutController extends App
{
	public function indexAction()
	{
		return $this->render('Main/View/about.html.twig', array(
			'title' => "O Nas" ));
	}
}