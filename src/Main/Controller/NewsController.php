<?php 

namespace Main\Controller;

use Symfony\Component\HttpFoundation\Response;
use Litton\App;

class NewsController extends App
{
	public function indexAction()
	{
		return $this->render('Main/View/news.html.twig', array(
			'title' => "Aktualności" ));
	}
}