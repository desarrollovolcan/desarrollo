<?php
include_once "../../assest/config/validarUsuarioFruta.php";

//LLAMADA ARCHIVOS NECESARIOS PARA LAS OPERACIONES
include_once '../../assest/controlador/FOLIO_ADO.php';

include_once '../../assest/controlador/TPROCESO_ADO.php';
include_once '../../assest/controlador/PRODUCTOR_ADO.php';
include_once '../../assest/controlador/ESPECIES_ADO.php';
include_once '../../assest/controlador/VESPECIES_ADO.php';
include_once '../../assest/controlador/PROCESO_ADO.php';

include_once '../../assest/controlador/ERECEPCION_ADO.php';
include_once '../../assest/controlador/EEXPORTACION_ADO.php';
include_once '../../assest/controlador/EINDUSTRIAL_ADO.php';

include_once '../../assest/controlador/DPEXPORTACION_ADO.php';
include_once '../../assest/controlador/DPINDUSTRIAL_ADO.php';
include_once '../../assest/controlador/PROCESO_ADO.php';


include_once '../../assest/controlador/TMANEJO_ADO.php';
include_once '../../assest/controlador/TCALIBRE_ADO.php';
include_once '../../assest/controlador/TCALIBREIND_ADO.php';
include_once '../../assest/controlador/TCATEGORIA_ADO.php';

include_once '../../assest/controlador/EXIMATERIAPRIMA_ADO.php';
include_once '../../assest/controlador/EXIINDUSTRIAL_ADO.php';
include_once '../../assest/controlador/EXIEXPORTACION_ADO.php';
include_once '../../assest/controlador/RECEPCIONMP_ADO.php';

include_once '../../assest/modelo/EXIMATERIAPRIMA.php';
include_once '../../assest/modelo/EXIEXPORTACION.php';
include_once '../../assest/modelo/EXIINDUSTRIAL.php';
include_once '../../assest/modelo/DPEXPORTACION.php';
include_once '../../assest/modelo/DPINDUSTRIAL.php';
include_once '../../assest/modelo/PROCESO.php';

//CONTROLADOR DE SEGREGACION
include_once '../../assest/controlador/SEGREGACION_ADO.php';
include_once '../../assest/modelo/SEGREGACION.php';

//INCIALIZAR LAS VARIBLES
//INICIALIZAR CONTROLADOR
$FOLIO_ADO =  new FOLIO_ADO();

$EXIMATERIAPRIMA_ADO =  new EXIMATERIAPRIMA_ADO();

$EXIEXPORTACION_ADO =  new EXIEXPORTACION_ADO();
$EXIINDUSTRIAL_ADO =  new EXIINDUSTRIAL_ADO();


$DPINDUSTRIAL_ADO =  new DPINDUSTRIAL_ADO();
$DPEXPORTACION_ADO =  new DPEXPORTACION_ADO();

$ERECEPCION_ADO =  new ERECEPCION_ADO();
$EEXPORTACION_ADO =  new EEXPORTACION_ADO();
$EINDUSTRIAL_ADO =  new EINDUSTRIAL_ADO();
$RECEPCIONMP_ADO =  new RECEPCIONMP_ADO();

$TPROCESO_ADO =  new TPROCESO_ADO();
$PRODUCTOR_ADO =  new PRODUCTOR_ADO();
$ESPECIES_ADO =  new ESPECIES_ADO();
$VESPECIES_ADO =  new VESPECIES_ADO();
$PROCESO_ADO =  new PROCESO_ADO();

$TMANEJO_ADO =  new TMANEJO_ADO();
$TCALIBRE_ADO =  new TCALIBRE_ADO();
$TCALIBREIND_ADO =  new TCALIBREIND_ADO();
$TCATEGORIA_ADO =  new TCATEGORIA_ADO();

$SEGREGACION_ADO =  new SEGREGACION_ADO();

//INIICIALIZAR MODELO

$PROCESO =  new PROCESO();
$EXIMATERIAPRIMA =  new EXIMATERIAPRIMA();
$EXIINDUSTRIAL =  new EXIINDUSTRIAL();
$EXIEXPORTACION =  new EXIEXPORTACION();
$DPINDUSTRIAL =  new DPINDUSTRIAL();
$DPEXPORTACION =  new DPEXPORTACION();

$SEGREGACION = new SEGREGACION();

//INCIALIZAR VARIBALES A OCUPAR PARA LA FUNCIONALIDAD

$NUMERO = "";
$NUMEROVER = "";
$IDPROCESO = "";
$IDQUITAR = "";
$FOLIOEXIMATERIAPRIMAQUITAR = "";
// $FECHAPROCESO = "";
// VARIABLES SEGREGACION


$OBSERVACION_SEGREGACION = "";
$OBSERVACION_INTERNO = "";
$ESTADO_SEGREGACION = "";
$ESTADO_REGISTRO = "";
$IDSEGREGACION = "";
$FECHASEGREGACION = "";
$FECHAINGRESOSEGREGACION = "";
$FECHAMODIFICACIONSEGREGACION = "";
$TURNO = "";
// $TPROCESO = "";
// $OBSERVACIONPROCESO = "";
$PRODUCTOR = "";
$VESPECIES = "";
$ESTADO = "";



$EMPRESA = "";
$PLANTA = "";
$TEMPORADA = "";


$IDEMPRESA = "";
$IDPLANTA = "";
$IDTEMPORADA = "";



$TOTALENVASEE = 0;
$TOTALNETOE = 0;

$TOTALENVASEEX = 0;
$TOTALNETOEX = 0;
$TOTALBRUTOEX = 0;
$TOTALDESHIDRATACIONEX = 0;


$TOTALENVASEIND = 0;
$TOTALNETOIND = 0;
$TOTALNETOINDSC = 0;
$TOTALNETOINDNC = 0;
$TOTALBRUTOIND = 0;

$TOTALNETOEXPO = 0;
$TOTALENVASEEXPO = 0;
$DIFERENCIAKILOSNETOEXPO = 0;

$TOTALBRUTOEXPO = 0;
$PEXPORTACIONEXPOEX = 0;
$PEXPORTACIONEXPOINDU = 0;
$PEXPORTACIONEXPOINDUSC = 0;
$PEXPORTACIONEXPOINDUNC = 0;
$PEXPORTACIONEXPO = 0;
$PEXPORTACIONEXPOEXDESHI=0;


$DISABLED = "";
$DISABLED2 = "";
$DISABLED3 = "";
$DISABLEDSTYLE = "";
$DISABLEDFOLIO = "";
$MENSAJEFOLIO = "";

$FOCUS = "";
$BORDER = "";
$MENSAJE = "";
$MENSAJEVALIDATO = "";
$MENSAJEEXISTENCIA = "";
$MENSAJEEXPORTACION = "";
$MENSAJEINDUSTRIAL = "";
$MENSAJEDIFERENCIA = "";
$MENSAJEPORCENTAJE = "";

$IDOP = "";
$OP = "";

$SINO = "";

//INICIALIZAR ARREGLOS


// $ARRAYPROCESO = "";
// $ARRAYPROCESO2 = "";
// $ARRAYPROCESO3 = "";

$ARRAYEMPRESA = "";
$ARRAYPLANTA = "";
$ARRAYTEMPORADA = "";

$ARRAYVESPECIES = "";
$ARRAYTPROCESO = "";
$ARRAYPRODUCTOR = "";
$ARRAYVESPECIES = "";

$ARRAYEVERERECEPCIONID = "";
$ARRAYVEREEXPORTACION = "";
$ARRAYVEREINDUTRIAL = "";


$ARRAYEXIMATERIAPRIMATOMADO = "";
$ARRAYEXIMATERIAPRIMATOMADOPROCESADO = "";
$ARRAYEXISTENCIATOTALESPROCESO = "";


$ARRAYVEREXIMATERIAPRIMA = "";

$ARRAYEXIMATERIAPRIMA = "";
$ARRAYEXIEXPORTACION = "";
$ARRAYEXIINDUSTRIAL = "";
$ARRAYDEXPORTACION = "";
$ARRATDINDUSTRIAL = "";

$ARRAYDEXPORTACIONTOTALPROCESO = "";
$ARRATDINDUSTRIALTOTALPROCESO = "";


$ARRATDINDUSTRIALTOTALSC = "";
$ARRATDINDUSTRIALTOTALNC = "";

$ARRAYDEXPORTACIONPORPROCESO = "";
$ARRATDINDUSTRIALPORPROCESO = "";
$ARRAYFECHAACTUAL = "";
$ARRAYNUMERO = "";
$ARRAYTMANEJO = "";
$ARRAYFOLIO = "";
$ARRAYFOLIO2 = "";
$ARRAYFOLIO3 = "";

$ARRAYSEGREGACION = "";
$ARRAYSEGREGACION2 = "";
$ARRAYENSEGREGACION3 = "";
$ARRAYENSEGREGACION = "";

//DEFINIR ARREGLOS CON LOS DATOS OBTENIDOS DE LAS FUNCIONES DE LOS CONTROLADORES
//FOLIO EXPORTACION

