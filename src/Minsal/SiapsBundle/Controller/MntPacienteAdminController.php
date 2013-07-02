<?php

namespace Minsal\SiapsBundle\Controller;

use Sonata\AdminBundle\Controller\CRUDController as Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Minsal\Metodos\Funciones;

class MntPacienteAdminController extends Controller {

    public function viewAction() {
        if (false === $this->admin->isGranted('VIEW')) {
            return $this->render('MinsalSiapsBundle::Accesso_denegado.html.twig', array('admin_pool' => $this->container->get('sonata.admin.pool'),
                        'layout' => $this->container->get('sonata.admin.pool')->getTemplate('layout')
            ));
        }
        $em = $this->getDoctrine()->getEntityManager();
        $valor = $this->get('request')->get('id');
        $datos_paciente = $em->getRepository("MinsalSiapsBundle:MntPaciente")->obtenerDatosPaciente($valor);
        $conn = $em->getConnection();
        $calcular = new Funciones();
        $edad = $calcular->calcularEdad($conn, $datos_paciente->getFechaNacimiento()->format('d-m-Y'));

        return $this->render($this->admin->getTemplate('view'), array(
                    'action' => 'view',
                    'datos' => $datos_paciente,
                    'edad' => $edad
        ));
    }

    /**
     * REESCRITO PARA QUE CUANDO SEA LA BUSQUEDA DE LA REGIONAL LE CARGUE POR DEFECTO LOS VALORES QUE POSEE
     * EL PACIENTE Y ASÍ SOLO LLENE LOS CAMPOS QUE HAGAN FALTA
     * 
     * return the Response object associated to the create action
     *
     * @throws \Symfony\Component\Security\Core\Exception\AccessDeniedException
     * @return Response
     */
    public function createAction() {
        // the key used to lookup the template
        $templateKey = 'edit';

        if (false === $this->admin->isGranted('CREATE')) {
            throw new AccessDeniedException();
        }

        $object = $this->admin->getNewInstance();
        //AGREGADO PARA VERIFICAR SI PROVIENE DE LA BUSQUEDA GLOBAL
        if (strcmp($this->get('request')->get('tipo'), 'g') == 0) {
            $id = $this->get('request')->get('idPacienteInicial');
            $em = $this->getDoctrine()->getManager();
            $conexion = $em->getRepository('MinsalSiapsBundle:MntConexion')->find(1);
            $conn = $em->getRepository('MinsalSiapsBundle:MntConexion')->getConexionGenerica($conexion);
            $sql = "SELECT * FROM mnt_paciente WHERE id_paciente_inicial=$id";
            $query = $conn->query($sql);
            foreach ($query->fetchAll() as $aux) {
                $object->setPrimerNombre($aux['primer_nombre']);
                $object->setSegundoNombre($aux['segundo_nombre']);
                $object->setTercerNombre($aux['tercer_nombre']);
                $object->setPrimerApellido($aux['primer_apellido']);
                $object->setSegundoApellido($aux['segundo_apellido']);
                $object->setApellidoCasada($aux['apellido_casada']);
                $object->setFechaNacimiento(new \DateTime($aux['fecha_nacimiento']));
                $object->setHoraNacimiento($aux['hora_nacimiento']);
                $object->setNumeroDocIdePaciente($aux['numero_doc_ide_paciente']);
                $object->setDireccion($aux['direccion']);
                $object->setTelefonoCasa($aux['telefono_casa']);
                $object->setLugarTrabajo($aux['lugar_trabajo']);
                $object->setTelefonoTrabajo($aux['telefono_trabajo']);
                if ($aux['id_area_cotizacion'] != null)
                    $object->setIdAreaCotizacion($em->getRepository('MinsalSiapsBundle:CtlAreaCotizante')->find($aux['id_area_cotizacion']));
                $object->setAsegurado($aux['asegurado']);
                $object->setCotizante($aux['cotizante']);
                $object->setNumeroAfiliacion($aux['numero_afiliacion']);
                $object->setNombrePadre($aux['nombre_padre']);
                $object->setNombreMadre($aux['nombre_madre']);
                $object->setNombreConyuge($aux['nombre_conyuge']);
                $object->setNombreResponsable($aux['nombre_responsable']);
                $object->setDireccionResponsable($aux['direccion_responsable']);
                $object->setTelefonoResponsable($aux['telefono_responsable']);
                $object->setNumeroDocIdeResponsable($aux['numero_doc_ide_responsable']);
                $object->setNombreProporcionoDatos($aux['nombre_proporciono_datos']);
                $object->setNumeroDocIdeProporDatos($aux['numero_doc_ide_propor_datos']);
                $object->setObservacion($aux['observacion']);
                $object->setConocidoPor($aux['conocido_por']);
                $object->setIdSiff($aux['id_siff']);
                $object->setDispensarizacionIndividual($aux['dispensarizacion_individual']);
                $object->setIdPacienteInicial($aux['id_paciente_inicial']);
                if ($aux['area_geografica_domicilio'] != null)
                    $object->setAreaGeograficaDomicilio($em->getRepository('MinsalSiapsBundle:CtlAreaGeografica')->find($aux['area_geografica_domicilio']));
                if ($aux['id_canton_domicilio'] != null)
                    $object->setIdCantonDomicilio($em->getRepository('MinsalSiapsBundle:CtlCanton')->find($aux['id_canton_domicilio']));
                if ($aux['id_departamento_domicilio'] != null)
                    $object->setIdDepartamentoDomicilio($em->getRepository('MinsalSiapsBundle:CtlDepartamento')->find($aux['id_departamento_domicilio']));
                if ($aux['id_doc_ide_paciente'] != null)
                    $object->setIdDocPaciente($em->getRepository('MinsalSiapsBundle:CtlDocumentoIdentidad')->find($aux['id_doc_ide_paciente']));
                if ($aux['id_doc_ide_proporciono_datos'] != null)
                    $object->setIdDocProporcionoDatos($em->getRepository('MinsalSiapsBundle:CtlDocumentoIdentidad')->find($aux['id_doc_ide_proporciono_datos']));
                if ($aux['id_doc_ide_responsable'] != null)
                    $object->setIdDocResponsable($em->getRepository('MinsalSiapsBundle:CtlDocumentoIdentidad')->find($aux['id_doc_ide_responsable']));
                if ($aux['id_municipio_domicilio'] != null)
                    $object->setIdMunicipioDomicilio($em->getRepository('MinsalSiapsBundle:CtlMunicipio')->find($aux['id_municipio_domicilio']));
                if ($aux['id_municipio_nacimiento'] != null)
                    $object->setIdMunicipioNacimiento($em->getRepository('MinsalSiapsBundle:CtlMunicipio')->find($aux['id_municipio_nacimiento']));
                if ($aux['id_departamento_nacimiento'] != null)
                    $object->setIdDepartamentoNacimiento($em->getRepository('MinsalSiapsBundle:CtlDepartamento')->find($aux['id_departamento_nacimiento']));
                if ($aux['id_nacionalidad'] != null)
                    $object->setIdNacionalidad($em->getRepository('MinsalSiapsBundle:CtlNacionalidad')->find($aux['id_nacionalidad']));
                if ($aux['id_ocupacion'] != null)
                    $object->setIdOcupacion($em->getRepository('MinsalSiapsBundle:CtlOcupacion')->find($aux['id_ocupacion']));
                if ($aux['id_pais_nacimiento'] != null)
                    $object->setIdPaisNacimiento($em->getRepository('MinsalSiapsBundle:CtlPais')->find($aux['id_pais_nacimiento']));
                if ($aux['id_parentesco_responsable'] != null)
                    $object->setIdParentescoResponsable($em->getRepository('MinsalSiapsBundle:CtlParentesco')->find($aux['id_parentesco_responsable']));
                if ($aux['id_parentesco_propor_datos'] != null)
                    $object->setIdParentescoProporDatos($em->getRepository('MinsalSiapsBundle:CtlParentesco')->find($aux['id_parentesco_propor_datos']));
                if ($aux['id_sexo'] != null)
                    $object->setIdSexo($em->getRepository('MinsalSiapsBundle:CtlSexo')->find($aux['id_sexo']));
            }
        }


        $this->admin->setSubject($object);

        /** @var $form \Symfony\Component\Form\Form */
        $form = $this->admin->getForm();
        $form->setData($object);

        if ($this->getRestMethod() == 'POST') {
            $form->bind($this->get('request'));

            $isFormValid = $form->isValid();

            // persist if the form was valid and if in preview mode the preview was approved
            if ($isFormValid && (!$this->isInPreviewMode() || $this->isPreviewApproved())) {
                $this->admin->create($object);

                if ($this->isXmlHttpRequest()) {
                    return $this->renderJson(array(
                                'result' => 'ok',
                                'objectId' => $this->admin->getNormalizedIdentifier($object)
                    ));
                }

                $this->addFlash('sonata_flash_success', 'flash_create_success');
                // redirect to edit mode
                return $this->redirectTo($object);
            }

            // show an error message if the form failed validation
            if (!$isFormValid) {
                if (!$this->isXmlHttpRequest()) {
                    $this->addFlash('sonata_flash_error', 'flash_create_error');
                }
            } elseif ($this->isPreviewRequested()) {
                // pick the preview template if the form was valid and preview was requested
                $templateKey = 'preview';
            }
        }

        $view = $form->createView();

        // set the theme for the current Admin Form
        $this->get('twig')->getExtension('form')->renderer->setTheme($view, $this->admin->getFormTheme());

        return $this->render($this->admin->getTemplate($templateKey), array(
                    'action' => 'create',
                    'form' => $view,
                    'object' => $object,
        ));
    }

    public function redirectTo($object) {
        $url = false;

        if ($this->get('request')->get('btn_update_and_list')) {
            $url = $this->admin->generateUrl('list');
        }
        if ($this->get('request')->get('btn_create_and_list')) {
            $url = $this->admin->generateUrl('list');
        }
        if ($this->get('request')->get('btn_create_and_create')) {
            $params = array();
            if ($this->admin->hasActiveSubClass()) {
                $params['subclass'] = $this->get('request')->get('subclass');
            }
            $url = $this->admin->generateUrl('create', $params);
        }
        if (!$url) {
            $params = array();
            $params['id'] = $object->getId();
            $url = $this->admin->generateUrl('view', $params);
        }

        return new RedirectResponse($url);
    }

}

?>