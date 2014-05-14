<?php

namespace Edahira\DahiraBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * VersementsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class VersementsRepository extends EntityRepository
{
	public function getVersements($dahira){
		$qb = $this->createQueryBuilder('v')
			       ->leftJoin('v.charge', 'c')
                   ->addSelect('c')
			       ->leftJoin('c.dahira', 'd')
                   ->addSelect('d')
                   ->where("d.id = :dahira")
                   ->setParameter('dahira', $dahira)
				   ->getQuery();
				   /*
		$qb->setFirstResult(($page-1) * $nombreParPage)
           ->setMaxResults($nombreParPage);*/
           
		return $qb->getResult();
	}

	public function getVersementMembre($idCharge, $idMembre){
		$qb = $this->createQueryBuilder('v')
		           ->leftJoin('v.charge','c')
				   ->addSelect('c')
				   ->leftJoin('v.membre','m')
				   ->addSelect('m')
				   ->where('c.id = '.$idCharge)
				   ->andWhere('m.id = '.$idMembre)
				   ->orderBy('v.date', 'ASC')
				   ->getQuery();
				   
		return $qb->getResult();
	}
}