$ARRAYSEGREGACION1 = $SEGREGACION_ADO->listarSegregacion();
$ARRAYSEGREGACION2 = $SEGREGACION_ADO->listarSegregacionLimite();




$ARRAYEMPRESA = $EMPRESA_ADO->listarEmpresaCBX();
$ARRAYPLANTA = $PLANTA_ADO->listarPlantaCBX();
$ARRAYTEMPORADA = $TEMPORADA_ADO->listarTemporadaCBX();

// $ARRAYTPROCESO = $TPROCESO_ADO->listarTprocesoCBX();
$ARRAYPRODUCTOR = $PRODUCTOR_ADO->listarProductorPorEmpresaCBX($EMPRESAS);
$ARRAYVESPECIES = $VESPECIES_ADO->listarVespeciesPorEmpresaCBX($EMPRESAS);
$ARRAYFECHAACTUAL = $SEGREGACION_ADO->obtenerFecha();
$FECHASEGREGACION = $ARRAYFECHAACTUAL[0]['FECHA'];

$ARRAYFOLIO = $FOLIO_ADO->verFolioPorEmpresaPlantaTemporadaTexportacion($EMPRESAS, $PLANTAS, $TEMPORADAS);
$ARRAYFOLIO2 = $FOLIO_ADO->verFolioPorEmpresaPlantaTemporadaTindustrial($EMPRESAS, $PLANTAS, $TEMPORADAS);

include_once "../../assest/config/validarDatosUrl.php";
include_once "../../assest/config/datosUrlS.php";


if (empty($ARRAYFOLIO)) {
    $DISABLEDFOLIO = "disabled";
    $MENSAJEFOLIO = " NECESITA <b> CREAR LOS FOLIOS PT </b> , PARA OCUPAR LA <b>  FUNCIONALIDAD </b>.  FAVOR DE <b> CONTACTARSE CON EL ADMINISTRADOR </b>";
}
if (empty($ARRAYFOLIO2)) {
    $DISABLEDFOLIO = "disabled";
    $MENSAJEFOLIO = $MENSAJEFOLIO . "<br> NECESITA <b> CREAR LOS FOLIOS INDUSTRIAL </b> , PARA OCUPAR LA <b>  FUNCIONALIDAD </b>.  FAVOR DE <b> CONTACTARSE CON EL ADMINISTRADOR </b>";
}
//OPERACIONES

if (isset($_GET["id"])) {
    $id_dato = $_GET["id"];
}else{
    $id_dato = "";
}


if (isset($_GET["a"])) {
    $accion_dato = $_GET["a"];
}else{
    $accion_dato = "";
}

