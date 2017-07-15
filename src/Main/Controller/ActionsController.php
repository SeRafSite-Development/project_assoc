<?php 

namespace Main\Controller;

use Symfony\Component\HttpFoundation\Response;
use Litton\App;

class ActionsController extends App
{
	public function indexAction()
	{
		return $this->render('Main/View/actions.html.twig', array(
			'title' => "Nasze Działania" ));
	}
}