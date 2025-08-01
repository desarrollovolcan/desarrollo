<?php

include_once "../../assest/config/validarUsuarioExpo.php";

//LLAMADA ARCHIVOS NECESARIOS PARA LAS OPERACIONES

include_once '../../assest/controlador/ECOMERCIAL_ADO.php';
include_once '../../assest/modelo/ECOMERCIAL.php';

//INCIALIZAR LAS VARIBLES
//INICIALIZAR CONTROLADOR

$ECOMERCIAL_ADO =  new ECOMERCIAL_ADO();
//INIICIALIZAR MODELO
$ECOMERCIAL =  new ECOMERCIAL();


//INCIALIZAR VARIBALES A OCUPAR PARA LA FUNCIONALIDAD
$IDOP = "";
$OP = "";
$DISABLED = "";


$CODIGOECOMERCIAL = "";
$NOMBREECOMERCIAL = "";
$DESCRIPCIONECOMERCIAL = "";
$PESONETOECOMERCIAL = "";
$PESOBRUTOECOMERCIAL = "";

$FNOMBRE = "";
$CONTADOR=0;



$NOMBRE = "";
$MENSAJE = "";
$FOCUS = "";
$MENSAJE2 = "";
$FOCUS2 = "";
$BORDER = "";

//INICIALIZAR ARREGLOS
$ARRAYECOMERCIAL = "";
$ARRAYECOMERCIALID = "";



