<?php
defined('BASEPATH') or exit('No direct script access allowed');
$file = APPPATH . 'libraries/REST_Controller.php';
@include_once($file);
$file = APPPATH . 'libraries/Format.php';
@include_once($file);
/**
 * ApiController1 Class Controller
 *
 * Contralador para el desarrollo he implementacion del modulo gestor de API's del SEP
 *
 * @package ley18450v3
 * @author  Gustavo Diaz
 * @copyright CNR
 * @link https://www.cnr.cl
 * @since 02-05-2018
 * @version 1.0
 * @filesource application/controllers/ApiController1.php
*/
class ApiController1 extends REST_Controller
{
    /**
     * Constructor de la clase.
     *
     * @author Gustavo Diaz
     * @since 02-05-2018
     * @version 1.0
     *
     * @return  void
    */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Metodo que se utiliza para invocar controladores en el SEP
     *
     * @author Gustavo Diaz
     * @since Version 1.0.0
     *
     * @return array.
    */
    public function API0_post()
    {
        $this->response(array('a'=>123), 200);
        /*$API = new MY_Api();
    	$API->setConfig(array(
            'matriz'=>$this,
            'dataApi'=>__METHOD__
        ));
        $result = $API->run();

        if ($API->status)
        {
            $this->response(array(
                "success"=>true,
                'data'=>$result,
            ), 200);
        }
        else
        {
            $this->response($result, 200);
        }*/
    }

    public static function setConstantDataAPI0_post($data)
    {
        $encrypt = new MY_Encrypt();
        switch($data)
        {
            case 'slcIntprioridad':
            {
                return $encrypt->encode('1');
                break;
            }
            case 'slcIntMotivo':
            {
                return $encrypt->encode('2');
                break;
            }
            case 'slcIntMenuNivel1':
            {
                return $encrypt->encode('14');
                break;
            }
            case 'slcIntMenuNivel2':
            {
                return $encrypt->encode('78');
                break;
            }
            case 'slcIntMenuNivel3':
            {
                return $encrypt->encode('713');
                break;
            }
            case 'slcIntAviso':
            {
                return $encrypt->encode('3');
                break;
            }
            case 'txtStrAsunto':
            {
                return 'Solicitud de inscripción';
                break;
            }
            case 'txaStrMensaje':
            {
                return 'Solicitud de inscripción de un nuevo usuario';
                break;
            }
            case 'tokenDiscriminanteOrigenDataNotificacion':
            {
                return $encrypt->encode('ModuloPersonas');
                break;
            }
            case 'IDPERSONA':
            {
                return $encrypt->encode('34348');
                break;
            }
        }
    }
}
?>