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
    
    public function getId()
    {
        return $this->id;
    }
    
    public function __toString()
    {
        return $this->name;
    }
}