//OBTENCION DE DATOS ENVIADOR A LA URL
//PARA OPERACIONES DE EDICION , VISUALIZACION Y CREACION
if (isset($id_dato) && isset($accion_dato)) {
    //ALMACENAR DATOS DE VARIABLES DE LA URL
    $IDOP = $id_dato;
    $OP = $accion_dato;

    //OBTENECION DE INFORMACION DE LA TABLAS DE LA VISTA
    // $ARRAYTOMADA = $EXIMATERIAPRIMA_ADO->buscarPorProceso2($IDOP);
    // $ARRAYDEXPORTACIONPORPROCESO = $DPEXPORTACION_ADO->buscarPorProceso2($IDOP);
    // $ARRATDINDUSTRIALPORPROCESO = $DPINDUSTRIAL_ADO->buscarPorProceso2($IDOP);

    //OBTENCIONS DE TOTALES O EL RESUMEN DE LAS TABLAS

    // $ARRAYEXISTENCIAMPTOTAL = $EXIMATERIAPRIMA_ADO->obtenerTotalesProceso($IDOP);
    // $ARRAYEXISTENCIAMPTOTAL2 = $EXIMATERIAPRIMA_ADO->obtenerTotalesProceso2($IDOP);
    // $TOTALNETOE = $ARRAYEXISTENCIAMPTOTAL[0]['NETO'];
    // $TOTALENVASEE = $ARRAYEXISTENCIAMPTOTAL[0]['ENVASE'];
    // $TOTALNETOEV = $ARRAYEXISTENCIAMPTOTAL2[0]['NETO'];
    // $TOTALENVASEEV = $ARRAYEXISTENCIAMPTOTAL2[0]['ENVASE'];


    // $ARRATDINDUSTRIALTOTALPROCESO = $DPINDUSTRIAL_ADO->obtenerTotales($IDOP);
    // $ARRATDINDUSTRIALTOTALPROCESO2 = $DPINDUSTRIAL_ADO->obtenerTotales2($IDOP);
    // $ARRATDINDUSTRIALTOTALSC = $DPINDUSTRIAL_ADO->obtenerTotalesSC($IDOP);
    // $ARRATDINDUSTRIALTOTALNC = $DPINDUSTRIAL_ADO->obtenerTotalesNC($IDOP);

    // $TOTALNETOIND = $ARRATDINDUSTRIALTOTALPROCESO[0]['NETO'];
    // $TOTALNETOINDV = $ARRATDINDUSTRIALTOTALPROCESO2[0]['NETO'];
    // $TOTALNETOINDSC = $ARRATDINDUSTRIALTOTALSC[0]['NETO'];
    // $TOTALNETOINDNC = $ARRATDINDUSTRIALTOTALNC[0]['NETO'];

    // $ARRAYDEXPORTACIONTOTALPROCESO = $DPEXPORTACION_ADO->obtenerTotales($IDOP);
    // $ARRAYDEXPORTACIONTOTALPROCES2 = $DPEXPORTACION_ADO->obtenerTotales2($IDOP);
    // $TOTALENVASEEX = $ARRAYDEXPORTACIONTOTALPROCESO[0]['ENVASE'];
    // $TOTALNETOEX = $ARRAYDEXPORTACIONTOTALPROCESO[0]['NETO'];
    // $TOTALBRUTOEX = $ARRAYDEXPORTACIONTOTALPROCESO[0]['BRUTO'];
    // $TOTALDESHIDRATACIONEX = $ARRAYDEXPORTACIONTOTALPROCESO[0]['DESHIDRATACION'];

    // $TOTALENVASEEXV = $ARRAYDEXPORTACIONTOTALPROCES2[0]['ENVASE'];
    // $TOTALNETOEXV = $ARRAYDEXPORTACIONTOTALPROCES2[0]['NETO'];
    // $TOTALBRUTOEXV = $ARRAYDEXPORTACIONTOTALPROCES2[0]['BRUTO'];
    // $TOTALDESHIDRATACIONEXV = $ARRAYDEXPORTACIONTOTALPROCES2[0]['DESHIDRATACION'];


    // $TOTALENVASEEXPO = $TOTALENVASEEX + $TOTALENVASEIND;
    // $TOTALNETOEXPO = $TOTALNETOEX + $TOTALNETOIND;
    // $TOTALBRUTOEXPO = $TOTALBRUTOEX + $TOTALBRUTOIND;

    // if ($TOTALNETOEX != 0 && $TOTALNETOE != 0) {
    //     $PEXPORTACIONEXPOEX = (($TOTALNETOEX) / $TOTALNETOE) * 100;
    //     $PEXPORTACIONEXPOEXDESHI = (($TOTALDESHIDRATACIONEX) / $TOTALNETOE) * 100;
    // } else {
    //     $PEXPORTACIONEXPOEX = 0;
    //     $PEXPORTACIONEXPOEXDESHI = 0;
    // }
    // if ($TOTALNETOIND != 0 && $TOTALNETOE != 0) {
    //     $PEXPORTACIONEXPOINDU = (($TOTALNETOIND) / $TOTALNETOE) * 100;        
    //     $PEXPORTACIONEXPOINDUSC = (($TOTALNETOINDSC) / $TOTALNETOE) * 100;      
    //     $PEXPORTACIONEXPOINDUNC = (($TOTALNETOINDNC) / $TOTALNETOE) * 100;      
    // } else {
    //     $PEXPORTACIONEXPOINDU = 0;
    //     $PEXPORTACIONEXPOINDUSC = 0;
    //     $PEXPORTACIONEXPOINDUNC = 0;
    // }

    // $PEXPORTACIONEXPO = ($PEXPORTACIONEXPOEXDESHI + $PEXPORTACIONEXPOINDU);
    // $DIFERENCIAKILOSNETOEXPO = $TOTALNETOE - ($TOTALDESHIDRATACIONEX + $TOTALNETOIND);

    //IDENTIFICACIONES DE OPERACIONES
    //crear =  OBTENCION DE DATOS INICIALES PARA PODER CREAR LA RECEPCION
    if ($OP == "crear") {
        //OBTENCION DE INFORMACIOND DE LA FILA DEL REGISTRO
        //ALMACENAR INFORMACION EN ARREGLO
        //SE LE PASE UNO DE LOS DATOS OBTENIDO PREVIAMENTE A TRAVEZ DE LA URL

        $DISABLED = "";
        $DISABLEDSTYLE = "";
        $DISABLED2 = "";
        $DISABLEDSTYLE2 = "";
        $DISABLED3 = "disabled";
        $DISABLEDMENU = "disabled";
        $DISABLEDSTYLE3 = "style='background-color: #eeeeee;'";
        $ARRAYSEGREGACION = $SEGREGACION_ADO->verSegregacion($IDOP);
        //OBTENCIONS DE LOS DATODS DE LA COLUMNAS DE LA FILA OBTENIDA
        //PASAR DATOS OBTENIDOS A VARIABLES QUE SE VISUALIZAR EN EL FORMULARIO DE LA VISTA
        foreach ($ARRAYSEGREGACION as $r) :

            $IDSEGREGACION = $IDOP;
            $NUMEROVER = "" . $r['NUMERO_SEGREGACION'];
            $FECHASEGREGACION = "" . $r['FECHA_SEGREGACION'];
            $FECHAINGRESOSEGREGACION = "" . $r['INGRESO'];
            $FECHAMODIFICACIONSEGREGACION = "" . $r['MODIFICACION'];
            $OBSERVACION_SEGREGACION = "" . $r['OBSERVACIONE_SEGREGACION'];
            $OBSERVACION_INTERNO = "" . $r['OBSERVACIONE_INTERNO'];
            $EMPRESA = "" . $r['ID_EMPRESA'];
            $PLANTA = "" . $r['ID_PLANTA'];
            $TEMPORADA = "" . $r['ID_TEMPORADA'];
            $PRODUCTOR = "" . $r['ID_PRODUCTOR'];
            $VESPECIES = "" . $r['ID_VESPECIES'];
            $ESTADO = "" . $r['ESTADO'];
            $ESTADO_SEGREGACION = "" . $r['ESTADO_SEGREGACION'];

        endforeach;
    }

    //editar =  OBTENCION DE DATOS PARA LA EDICION DE REGISTRO
    if ($OP == "editar") {

        //OBTENCION DE INFORMACIOND DE LA FILA DEL REGISTRO
        //ALMACENAR INFORMACION EN ARREGLO
        //SE LE PASE UNO DE LOS DATOS OBTENIDO PREVIAMENTE A TRAVEZ DE LA URL

        $DISABLED = "";
        $DISABLED2 = "";
        $DISABLED3 = "disabled";
        $DISABLEDMENU = "disabled";
        $DISABLEDSTYLE = "style='background-color: #eeeeee;'";
        $ARRAYSEGREGACION = $SEGREGACION_ADO->verSegregacion($IDOP);
        //OBTENCIONS DE LOS DATODS DE LA COLUMNAS DE LA FILA OBTENIDA
        //PASAR DATOS OBTENIDOS A VARIABLES QUE SE VISUALIZAR EN EL FORMULARIO DE LA VISTA
        foreach ($ARRAYSEGREGACION as $r) :
            $IDSEGREGACION = $IDOP;
            $NUMEROVER = "" . $r['NUMERO_SEGREGACION'];
            $FECHASEGREGACION = "" . $r['FECHA_SEGREGACION'];
            $FECHAINGRESOSEGREGACION = "" . $r['INGRESO'];
            $FECHAMODIFICACIONSEGREGACION = "" . $r['MODIFICACION'];
            $OBSERVACION_SEGREGACION = "" . $r['OBSERVACIONE_SEGREGACION'];
            $OBSERVACION_INTERNO = "" . $r['OBSERVACIONE_INTERNO'];
            $EMPRESA = "" . $r['ID_EMPRESA'];
            $PLANTA = "" . $r['ID_PLANTA'];
            $TEMPORADA = "" . $r['ID_TEMPORADA'];
            $PRODUCTOR = "" . $r['ID_PRODUCTOR'];
            $VESPECIES = "" . $r['ID_VESPECIES'];
            $ESTADO = "" . $r['ESTADO'];
            $ESTADO_SEGREGACION = "" . $r['ESTADO_SEGREGACION'];

        endforeach;
    }

    //ver =  OBTENCION DE DATOS PARA LA VISUALIZACION DEL REGISTRO
    if ($OP == "ver") {
        //DESABILITAR INPUT DEL FORMULARIO
        //PARA QUE NO MODIFIQUE NIGUNA INFORMACION, OBJETIVO ES VISUALIZAR INFORMACION

        $DISABLED = "disabled";
        $DISABLED2 = "disabled";
        $DISABLED3 = "disabled";
        $DISABLEDMENU = "disabled";
        $DISABLEDSTYLE = "style='background-color: #eeeeee;'";
        //OBTENCION DE INFORMACIOND DE LA FILA DEL REGISTRO
        //ALMACENAR INFORMACION EN ARREGLO
        //LLAMADA A LA FUNCION DE CONTROLADOR  
        //SE LE PASE UNO DE LOS DATOS OBTENIDO PREVIAMENTE A TRAVEZ DE LA URL
        $ARRAYSEGREGACION = $SEGREGACION_ADO->verSegregacion($IDOP);
        //OBTENCIONS DE LOS DATODS DE LA COLUMNAS DE LA FILA OBTENIDA
        //PASAR DATOS OBTENIDOS A VARIABLES QUE SE VISUALIZAR EN EL FORMULARIO DE LA VISTA

        foreach ($ARRAYSEGREGACION as $r) :
            $IDSEGREGACION = $IDOP;
            $NUMEROVER = "" . $r['NUMERO_SEGREGACION'];
            $FECHASEGREGACION = "" . $r['FECHA_SEGREGACION'];
            $FECHAINGRESOSEGREGACION = "" . $r['INGRESO'];
            $FECHAMODIFICACIONSEGREGACION = "" . $r['MODIFICACION'];
            $OBSERVACION_INTERNO = "" . $r['OBSERVACIONE_INTERNOE'];
            $OBSERVACION_SEGREGACION = "" . $r['OBSERVACIONE_SEGREGACIONE'];
            $EMPRESA = "" . $r['ID_EMPRESA'];
            $PLANTA = "" . $r['ID_PLANTA'];
            $TEMPORADA = "" . $r['ID_TEMPORADA'];
            $PRODUCTOR = "" . $r['ID_PRODUCTOR'];
            $VESPECIES = "" . $r['ID_VESPECIES'];
            $ESTADO = "" . $r['ESTADO'];
            $ESTADO_SEGREGACION = "" . $r['ESTADO_SEGREGACION'];
        endforeach;
    }
}
//PROCESO PARA OBTENER LOS DATOS DEL FORMULARIO  Y MANTENERLO AL ACTUALIZACION QUE REALIZA EL SELECT DE PRODUCTOR
if (isset($_POST)) {
    if (isset($_REQUEST['FECHASEGREGACION'])) {
        $FECHASEGREGACION = $_REQUEST['FECHASEGREGACION'];
    }
    if (isset($_REQUEST['OBSERVACION_INTERNO'])) {
        $OBSERVACION_INTERNO = $_REQUEST['OBSERVACION_INTERNO'];
    }
    if (isset($_REQUEST['OBSERVACION_SEGREGACION'])) {
        $OBSERVACION_SEGREGACION = $_REQUEST['OBSERVACION_SEGREGACION'];
    }
    if (isset($_REQUEST['PRODUCTOR'])) {
        $PRODUCTOR = $_REQUEST['PRODUCTOR'];
    }
    if (isset($_REQUEST['VESPECIES'])) {
        $VESPECIES = $_REQUEST['VESPECIES'];
    }
    if (isset($_REQUEST['EMPRESA'])) {
        $EMPRESA = "" . $_REQUEST['EMPRESA'];
    }
    if (isset($_REQUEST['PLANTA'])) {
        $PLANTA = "" . $_REQUEST['PLANTA'];
    }
    if (isset($_REQUEST['TEMPORADA'])) {
        $TEMPORADA = "" . $_REQUEST['TEMPORADA'];
    }

}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>Registro Segregacion</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="">
    <meta name="author" content="">
    <!- LLAMADA DE LOS ARCHIVOS NECESARIOS PARA DISEÑO Y FUNCIONES BASE DE LA VISTA -!>
        <?php include_once "../../assest/config/urlHead.php"; ?>
        <!- FUNCIONES BASES -!>
            <script type="text/javascript">
                //VALIDACION DE FORMULARIO
                function validacion() {
                    
                    FECHASEGREGACION = document.getElementById("FECHASEGREGACION").value;
                    PRODUCTOR = document.getElementById("PRODUCTOR").selectedIndex;
                    VESPECIES = document.getElementById("VESPECIES").selectedIndex;
                    OBSERVACIONSEGREGACION = document.getElementById("OBSERVACIONSEGREGACION").value;
                    OBSERVACIONINTERNO = document.getElementById("OBSERVACIONINTERNO").value;
                    

                    document.getElementById('val_fechas').innerHTML = "";
                    document.getElementById('val_productor').innerHTML = "";
                    document.getElementById('val_variedad').innerHTML = "";
                    document.getElementById('val_observacionseg').innerHTML = "";
                    document.getElementById('val_observacioninter').innerHTML = "";
                    

                   
                    if (FECHASEGREGACION == null || FECHASEGREGACION.length == 0 || /^\s+$/.test(FECHASEGREGACION)) {
                        document.form_reg_dato.FECHASEGREGACION.focus();
                        document.form_reg_dato.FECHASEGREGACION.style.borderColor = "#FF0000";
                        document.getElementById('val_fechas').innerHTML = "NO A INGRESADO DATO";
                        return false;
                    }
                    document.form_reg_dato.FECHASEGREGACION.style.borderColor = "#4AF575";
                    if (PRODUCTOR == null || PRODUCTOR == 0) {
                        document.form_reg_dato.PRODUCTOR.focus();
                        document.form_reg_dato.PRODUCTOR.style.borderColor = "#FF0000";
                        document.getElementById('val_productor').innerHTML = "NO HA SELECIONADO ALTERNATIVA";
                        return false;
                    }
                    document.form_reg_dato.PRODUCTOR.style.borderColor = "#4AF575";


                    if (VESPECIES == null || VESPECIES == 0) {
                        document.form_reg_dato.VESPECIES.focus();
                        document.form_reg_dato.VESPECIES.style.borderColor = "#FF0000";
                        document.getElementById('val_variedad').innerHTML = "NO HA SELECIONADO ALTERNATIVA";
                        return false;
                    }
                    document.form_reg_dato.VESPECIES.style.borderColor = "#4AF575";

                    /*
                    if (OBSERVACIONPROCESO == null || OBSERVACIONPROCESO.length == 0 || /^\s+$/.test(OBSERVACIONPROCESO)) {
                        document.form_reg_dato.OBSERVACIONPROCESO.focus();
                        document.form_reg_dato.OBSERVACIONPROCESO.style.borderColor = "#FF0000";
                        document.getElementById('val_observacion').innerHTML = "NO A INGRESADO DATO";
                        return false;
                    }
                    document.form_reg_dato.OBSERVACIONPROCESO.style.borderColor = "#4AF575";
                    */
                }
                //REDIRECCIONAR A LA PAGINA SELECIONADA
                function irPagina(url) {
                    location.href = "" + url;
                }
            
                //FUNCION PARA REALIZAR UNA ACTUALIZACION DEL FORMULARIO DE REGISTRO DE RECEPCION
                function refrescar() {
                    document.getElementById("form_reg_dato").submit();
                }

                function abrirPestana(url) {
                    var win = window.open(url, '_blank');
                    win.focus();
                }
                //FUNCION PARA ABRIR VENTANA QUE SE ENCUENTRA LA OPERACIONES DE DETALLE DE RECEPCION
                function abrirVentana(url) {
                    var opciones =
                        "'directories=no, location=no, menubar=no, scrollbars=yes, statusbar=no, tittlebar=no, width=1600, height=1000'";
                    window.open(url, 'window', opciones);
                }
            </script>

