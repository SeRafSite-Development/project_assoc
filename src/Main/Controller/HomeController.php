<?php 

namespace Main\Controller;

use Symfony\Component\HttpFoundation\Response;
use Litton\App;

class HomeController extends App
{
	public function indexAction($index)
	{
		$em = $this->getEntityManager();
		$news = $em->getRepository('Main\Model\News')->findAll();

		$news = $this->trimer($news);

		if($this->isAjax) {
			$newNews = [];

			foreach ($news as $new) {
				$newNews[] = $new->toArray();
			}

			return $this->renderAjax($newNews);
		} else {
			return $this->render('Main/View/home.html.twig', array(
				'title' => "Strona Główna",
				'news' => $news
			));
		}
	}

	public function trimer($array) {
		foreach ($array as $des){
            if(strlen($des->getDescription()) > 50){
                $des->setDescription(substr($des->getDescription(), 0, 50));
                $des->setDescription(substr($des->getDescription(), 0, strrpos($des->getDescription(), ' ')) . " ...");
            }
        }
        return $array;
	}
}