//DEFINIR ARREGLOS CON LOS DATOS OBTENIDOS DE LAS FUNCIONES DE LOS CONTROLADORES
$ARRAYECOMERCIAL = $ECOMERCIAL_ADO->listarEcomercialPorEmpresaCBX($EMPRESAS);
include_once "../../assest/config/validarDatosUrl.php";
include_once "../../assest/config/datosUrl.php";



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
//PARA OPERACIONES DE EDICION Y VISUALIZACION
//PREGUNTA SI LA URL VIENE  CON DATOS "parametro" y "parametro1"
if (isset($id_dato) && isset($accion_dato)) {
    //ALMACENAR DATOS DE VARIABLES DE LA URL
    $IDOP = $id_dato;
    $OP = $accion_dato;



    //IDENTIFICACIONES DE OPERACIONES
    //OPERACION DE CAMBIO DE ESTADO
    //0 = DESACTIVAR
    if ($OP == "0") {
        //DESABILITAR INPUT DEL FORMULARIO
        //PARA QUE NO MODIFIQUE NIGUNA INFORMACION, OBJETIVO ES VISUALIZAR INFORMACION
        $DISABLED = "disabled";
        //OBTENCION DE INFORMACIOND DE LA FILA DEL REGISTRO
        //ALMACENAR INFORMACION EN ARREGLO
        //LLAMADA A LA FUNCION DE CONTROLADOR verPlanta(ID), 
        //SE LE PASE UNO DE LOS DATOS OBTENIDO PREVIAMENTE A TRAVEZ DE LA URL
        $ARRAYECOMERCIALID = $ECOMERCIAL_ADO->verEcomercial($IDOP);
        //OBTENCIONS DE LOS DATODS DE LA COLUMNAS DE LA FILA OBTENIDA
        //PASAR DATOS OBTENIDOS A VARIABLES QUE SE VISUALIZAR EN EL FORMULARIO DE LA VISTA
        foreach ($ARRAYECOMERCIALID as $r) :
            $CODIGOECOMERCIAL = "" . $r['CODIGO_ECOMERCIAL'];
            $NOMBREECOMERCIAL = "" . $r['NOMBRE_ECOMERCIAL'];
            $DESCRIPCIONECOMERCIAL = "" . $r['DESCRIPCION_ECOMERCIAL'];
            $PESONETOECOMERCIAL = "" . $r['PESO_NETO_ECOMERCIAL'];
            $PESOBRUTOECOMERCIAL = "" . $r['PESO_BRUTO_ECOMERCIAL'];
        endforeach;

    }
    //1 = ACTIVAR
    if ($OP == "1") {
        //DESABILITAR INPUT DEL FORMULARIO
        //PARA QUE NO MODIFIQUE NIGUNA INFORMACION, OBJETIVO ES VISUALIZAR INFORMACION
        $DISABLED = "disabled";
        //OBTENCION DE INFORMACIOND DE LA FILA DEL REGISTRO
        //ALMACENAR INFORMACION EN ARREGLO
        //LLAMADA A LA FUNCION DE CONTROLADOR verPlanta(ID), 
        //SE LE PASE UNO DE LOS DATOS OBTENIDO PREVIAMENTE A TRAVEZ DE LA URL
        $ARRAYECOMERCIALID = $ECOMERCIAL_ADO->verEcomercial($IDOP);
        //OBTENCIONS DE LOS DATODS DE LA COLUMNAS DE LA FILA OBTENIDA
        //PASAR DATOS OBTENIDOS A VARIABLES QUE SE VISUALIZAR EN EL FORMULARIO DE LA VISTA
        foreach ($ARRAYECOMERCIALID as $r) :
            $CODIGOECOMERCIAL = "" . $r['CODIGO_ECOMERCIAL'];
            $NOMBREECOMERCIAL = "" . $r['NOMBRE_ECOMERCIAL'];
            $DESCRIPCIONECOMERCIAL = "" . $r['DESCRIPCION_ECOMERCIAL'];
            $PESONETOECOMERCIAL = "" . $r['PESO_NETO_ECOMERCIAL'];
            $PESOBRUTOECOMERCIAL = "" . $r['PESO_BRUTO_ECOMERCIAL'];
        endforeach;

    }

    //editar =  OBTENCION DE DATOS PARA LA EDICION DE REGISTRO
    if ($OP == "editar") {
        //OBTENCION DE INFORMACIOND DE LA FILA DEL REGISTRO
        //ALMACENAR INFORMACION EN ARREGLO
        //LLAMADA A LA FUNCION DE CONTROLADOR verPlanta(ID), 
        //SE LE PASE UNO DE LOS DATOS OBTENIDO PREVIAMENTE A TRAVEZ DE LA URL
        $ARRAYECOMERCIALID = $ECOMERCIAL_ADO->verEcomercial($IDOP);
        //OBTENCIONS DE LOS DATODS DE LA COLUMNAS DE LA FILA OBTENIDA
        //PASAR DATOS OBTENIDOS A VARIABLES QUE SE VISUALIZAR EN EL FORMULARIO DE LA VISTA        
        foreach ($ARRAYECOMERCIALID as $r) :

            $CODIGOECOMERCIAL = "" . $r['CODIGO_ECOMERCIAL'];
            $NOMBREECOMERCIAL = "" . $r['NOMBRE_ECOMERCIAL'];
            $DESCRIPCIONECOMERCIAL = "" . $r['DESCRIPCION_ECOMERCIAL'];
            $PESONETOECOMERCIAL = "" . $r['PESO_NETO_ECOMERCIAL'];
            $PESOBRUTOECOMERCIAL = "" . $r['PESO_BRUTO_ECOMERCIAL'];

        endforeach;
    }

    //ver =  OBTENCION DE DATOS PARA LA VISUALIZAAR INFORMAICON DE REGISTRO
    if ($OP == "ver") {
        //DESABILITAR INPUT DEL FORMULARIO
        //PARA QUE NO MODIFIQUE NIGUNA INFORMACION, OBJETIVO ES VISUALIZAR INFORMACION
        $DISABLED = "disabled";
        //OBTENCION DE INFORMACIOND DE LA FILA DEL REGISTRO
        //ALMACENAR INFORMACION EN ARREGLO
        //LLAMADA A LA FUNCION DE CONTROLADOR verPlanta(ID), 
        //SE LE PASE UNO DE LOS DATOS OBTENIDO PREVIAMENTE A TRAVEZ DE LA URL
        $ARRAYECOMERCIALID = $ECOMERCIAL_ADO->verEcomercial($IDOP);
        //OBTENCIONS DE LOS DATODS DE LA COLUMNAS DE LA FILA OBTENIDA
        //PASAR DATOS OBTENIDOS A VARIABLES QUE SE VISUALIZAR EN EL FORMULARIO DE LA VISTA
        foreach ($ARRAYECOMERCIALID as $r) :
            $CODIGOECOMERCIAL = "" . $r['CODIGO_ECOMERCIAL'];
            $NOMBREECOMERCIAL = "" . $r['NOMBRE_ECOMERCIAL'];
            $DESCRIPCIONECOMERCIAL = "" . $r['DESCRIPCION_ECOMERCIAL'];
            $PESONETOECOMERCIAL = "" . $r['PESO_NETO_ECOMERCIAL'];
            $PESOBRUTOECOMERCIAL = "" . $r['PESO_BRUTO_ECOMERCIAL'];
        endforeach;
    }
}



