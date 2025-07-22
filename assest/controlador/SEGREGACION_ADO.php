<?php
//LLAMADA DE LOS ARCHIVOS NECESAROP PARA LA OPERACION DEL CONTROLADOR
//LLAMADA AL MODELO DE CLASE


require_once '../../assest/modelo/SEGREGACION.php';


//LLAMADA AL CONFIGURACION DE LA BASE DE DATOS
include_once '../../assest/config/BDCONFIG.php';


//INICIALIZAR VARIABLES
$HOST = "";
$DBNAME = "";
$USER = "";
$PASS = "";

//ESTRUCTURA DE CONTROLADOR
class SEGREGACION_ADO
{

    //ATRIBUTO
    private $conexion;

    //LLAMADO A LA BD Y CONFIGURAR PARAMETROS
    public function __CONSTRUCT()
    {
        try {
            $BDCONFIG = new BDCONFIG();
            $HOST = $BDCONFIG->__GET('HOST');
            $DBNAME = $BDCONFIG->__GET('DBNAME');
            $USER = $BDCONFIG->__GET('USER');
            $PASS = $BDCONFIG->__GET('PASS');


            $this->conexion = new PDO('mysql:host=' . $HOST . ';dbname=' . $DBNAME, $USER, $PASS);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }



    //Funciones CRUD
    //REGISTRO DE UNA NUEVA SEGREGACION
    publiC function registrarSegregacion(SEGREGACION $SEGREGACION)
    {
        try {
            $sql = "INSERT INTO fruta_segregacion (
                NUMERO_SEGREGACION,
                FECHA_SEGREGACION,
                OBSERVACION_SEGREGACION,
                OBSERVACION_INTERNO, 
                ESTADO_SEGREGACION, 
                ESTADO_REGISTRO, 
                ESTADO,
                INGRESO, 
                MODIFICACION, 
                ID_PRODUCTOR, 
                ID_VESPECIES, 
                ID_EMPRESA, 
                ID_PLANTA, 
                ID_TEMPORADA,
                ID_USUARIOI,
                ID_USUARIOM
            ) VALUES (?, ?, ?, ?, 13, 1, 1, SYSDATE(), SYSDATE(), ?, ?, ?, ?, ?, ?, ?)";

            $this->conexion->prepare($sql)->execute(array(
                $SEGREGACION->__GET('NUMERO_SEGREGACION'),
                $SEGREGACION->__GET('FECHA_SEGREGACION'),
                $SEGREGACION->__GET('OBSERVACION_SEGREGACION'),
                $SEGREGACION->__GET('OBSERVACION_INTERNO'),
                $SEGREGACION->__GET('ID_PRODUCTOR'),
                $SEGREGACION->__GET('ID_VESPECIES'),
                $SEGREGACION->__GET('ID_EMPRESA'),
                $SEGREGACION->__GET('ID_PLANTA'),
                $SEGREGACION->__GET('ID_TEMPORADA'),
                $SEGREGACION->__GET('ID_USUARIOI'),
                $SEGREGACION->__GET('ID_USUARIOM')
            ));

            return true;
        } catch (Exception $e) {
            echo "Error al registrar la segregacion: " . $e->getMessage();
            return false;
        }  
    }

    //ACTUALIZAR UNA SEGREGACION
    public function actualizarSegregacion(SEGREGACION $SEGREGACION)
    {
        try {
            $sql = "UPDATE fruta_segregacion SET 
                FECHA_SEGREGACION = ?,
                OBSERVACION_SEGREGACION = ?, 
                OBSERVACION_INTERNO = ?, 
                MODIFICACION = SYSDATE(), 
                ID_PRODUCTOR = ?, 
                ID_VESPECIES = ?, 
                ID_USUARIOM = ?
            WHERE ID_SEGREGACION = ?";

            $this->conexion->prepare($sql)->execute(array(
                $SEGREGACION->__GET('FECHA_SEGREGACION'),
                $SEGREGACION->__GET('OBSERVACION_SEGREGACION'),
                $SEGREGACION->__GET('OBSERVACION_INTERNO'),
                $SEGREGACION->__GET('ID_PRODUCTOR'),
                $SEGREGACION->__GET('ID_VESPECIES'),
                $SEGREGACION->__GET('ID_USUARIOM'),
                $SEGREGACION->__GET('ID_SEGREGACION')
            ));

            return true;
        } catch (Exception $e) {
            echo "Error al actualizar la segregacion: " . $e->getMessage();
            return false;
        }
    }

