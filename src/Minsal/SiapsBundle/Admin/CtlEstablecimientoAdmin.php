<?php

namespace Minsal\SiapsBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Route\RouteCollection;
Use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Sonata\DoctrineORMAdminBundle\Datagrid\ProxyQuery;

class CtlEstablecimientoAdmin extends Admin {

    protected $datagridValues = array(
        '_page' => 1, // Display the first page (default = 1)
        '_sort_order' => 'ASC', // Descendant ordering (default = 'ASC')
        '_sort_by' => 'configurado' // name of the ordered field (default = the model id field, if any)
    );

    protected function configureFormFields(FormMapper $formMapper) {
        $formMapper
                ->add('nombre')
                ->add('tipoExpediente', 'choice', array('choices' => array('G' => 'Utiliza guión (xxx-xx)', 'I' => 'Infinito'),
                    'empty_value' => 'Seleccione una opción', 'required' => true))
                ->add('programas', null, array('label' => 'Programas', 'required' => true,
                    'multiple' => true, 'expanded' => true))
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                ->add('nombre')
                ->add('idMunicipio', null, array())
                ->add('idTipoEstablecimiento')
        ;
    }

    protected function configureListFields(ListMapper $listMapper) {
        $listMapper
                ->add('nombre')
                ->add('idMunicipio')
                ->add('idTipoEstablecimiento')
                ->add('configurado')
                ->add('programas')
                ->add('_action', 'actions', array(
                    'label' => $this->getTranslator()->trans('Action'),
                    'actions' => array(
                        'edit' => array()
                    )
                ))
        ;
    }

    public function getBatchActions() {
        $actions = parent::getBatchActions();
        $actions['delete'] = null;
    }

    protected function configureRoutes(RouteCollection $collection) {
        $collection->remove('create');
        $collection->remove('delete');
    }

    public function preUpdate($establecimiento) {
        $establecimiento->setConfigurado(true);
    }
    
    /**
     * @return \Sonata\AdminBundle\Datagrid\ProxyQueryInterface
     */
    public function createQuery($context = 'list') {
        $query = parent::createQuery($context);

        return new ProxyQuery(
                $query
                        ->where($query->expr()->isNotNull($query->getRootAlias() . '.formula'))                       
        );
    }

}

?>