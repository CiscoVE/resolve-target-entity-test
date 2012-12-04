<?php

namespace Cisco\AppBundle\Entity;

use Cisco\ResolveTargetEntityTestBundle\Model\TargetInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Cisco\AppBundle\Entity\Repository\TargetRepository")
 * @ORM\Table(name="target")
 */
class Target implements TargetInterface
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $name;
    
    /**
     * Get instance identifier
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * Get string representation
     *
     * @return string 
     */
    public function __toString()
    {
        return $this->name;
    }
    
    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * Set name
     *
     * @param string $name
     * @return \Cisco\AppBundle\Entity\Target
     */
    public function setName( $name )
    {
        $this->name = $name;
        return $this;
    }
}
