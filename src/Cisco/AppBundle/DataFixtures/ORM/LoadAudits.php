<?php

namespace Cisco\AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Cisco\ResolveTargetEntityTestBundle\Entity\Audit;

class LoadAudits extends AbstractFixture implements OrderedFixtureInterface
{
    public function getOrder()
    {
        return 2;
    }
    
    public function load( ObjectManager $om )
    {
        $foo = $om->merge( $this->getReference( 'foo' ) );
        $baa = $om->merge( $this->getReference( 'baa' ) );

        $firstAudit = new Audit();
        $firstAudit->setTarget( $foo );
        $firstAudit->setComment( 'This is an audit comment' );
        $om->persist( $firstAudit );
        $om->flush();

        $secondAudit = new Audit();
        $secondAudit->setTarget( $baa );
        $secondAudit->setComment( 'This is another audit comment' );
        $om->persist( $secondAudit );
        $om->flush();
    }
}