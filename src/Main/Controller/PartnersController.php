<?php 

namespace Main\Controller;

use Symfony\Component\HttpFoundation\Response;
use Litton\App;
use Main\Model\PartnersTable;

class PartnersController extends App
{
	public function indexAction()
	{
		$partners = (new PartnersTable($this->getEntityManager()))->getSitePartners();
		$rest = (new PartnersTable($this->getEntityManager()))->getRestPartners();

		return $this->render('Main/View/partners.html.twig', array(
			'title' => "Partnerzy",
			'partners' => $partners,
			'rest' => $rest
		));
	}
}