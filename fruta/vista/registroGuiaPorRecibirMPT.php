<?php

include_once "../../assest/config/validarUsuarioFruta.php";

//LLAMADA ARCHIVOS NECESARIOS PARA LAS OPERACIONES
include_once '../../assest/controlador/EXIEXPORTACION_ADO.php';
include_once '../../assest/controlador/DESPACHOPT_ADO.php';
include_once '../../assest/controlador/MGUIAPT_ADO.php';


include_once '../../assest/modelo/EXIEXPORTACION.php';
include_once '../../assest/modelo/MGUIAPT.php';
include_once '../../assest/modelo/DESPACHOPT.php';

//INCIALIZAR LAS VARIBLES
//INICIALIZAR CONTROLADOR
$DESPACHOPT_ADO =  new DESPACHOPT_ADO();
$MGUIAPT_ADO =  new MGUIAPT_ADO();
$EXIEXPORTACION_ADO =  new EXIEXPORTACION_ADO();
//INIICIALIZAR MODELO

$MGUIAPT =  new MGUIAPT();
$DESPACHOPT =  new DESPACHOPT();
$EXIEXPORTACION =  new EXIEXPORTACION();


//INCIALIZAR VARIBALES A OCUPAR PARA LA FUNCIONALIDAD
$MOTIVO = "";
$NUMERO = "";
$NUMEROVER = "";
$NUMERODESPACHO = "";
$NUMEROGUIA = "";
$PLANTAORIGEN = "";
$PLANTADESTINO = "";

$IDOP = "";
$OP = "";
$DISABLED = "";




//INICIALIZAR ARREGLOS
$ARRAYPLANTA = "";
$ARRAYOBTENERNUMERO = "";

//DEFINIR ARREGLOS CON LOS DATOS OBTENIDOS DE LAS FUNCIONES DE LOS CONTROLADORES
$ARRAYPLANTA = $PLANTA_ADO->listarPlantaCBX();

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

if (isset($_GET["urlo"])) {
    $urlo_dato = $_GET["urlo"];
}else{
    $urlo_dato = "";
}



//OPERACION PARA OBTENER EL ID RECEPCION Y FOLIO BASE, SOLO SE OCUPA PARA CREAR UN REGISTRO NUEVO

if (isset($id_dato) && isset($accion_dato) && isset($urlo_dato)) {
    $IDP = $id_dato;
    $OPP = $accion_dato;
    $URLO = $urlo_dato;

    $ARRAYDESPACHOMP = $DESPACHOPT_ADO->verDespachopt($IDP);
    //OBTENCIONS DE LOS DATODS DE LA COLUMNAS DE LA FILA OBTENIDA
    //PASAR DATOS OBTENIDOS A VARIABLES QUE SE VISUALIZAR EN EL FORMULARIO DE LA VISTA
    foreach ($ARRAYDESPACHOMP as $r) :
        $NUMERODESPACHO = "" . $r['NUMERO_DESPACHO'];
        $NUMEROGUIA = "" . $r['NUMERO_GUIA_DESPACHO'];
        $PLANTADESTINO = "" . $r['ID_PLANTA2'];
        $PLANTAORIGEN = "" . $r['ID_PLANTA'];
    endforeach;
}
include_once "../../assest/config/validarDatosUrlD.php";


?>


<!DOCTYPE html>
<html lang="es">

<head>
    <title>Registro Motivo Guía</title>
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

                    MOTIVO = document.getElementById("MOTIVO").value;
                    document.getElementById('val_motivo').innerHTML = "";

                    if (MOTIVO == null || MOTIVO.length == 0 || /^\s+$/.test(MOTIVO)) {
                        document.form_reg_dato.MOTIVO.focus();
                        document.form_reg_dato.MOTIVO.style.borderColor = "#FF0000";
                        document.getElementById('val_motivo').innerHTML = "NO A INGRESADO DATO";
                        return false;
                    }
                    document.form_reg_dato.MOTIVO.style.borderColor = "#4AF575";



                }
              
                //FUNCION PARA CERRAR VENTANA Y ACTUALIZAR PRINCIPAL
                function cerrar() {
                    window.opener.refrescar()
                    window.close();
                }
                //REDIRECCIONAR A LA PAGINA SELECIONADA
                function irPagina(url) {
                    location.href = "" + url;
                }
            </script>

