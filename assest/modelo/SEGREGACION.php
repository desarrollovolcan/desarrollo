<?php

    /*
    * MODELO DE CLASE DE LA ENTIDAD SEGREGACION
    */

    //ESTRUCTURA DE LA CLASE
        class SEGREGACION {
        
        //ATRIBUTOS DE LA CLASE
        private	  $ID_SEGREGACION; 
        private	  $FECHA_SEGREGACION;
        private	  $NUMERO_SEGREGACION; 
        private	  $OBSERVACION_SEGREGACION; 
        private   $OBSERVACION_INTERNO;
        private   $ESTADO_SEGREGACION;
        private   $ESTADO_REGISTRO;
        private   $INGRESO;
        private   $MODFICACION;
        private   $ID_PRODUCTOR;
        private   $ID_VESPECIES;
        private   $ID_EMPRESA;
        private   $ID_PLANTA;
        private   $ID_TEMPORADA;

        //FUNCIONES GET Y SET
        public function __GET($k){ return $this->$k; }
        public function __SET($k, $v){ return $this->$k = $v; }
    }
?>