</head>

<body class="hold-transition light-skin fixed sidebar-mini theme-primary" >
    <div class="wrapper">
        <!- LLAMADA AL MENU PRINCIPAL DE LA PAGINA-!>
            <?php include_once "../../assest/config/menuFruta.php";  ?>
            <div class="content-wrapper">
                <div class="container-full">
                    <!-- Content Header (Page header) -->
                    <div class="content-header">
                        <div class="d-flex align-items-center">
                            <div class="mr-auto">
                                <h3 class="page-title">Segregacion</h3>
                                <div class="d-inline-block align-items-center">
                                    <nav>
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"> <a href="index.php"> <i class="mdi mdi-home-outline"></i></a></li>
                                            <li class="breadcrumb-item" aria-current="page">Modulo</li>
                                            <li class="breadcrumb-item" aria-current="page">Segregacion</li>
                                            <li class="breadcrumb-item" aria-current="page">Registro de Segregacion</li>
                                            <li class="breadcrumb-item active" aria-current="page"> <a href="#p">Registro Segregacion</a>  </li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                            <?php include_once "../../assest/config/verIndicadorEconomico.php"; ?>
                        </div>
                    </div>
                    <label id="val_mensaje" class="validacion"><?php echo $MENSAJEFOLIO; ?> </label>
                    <!-- Main content -->
                    <section class="content">
                        <form class="form" role="form" method="post" name="form_reg_dato" id="form_reg_dato">
                            <div class="box">                                
                                 <div class="box-header with-border bg-primary">                                   
                                    <h4 class="box-title">Encabezado de Segregacion</h4>                                        
                                </div>
                                <div class="box-body ">
                                    <div class="row">
                                        <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 col-xs-6">
                                            <div class="form-group">
                                                <input type="hidden" class="form-control" placeholder="ID EMPRESA" id="EMPRESA" name="EMPRESA" value="<?php echo $EMPRESAS; ?>" />
                                                <input type="hidden" class="form-control" placeholder="ID PLANTA" id="PLANTA" name="PLANTA" value="<?php echo $PLANTAS; ?>" />
                                                <input type="hidden" class="form-control" placeholder="ID TEMPORADA" id="TEMPORADA" name="TEMPORADA" value="<?php echo $TEMPORADAS; ?>" />
                                                <input type="hidden" class="form-control" placeholder="ID EMPRESA" id="EMPRESAE" name="EMPRESAE" value="<?php echo $EMPRESA; ?>" />
                                                <input type="hidden" class="form-control" placeholder="ID PLANTA" id="PLANTAE" name="PLANTAE" value="<?php echo $PLANTA; ?>" />
                                                <input type="hidden" class="form-control" placeholder="ID TEMPORADA" id="TEMPORADAE" name="TEMPORADAE" value="<?php echo $TEMPORADA; ?>" />


                                   
                                                <input type="hidden" class="form-control" placeholder="ID SEGREGACION" id="IDS" name="IDS" value="<?php echo $IDOP; ?>" />
                                                <input type="hidden" class="form-control" placeholder="OP SEGREGACION" id="OPS" name="OPS" value="<?php echo $OP; ?>" />
                                                <input type="hidden" class="form-control" placeholder="URL SEGREGACION" id="URLS" name="URLS" value="registroSegregacion" />
                                                <label>Numero Segregacion</label>
                                                <input type="number" class="form-control" style="background-color: #eeeeee;" placeholder="Numero Segregacion" id="NUMEROVER" name="NUMEROSVER" value="<?php echo $NUMEROVER; ?>" disabled />
                                                <label id="val_id" class="validacion"> </label>
                                            </div>
                                        </div>
                                        <div class="col-xxl-2 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6 col-xs-6">
                                            <div class="form-group">
                                                <label>Fecha Ingreso</label>
                                                <input type="hidden" class="form-control" placeholder="Fecha Ingreso " id="FECHAINGRESOSEGREGACIONE" name="FECHAINGRESOSEGREGACIONE" value="<?php echo $FECHAINGRESOSEGREGACION; ?>" />
                                                <input type="date" class="form-control" style="background-color: #eeeeee;" placeholder="FECHA SEGREGACION" id="FECHAINGRESOSEGREGACION" name="FECHAINGRESOSEGREGACION" value="<?php echo $FECHAINGRESOSEGREGACION; ?>" disabled />
                                                <label id="val_fechai" class="validacion"> </label>
                                            </div>
                                        </div>
                                        <div class="col-xxl-2 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6 col-xs-6">
                                            <div class="form-group">
                                                <label>Fecha Modificacion</label>
                                                <input type="hidden" class="form-control" placeholder="Fecha Modificacion " id="FECHAMODIFICACIONSEGREGACIONE" name="FECHAMODIFICACIONSEGREGACIONE" value="<?php echo $FECHAMODIFICACIONSEGREGACION; ?>" />
                                                <input type="date" class="form-control " style="background-color: #eeeeee;" placeholder="FECHA MODIFICACION" id="FECHAMODIFICACIONSEGREGACION" name="FECHAMODIFICACIONSEGREGACION" value="<?php echo $FECHAMODIFICACIONSEGREGACION; ?>" disabled />
                                                <label id="val_fecham" class="validacion"> </label>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="row">                                        
                                        <div class="col-xxl-2 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6 col-xs-6">
                                            <div class="form-group">
                                                <label>Fecha Segregacion</label>
                                                <input type="hidden" class="form-control" placeholder="FECHA SEGREGACION" id="FECHASEGREGACIONE" name="FECHASEGREGACIONE" value="<?php echo $FECHASEGREGACION; ?>" />
                                                <input type="date" class="form-control " placeholder="FECHA SEGREGACION" id="FECHASEGREGACION" name="FECHASEGREGACION" value="<?php echo $FECHASEGREGACION; ?>" <?php echo $DISABLED; ?> <?php echo $DISABLEDFOLIO; ?> />
                                                <label id="val_fechas" class="validacion"> </label>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12 col-xs-12">
                                            <div class="form-group">
                                                <label>Productor</label>
                                                <input type="hidden" class="form-control" placeholder="PRODUCTOR" id="PRODUCTORE" name="PRODUCTORE" value="<?php echo $PRODUCTOR; ?>" />
                                                <select class="form-control select2" id="PRODUCTOR" name="PRODUCTOR" style="width: 100%;" <?php echo $DISABLED; ?> <?php echo $DISABLED3; ?> <?php echo $DISABLEDFOLIO; ?>>
                                                    <option></option>
                                                    <?php foreach ($ARRAYPRODUCTOR as $r) : ?>
                                                        <?php if ($ARRAYPRODUCTOR) {    ?>
                                                            <option value="<?php echo $r['ID_PRODUCTOR']; ?>" <?php if ($PRODUCTOR == $r['ID_PRODUCTOR']) {  echo "selected";   } ?>>
                                                                <?php echo $r['CSG_PRODUCTOR'] ?> : <?php echo $r['NOMBRE_PRODUCTOR'] ?>
                                                            </option>
                                                        <?php } else { ?>
                                                            <option>No Hay Datos Registrados </option>
                                                        <?php } ?>
                                                    <?php endforeach; ?>
                                                </select>

                                                <label id="val_productor" class="validacion"> </label>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12 col-xs-12">
                                            <div class="form-group">
                                                <label>Variedad</label>
                                                <input type="hidden" class="form-control" placeholder="Variedad" id="VESPECIESE" name="VESPECIESE" value="<?php echo $VESPECIES; ?>" />
                                                <select class="form-control select2" id="VESPECIES" name="VESPECIES" style="width: 100%;" <?php echo $DISABLED; ?> <?php echo $DISABLED3; ?> <?php echo $DISABLEDFOLIO; ?>>
                                                    <option></option>
                                                    <?php foreach ($ARRAYVESPECIES as $r) : ?>
                                                        <?php if ($ARRAYVESPECIES) {    ?>
                                                            <option value="<?php echo $r['ID_VESPECIES']; ?>" <?php if ($VESPECIES == $r['ID_VESPECIES']) {     echo "selected";    } ?>>
                                                                <?php echo $r['NOMBRE_VESPECIES'];  ?>
                                                            </option>
                                                        <?php } else { ?>
                                                            <option>No Hay Datos Registrados </option>
                                                        <?php } ?>
                                                    <?php endforeach; ?>
                                                </select>
                                                <label id="val_variedad" class="validacion"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 col-xs-12">
                                            <div class="form-group">
                                                <input type="hidden" class="form-control" placeholder="OBSERVACION SEGREGACION" id="OBSERVACIONSEGREGACIONE" name="OBSERVACIONSEGREGACIONE" value="<?php echo $OBSERVACIONSEGREGACION; ?>" />
                                                <label>observacion de Segregacion </label>
                                                <textarea class="form-control" rows="1"  placeholder="Ingrese Nota e Observacion  " id="OBSERVACIONSEGREGACION" name="OBSERVACIONSEGREGACION" <?php echo $DISABLED; ?>  <?php echo $DISABLEDFOLIO; ?>><?php echo $OBSERVACIONSEGREGACION; ?></textarea>
                                                <label id="val_observacionseg" class="validacion"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 col-xs-12">
                                            <div class="form-group">
                                                <input type="hidden" class="form-control" placeholder="OBSERVACION INTERNO" id="OBSERVACIONINTERNOE" name="OBSERVACIONINTERNOE" value="<?php echo $OBSERVACIONINTERNO; ?>" />
                                                <label>Observacion Interna</label>
                                                <textarea class="form-control" rows="1"  placeholder="Ingrese Nota e Observacion  " id="OBSERVACIONINTERNO" name="OBSERVACIONINTERNO" <?php echo $DISABLED; ?>  <?php echo $DISABLEDFOLIO; ?>><?php echo $OBSERVACIONINTERNO; ?></textarea>
                                                <label id="val_observacioninter" class="validacion"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <div class="box-footer">
                                    <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar">
                                        <div class="btn-group  col-xxl-4 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 col-xs-12" role="group" aria-label="Acciones generales">
                                            <?php if ($OP == "") { ?>
                                                <button type="button" class="btn btn-warning " data-toggle="tooltip" title="Cancelar" name="CANCELAR" value="CANCELAR" Onclick="irPagina('registroProceso.php');">
                                                    <i class="ti-trash"></i> Cancelar
                                                </button>
                                                <button type="submit" class="btn btn-primary" data-toggle="tooltip" title="Guardar" name="CREAR" value="CREAR" <?php echo $DISABLEDFOLIO; ?> onclick="return validacion()">
                                                    <i class="ti-save-alt"></i> Guardar
                                                </button>
                                            <?php } ?>
                                            <?php if ($OP != "") { ?>
                                                <button type="button" class="btn  btn-success " data-toggle="tooltip" title="Volver" name="VOLVER" value="VOLVER" Onclick="irPagina('listarProceso.php'); ">
                                                    <i class="ti-back-left "></i> Volver
                                                </button>
                                                <button type="submit" class="btn btn-warning " data-toggle="tooltip" title="Guardar" name="GUARDAR" value="GUARDAR" <?php echo $DISABLED2; ?> <?php echo $DISABLEDFOLIO; ?> onclick="return validacion()">
                                                    <i class="ti-pencil-alt"></i> Guardar
                                                </button>
                                                <button type="submit" class="btn btn-danger " data-toggle="tooltip" title="Cerrar" name="CERRAR" value="CERRAR" <?php echo $DISABLED2; ?> <?php echo $DISABLEDFOLIO; ?> onclick="return validacion()">
                                                    <i class="ti-save-alt"></i> Cerrar
                                                </button>
                                            <?php } ?>
                                        </div>
                                        <div class="btn-group  col-xxl-4 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 col-xs-12  float-right">
                                            <?php if ($OP != "") : ?>
                                                <button type="button" class="btn btn-primary  " data-toggle="tooltip" title="Informe" id="defecto" name="tarjas"  <?php if ($ESTADO == "1") { echo "disabled"; } ?> <?php echo $DISABLEDFOLIO; ?> Onclick="abrirPestana('../../assest/documento/informeProceso.php?parametro=<?php echo $IDOP; ?>&&usuario=<?php echo $IDUSUARIOS; ?>'); ">
                                                    <i class="fa fa-file-pdf-o"></i> Informe
                                                </button>
                                                <button type="button" class="btn  btn-info  " data-toggle="tooltip" title="Tarja" id="defecto" name="tarjas" <?php echo $DISABLEDFOLIO; ?> Onclick="abrirPestana('../../assest/documento/informeTarjasProceso.php?parametro=<?php echo $IDOP; ?>'); ">
                                                    <i class="fa fa-file-pdf-o"></i> Tarjas
                                                </button>
                                            <?php endif ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <?php if (isset($_GET['op'])): ?>
                            <div class="card">
                                <div class="card-header bg-info">
                                    <h4 class="card-title">Ingreso / Existencia Materia Prima</h4>
                                </div>
                                <div class="card-header">
                                    <form method="post" id="form2" name="form2">
                                        <div class="form-row align-items-center">
                                            <input type="hidden" class="form-control" placeholder="ID SEGREGACION" id="IDS" name="IDS" value="<?php echo $IDOP; ?>" />
                                            <input type="hidden" class="form-control" placeholder="OP SEGREGACION" id="OPP" name="OPS" value="<?php echo $OP; ?>" />
                                            <input type="hidden" class="form-control" placeholder="URL SEGREGACION" id="URLP" name="URLS" value="registroSegregacion" />
                                            <input type="hidden" class="form-control" placeholder="URL SELECCION" id="URLD" name="URLD" value="registroSelecionExistenciaMPSegregacion" />
                                            <div class="col-auto">
                                                <button type="submit" class="btn btn-success btn-block mb-2" data-toggle="tooltip" title="Seleccion Existencia" id="SELECIONOCDURL" name="SELECIONOCDURL" 
                                                    <?php echo $DISABLED2; ?> <?php echo $DISABLEDFOLIO; ?> <?php if ($ESTADO == 0) {   echo "disabled style='background-color: #eeeeee;'";    } ?>>
                                                    Seleccion Existencia
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="ingreso" class="table-hover " style="width: 100%;">
                                            <thead>
                                                <tr class="text-center">
                                                    <th>Folio </th>
                                                    <th class="text-center">Operaciones</th>
                                                    <th>Fecha Cosecha </th>
                                                    <th>Código Estandar </th>
                                                    <th>Envase/Estandar </th>
                                                    <th>Especies </th>
                                                    <th>Variedad </th>
                                                    <th>Cantidad Envase</th>
                                                    <th>Kilo Neto</th>
                                                    <th>Tipo Manejo</th>
                                                    <th>CSG Productor </th>
                                                    <th>Nombre Productor </th>
                                                    <th>Número Recepción </th>
                                                    <th>Número Guía </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if ($ARRAYTOMADA) { ?>
                                                    <?php foreach ($ARRAYTOMADA as $r) : ?>
                                                        <?php
                                                        $ARRAYEVERERECEPCIONID = $ERECEPCION_ADO->verEstandar($r['ID_ESTANDAR']);
                                                        if ($ARRAYEVERERECEPCIONID) {
                                                            $CODIGOESTANDAR = $ARRAYEVERERECEPCIONID[0]['CODIGO_ESTANDAR'];
                                                            $NOMBREESTANDAR = $ARRAYEVERERECEPCIONID[0]['NOMBRE_ESTANDAR'];
                                                        } else {
                                                            $CODIGOESTANDAR = "Sin Datos";
                                                            $NOMBREESTANDAR = "Sin Datos";
                                                        }
                                                        $ARRAYVERVESPECIESID = $VESPECIES_ADO->verVespecies($r['ID_VESPECIES']);
                                                        if ($ARRAYVERVESPECIESID) {
                                                            $NOMBREVESPECIES = $ARRAYVERVESPECIESID[0]['NOMBRE_VESPECIES'];
                                                            $ARRAYVERESPECIESID = $ESPECIES_ADO->verEspecies($ARRAYVERVESPECIESID[0]['ID_ESPECIES']);
                                                            if ($ARRAYVERVESPECIESID) {
                                                                $NOMBRESPECIES = $ARRAYVERESPECIESID[0]['NOMBRE_ESPECIES'];
                                                            } else {
                                                                $NOMBRESPECIES = "Sin Datos";
                                                            }
                                                        } else {
                                                            $NOMBREVESPECIES = "Sin Datos";
                                                            $NOMBRESPECIES = "Sin Datos";
                                                        }
                                                        $ARRAYVERPRODUCTORID = $PRODUCTOR_ADO->verProductor($r['ID_PRODUCTOR']);
                                                        if ($ARRAYVERPRODUCTORID) {

                                                            $CSGPRODUCTOR = $ARRAYVERPRODUCTORID[0]['CSG_PRODUCTOR'];
                                                            $NOMBREPRODUCTOR = $ARRAYVERPRODUCTORID[0]['NOMBRE_PRODUCTOR'];
                                                        } else {
                                                            $CSGPRODUCTOR = "Sin Datos";
                                                            $NOMBREPRODUCTOR = "Sin Datos";
                                                        }
                                                        $ARRAYEVERERECEPCIONID = $ERECEPCION_ADO->verEstandar($r['ID_ESTANDAR']);
                                                        if ($ARRAYEVERERECEPCIONID) {
                                                            $CODIGOESTANDAR = $ARRAYEVERERECEPCIONID[0]['CODIGO_ESTANDAR'];
                                                            $NOMBREESTANDAR = $ARRAYEVERERECEPCIONID[0]['NOMBRE_ESTANDAR'];
                                                        } else {
                                                            $CODIGOESTANDAR = "Sin Datos";
                                                            $NOMBREESTANDAR = "Sin Datos";
                                                        }
                                                        $ARRAYTMANEJO = $TMANEJO_ADO->verTmanejo($r['ID_TMANEJO']);
                                                        if ($ARRAYTMANEJO) {
                                                            $NOMBRETMANEJO = $ARRAYTMANEJO[0]['NOMBRE_TMANEJO'];
                                                        } else {
                                                            $NOMBRETMANEJO = "Sin Datos";
                                                        }
                                                        $ARRAYRECEPCION = $RECEPCIONMP_ADO->verRecepcion2($r['ID_RECEPCION']);
                                                        if ($ARRAYRECEPCION) {
                                                            $NUMERORECEPCION = $ARRAYRECEPCION[0]["NUMERO_RECEPCION"];
                                                            $NUMEROGUIARECEPCION = $ARRAYRECEPCION[0]["NUMERO_GUIA_RECEPCION"];                                                         
                                                        } else {
                                                            $NUMERORECEPCION = "Sin Datos";
                                                            $NUMEROGUIARECEPCION = "Sin Datos";
                                                        }

                                                        ?>
                                                        <tr class="text-center">
                                                            <td><?php echo $r['FOLIO_AUXILIAR_EXIMATERIAPRIMA']; ?> </td>
                                                            <td class="text-center">
                                                                <form method="post" id="form1">
                                                                    <input type="hidden" class="form-control" id="IDQUITAR" name="IDQUITAR" value="<?php echo $r['ID_EXIMATERIAPRIMA']; ?>" />
                                                                    <div class="btn-group btn-block  col-6" role="group" aria-label="Operaciones Detalle">
                                                                        <button type="submit" class="btn btn-sm btn-danger " id="QUITAR" name="QUITAR" data-toggle="tooltip" title="Quitar Existencia MP" <?php echo $DISABLED2; ?> <?php if ($ESTADO == 0) {  echo "disabled"; } ?>>
                                                                            <i class="ti-close"></i><br> Quitar
                                                                        </button>
                                                                    </div>
                                                                </form>
                                                            </td>
                                                            <td><?php echo $r['FECHA_COSECHA_EXIMATERIAPRIMA']; ?></td>
                                                            <td><?php echo $CODIGOESTANDAR; ?></td>
                                                            <td><?php echo $NOMBREESTANDAR; ?></td>
                                                            <td><?php echo $NOMBRESPECIES; ?></td>
                                                            <td><?php echo $NOMBREVESPECIES; ?></td>
                                                            <td><?php echo $r['CANTIDAD_ENVASE_EXIMATERIAPRIMA']; ?></td>
                                                            <td><?php echo $r['KILOS_NETO_EXIMATERIAPRIMA']; ?></td>
                                                            <td><?php echo $NOMBRETMANEJO; ?></td>
                                                            <td><?php echo $CSGPRODUCTOR; ?></td>
                                                            <td><?php echo $NOMBREPRODUCTOR; ?></td>
                                                            <td><?php echo $NUMERORECEPCION; ?></td>
                                                            <td><?php echo $NUMEROGUIARECEPCION; ?></td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="btn-toolbar mb-3" role="toolbar" aria-label="Datos generales">
                                        <div class="form-row align-items-center" role="group" aria-label="Datos">
                                            <div class="col-auto">
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">Total Envase</div>
                                                    </div>
                                                    <!-- inicio input -->
                                                    <input type="hidden" class="form-control" placeholder="TOTAL ENVASE" id="TOTALENVASE" name="TOTALENVASE" value="<?php echo $TOTALENVASEE; ?>" />
                                                    <input type="text" class="form-control text-center" placeholder="Total Envase" id="TOTALENVASEEV" name="TOTALENVASEEV" value="<?php echo $TOTALENVASEEV; ?>" disabled />
                                                    <!-- /termino input -->
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">% Exportacion</div>
                                                    </div>
                                                    <!-- inicio input -->
                                                    <input type="hidden" class="form-control" placeholder="TOTAL NETO" id="PEXPORTACIONEXPOEX" name="PEXPORTACIONEXPOEX" value="<?php echo $PEXPORTACIONEXPOEX; ?>" />
                                                    <input type="text" class="form-control text-center" placeholder="% Exportacion" id="PEXPORTACIONEXPOEXV" name="PEXPORTACIONEXPOEXV" value="<?php echo number_format($PEXPORTACIONEXPOEX, 2, ",", "."); ?>" disabled />
                                                    <!-- /termino input -->
                                                </div>
                                            </div>                                        
                                            <div class="col-auto">
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">% Expo. Con Desh.</div>
                                                    </div>
                                                    <!-- inicio input -->
                                                    <input type="hidden" class="form-control" placeholder="TOTAL NETO" id="PEXPORTACIONEXPOEXDESHI" name="PEXPORTACIONEXPOEX" value="<?php echo $PEXPORTACIONEXPOEXDESHI; ?>" />
                                                    <input type="text" class="form-control text-center" placeholder="% Expo. Con Desh." id="PEXPORTACIONEXPOEXDESHI" name="PEXPORTACIONEXPOEXV" value="<?php echo number_format($PEXPORTACIONEXPOEXDESHI, 2, ",", "."); ?>" disabled />
                                                    <!-- /termino input -->
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">% Industrial</div>
                                                    </div>
                                                    <!-- inicio input -->
                                                    <input type="hidden" class="form-control" placeholder="TOTAL NETO" id="PEXPORTACIONEXPOINDU" name="PEXPORTACIONEXPOINDU" value="<?php echo $PEXPORTACIONEXPOINDU; ?>" />
                                                    <input type="text" class="form-control text-center" placeholder="% Industrial" id="PEXPORTACIONEXPOINDUV" name="PEXPORTACIONEXPOINDUV" value="<?php echo number_format($PEXPORTACIONEXPOINDU, 2, ",", "."); ?>" disabled />
                                                    <!-- /termino input -->
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <label id="val_dproceso" class="validacion"><?php echo $MENSAJEEXISTENCIA; ?> </label>
                                            </div>
                                            <div class="col-auto">
                                                <label id="val_dproceso" class="validacion"><?php echo $MENSAJEPORCENTAJE; ?> </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                        
                        <?php endif ?>
                        <!--.row -->
                    </section>
                    <!-- /.content -->
                </div>
            </div>
            <!- LLAMADA ARCHIVO DEL DISEÑO DEL FOOTER Y MENU USUARIO -!>
                <?php include_once "../../assest/config/footer.php"; ?>
                <?php include_once "../../assest/config/menuExtraFruta.php"; ?>
    </div>
    <!- LLAMADA URL DE ARCHIVOS DE DISEÑO Y JQUERY E OTROS -!>
        <?php include_once "../../assest/config/urlBase.php"; ?>
        <?php
        //OPERACION DE REGISTRO DE FILA
        if (isset($_REQUEST['CREAR'])) {

            $ARRAYNUMERO = $SEGREGACION_ADO->obtenerNumero($_REQUEST['EMPRESA'], $_REQUEST['PLANTA'], $_REQUEST['TEMPORADA']);
            $NUMERO = $ARRAYNUMERO[0]['NUMERO'] + 1;

            //UTILIZACION METODOS SET DEL MODELO
            //SETEO DE ATRIBUTOS DE LA CLASE, OBTENIDO EN EL FORMULARIO
            $SEGREGACION->__SET('NUMERO_SEGREGACION', $NUMERO);
            $SEGREGACION->__SET('FECHA_SEGREGACION', $_REQUEST['FECHASEGREGACION']);
            $SEGREGACION->__SET('OBSERVACIONE_SEGREGACION', $_REQUEST['OBSERVACIONSEGREGACION']);
            $SEGREGACION->__SET('OBSERVACIONE_INTERNO', $_REQUEST['OBSERVACIONINTERNO']);
            $SEGREGACION->__SET('ID_VESPECIES', $_REQUEST['VESPECIES']);
            $SEGREGACION->__SET('ID_PRODUCTOR', $_REQUEST['PRODUCTOR']);
            $SEGREGACION->__SET('ID_EMPRESA', $_REQUEST['EMPRESA']);
            $SEGREGACION->__SET('ID_PLANTA', $_REQUEST['PLANTA']);
            $SEGREGACION->__SET('ID_TEMPORADA', $_REQUEST['TEMPORADA']);
            $SEGREGACION->__SET('ID_USUARIOI', $IDUSUARIOS);
            $SEGREGACION->__SET('ID_USUARIOM', $IDUSUARIOS);
            //LLAMADA AL METODO DE REGISTRO DEL CONTROLADOR  HORAINGRESOPROCESO
            $SEGREGACION_ADO->registrarSegregacion($SEGREGACION);
            //OBTENER EL ID DE LA RECEPCION CREADA PARA LUEGO ENVIAR EL INGRESO DEL DETALLE
            $ARRYAOBTENERID = $SEGREGACION_ADO->obtenerId(
                $_REQUEST['FECHASEGREGACION'],
                $_REQUEST['EMPRESA'],
                $_REQUEST['PLANTA'],
                $_REQUEST['TEMPORADA']
            );
            //REDIRECCIONAR A PAGINA registroRecepcion.php
            $AUSUARIO_ADO->agregarAusuario2($NUMERO,1,1,"".$_SESSION["NOMBRE_USUARIO"].", Registro de Segregacion.","fruta_segregacion", $ARRYAOBTENERID[0]['ID_SEGREGACION'],$_SESSION["ID_USUARIO"],$_SESSION['ID_EMPRESA'], $_SESSION['ID_PLANTA'],$_SESSION['ID_TEMPORADA'] );  

            $id_dato = $ARRYAOBTENERID[0]['ID_SEGREGACION'];
            $accion_dato = "crear";
            echo '<script>
                Swal.fire({
                    icon:"success",
                    title:"Registro Creado",
                    text:"El registro de segregacion se ha creado correctamente",
                    showConfirmButton: true,
                    confirmButtonText:"Cerrar",
                    closeOnConfirm:false
                }).then((result)=>{
                        location.href = "registroSegregacion.php?op&id='.$id_dato.'&a='.$accion_dato.'";
                    
                })
            </script>';
        }
        //OPERACION EDICION DE FILA
        if (isset($_REQUEST['GUARDAR'])) {

            $SEGREGACION->__SET('FECHA_SEGREGACION',  $_REQUEST['FECHASEGREGACION']);
            $SEGREGACION->__SET('OBSERVACIONE_INTERNO', $_REQUEST['OBSERVACIONINTERNO']);
            $SEGREGACION->__SET('OBSERVACIONE_SEGREGACION', $_REQUEST['OBSERVACIONSEGREGACION']);

            // $PROCESO->__SET('KILOS_NETO_ENTRADA', $_REQUEST['TOTALNETO']);
            // $PROCESO->__SET('KILOS_NETO_PROCESO', $_REQUEST['TOTALNETOEX']);
            // $PROCESO->__SET('KILOS_INDUSTRIAL_PROCESO', $_REQUEST['TOTALNETOIND']);
            // $PROCESO->__SET('KILOS_INDUSTRIALSC_PROCESO', $_REQUEST['TOTALNETOINDSC']);
            // $PROCESO->__SET('KILOS_INDUSTRIALNC_PROCESO', $_REQUEST['TOTALNETOINDNC']);
            // $PROCESO->__SET('KILOS_EXPORTACION_PROCESO', $_REQUEST['TOTALDESHIDRATACIONEX']);      

            // $PROCESO->__SET('PDEXPORTACION_PROCESO', $_REQUEST['PEXPORTACIONEXPOEX']);
            // $PROCESO->__SET('PDEXPORTACIONCD_PROCESO', $_REQUEST['PEXPORTACIONEXPOEXDESHI']);
            // $PROCESO->__SET('PDINDUSTRIAL_PROCESO', $_REQUEST['PEXPORTACIONEXPOINDU']);
            // $PROCESO->__SET('PDINDUSTRIALSC_PROCESO', $_REQUEST['PEXPORTACIONEXPOINDUSC']);
            // $PROCESO->__SET('PDINDUSTRIALNC_PROCESO', $_REQUEST['PEXPORTACIONEXPOINDUNC']);
            // $PROCESO->__SET('PORCENTAJE_PROCESO', $_REQUEST['PEXPORTACIONEXPO']);

            $SEGREGACION->__SET('ID_VESPECIES',  $_REQUEST['VESPECIESE']);
            $SEGREGACION->__SET('ID_PRODUCTOR',  $_REQUEST['PRODUCTORE']);
            // $SEGREGACION->__SET('ID_TPROCESO', $_REQUEST['TPROCESOE']);
            $SEGREGACION->__SET('ID_USUARIOM', $IDUSUARIOS);
            $SEGREGACION->__SET('ID_SEGREGACION', $_REQUEST['IDS']);
            //LLAMADA AL METODO DE EDITAR DEL CONTROLADOR
            $SEGREGACION_ADO->actualizarSegregacion($SEGREGACION);

            $AUSUARIO_ADO->agregarAusuario2($NUMEROVER,1,2,"".$_SESSION["NOMBRE_USUARIO"].", Modificación de Segregacion.","fruta_segregacion", $_REQUEST['IDS'],$_SESSION["ID_USUARIO"],$_SESSION['ID_EMPRESA'], $_SESSION['ID_PLANTA'],$_SESSION['ID_TEMPORADA'] );  
            
            if ($accion_dato == "crear") {
                $id_dato = $_REQUEST['IDS'];
                $accion_dato = "crear";
                echo '<script>
                    Swal.fire({
                        icon:"info",
                        title:"Registro Modificado",
                        text:"El registro de Segregacion se ha modificada correctamente",
                        showConfirmButton: true,
                        confirmButtonText:"Cerrar",
                        closeOnConfirm:false
                    }).then((result)=>{
                        location.href = "registroSegregacion.php?op&id='.$id_dato.'&a='.$accion_dato.'";                        
                    })
                </script>';
            }
            if ($accion_dato == "editar") {
                $id_dato = $_REQUEST['IDS'];
                $accion_dato = "editar";
                echo '<script>
                    Swal.fire({
                        icon:"info",
                        title:"Registro Modificado",
                        text:"El registro de Segregacion se ha modificada correctamente",
                        showConfirmButton: true,
                        confirmButtonText:"Cerrar",
                        closeOnConfirm:false
                    }).then((result)=>{
                        location.href = "registroSegregacion.php?op&id='.$id_dato.'&a='.$accion_dato.'";                        
                    })
                </script>';
            }
        }
        //OPERACION CERRAR DE FILA
        if (isset($_REQUEST['CERRAR'])) {


            //echo "<script>alert('".$_REQUEST['DIFERENCIAKILOSNETOEX'].'PRUEBAXX'."');</script>";
    
            //UTILIZACION METODOS SET DEL MODELO
            $ARRAYEXIMATERIAPRIMATOMADO = $EXIMATERIAPRIMA_ADO->buscarPorProceso($_REQUEST['IDP']);
            $ARRAYDEXPORTACIONPORPROCESO = $DPEXPORTACION_ADO->buscarPorProceso($_REQUEST['IDP']);
            $ARRATDINDUSTRIALPORPROCESO = $DPINDUSTRIAL_ADO->buscarPorProceso($_REQUEST['IDP']);

            if (empty($ARRAYEXIMATERIAPRIMATOMADO)) {
                $SINO = "1";
                $MENSAJE = $MENSAJE. " Tiene que haber al menos un registro de existencia seleccionado.";                
            
            }  else {
                $SINO = "0";
                $MENSAJE = $MENSAJE;
            }
            if (empty($ARRAYDEXPORTACIONPORPROCESO)) {
                $SINO = "1";
                $MENSAJE = $MENSAJE. " Tiene que haber al menos un registro de producto terminado.";     
            }  else {
                $SINO = "0";
                $MENSAJE = $MENSAJE;
            }
            if (empty($ARRATDINDUSTRIALPORPROCESO)) {
                $SINO = "1";
                $MENSAJE = $MENSAJE. " Tiene que haber al menos un registro de producto industrial.";     
            } else {
                $SINO = "0";
                $MENSAJE = $MENSAJE;
            } 

            $valorRedondeado = round(floatval($_REQUEST['DIFERENCIAKILOSNETOEX']));
            if($valorRedondeado <> 0){
                $SINO = "1";
                $MENSAJE = $MENSAJE. " La diferencia de kilos debe ser igual 0.";  
            }

            //echo "<script>alert('".$valorRedondeado.' re:'.$SINO."');</script>";
            if($SINO == "1"){
                    echo '<script>
                        Swal.fire({
                            icon:"warning",
                            title:"Accion restringida",
                            text:"'.$MENSAJE.'",
                            showConfirmButton: true,
                            confirmButtonText:"Cerrar",
                            closeOnConfirm:false
                        }).then((result)=>{
                            location.href = "registroProceso.php?op&id='.$id_dato.'&a='.$accion_dato.'";                        
                        });
                    </script>';
            }
            //SETEO DE ATRIBUTOS DE LA CLASE, OBTENIDO EN EL FORMULARIO
            if ($SINO == "0") {
                $PROCESO->__SET('FECHA_PROCESO',  $_REQUEST['FECHAPROCESO']);
                $PROCESO->__SET('TURNO',  $_REQUEST['TURNOE']);
                $PROCESO->__SET('OBSERVACIONE_PROCESO', $_REQUEST['OBSERVACIONPROCESO']);
    
                $PROCESO->__SET('KILOS_NETO_ENTRADA', $_REQUEST['TOTALNETO']);
                $PROCESO->__SET('KILOS_NETO_PROCESO', $_REQUEST['TOTALNETOEX']);
                $PROCESO->__SET('KILOS_INDUSTRIAL_PROCESO', $_REQUEST['TOTALNETOIND']);
                $PROCESO->__SET('KILOS_INDUSTRIALSC_PROCESO', $_REQUEST['TOTALNETOINDSC']);
                $PROCESO->__SET('KILOS_INDUSTRIALNC_PROCESO', $_REQUEST['TOTALNETOINDNC']);
                $PROCESO->__SET('KILOS_EXPORTACION_PROCESO', $_REQUEST['TOTALDESHIDRATACIONEX']);      
    
                $PROCESO->__SET('PDEXPORTACION_PROCESO', $_REQUEST['PEXPORTACIONEXPOEX']);
                $PROCESO->__SET('PDEXPORTACIONCD_PROCESO', $_REQUEST['PEXPORTACIONEXPOEXDESHI']);
                $PROCESO->__SET('PDINDUSTRIAL_PROCESO', $_REQUEST['PEXPORTACIONEXPOINDU']);
                $PROCESO->__SET('PDINDUSTRIALSC_PROCESO', $_REQUEST['PEXPORTACIONEXPOINDUSC']);
                $PROCESO->__SET('PDINDUSTRIALNC_PROCESO', $_REQUEST['PEXPORTACIONEXPOINDUNC']);
                $PROCESO->__SET('PORCENTAJE_PROCESO', $_REQUEST['PEXPORTACIONEXPO']);
    
                $PROCESO->__SET('ID_VESPECIES',  $_REQUEST['VESPECIESE']);
                $PROCESO->__SET('ID_PRODUCTOR',  $_REQUEST['PRODUCTORE']);
                $PROCESO->__SET('ID_TPROCESO', $_REQUEST['TPROCESOE']);
                $PROCESO->__SET('ID_USUARIOM', $IDUSUARIOS);
                $PROCESO->__SET('ID_PROCESO', $_REQUEST['IDP']);
                //LLAMADA AL METODO DE EDITAR DEL CONTROLADOR
                $PROCESO_ADO->actualizarProceso($PROCESO);
                //LLAMADA AL METODO DE EDITAR DEL CONTROLADOR
                $PROCESO_ADO->cerrado($PROCESO);

                $AUSUARIO_ADO->agregarAusuario2($NUMEROVER,1,3,"".$_SESSION["NOMBRE_USUARIO"].", Cerrar  Proceso.","fruta_proceso", $_REQUEST['IDP'],$_SESSION["ID_USUARIO"],$_SESSION['ID_EMPRESA'], $_SESSION['ID_PLANTA'],$_SESSION['ID_TEMPORADA'] );  

                $ARRAYEXIMATERIAPRIMA = $EXIMATERIAPRIMA_ADO->buscarPorProceso($_REQUEST['IDP']);

                $ARRAYEXIEXPORTACION = $EXIEXPORTACION_ADO->buscarPorProcesoIngresando($_REQUEST['IDP']);
                $ARRAYEXIINDUSTRIAL = $EXIINDUSTRIAL_ADO->buscarPorProcesoIngresando($_REQUEST['IDP']);

                foreach ($ARRAYEXIMATERIAPRIMA as $r) :
                    $EXIMATERIAPRIMA->__SET('ID_EXIMATERIAPRIMA', $r['ID_EXIMATERIAPRIMA']);
                    //LLAMADA AL METODO DE EDITAR DEL CONTROLADOR
                    $EXIMATERIAPRIMA_ADO->procesado($EXIMATERIAPRIMA);
                endforeach;
                foreach ($ARRAYEXIEXPORTACION as $s) :
                    $EXIEXPORTACION->__SET('ID_EXIEXPORTACION', $s['ID_EXIEXPORTACION']);
                    //LLAMADA AL METODO DE EDITAR DEL CONTROLADOR
                    $EXIEXPORTACION_ADO->vigente($EXIEXPORTACION);
                endforeach;
                foreach ($ARRAYEXIINDUSTRIAL as $f) :
                    $EXIINDUSTRIAL->__SET('ID_EXIINDUSTRIAL', $f['ID_EXIINDUSTRIAL']);
                    //LLAMADA AL METODO DE EDITAR DEL CONTROLADOR
                    $EXIINDUSTRIAL_ADO->vigente($EXIINDUSTRIAL);
                endforeach;

                //SEGUNE EL TIPO DE OPERACIONS QUE SE INDENTIFIQUE EN LA URL
                    if ($accion_dato == "crear") {
                        $id_dato = $_REQUEST['IDP'];
                        $accion_dato = "ver";
                        echo '<script>
                            Swal.fire({
                                icon:"info",
                                title:"Registro Cerrado",
                                text:"Esta segregacion se encuentra cerrada y no puede ser modificada.",
                                showConfirmButton: true,
                                confirmButtonText:"Cerrar",
                                closeOnConfirm:false
                            }).then((result)=>{
                                location.href = "registroProceso.php?op&id='.$id_dato.'&a='.$accion_dato.'";                            
                            })
                        </script>';
                    }
                    if ($accion_dato == "editar") {
                        $id_dato = $_REQUEST['IDP'];
                        $accion_dato = "ver";
                        echo '<script>
                            Swal.fire({
                                icon:"info",
                                title:"Registro Cerrado",
                                text:"Esta segregacion se encuentra cerrada y no puede ser modificada.",
                                showConfirmButton: true,
                                confirmButtonText:"Cerrar",
                                closeOnConfirm:false
                            }).then((result)=>{
                                location.href = "registroSegregacion.php?op&id='.$id_dato.'&a='.$accion_dato.'";                            
                            })
                        </script>';
                    } 
            }
        }        
        if (isset($_REQUEST['QUITAR'])) {
            $IDQUITAR = $_REQUEST['IDQUITAR'];
            $EXIMATERIAPRIMA->__SET('ID_EXIMATERIAPRIMA', $_REQUEST['IDQUITAR']);
            //LLAMADA AL METODO DE EDITAR DEL CONTROLADOR
            $EXIMATERIAPRIMA_ADO->actualizarDeselecionarProcesoCambiarEstado($EXIMATERIAPRIMA);

            $AUSUARIO_ADO->agregarAusuario2("NULL",1,2,"".$_SESSION["NOMBRE_USUARIO"].", Se Quito la Existencia al proceso.","fruta_eximateriaprima", "NULL" ,$_SESSION["ID_USUARIO"],$_SESSION['ID_EMPRESA'], $_SESSION['ID_PLANTA'],$_SESSION['ID_TEMPORADA'] );  
            
            echo '<script>
                Swal.fire({
                    icon:"error",
                    title:"Accion realizada",
                    text:"Se ha quitado la existencia del proceso.",
                    showConfirmButton: true,
                    confirmButtonText:"Cerrar",
                    closeOnConfirm:false
                }).then((result)=>{
                    location.href = "registroProceso.php?op&id='.$id_dato.'&a='.$accion_dato.'";                            
                })
             </script>';
        }

        ?>
</body>

</html>