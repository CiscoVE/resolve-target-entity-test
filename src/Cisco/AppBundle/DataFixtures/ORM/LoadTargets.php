<?php

namespace Cisco\AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Cisco\AppBundle\Entity\Target;

class LoadTargets extends AbstractFixture implements OrderedFixtureInterface
{
    public function getOrder()
    {
        return 1;
    }
    
    public function load( ObjectManager $om )
    {
        $foo = new Target();
        $foo->setName( 'Foo' );
        $om->persist( $foo );
        $om->flush();
        $this->addReference( 'foo', $foo );
        
        $baa = new Target();
        $baa->setName( 'Baa' );
        $om->persist( $baa );
        $om->flush();
        $this->addReference( 'baa', $baa );
    }
}