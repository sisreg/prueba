<?php

/*
 * This file is part of the Sonata package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Application\Sonata\UserBundle\Admin;

use Sonata\AdminBundle\Form\FormMapper;
use Sonata\UserBundle\Admin\Model\UserAdmin as BaseUserAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Validator\ErrorElement;

class UserAdmin extends BaseUserAdmin {

    public function configureFormFields(FormMapper $formMapper) {
        //parent::configureFormFields($formMapper);
        $formMapper
                ->with('Datos Usuario')
                ->add('firstname', null, array('required' => true))
                ->add('lastname', null, array('required' => true))
                ->add('username')
                ->add('email')
                ->add('plainPassword', 'repeated', array(
                    'required' => true,
                    'type' => 'password',
                    'label' => 'Contraseña del usuario',
                    'second_options' => array('label' => 'Confirmación de contraseña'),
                    'invalid_message' => 'Las contraseñas deben coincidir, vuelva a digitarla',
                ))
                ->add('idEstablecimiento', 'entity', array(
                    'read_only' => true,
                    'label' => 'Establecimiento',
                    'class' => 'MinsalSiapsBundle:CtlEstablecimiento',
                    'query_builder' => function($repositorio) {
                        return $repositorio->obtenerEstabConfigurado();
                    }))
                ->add('enabled', null, array('required' => true))
                ->add('groups', 'sonata_type_model', array('required' => true, 'expanded' => true, 'multiple' => true,'by_reference' => true))
                ->end()
        ;
    }

    protected function configureListFields(ListMapper $listMapper) {
        $listMapper
                ->addIdentifier('username')
                ->add('email')
                ->add('groups')
                ->add('enabled', null, array('editable' => true))
                ->add('locked', null, array())
                ->add('createdAt')
                ->add('idEstablecimiento', null, array('label' => 'Establecimiento de salud'))
        ;
    }
    
     public function getTemplate($name) {
        switch ($name) {
            case 'edit':
                return 'MinsalSiapsBundle:UserAdmin:edit.html.twig';
                break;
            default:
                return parent::getTemplate($name);
                break;
        }
    }

}