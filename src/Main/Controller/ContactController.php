<?php 

namespace Main\Controller;

use Symfony\Component\HttpFoundation\Response;
use Litton\App;

class ContactController extends App
{
	public function indexAction()
	{
		return $this->render('Main/View/contact.html.twig', array(
			'title' => "Kontakt" ));
	}
}