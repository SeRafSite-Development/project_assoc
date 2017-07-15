<?php 

namespace Main\Controller;

use Symfony\Component\HttpFoundation\Response;
use Litton\App;

class PartnersController extends App
{
	public function indexAction()
	{
		return $this->render('Main/View/partners.html.twig', array(
			'title' => "Partnerzy" ));
	}
}