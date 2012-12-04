<?php

namespace Cisco\AppBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;

class TargetRepository extends EntityRepository
{
    public function getCustomQueryBuilder()
    {
        // In a non-testing app this would involve a proper
        // custom query to return only specific results ...
        return $this->createQueryBuilder( 'a' );
    }
}