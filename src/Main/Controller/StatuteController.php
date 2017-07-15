<?php 

namespace Main\Controller;

use Symfony\Component\HttpFoundation\Response;
use Litton\App;

class StatuteController extends App
{
	public function indexAction()
	{
		return $this->render('Main/View/statute.html.twig', array(
			'title' => "Statut" ));
	}
}