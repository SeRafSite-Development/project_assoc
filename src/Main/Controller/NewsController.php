<?php 

namespace Main\Controller;

use Symfony\Component\HttpFoundation\Response;
use Litton\App;
use Main\Model\NewsTable;

class NewsController extends App
{
	public function indexAction()
	{
		$result = $this->makeImageUrl((new NewsTable($this->getEntityManager()))->getNews());
		$tmp = (new NewsTable($this->getEntityManager()))->makeArchiveTree();
		$tree = array_count_values($tmp['name']);

		return $this->render('Main/View/news.html.twig', array(
			'title' => "Aktualności",
			'news' => $result,
			'tree' => $tree,
			'url' => $tmp['url']));
	}

	public function showNewsAction($slug){
		$result = (new NewsTable($this->getEntityManager()))->checkSlug($slug);

		if(count($result) != 0){
			if($result[0]['image'] == NULL) { $result[0]['image'] = 'default'; }
			$images = $this->loadImages($result[0]['image']);
			
			$tmp = (new NewsTable($this->getEntityManager()))->makeArchiveTree();
			$tree = array_count_values($tmp['name']);

			return $this->render('Main/View/single.html.twig', array(
				'title' => $result[0]['name'],
				'news' => $result[0],
				'images' => $images,
				'tree' => $tree,
				'url' => $tmp['url']
			));
		} else {
			return $this->render('Main/View/error.html.twig', array(
			'title' => "Error"));
		}
	}

	public function showArchiveAction($year, $month){
		if($month == 0){
			$res = (new NewsTable($this->getEntityManager()))->checkArchiveYear($year);
		} else{
			$res = (new NewsTable($this->getEntityManager()))->checkArchive($year, $month);
		}

		if(count($res) != 0){
			$result = $this->makeImageUrl($res);

			$tmp = (new NewsTable($this->getEntityManager()))->makeArchiveTree();
			$tree = array_count_values($tmp['name']);

			return $this->render('Main/View/news.html.twig', array(
				'title' => "Archiwum",
				'news' => $result,
				'tree' => $tree,
				'url' => $tmp['url']
			));
		} else {
			return $this->render('Main/View/error.html.twig', array(
			'title' => "Error"));
		}
	}	

	public function loadImages($path){
		if(is_dir('assets/img/'.$path)) { return array_slice(scandir('assets/img/'.$path),2); }
		else { return false; }
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