?>


<!DOCTYPE html>
<html lang="es">

<head>
    <title>Registro Estandar Expo. Comercial</title>
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

                    CODIGOECOMERCIAL = document.getElementById("CODIGOECOMERCIAL").value;
                    NOMBREECOMERCIAL = document.getElementById("NOMBREECOMERCIAL").value;
                    DESCRIPCIONECOMERCIAL = document.getElementById("DESCRIPCIONECOMERCIAL").value;
                    PESONETOECOMERCIAL = document.getElementById("PESONETOECOMERCIAL").value;
                    PESOBRUTOECOMERCIAL = document.getElementById("PESOBRUTOECOMERCIAL").value;


                    document.getElementById('val_codigo').innerHTML = "";
                    document.getElementById('val_nombre').innerHTML = "";
                    document.getElementById('val_descripcion').innerHTML = "";
                    document.getElementById('val_neto').innerHTML = "";
                    document.getElementById('val_bruto').innerHTML = "";


                    if (CODIGOECOMERCIAL == null || CODIGOECOMERCIAL.length == 0 || /^\s+$/.test(CODIGOECOMERCIAL)) {
                        document.form_reg_dato.CODIGOECOMERCIAL.focus();
                        document.form_reg_dato.CODIGOECOMERCIAL.style.borderColor = "#FF0000";
                        document.getElementById('val_codigo').innerHTML = "NO A INGRESADO DATO";
                        return false;
                    }
                    document.form_reg_dato.CODIGOECOMERCIAL.style.borderColor = "#4AF575";

                    if (NOMBREECOMERCIAL == null || NOMBREECOMERCIAL.length == 0 || /^\s+$/.test(NOMBREECOMERCIAL)) {
                        document.form_reg_dato.NOMBREECOMERCIAL.focus();
                        document.form_reg_dato.NOMBREECOMERCIAL.style.borderColor = "#FF0000";
                        document.getElementById('val_nombre').innerHTML = "NO A INGRESADO DATO";
                        return false;
                    }
                    document.form_reg_dato.NOMBREECOMERCIAL.style.borderColor = "#4AF575";


                    if (PESONETOECOMERCIAL == null || PESONETOECOMERCIAL == "") {
                        document.form_reg_dato.PESONETOECOMERCIAL.focus();
                        document.form_reg_dato.PESONETOECOMERCIAL.style.borderColor = "#FF0000";
                        document.getElementById('val_neto').innerHTML = "NO A INGRESADO DATO";
                        return false;
                    }
                    document.form_reg_dato.PESONETOECOMERCIAL.style.borderColor = "#4AF575";


                    if (PESOBRUTOECOMERCIAL == null || PESOBRUTOECOMERCIAL == "") {
                        document.form_reg_dato.PESOBRUTOECOMERCIAL.focus();
                        document.form_reg_dato.PESOBRUTOECOMERCIAL.style.borderColor = "#FF0000";
                        document.getElementById('val_bruto').innerHTML = "NO A INGRESADO DATO";
                        return false;
                    }
                    document.form_reg_dato.PESOBRUTOECOMERCIAL.style.borderColor = "#4AF575";






                }



                //REDIRECCIONAR A LA PAGINA SELECIONADA
                function irPagina(url) {
                    location.href = "" + url;
                }

            </script>

</head>