    //ELIMINAR UNA SEGREGACION
    public function eliminarSegregacion($ID_SEGREGACION)
    {
        try {
            $sql = "UPDATE fruta_segregacion SET ESTADO_REGISTRO = 0, MODFICACION = SYSDATE() WHERE ID_SEGREGACION = ?";
            $this->conexion->prepare($sql)
                ->execute(array($ID_SEGREGACION));
            return true;
        } catch (Exception $e) {
            echo "Error al eliminar la segregacion: " . $e->getMessage();
            return false;
        }
    }
    //DESHABILITAR UNA SEGREGACION
    public function deshabilitarSegregacion($ID_SEGREGACION)
    {
        try {
            $sql = "UPDATE fruta_segregacion SET ESTADO_SEGREGACION = 0, ESTADO= 0, MODFICACION = SYSDATE() WHERE ID_SEGREGACION = ?";
            $this->conexion->prepare($sql)
                ->execute(array($ID_SEGREGACION));
            return true;
        } catch (Exception $e) {
            echo "Error al deshabilitar la segregacion: " . $e->getMessage();
            return false;
        }
    }
    //HABILITAR UNA SEGREGACION
    public function habilitarSegregacion($ID_SEGREGACION)
    {
        try {
            $sql = "UPDATE fruta_segregacion SET ESTADO_SEGREGACION = 1, ESTADO= 1, MODFICACION = SYSDATE() WHERE ID_SEGREGACION = ?";
            $this->conexion->prepare($sql)
                ->execute(array($ID_SEGREGACION));
            return true;
        } catch (Exception $e) {
            echo "Error al habilitar la segregacion: " . $e->getMessage();
            return false;
        }
    }

    //LISTAR TODO CON LIMITE DE 8 FILAS
    public function listarSegregacionLimite()
    {
        try {
            $sql = "SELECT * FROM fruta_segregacion WHERE ESTADO_REGISTRO = 1 ORDER BY ID_SEGREGACION DESC LIMIT 8";
            $result = $this->conexion->prepare($sql);
            $result->execute();
            return $result->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            echo "Error al listar las segregaciones: " . $e->getMessage();
            return [];
        }
    }
    //LISTAR TODOS LOS REGISTROS DE SEGREGACION
    public function listarSegregacion()
    {
        try {
            $sql = "SELECT * FROM fruta_segregacion WHERE ESTADO_REGISTRO = 1 ORDER BY ID_SEGREGACION DESC";
            $result = $this->conexion->prepare($sql);
            $result->execute();
            return $result->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            echo "Error al listar las segregaciones: " . $e->getMessage();
            return [];
        }
    }
    //VER LA INFORMACION RELACIONADA EN BASE AL ID INGRESADO A LA FUNCION
    public function verSegregacion($ID_SEGREGACION)
    {
        try {
            $sql = "SELECT * FROM fruta_segregacion WHERE ID_SEGREGACION = ? AND ESTADO_REGISTRO = 1";
            $result = $this->conexion->prepare($sql);
            $result->execute(array($ID_SEGREGACION));
            return $result->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            echo "Error al ver la segregacion: " . $e->getMessage();
            return [];
        }
    }

