<?php

namespace Main\Model;

class NewsTable extends BaseTable
{
	public function getHomeInit(){
		$q = $this->qb->select('news')
			->from('Main\Model\News', 'news')
			->orderBy('news.datetime', 'DESC')
			->setMaxResults(1);

		return $q->getQuery()->getArrayResult()[0];
	}

	public function getHomeNews(){
		$q = $this->qb->select('news')
			->from('Main\Model\News', 'news')
			->orderBy('news.datetime', 'DESC')
			->setFirstResult(1)
			->setMaxResults(4);

		return $q->getQuery()->getArrayResult();
	}

	public function checkSlug($slug){
		$q = $this->qb->select('news')
			->from('Main\Model\News', 'news')
			->where($this->qb->expr()->eq('news.slug', ':slug'))
			->setParameter('slug', $slug);

		return $q->getQuery()->getArrayResult();
	}

	public function getNews(){
		$q = $this->qb->select('news')
			->from('Main\Model\News', 'news');

		return $q->getQuery()->getArrayResult();
	}

	public function makeArchiveTree(){
		$month = array( '', 'Styczeń', 'Luty', 'Marzec', 'Kwiecień', 'Maj', 'Czerwiec', 'Lipiec', 'Sierpień', 'Wrzesień', 'Październik', 'Listopad', 'Grudzień' );
		$emConfig = $this->em->getConfiguration();
    	$emConfig->addCustomDatetimeFunction('YEAR', 'DoctrineExtensions\Query\Mysql\Year');
    	$emConfig->addCustomDatetimeFunction('MONTH', 'DoctrineExtensions\Query\Mysql\Month');


		$q = $this->qb->select('YEAR(news.datetime) as ye, MONTH(news.datetime) as me' )
			->from('Main\Model\News', 'news')
			->orderBy('news.datetime', 'DESC');

		$result = $q->getQuery()->getArrayResult();
		$array = [
			'name' => [],
			'url' => []
		];

		foreach ($result as $row) {
			array_push($array['name'], $month[$row['me']].' '.$row['ye']);
			array_push($array['url'], $row['ye'].'/'.$row['me']);
		}

		return $array;
	}

	public function checkArchive($year, $month){
		$emConfig = $this->em->getConfiguration();
    	$emConfig->addCustomDatetimeFunction('YEAR', 'DoctrineExtensions\Query\Mysql\Year');
    	$emConfig->addCustomDatetimeFunction('MONTH', 'DoctrineExtensions\Query\Mysql\Month');

		$q = $this->qb->select('news' )
			->from('Main\Model\News', 'news')
			->where($this->qb->expr()->andX($this->qb->expr()->eq('YEAR(news.datetime)', ':year'), $this->qb->expr()->eq('MONTH(news.datetime)', ':month')))
			->orderBy('news.datetime', 'DESC')
			->setParameter('year', $year)
			->setParameter('month', $month);

		return $q->getQuery()->getArrayResult();
	}

	public function checkArchiveYear($year){
		$emConfig = $this->em->getConfiguration();
    	$emConfig->addCustomDatetimeFunction('YEAR', 'DoctrineExtensions\Query\Mysql\Year');

		$q = $this->qb->select('news')
			->from('Main\Model\News', 'news')
			->where($this->qb->expr()->eq('YEAR(news.datetime)', ':year'))
			->orderBy('news.datetime', 'DESC')
			->setParameter('year', $year);

		return $q->getQuery()->getArrayResult();
	}
}