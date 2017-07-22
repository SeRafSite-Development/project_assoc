<?php 

namespace Main\Controller;

use Symfony\Component\HttpFoundation\Response;
use Litton\App;
use Main\Model\NewsTable;
use Main\Model\PartnersTable;

class HomeController extends App
{
	public function indexAction($index)
	{
		$fresh = $this->freshTrimer((new NewsTable($this->getEntityManager()))->getHomeInit(), 300);

		$result = $this->makeImageUrl((new NewsTable($this->getEntityManager()))->getHomeNews());

		$partners = (new PartnersTable($this->getEntityManager()))->getHomePartners();

		// echo'<pre>';
		// print_r($result);
		// die;

		if($this->isAjax) {
			$newNews = [];

			foreach ($news as $new) {
				$newNews[] = $new->toArray();
			}

			return $this->renderAjax($newNews);
		} else {
			return $this->render('Main/View/home.html.twig', array(
				'title' => "Strona Główna",
				'pat' => "http://nasze-dzieci.pl",
				'news' => $result,
				'fresh' => $fresh,
				'partners' => $partners
			));
		}
	}

	public function freshTrimer($array, $trim) {
        if(strlen($array['description']) > $trim){
            $array['description'] = substr($array['description'], 0, $trim);
            $array['description'] = substr($array['description'], 0, strrpos($array['description'], ' ')) . " ...";
        }

        if($array['image'] != NULL){
        	$array['image'] .= '/image0.jpg';
        } else {
        	$array['image'] = 'default/image0.jpg';
        }

        return $array;
	}

	public function makeImageUrl($array){
		for($i = 0; $i < count($array); $i++) {
			if($array[$i]['image'] != NULL){
	        	$array[$i]['image'] .= '/image0.jpg';
	        } else {
	        	$array[$i]['image'] = 'default/image0.jpg';
	        }
		}
		return $array;
	}
}