    //ESTADO DE REGISTROS 13 = EN SEGREGACION
    //FRUTA EN SEGREGACION
    public function verSegregacionEnProceso($ID_SEGREGACION)
    {
        try {
            $sql = "SELECT * FROM fruta_segregacion WHERE ID_SEGREGACION = ? AND ESTADO_REGISTRO = 14";
            $result = $this->conexion->prepare($sql);
            $result->execute(array($ID_SEGREGACION));
            return $result->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            echo "Error al ver la segregacion en proceso: " . $e->getMessage();
            return [];
        }
    }
   
    //LISTAR REGISTROS EN SEGREGACION
    public function verEnSegregacion($ID_SEGREGACION)
    {
        try {
            $sql = "SELECT * FROM fruta_segregacion WHERE ID_SEGREGACION = ? AND ESTADO_REGISTRO = 14";
            $result = $this->conexion->prepare($sql);
            $result->execute(array($ID_SEGREGACION));
            return $result->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            echo "Error al ver la segregacion en proceso: " . $e->getMessage();
            return null;
        } 
    }
    //ESTADO DE REGISTRO 14 = SEGREGADO
    //SEGREGAR FRUTA
    public function segregarFruta($ID_SEGREGACION)
    {
        try {
            $sql = "UPDATE fruta_segregacion SET ESTADO_REGISTRO = 13, MODFICACION = SYSDATE() WHERE ID_SEGREGACION = ?";
            $this->conexion->prepare($sql)
                ->execute(array($ID_SEGREGACION));
            return true;
        } catch (Exception $e) {
            echo "Error al segregar la fruta: " . $e->getMessage();
            return false;
        }
    }
    ///LISTAR REGISTRO SEGREGADO
    public function verSegregados($ID_SEGREGACION)
    {
        try {
            $sql = "SELECT * FROM fruta_segregacion WHERE ID_SEGREGACION = ? AND ESTADO_REGISTRO = 13";
            $result = $this->conexion->prepare($sql);
            $result->execute(array($ID_SEGREGACION));
            return $result->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            echo "Error al ver la segregacion: " . $e->getMessage();
            return null;
        }
    }
    //LISTAS REGISTROS NO SEGREGADOS
    public function listarNoSegregados()
    {
        try {
            $sql = "SELECT * FROM fruta_segregacion WHERE ESTADO_SEGREGACION = 0 ";
            $result = $this->conexion->prepare($sql);
            $result->execute();
            return $result->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            echo "Error al listar las segregaciones no segregadas: " . $e->getMessage();
            return [];
        }
    }
   public function obtenerNumero($EMPRESA, $PLANTA, $TEMPORADA)
    {
        try {
            $datos = $this->conexion->prepare(" SELECT  COUNT(IFNULL(NUMERO_SEGREGACION,0)) AS 'NUMERO'
                                                FROM fruta_proceso
                                                WHERE  
                                                    ID_EMPRESA = '" . $EMPRESA . "' 
                                                AND ID_PLANTA = '" . $PLANTA . "'
                                                AND ID_TEMPORADA = '" . $TEMPORADA . "'     
                                                    ; ");
            $datos->execute();
            $resultado = $datos->fetchAll();
            $datos=null;

            //	print_r($resultado);
            //	var_dump($resultado);


            return $resultado;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    //OBTENER ID 
    public function obtenerId($FECHA, $EMPRESA, $PLANTA, $TEMPORADA)
    {
        try {
            $datos = $this->conexion->prepare("SELECT ID_SEGREGACION FROM fruta_segregacion WHERE INGRESO = ? AND ID_EMPRESA = ? AND ID_PLANTA = ? AND ID_TEMPORADA = ?");
            $datos->execute(array($FECHA, $EMPRESA, $PLANTA, $TEMPORADA));
            return $datos->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    //OBTENER FECHA ACTUAL
    public function obtenerFecha()
    {
        try {
            $datos = $this->conexion->prepare("SELECT SYSDATE() AS FECHA");
            $datos->execute();
            return $datos->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    
}



