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
}