<?php

namespace Edahira\DahiraBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * MembresRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class MembresRepository extends EntityRepository
{
	public function getMembres($nombreParPage, $page){
		$qb = $this->createQueryBuilder('m')
				   ->getQuery();
				   
		$qb->setFirstResult(($page-1) * $nombreParPage)
           ->setMaxResults($nombreParPage);
           
		return new Paginator($qb);
	}

	public function getCotisationsMembreEventType($type, $nombreParPage, $page){
		$qb = $this->createQueryBuilder('m')
		           ->rightJoin('m.cotisations','c')
				   ->addSelect('c')
		           ->rightJoin('c.evenement','c')
				   ->addSelect('c')
		           ->rightJoin('c.typeevenement','t')
				   ->addSelect('t')
				   ->where('t.id = '.$type)
				   // ->orderBy('c.date', 'DESC')
				   ->getQuery();
				   
		$qb->setFirstResult(($page-1) * $nombreParPage)
           ->setMaxResults($nombreParPage);
           
		return new Paginator($qb);
	}
	
}