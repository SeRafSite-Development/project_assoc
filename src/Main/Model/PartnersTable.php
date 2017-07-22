<?php

namespace Main\Model;

class PartnersTable extends BaseTable
{
	public function getHomePartners(){
		$q = $this->qb->select('part')
			->from('Main\Model\Partners', 'part')
			->where($this->qb->expr()->isNotNull('part.image'));

		return $q->getQuery()->getArrayResult();
	}

	public function getSitePartners(){
		$q = $this->qb->select('part')
			->from('Main\Model\Partners', 'part')
			->where($this->qb->expr()->isNotNull('part.description'));

		return $q->getQuery()->getArrayResult();
	}

	public function getRestPartners(){
		$q = $this->qb->select('part')
			->from('Main\Model\Partners', 'part')
			->where($this->qb->expr()->isNull('part.description'));

		return $q->getQuery()->getArrayResult();
	}
}