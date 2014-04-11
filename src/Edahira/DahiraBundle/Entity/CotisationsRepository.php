<?php

namespace Edahira\DahiraBundle\Entity;

use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\ORM\EntityRepository;

/**
 * CotisationsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CotisationsRepository extends EntityRepository
{
	public function getCotisations($id){
		
		$qb = $this->createQueryBuilder('c')
		           ->leftJoin('c.evenement','e')
				   ->addSelect('e')
				   ->where('e.id = '.$id)
				   ->getQuery()
				   ->getResult();
		
		return $qb;
	}
   /*
	$qb->setFirstResult(($page-1) * $nombreParPage)
       ->setMaxResults($nombreParPage);
           
		return new Paginator($qb);
	*/

	public function getCotisationsEventType($id){
		
		$qb = $this->createQueryBuilder('c')
		           ->leftJoin('c.evenement','e')
				   ->addSelect('e')
				   ->leftJoin('e.typeevenement','t')
				   ->addSelect('t')
				   ->where('t.id = '.$id)
				   ->getQuery()
				   ->getResult();
		
		return $qb;
	}


	public function getCotisationsMembreEventType($idType, $idMembre, $page, $nombreParPage){
		$qb = $this->createQueryBuilder('c')
		           ->leftJoin('c.evenement','e')
				   ->addSelect('e')
				   ->leftJoin('e.typeevenement','t')
				   ->addSelect('t')
				   ->where('t.id = '.$idType)
		           ->leftJoin('c.membre','m')
				   ->addSelect('m')
				   ->where('m.id = '.$idMembre)
				   ->orderBy('c.date', 'DESC')
				   ->getQuery();
				   

		// $qb->setFirstResult(($page-1) * $nombreParPage)
            // ->setMaxResults($nombreParPage);
           
		// return new Paginator($qb);

		return $qb->getResult();
	}
}