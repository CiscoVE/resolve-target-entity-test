<?php

namespace Cisco\AppBundle\Form\Type;

use Cisco\AppBundle\Entity\Repository\TargetRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AuditType extends AbstractType
{
   public function buildForm( FormBuilderInterface $builder, array $options )
   {
       $builder->add( 'target', null, array(
           'empty_data'   => null,
           'query_builder' => function( TargetRepository $repo )
           {
               return $repo->getCustomQueryBuilder();
           },
           'label' => 'Target'
       ));
   }

   public function getName()
   {
       return 'audit';
   }

   public function setDefaultOptions( OptionsResolverInterface $resolver )
   {
       $resolver->setDefaults( array(
           'data_class' => 'Cisco\ResolveTargetEntityTestBundle\Entity\Audit',
       ));
   }

}