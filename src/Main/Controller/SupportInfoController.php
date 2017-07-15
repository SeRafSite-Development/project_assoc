<?php 

namespace Main\Controller;

use Symfony\Component\HttpFoundation\Response;
use Litton\App;

class SupportInfoController extends App
{
	public function indexAction()
	{
		return $this->render('Main/View/supportInfo.html.twig', array(
			'title' => "Jak możesz nam pomóc" ));
	}
}