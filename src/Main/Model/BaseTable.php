<?php

namespace Main\Model;

use Doctrine\ORM\EntityManager;


class BaseTable
{
	
	function __construct(EntityManager $em)
	{
		$this->em = $em;
		$this->qb = $this->em->createQueryBuilder();
	}
}