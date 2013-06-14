<?php

namespace Minsal\SiapsBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use Sonata\AdminBundle\Validator\ErrorElement;

class MntExpedienteAdmin extends Admin {

    protected function configureFormFields(FormMapper $formMapper) {
        $esomed=$this->getModelManager()
                ->findOneBy('MinsalSiapsBundle:CtlCreacionExpediente', array('id'=>3));
                
        $formMapper
                ->add('numero',null,array('required'=>true,'label'=>$this->getTranslator()->trans('numero')))
                ->add('idCreacionExpediente',null,array('required'=>true,
                    'preferred_choices' => array($esomed),
                    'label'=>$this->getTranslator()->trans('idCreacionExpediente')))
                ->add('idPaciente',null,array('label'=>$this->getTranslator()->trans('idPaciente')))
        ;
    }

   protected function configureRoutes(RouteCollection $collection) {
        $collection->remove('list');
    }
}
?>