<body class="hold-transition light-skin fixed sidebar-mini theme-primary">
    <div class="wrapper">
        <!- LLAMADA AL MENU PRINCIPAL DE LA PAGINA-!>
            <?php include_once "../../assest/config/menuExpo.php"; ?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <div class="container-full">
                    <!-- Content Header (Page header) -->
                    <div class="content-header">
                        <div class="d-flex align-items-center">
                            <div class="mr-auto">
                                <h3 class="page-title">Estandar</h3>
                                <div class="d-inline-block align-items-center">
                                    <nav>
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.php"><i class="mdi mdi-home-outline"></i></a></li>
                                            <li class="breadcrumb-item" aria-current="page">Mantenedores</li>
                                            <li class="breadcrumb-item" aria-current="page">Estandar </li>
                                            <li class="breadcrumb-item active" aria-current="page"> <a href="#"> Registro Estandar Expo. Comercial </a> </li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                            <?php include_once "../../assest/config/verIndicadorEconomico.php"; ?>
                        </div>
                    </div>
                    <!-- Main content -->
                    <section class="content">
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 col-xs-12">
                                <div class="box">
                                    <div class="box-header with-border bg-primary">                                 
                                       <h4 class="box-title">Registro Estandar Expo. Comercial</h4>                                
                                    </div>
                                    <!-- /.box-header -->
                                    <form class="form" role="form" method="post" name="form_reg_dato" id="form_reg_dato">
                                        <div class="box-body">
                                            <hr class="my-15">
                                            <div class="row">
                                                 <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 col-xs-6">
                                                    <div class="form-group">
                                                        <label>Codigo </label>
                                                        <input type="hidden" class="form-control" placeholder="ID" id="ID" name="ID" value="<?php echo $IDOP; ?>" />
                                                        <input type="hidden" class="form-control" placeholder="EMPRESA" id="EMPRESA" name="EMPRESA" value="<?php echo $EMPRESAS; ?>" />
                                                        <input type="text" class="form-control" placeholder="Codigo Estandar Comercial" id="CODIGOECOMERCIAL" name="CODIGOECOMERCIAL" value="<?php echo $CODIGOECOMERCIAL; ?>" <?php echo $DISABLED; ?> />
                                                        <label id="val_codigo" class="validacion"> </label>
                                                    </div>
                                                </div>
                                                 <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 col-xs-6">
                                                    <div class="form-group">
                                                        <label>Nombre </label>
                                                        <input type="text" class="form-control" placeholder="Nombre Estandar Comercial" id="NOMBREECOMERCIAL" name="NOMBREECOMERCIAL" value="<?php echo $NOMBREECOMERCIAL; ?>" <?php echo $DISABLED; ?> />
                                                        <label id="val_nombre" class="validacion"> </label>
                                                    </div>
                                                </div>
                                                 <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 col-xs-6">
                                                    <div class="form-group">
                                                        <label>Peso Neto </label>
                                                        <input type="number" step="0.00001" class="form-control" placeholder="Peso Neto Estandar Comercial" id="PESONETOECOMERCIAL" name="PESONETOECOMERCIAL" value="<?php echo $PESONETOECOMERCIAL; ?>" <?php echo $DISABLED; ?> />
                                                        <label id="val_neto" class="validacion"> </label>
                                                    </div>
                                                </div>
                                                 <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 col-xs-6">
                                                    <div class="form-group">
                                                        <label>Peso Bruto </label>
                                                        <input type="number" step="0.00001" class="form-control" placeholder="Peso Bruto Estandar Comercial" id="PESOBRUTOECOMERCIAL" name="PESOBRUTOECOMERCIAL" value="<?php echo $PESOBRUTOECOMERCIAL; ?>" <?php echo $DISABLED; ?> />
                                                        <label id="val_bruto" class="validacion"> </label>
                                                    </div>
                                                </div>
                                                 <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Descripcion </label>
                                                        <textarea class="form-control" rows="1" placeholder="Descripcion Estandar Comercialr" id="DESCRIPCIONECOMERCIAL" name="DESCRIPCIONECOMERCIAL" <?php echo $DISABLED; ?>><?php echo $DESCRIPCIONECOMERCIAL; ?></textarea>
                                                        <label id="val_descripcion" class="validacion"> </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.box-body -->
                                        <div class="box-footer">
                                            <div class="btn-group   col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 col-xs-12 " role="group" aria-label="Acciones generales">                                    
                                                <button type="button" class="btn  btn-warning " data-toggle="tooltip" title="Cancelar" name="CANCELAR" value="CANCELAR" Onclick="irPagina('registroEcomercial.php');">
                                                    <i class="ti-trash"></i>Cancelar
                                                </button>
                                                <?php if ($OP == "editar") { ?>
                                                    <button type="submit" class="btn btn-primary" name="EDITAR" value="EDITAR"   data-toggle="tooltip" title="Guardar" Onclick="return validacion()">
                                                        <i class="ti-save-alt"></i> Guardar
                                                    </button>
                                                <?php } else if($OP == "0") { ?>
                                                    <button type="submit" class="btn btn-danger" name="ELIMINAR" value="ELIMINAR"  data-toggle="tooltip" title="Deshabilitar"  >
                                                        <i class="ti-save-alt"></i> Deshabilitar
                                                    </button>
                                                <?php } else if($OP == "1"){ ?>                                                    
                                                    <button type="submit" class="btn btn-success" name="HABILITAR" value="HABILITAR"  data-toggle="tooltip" title="Habilitar"   >
                                                        <i class="ti-save-alt"></i> Habilitar
                                                    </button>
                                                <?php } else { ?>
                                                    <button type="submit" class="btn btn-primary" name="GUARDAR" value="GUARDAR"  data-toggle="tooltip" title="Guardar"  <?php echo $DISABLED; ?> Onclick="return validacion()">
                                                        <i class="ti-save-alt"></i> Guardar
                                                    </button>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.box -->
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 col-xs-12">
                                <div class="box">
                                    <div class="box-header with-border bg-info">
                                        <h4 class="box-title">Agrupado Estandar Expo. Comercial</h4>
                                    </div>
                                    <div class="box-body">
                                        <div class="table-responsive">
                                            <table id="listar" class="table-hover " style="width: 100%;">
                                                <thead>
                                                    <tr class="center">
                                                        <th>Numero </th>
                                                        <th>Operaciones</th>
                                                        <th>Codigo </th>
                                                        <th>Nombre </th>
                                                        <th>Peso Neto </th>
                                                        <th>Peso Bruto</th>
                                                        <th>Descripcion</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($ARRAYECOMERCIAL as $r) : ?>
                                                            <?php 
                                                            $CONTADOR+=1;   
                                                            ?>
                                                            <tr class="center">
                                                            <td><?php echo $CONTADOR; ?> </td>                                                      
                                                            <td class="text-center">
                                                                <form method="post" id="form1">
                                                                    <div class="list-icons d-inline-flex">
                                                                        <div class="list-icons-item dropdown">
                                                                            <button class="btn btn-secondary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                <span class="icon-copy ti-settings"></span>
                                                                            </button>
                                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                                <input type="hidden" class="form-control" placeholder="ID" id="ID" name="ID" value="<?php echo $r['ID_ECOMERCIAL']; ?>" />
                                                                                <input type="hidden" class="form-control" placeholder="URL" id="URL" name="URL" value="registroEcomercial" />
                                                                                <span href="#" class="dropdown-item" data-toggle="tooltip" title="Ver">
                                                                                    <button type="submit" class="btn btn-info btn-block  btn-sm" id="VERURL" name="VERURL">
                                                                                        <i class="ti-eye"></i> Ver
                                                                                    </button>
                                                                                </span> 
                                                                                <span href="#" class="dropdown-item" data-toggle="tooltip" title="Editar">
                                                                                    <button type="submit" class="btn  btn-warning btn-block   btn-sm" id="EDITARURL" name="EDITARURL">
                                                                                        <i class="ti-pencil-alt"></i> Editar
                                                                                    </button>
                                                                                </span>
                                                                                <?php if ($r['ESTADO_REGISTRO'] == 1) { ?>
                                                                                    <span href="#" class="dropdown-item" data-toggle="tooltip" title="Deshabilitar">
                                                                                        <button type="submit" class="btn btn-block btn-danger btn-sm" id="ELIMINARURL" name="ELIMINARURL">
                                                                                            <i class="ti-na "></i> Deshabilitar
                                                                                        </button>
                                                                                    </span>
                                                                                <?php } ?>
                                                                                <?php if ($r['ESTADO_REGISTRO'] == 0) { ?>
                                                                                    <span href="#" class="dropdown-item" data-toggle="tooltip" title="Habilitar">
                                                                                        <button type="submit" class="btn btn-block btn-success btn-sm" id="HABILITARURL" name="HABILITARURL">
                                                                                            <i class="ti-check "></i> Habilitar
                                                                                        </button>
                                                                                    </span>
                                                                                <?php } ?>                                                               
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </td>
                                                            <td><?php echo $r['CODIGO_ECOMERCIAL']; ?></td>    
                                                            <td><?php echo $r['NOMBRE_ECOMERCIAL']; ?></td>   
                                                            <td><?php echo $r['PESO_NETO_ECOMERCIAL']; ?></td>   
                                                            <td><?php echo $r['PESO_BRUTO_ECOMERCIAL']; ?></td>   
                                                            <td><?php echo $r['DESCRIPCION_ECOMERCIAL']; ?></td>    
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box -->
                            </div>
                        </div>
                        <!--.row -->
                    </section>
                    <!-- /.content -->
                </div>
            </div>
            <!-- /.content-wrapper -->

            <!- LLAMADA ARCHIVO DEL DISEÑO DEL FOOTER Y MENU USUARIO -!>
                <?php include_once "../../assest/config/footer.php"; ?>
                <?php include_once "../../assest/config/menuExtraExpo.php"; ?>
    </div>
    <!- LLAMADA URL DE ARCHIVOS DE DISEÑO Y JQUERY E OTROS -!>
        <?php include_once "../../assest/config/urlBase.php"; ?>
        <?php 
             //OPERACIONES
            //OPERACION DE REGISTRO DE FILA
            if (isset($_REQUEST['GUARDAR'])) {


                //UTILIZACION METODOS SET DEL MODELO
                //SETEO DE ATRIBUTOS DE LA CLASE, OBTENIDO EN EL FORMULARIO   
                $ECOMERCIAL->__SET('CODIGO_ECOMERCIAL', $_REQUEST['CODIGOECOMERCIAL']);
                $ECOMERCIAL->__SET('NOMBRE_ECOMERCIAL', $_REQUEST['NOMBREECOMERCIAL']);
                $ECOMERCIAL->__SET('DESCRIPCION_ECOMERCIAL', $_REQUEST['DESCRIPCIONECOMERCIAL']);
                $ECOMERCIAL->__SET('PESO_NETO_ECOMERCIAL', $_REQUEST['PESONETOECOMERCIAL']);
                $ECOMERCIAL->__SET('PESO_BRUTO_ECOMERCIAL', $_REQUEST['PESOBRUTOECOMERCIAL']);
                $ECOMERCIAL->__SET('ID_EMPRESA', $_REQUEST['EMPRESA']);
                $ECOMERCIAL->__SET('ID_USUARIOI', $IDUSUARIOS);
                $ECOMERCIAL->__SET('ID_USUARIOM', $IDUSUARIOS);
                //LLAMADA AL METODO DE REGISTRO DEL CONTROLADOR
                $ECOMERCIAL_ADO->agregarEcomercial($ECOMERCIAL);

                $AUSUARIO_ADO->agregarAusuario2("NULL",3,1,"".$_SESSION["NOMBRE_USUARIO"].", Registro de Estandar Comercial.","estandar_ecomercial","NULL",$_SESSION["ID_USUARIO"],$_SESSION['ID_EMPRESA'],'NULL',$_SESSION['ID_TEMPORADA'] );  

                //REDIRECCIONAR A PAGINA registroEcomercial.php
                echo '<script>
                    Swal.fire({
                        icon:"success",
                        title:"Registro Creado",
                        text:"El registro del mantenedor se ha creado correctamente",
                        showConfirmButton: true,
                        confirmButtonText:"Cerrar",
                        closeOnConfirm:false
                    }).then((result)=>{
                        location.href = "registroEcomercial.php";                            
                    })
                </script>';
            }
            //OPERACION DE EDICION DE FILA
            if (isset($_REQUEST['EDITAR'])) {
                //UTILIZACION METODOS SET DEL MODELO
                //SETEO DE ATRIBUTOS DE LA CLASE, OBTENIDO EN EL FORMULARIO 


                $ECOMERCIAL->__SET('CODIGO_ECOMERCIAL', $_REQUEST['CODIGOECOMERCIAL']);
                $ECOMERCIAL->__SET('NOMBRE_ECOMERCIAL', $_REQUEST['NOMBREECOMERCIAL']);
                $ECOMERCIAL->__SET('DESCRIPCION_ECOMERCIAL', $_REQUEST['DESCRIPCIONECOMERCIAL']);
                $ECOMERCIAL->__SET('PESO_NETO_ECOMERCIAL', $_REQUEST['PESONETOECOMERCIAL']);
                $ECOMERCIAL->__SET('PESO_BRUTO_ECOMERCIAL', $_REQUEST['PESOBRUTOECOMERCIAL']);
                $ECOMERCIAL->__SET('ID_USUARIOM', $IDUSUARIOS);
                $ECOMERCIAL->__SET('ID_ECOMERCIAL', $_REQUEST['ID']);
                //LLAMADA AL METODO DE EDICION DEL CONTROLADOR   
                $ECOMERCIAL_ADO->actualizarEcomercial($ECOMERCIAL);

                $AUSUARIO_ADO->agregarAusuario2("NULL",3,2,"".$_SESSION["NOMBRE_USUARIO"].", Modificación de Estandar Comercial.","estandar_ecomercial", $_REQUEST['ID'],$_SESSION["ID_USUARIO"],$_SESSION['ID_EMPRESA'],'NULL',$_SESSION['ID_TEMPORADA'] );     

                //REDIRECCIONAR A PAGINA registroEcomercial.php
                echo '<script>
                    Swal.fire({
                        icon:"success",
                        title:"Registro Modificado",
                        text:"El registro del mantenedor se ha Modificado correctamente",
                        showConfirmButton: true,
                        confirmButtonText:"Cerrar",
                        closeOnConfirm:false
                    }).then((result)=>{
                        location.href = "registroEcomercial.php";                            
                    })
                </script>';
            }
            if (isset($_REQUEST['ELIMINAR'])) {         

                $ECOMERCIAL->__SET('ID_ECOMERCIAL',  $_REQUEST['ID']);
                $ECOMERCIAL_ADO->deshabilitar($ECOMERCIAL);
        
        
                $AUSUARIO_ADO->agregarAusuario2("NULL",3,4,"".$_SESSION["NOMBRE_USUARIO"].", Deshabilitar  Estandar Comercial.","estandar_ecomercial", $_REQUEST['ID'],$_SESSION["ID_USUARIO"],$_SESSION['ID_EMPRESA'],'NULL',$_SESSION['ID_TEMPORADA'] );                
                
                echo '<script>
                    Swal.fire({
                        icon:"error",
                        title:"Registro Modificado",
                        text:"El registro del mantenedor se ha Deshabilitado correctamente", 
                        showConfirmButton: true,
                        confirmButtonText:"Cerrar",
                        closeOnConfirm:false
                    }).then((result)=>{
                        location.href = "registroEcomercial.php";                            
                    })
                </script>';
            }
            
            if (isset($_REQUEST['HABILITAR'])) {   

                $ECOMERCIAL->__SET('ID_ECOMERCIAL', $_REQUEST['ID']);
                $ECOMERCIAL_ADO->habilitar($BECOMERCIALODEGA);
                
                $AUSUARIO_ADO->agregarAusuario2("NULL",3,5,"".$_SESSION["NOMBRE_USUARIO"].", Habilitar  Estandar Comercial.","estandar_ecomercial", $_REQUEST['ID'],$_SESSION["ID_USUARIO"],$_SESSION['ID_EMPRESA'],'NULL',$_SESSION['ID_TEMPORADA'] );                               

                echo '<script>
                    Swal.fire({
                        icon:"success",
                        title:"Registro Modificado",
                        text:"El registro del mantenedor se ha Habilitado correctamente", 
                        showConfirmButton: true,
                        confirmButtonText:"Cerrar",
                        closeOnConfirm:false
                    }).then((result)=>{
                        location.href = "registroEcomercial.php";                            
                    })
                </script>';
            }

        ?>
</body>

</html>