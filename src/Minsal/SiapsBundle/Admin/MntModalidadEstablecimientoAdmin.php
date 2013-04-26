<?php

namespace Minsal\SiapsBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
//AGREGANDO PARA PODER UTILIZARLAS
use Minsal\SiapsBundle\Entity\CtlEstablecimiento;

class MntModalidadEstablecimientoAdmin extends Admin {

//  private $repositorio;


    protected function configureFormFields(FormMapper $formMapper) {
        //$establecimiento=new CtlEstablecimiento();
        /* $establecimiento =  $this->getConfigurationPool()
          ->getContainer()
          ->get('doctrine')
          ->getRepository('MinsalSiapsBundle:CtlEstablecimiento')
          ->find(1);

          $modalidades=$this->getConfigurationPool()
          ->getContainer()
          ->get('doctrine')
          ->getRepository('MinsalSiapsBundle:MntModalidadEstablecimiento')
          ->obtenerModalidadUtilizada($establecimiento);
         */
        $formMapper
                ->add('idEstablecimiento', null, array(
                    'label' => $this->getTranslator()->trans('establecimiento')
                ))
                ->add('idModalidad', 'entity', array('label' => $this->getTranslator()->trans('id_modalidad'),
                     'empty_value' => 'Seleccione la modalidad',
                     'class' => 'MinsalSiapsBundle:CtlModalidad',
                     'query_builder' => function($repositorio) {
                        $establecimiento = $this->getConfigurationPool()
                                ->getContainer()
                                ->get('doctrine')
                                ->getRepository('MinsalSiapsBundle:CtlEstablecimiento')
                                ->find(1);

                        $modalidades = $this->getConfigurationPool()
                                ->getContainer()
                                ->get('doctrine')
                                ->getRepository('MinsalSiapsBundle:MntModalidadEstablecimiento')
                                ->obtenerModalidadUtilizada($establecimiento);
                        
                        return $repositorio
                                ->createQueryBuilder('e')
                                ->where('e.id NOT IN (:id)')
                                ->setParameter(':id', $modalidades ?:'0' );
                    }))
                ->add('tieneBodega', null, array('label' => 'Tiene bodega para farmacia'))
                ->add('repetitiva', null, array('label' => 'Emite recetas repetitivas'));
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                ->add('idEstablecimiento', null, array('label' => $this->getTranslator()->trans('establecimiento')))
                ->add('idModalidad', null, array('label' => $this->getTranslator()->trans('id_modalidad')))
        ;
    }

    protected function configureListFields(ListMapper $listMapper) {
        $listMapper
                ->add('idEstablecimiento', null, array('label' => $this->getTranslator()->trans('establecimiento')))
                ->add('idModalidad', null, array('label' => $this->getTranslator()->trans('id_modalidad')))
                ->add('tieneBodega', null, array('label' => 'Tiene bodega para farmacia'))
                ->add('repetitiva', null, array('label' => 'Emite recetas repetitivas'))
        ;
    }

    public function validate(ErrorElement $errorElement, $object) {
        
    }

    public function getBatchActions() {
        $actions = parent::getBatchActions();
        $actions['delete'] = null;
    }

}

?>