</head>


<body class="hold-transition light-skin fixed sidebar-mini theme-primary" >
    <div class="wrapper">
        <!- LLAMADA AL MENU PRINCIPAL DE LA PAGINA-!>
            <?php include_once "../../assest/config/menuFruta.php"; ?>
            <div class="content-wrapper">
                <div class="container-full">
                    <!-- Content Header (Page header) -->
                    <div class="content-header">
                        <div class="d-flex align-items-center">
                            <div class="mr-auto">
                                <h3 class="page-title">Frigorifico </h3>
                                <div class="d-inline-block align-items-center">
                                    <nav>
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.php"><i class="mdi mdi-home-outline"></i></a></li>
                                            <li class="breadcrumb-item" aria-current="page">Modulo</li>
                                            <li class="breadcrumb-item" aria-current="page">Frigorifico</li>
                                            <li class="breadcrumb-item" aria-current="page">Guia Por Recibir </li>
                                            <li class="breadcrumb-item active" aria-current="page"> <a href="#"> Registro Motivo Guía</a>   </li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                            <?php include_once "../../assest/config/verIndicadorEconomico.php"; ?>
                        </div>
                    </div>
                    <section class="content">
                        <form class="form" role="form" method="post" name="form_reg_dato">
                            <div class="box">
                                <div class="box-header with-border">
                                    <!--  
                                    <h4 class="box-title">Sample form 1</h4>
                                -->
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-xxl-2 col-xl-4 col-lg-6 col-md-6 col-sm-6 col-6 col-xs-6">
                                            <div class="form-group">
                                                <input type="hidden" class="form-control" placeholder="ID DESPACHO" id="IDP" name="IDP" value="<?php echo $IDP; ?>" />
                                                <input type="hidden" class="form-control" placeholder="OP DESPACHO" id="OPP" name="OPP" value="<?php echo $OPP; ?>" />
                                                <input type="hidden" class="form-control" placeholder="URL DESPACHO" id="URLO" name="URLO" value="<?php echo $URLO; ?>" />
                                                <input type="hidden" class="form-control" placeholder="ID EMPRESA" id="EMPRESA" name="EMPRESA" value="<?php echo $EMPRESAS; ?>" />
                                                <input type="hidden" class="form-control" placeholder="ID PLANTA" id="PLANTA" name="PLANTA" value="<?php echo $PLANTAS; ?>" />
                                                <input type="hidden" class="form-control" placeholder="ID TEMPORADA" id="TEMPORADA" name="TEMPORADA" value="<?php echo $TEMPORADAS; ?>" />

                                                <label>Número Despacho </label>
                                                <input type="hidden" class="form-control" placeholder="Numero Despacho" id="NUMERODESPACHO" name="NUMERODESPACHO" value="<?php echo $NUMERODESPACHO; ?>" />
                                                <input type="text" class="form-control" placeholder="Número Despacho" id="NUMERODESPACHOV" name="NUMERODESPACHOV" value="<?php echo $NUMERODESPACHO; ?>" disabled />
                                                <label id="val_numerodespacho" class="validacion"> </label>
                                            </div>
                                        </div>
                                        <div class="col-xxl-2 col-xl-4 col-lg-6 col-md-6 col-sm-6 col-6 col-xs-6">
                                            <div class="form-group">
                                                <label>Número Guía </label>
                                                <input type="hidden" class="form-control" placeholder="Numero Despacho" id="NUMEROGUIA" name="NUMEROGUIA" value="<?php echo $NUMEROGUIA; ?>" />
                                                <input type="text" class="form-control" placeholder="Numero Despacho" id="NUMEROGUIAV" name="NUMEROGUIAV" value="<?php echo $NUMEROGUIA; ?>" disabled />
                                                <label id="val_numeroguia" class="validacion"> </label>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-9 col-9 col-xs-9">
                                            <div class="form-group">
                                                <label>Planta Origen</label>
                                                <input type="hidden" class="form-control" placeholder="PLANTAORIGEN" id="PLANTAORIGEN" name="PLANTAORIGEN" value="<?php echo $PLANTAORIGEN; ?>" />
                                                <select class="form-control select2" id="PLANTAORIGENV" name="PLANTAORIGENV" style="width: 100%;" disabled>>
                                                    <option></option>
                                                    <?php foreach ($ARRAYPLANTA as $r) : ?>
                                                        <?php if ($ARRAYPLANTA) {    ?>
                                                            <option value="<?php echo $r['ID_PLANTA']; ?>" <?php if ($PLANTAORIGEN == $r['ID_PLANTA']) {
                                                                                                                echo "selected";
                                                                                                            } ?>> <?php echo $r['NOMBRE_PLANTA'] ?> </option>
                                                        <?php } else { ?>
                                                            <option>No Hay Datos Registrados </option>
                                                        <?php } ?>
                                                    <?php endforeach; ?>
                                                </select>
                                                <label id="val_plantao" class="validacion"> </label>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-9 col-9 col-xs-9">
                                            <div class="form-group">
                                                <label>Planta Destino</label>
                                                <input type="hidden" class="form-control" placeholder="PLANTADESTINOE" id="PLANTADESTINOE" name="PLANTADESTINOE" value="<?php echo $PLANTADESTINO; ?>" />
                                                <select class="form-control select2" id="PLANTADESTINOV" name="PLANTADESTINOV" style="width: 100%;" disabled>
                                                    <option></option>
                                                    <?php foreach ($ARRAYPLANTA as $r) : ?>
                                                        <?php if ($ARRAYPLANTA) {    ?>
                                                            <option value="<?php echo $r['ID_PLANTA']; ?>" <?php if ($PLANTADESTINO == $r['ID_PLANTA']) {
                                                                                                                echo "selected";
                                                                                                            } ?>> <?php echo $r['NOMBRE_PLANTA'] ?> </option>
                                                        <?php } else { ?>
                                                            <option>No Hay Datos Registrados </option>
                                                        <?php } ?>
                                                    <?php endforeach; ?>
                                                </select>
                                                <label id="val_plantad" class="validacion"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 col-xs-12">
                                            <div class="form-group">
                                                <label>Motivo </label>
                                                <input type="hidden" class="form-control" placeholder="Numero Despacho" id="MOTIVOE" name="MOTIVOE" value="<?php echo $MOTIVO; ?>" />
                                                <textarea class="form-control" rows="1" placeholder="Motivo" id="MOTIVO" name="MOTIVO" <?php echo $DISABLED; ?>><?php echo $MOTIVO; ?></textarea>
                                                <label id="val_motivo" class="validacion"> </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <div class="btn-group btn-block  col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 col-xs-12 " role="group" aria-label="Acciones generales">
                                        <button type="button" class="btn  btn-success  " data-toggle="tooltip" title="Volver" name="CANCELAR" value="CANCELAR" Onclick="irPagina('<?php echo $URLO; ?>.php');">
                                            <i class="ti-back-left "></i> Volver
                                        </button>
                                        <button type="submit" class="btn  btn-danger" data-toggle="tooltip" title="Rechazar" name="GUARDAR" value="GUARDAR" <?php echo $DISABLED; ?> onclick="return validacion()">
                                            <i class="ti-save-alt"></i> Guardar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- /.box -->
                    </section>
                </div>
            </div>
            <!- LLAMADA ARCHIVO DEL DISEÑO DEL FOOTER Y MENU USUARIO -!>
                <?php include_once "../../assest/config/footer.php";   ?>
                <?php include_once "../../assest/config/menuExtraFruta.php"; ?>
    </div>
    <!- LLAMADA URL DE ARCHIVOS DE DISEÑO Y JQUERY E OTROS -!>
        <?php include_once "../../assest/config/urlBase.php"; ?>
        <?php 
            //OPERACIONES
            //OPERACION DE REGISTRO DE FILA
            if (isset($_REQUEST['GUARDAR'])) {

                $ARRAYOBTENERNUMERO = $MGUIAPT_ADO->obtenerNumero($_REQUEST['IDP'], $_REQUEST['EMPRESA'], $_REQUEST['PLANTAORIGEN'], $_REQUEST['PLANTA'], $_REQUEST['TEMPORADA']);
                $NUMERO = $ARRAYOBTENERNUMERO[0]["NUMERO"] + 1;

                //UTILIZACION METODOS SET DEL MODELO
                //SETEO DE ATRIBUTOS DE LA CLASE, OBTENIDO EN EL FORMULARIO  
                $MGUIAPT->__SET('NUMERO_MGUIA', $NUMERO);
                $MGUIAPT->__SET('NUMERO_DESPACHO', $_REQUEST['NUMERODESPACHO']);
                $MGUIAPT->__SET('NUMERO_GUIA', $_REQUEST['NUMEROGUIA']);
                $MGUIAPT->__SET('MOTIVO_MGUIA', $_REQUEST['MOTIVO']);
                $MGUIAPT->__SET('ID_DESPACHO', $_REQUEST['IDP']);
                $MGUIAPT->__SET('ID_PLANTA2', $_REQUEST['PLANTAORIGEN']);
                $MGUIAPT->__SET('ID_EMPRESA', $_REQUEST['EMPRESA']);
                $MGUIAPT->__SET('ID_PLANTA', $_REQUEST['PLANTA']);
                $MGUIAPT->__SET('ID_TEMPORADA', $_REQUEST['TEMPORADA']);
                $MGUIAPT->__SET('ID_USUARIOI', $IDUSUARIOS);
                $MGUIAPT->__SET('ID_USUARIOM', $IDUSUARIOS);
                //LLAMADA AL METODO DE REGISTRO DEL CONTROLADOR
                $MGUIAPT_ADO->agregarMguia($MGUIAPT);

                $AUSUARIO_ADO->agregarAusuario2("NULL",1,1,"".$_SESSION["NOMBRE_USUARIO"].", Registro de Motivo Rechazo Guia Despacho Producto Terminado.","fruta_mguiapt","NULL",$_SESSION["ID_USUARIO"],$_SESSION['ID_EMPRESA'], $_SESSION['ID_PLANTA'],$_SESSION['ID_TEMPORADA'] );  

                $DESPACHOPT->__SET('ID_DESPACHO', $_REQUEST['IDP']);
                //LLAMADA AL METODO DE EDITAR DEL CONTROLADOR
                $DESPACHOPT_ADO->abierto($DESPACHOPT);

                $DESPACHOPT->__SET('ID_DESPACHO', $_REQUEST['IDP']);
                //LLAMADA AL METODO DE EDITAR DEL CONTROLADOR
                $DESPACHOPT_ADO->Rechazado($DESPACHOPT);

                $AUSUARIO_ADO->agregarAusuario2("NULL",1,2,"".$_SESSION["NOMBRE_USUARIO"].", Modificación de Despacho Producto Terminado, se rechazo la guia.","fruta_despachopt", $_REQUEST['IDP'],$_SESSION["ID_USUARIO"],$_SESSION['ID_EMPRESA'], $_SESSION['ID_PLANTA'],$_SESSION['ID_TEMPORADA'] );  


                $ARRAYEXISENCIADESPACHOMP = $EXIEXPORTACION_ADO->verExistenciaPorDespacho($_REQUEST['IDP']);
                foreach ($ARRAYEXISENCIADESPACHOMP as $r) :

                    $EXIEXPORTACION->__SET('ID_EXIEXPORTACION', $r['ID_EXIEXPORTACION']);
                    //LLAMADA AL METODO DE EDITAR DEL CONTROLADOR
                    $EXIEXPORTACION_ADO->endespacho($EXIEXPORTACION);

                endforeach;

                //REDIRECCIONAR A PAGINA registroAerolinia.php
                echo '<script>
                Swal.fire({
                    icon:"success",
                    title:"Guia Rechazada",
                    text:"el motivo de rechazo se ha creado correctamente",
                    showConfirmButton: true,
                    confirmButtonText:"Cerrar",
                    closeOnConfirm:false
                }).then((result)=>{
                    location.href = "'.$_REQUEST['URLO'].'.php";                            
                })
            </script>';
            }

        ?>
</body>

</html>