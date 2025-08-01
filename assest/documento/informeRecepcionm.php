<?php

//LLAMADA ARCHIVOS NECESARIOS PARA LAS OPERACIONES 
include_once '../../assest/controlador/USUARIO_ADO.php';
include_once '../../assest/controlador/EMPRESA_ADO.php';
include_once '../../assest/controlador/PLANTA_ADO.php';
include_once '../../assest/controlador/TEMPORADA_ADO.php';


include_once '../../assest/controlador/PRODUCTO_ADO.php';
include_once '../../assest/controlador/TCONTENEDORM_ADO.php';
include_once '../../assest/controlador/TUMEDIDA_ADO.php';
include_once '../../assest/controlador/FOLIO_ADO.php';
include_once '../../assest/controlador/PROVEEDOR_ADO.php';
include_once '../../assest/controlador/PRODUCTOR_ADO.php';
include_once '../../assest/controlador/BODEGA_ADO.php';
include_once '../../assest/controlador/TDOCUMENTO_ADO.php';
include_once '../../assest/controlador/TRANSPORTE_ADO.php';
include_once '../../assest/controlador/CONDUCTOR_ADO.php';

include_once '../../assest/controlador/RECEPCIONM_ADO.php';
include_once '../../assest/controlador/DRECEPCIONM_ADO.php';
include_once '../../assest/controlador/TARJAM_ADO.php';


//INCIALIZAR LAS VARIBLES

//INICIALIZAR CONTROLADOR
$USUARIO_ADO = new USUARIO_ADO();
$EMPRESA_ADO =  new EMPRESA_ADO();
$PLANTA_ADO =  new PLANTA_ADO();
$TEMPORADA_ADO =  new TEMPORADA_ADO();

$PRODUCTO_ADO =  new PRODUCTO_ADO();
$TCONTENEDOR_ADO =  new TCONTENEDORM_ADO();
$TUMEDIDA_ADO =  new TUMEDIDA_ADO();
$FOLIO_ADO =  new FOLIO_ADO();
$PROVEEDOR_ADO =  new PROVEEDOR_ADO();
$PRODUCTOR_ADO =  new PRODUCTOR_ADO();
$BODEGA_ADO =  new BODEGA_ADO();
$TDOCUMENTO_ADO =  new TDOCUMENTO_ADO();
$TRANSPORTE_ADO =  new TRANSPORTE_ADO();
$CONDUCTOR_ADO =  new CONDUCTOR_ADO();

$RECEPCIONM_ADO =  new RECEPCIONM_ADO();
$DRECEPCIONM_ADO =  new DRECEPCIONM_ADO();
$TARJAM_ADO =  new TARJAM_ADO();


//INCIALIZAR VARIBALES A OCUPAR PARA LA FUNCIONALIDAD
$NUMERORECEPCION = "";
$FECHARECEPCION = "";
$NUMERODOCUMENTO = "";
$NOMBRETCONETEDOR = "";
$NOMBRETUMEDIDA = "";
$NOMBREPRODUCTO = "";
$TIPORECEPCION = "";
$NOMBRETRECEPCION = "";
$NOMBREBODEGA = "";
$NOMBREORIGEN = "";
$NOMBRETDOCUMENTO = "";
$NOMBRECONDUCTOR = "";
$NOMBRETRANSPORTE = "";
$PATENTECAMION = "";
$PATENTECARRO = "";
$TOTALCANTIDAD = "";
$NOMBRETCONETEDOR = "";


//INICIALIZAR ARREGLOS
$ARRAYRECEPCION = "";
$ARRAYTRECEPCION = "";
$ARRAYDRECEPCION = "";
$ARRAYDRECEPCIONTOTAL = "";
$ARRAYPROVEEDOR = "";
$ARRAYPRODUCTOR = "";
$ARRAYPLANTAEXTERNA = "";
$ARRAYBODEGA = "";
$ARRAYTDOCUMENTO = "";
$ARRAYCONDUCTOR = "";
$ARRAYTRANSPORTE = "";
$ARRAYTARJAM = "";
$ARRAYTCONTENDOR = "";

if (isset($_REQUEST['usuario'])) {
  $USUARIO = $_REQUEST['usuario'];
  $ARRAYUSUARIO = $USUARIO_ADO->ObtenerNombreCompleto($USUARIO);
  $NOMBRE = $ARRAYUSUARIO[0]["NOMBRE_COMPLETO"];
}


if (isset($_REQUEST['parametro'])) {
  $IDOP = $_REQUEST['parametro'];
}


$ARRAYRECEPCION = $RECEPCIONM_ADO->verRecepcion3($IDOP);
if ($ARRAYRECEPCION) {
  $ARRAYDRECEPCION = $DRECEPCIONM_ADO->listarDrecepcionPorRecepcion2CBX($IDOP);
  $ARRAYDRECEPCIONTOTAL = $DRECEPCIONM_ADO->obtenerTotalesDrecepcionPorRecepcion2CBX($IDOP);
  $ARRAYTARJAM = $TARJAM_ADO->listarTarjaPorRecepcionCBX($IDOP);


  $TOTALCANTIDAD = $ARRAYDRECEPCIONTOTAL[0]["CANTIDAD"];
  $NUMERORECEPCION = $ARRAYRECEPCION[0]["NUMERO_RECEPCION"];
  $FECHARECEPCION = $ARRAYRECEPCION[0]["FECHA"];
  $NUMERODOCUMENTO = $ARRAYRECEPCION[0]["NUMERO_DOCUMENTO_RECEPCION"];
  $TIPORECEPCION = $ARRAYRECEPCION[0]["TRECEPCION"];
  $PATENTECAMION = $ARRAYRECEPCION[0]["PATENTE_CAMION"];
  $PATENTECARRO = $ARRAYRECEPCION[0]["PATENTE_CARRO"];
  $OBSERVACIONES = $ARRAYRECEPCION[0]['OBSERVACIONES_RECEPCION'];
  
  $IDUSUARIOI = $ARRAYRECEPCION[0]['ID_USUARIOI'];  
  $ARRAYUSUARIO2 = $USUARIO_ADO->ObtenerNombreCompleto($IDUSUARIOI);
  $NOMBRERESPONSABLE = $ARRAYUSUARIO2[0]["NOMBRE_COMPLETO"];
  
  $ESTADO = $ARRAYRECEPCION[0]['ESTADO'];
  if ($ARRAYRECEPCION[0]['ESTADO'] == 1) {
    $ESTADO = "Abierto";
  }else if ($ARRAYRECEPCION[0]['ESTADO'] == 0) {
    $ESTADO = "Cerrado";
  }else{
    $ESTADO="Sin Datos";
  }  

  if ($TIPORECEPCION == "1") {
    $NOMBRETRECEPCION = "Desde Proveedor";
    $ARRAYPROVEEDOR = $PROVEEDOR_ADO->verProveedor($ARRAYRECEPCION[0]["ID_PROVEEDOR"]);
    $NOMBREORIGEN = $ARRAYPROVEEDOR[0]["NOMBRE_PROVEEDOR"];
  }
  if ($TIPORECEPCION == "2") {
    $NOMBRETRECEPCION = "Desde Productor";
    $ARRAYPRODUCTOR = $PRODUCTOR_ADO->verProductor($ARRAYRECEPCION[0]["ID_PRODUCTOR"]);
    $NOMBREORIGEN = $ARRAYPRODUCTOR[0]["CSG_PRODUCTOR"].":". $ARRAYPRODUCTOR[0]["NOMBRE_PRODUCTOR"]; 
  }
  if ($TIPORECEPCION == "3") {
    $NOMBRETRECEPCION = "Desde Planta Externa";
    $ARRAYPLANTAEXTERNA = $PLANTA_ADO->verPlanta($ARRAYRECEPCION[0]["ID_PLANTA2"]);
    $NOMBREORIGEN = $ARRAYPLANTAEXTERNA[0]["NOMBRE_PLANTA"];
  }
  if ($TIPORECEPCION == "6") {
    $NOMBRETRECEPCION = "Desde Etiquetado";
    $ARRAYPLANTAEXTERNA = $PLANTA_ADO->verPlanta($ARRAYRECEPCION[0]["ID_PLANTA2"]);
    $NOMBREORIGEN = $ARRAYPLANTAEXTERNA[0]["NOMBRE_PLANTA"];
  }
  if ($TIPORECEPCION == "4") {
    $NOMBRETRECEPCION = "Inventario Inicial";
  }
  $ARRAYBODEGA = $BODEGA_ADO->verBodega($ARRAYRECEPCION[0]["ID_BODEGA"]);
  if ($ARRAYBODEGA) {
    $NOMBREBODEGA = $ARRAYBODEGA[0]["NOMBRE_BODEGA"];
  }
  $ARRAYTDOCUMENTO = $TDOCUMENTO_ADO->verTdocumento($ARRAYRECEPCION[0]["ID_TDOCUMENTO"]);
  if ($ARRAYTDOCUMENTO) {
    $NOMBRETDOCUMENTO = $ARRAYTDOCUMENTO[0]["NOMBRE_TDOCUMENTO"];
  }
  $ARRAYTRANSPORTE = $TRANSPORTE_ADO->verTransporte($ARRAYRECEPCION[0]["ID_TRANSPORTE"]);
  if ($ARRAYTRANSPORTE) {
    $NOMBRETRANSPORTE = $ARRAYTRANSPORTE[0]["NOMBRE_TRANSPORTE"];
  }
  $ARRAYCONDUCTOR = $CONDUCTOR_ADO->verConductor($ARRAYRECEPCION[0]["ID_CONDUCTOR"]);
  if ($ARRAYCONDUCTOR) {
    $NOMBRECONDUCTOR = $ARRAYCONDUCTOR[0]["NOMBRE_CONDUCTOR"];
  }

  $ARRAYEMPRESA = $EMPRESA_ADO->verEmpresa($ARRAYRECEPCION[0]['ID_EMPRESA']);
  $ARRAYPLANTA = $PLANTA_ADO->verPlanta($ARRAYRECEPCION[0]['ID_PLANTA']);
  $ARRAYTEMPORADA = $TEMPORADA_ADO->verTemporada($ARRAYRECEPCION[0]['ID_TEMPORADA']);
  $TEMPORADA = $ARRAYTEMPORADA[0]['NOMBRE_TEMPORADA'];
  $PLANTA = $ARRAYPLANTA[0]['NOMBRE_PLANTA'];

  $EMPRESA = $ARRAYEMPRESA[0]['NOMBRE_EMPRESA'];
  $EMPRESAURL = $ARRAYEMPRESA[0]['LOGO_EMPRESA'];

  if ($EMPRESAURL == "") {
    $EMPRESAURL = "img/empresa/no_disponible.png";
  }
}





//OBTENCION DE LA FECHA
date_default_timezone_set('America/Santiago');
//SE LE PASA LA FECHA ACTUAL A UN ARREGLO
$ARRAYFECHADOCUMENTO = getdate();

//SE OBTIENE INFORMACION RELACIONADA CON LA HORA
$HORA = "" . $ARRAYFECHADOCUMENTO['hours'];
$MINUTO = "" . $ARRAYFECHADOCUMENTO['minutes'];
$SEGUNDO = "" . $ARRAYFECHADOCUMENTO['seconds'];
//EN CASO DE VALORES MENOS A 2 LENGHT, SE LE CONCATENA UN 0
if ($MINUTO < 10) {
  $MINUTO = "0" . $MINUTO;
}
if ($SEGUNDO < 10) {
  $SEGUNDO = "0" . $SEGUNDO;
}

// SE JUNTA LA INFORMAICON DE LA HORA Y SE LE DA UN FORMATO
$HORAFINAL = $HORA . "" . $MINUTO . "" . $SEGUNDO;
$HORAFINAL2 = $HORA . ":" . $MINUTO . ":" . $SEGUNDO;

//SE OBTIENE INFORMACION RELACIONADA CON LA FECHA
$DIA = "" . $ARRAYFECHADOCUMENTO['mday'];

$MES = "" . $ARRAYFECHADOCUMENTO['mon'];
$ANO = "" . $ARRAYFECHADOCUMENTO['year'];
$NOMBREMES = "" . $ARRAYFECHADOCUMENTO['month'];
$NOMBREDIA = "" . $ARRAYFECHADOCUMENTO['weekday'];
//EN CASO DE VALORES MENOS A 2 LENGHT, SE LE CONCATENA UN 0
if ($DIA < 10) {
  $DIA = "0" . $DIA;
}
//PARA TRAUDCIR EL MES AL ESPAÑOL
$MESESNOMBRES = array(
  "January" => "Enero",
  "February" => "Febrero",
  "March" => "Marzo",
  "April" => "Abril",
  "May" => "Mayo",
  "June" => "Junio",
  "July" => "Julio",
  "August" => "Agosto",
  "September" => "Septiembre",
  "October" => "Octubre",
  "November" => "Noviembre",
  "December" => "Diciembre"
);
//PARA TRAUDCIR EL DIA AL ESPAÑOL
$DIASNOMBRES = array(
  "Monday" => "Lunes",
  "Tuesday" => "Martes",
  "Wednesday" => "Miércoles",
  "Thursday" => "Jueves",
  "Friday" => "Viernes",
  "Saturday" => "Sábado",
  "Sunday" => "Domingo"
);

$NOMBREDIA = $DIASNOMBRES[$NOMBREDIA];
$NOMBREMES = $MESESNOMBRES[$NOMBREMES];
// SE JUNTA LA INFORMAICON DE LA FECHA Y SE LE DA UN FORMATO
$FECHANORMAL = $DIA . "" . $MES . "" . $ANO;
$FECHANORMAL2 = $DIA . "/" . $MES . "/" . $ANO;
$FECHANOMBRE = $NOMBREDIA . ", " . $DIA . " de " . $NOMBREMES . " del " . $ANO;


$html = '
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Informe Recepcion</title>
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
           <img src="../../assest//img/logo.png" width="150px" height="45px"/>
      </div>
      <div id="company">
        <h2 class="name">Soc. Agrícola El Álamo Ltda.</h2>
        <div>Fundo El Álamo</div>
        <div>Los Ángeles, Chile.</div>
        <div><a href="mailto:ti@fvolcan.com">ti@fvolcan.cl</a></div>
      </div>
    </header>
    <main>
      <h2 class="titulo" style="text-align: center; color: black;">
        INFORME RECEPCION MATERIALES
        <br>
        <b> Numero Recepción: ' . $NUMERORECEPCION . '</b>
      </h2>
      <div id="details" class="clearfix">
        
        <div id="invoice">
          <div class="date"><b>Código BRC: </b>REP-RECMATR </div>  
          <div class="date"><b>Fecha Recepcion: </b>' . $FECHARECEPCION . ' </div>
          <div class="date"><b>Empresa: </b>' . $EMPRESA . '</div>
          <div class="date"><b>Planta: </b>' . $PLANTA . '</div>
          <div class="date"><b>Temporada: </b>' . $TEMPORADA . '</div>
        </div>

        <div id="client">
          <div class="address"><b>Tipo Recepción: </b>' . $NOMBRETRECEPCION . '</div>
          <div class="address"><b>Estado Recepción : </b> ' . $ESTADO . ' </div>
          <div class="address"><b>Tipo Documento: </b>' . $NOMBRETDOCUMENTO . ' </div>
          <div class="address"><b>Numero Documento: </b>' . $NUMERODOCUMENTO . ' </div>

          
';

if ($TIPORECEPCION == "1") {
  $html = $html . ' 
  <div class="address"><b>Nombre Proveedor: </b>' . $NOMBREORIGEN . '</div>
  ';
}
if ($TIPORECEPCION == "2") {
  $html = $html . ' 
<div class="address"><b>Nombre Productor: </b>' . $NOMBREORIGEN . '</div>
';
}
if ($TIPORECEPCION == "3") {
  $html = $html . ' 
<div class="address"><b>Nombre Planta Externa: </b>' . $NOMBREORIGEN . '</div>
';
}



$html = $html . '
          <div class="address"><b>Bodega Destino: </b>' . $NOMBREBODEGA . '</div>

        </div>
        
      </div>
      <table border="0" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
            <th colspan="6" class="center">DETALLE DE RECEPCIÓN.</th>
          </tr>
          <tr>
            <th class="color left">Codigo Producto</th>
            <th class="color left">Producto</th>
            <th class="color left">Unidad Medida</th>
            <th class="color left">Cantidad</th>
            <th class="color left">Valor Unitario</th>
            <th class="color left">Notas</th>
          </tr>
        </thead>
         <tbody>
        ';
foreach ($ARRAYDRECEPCION as $d) :
  $ARRAYVERPRODUCTO = $PRODUCTO_ADO->verProducto($d['ID_PRODUCTO']);
  if ($ARRAYVERPRODUCTO) {
    $CODIGOPRODUCTO = $ARRAYVERPRODUCTO[0]["CODIGO_PRODUCTO"];
    $NOMBREPRODUCTO = $ARRAYVERPRODUCTO[0]["NOMBRE_PRODUCTO"];
  }
  $ARRAYVERTUMEDIDA = $TUMEDIDA_ADO->verTumedida($d['ID_TUMEDIDA']);
  if ($ARRAYVERTUMEDIDA) {
    $NOMBRETUMEDIDA = $ARRAYVERTUMEDIDA[0]["NOMBRE_TUMEDIDA"];
  }



  $html = $html . '
          
                      <tr >
                          <th class="left">' . $CODIGOPRODUCTO . '</th>
                          <th class="left">' . $NOMBREPRODUCTO . '</th>
                          <td class="left">' . $NOMBRETUMEDIDA . '</td>
                          <td class="left">' . $d['CANTIDAD'] . '</td>
                          <td class="left">$ ' . $d['VALOR_UNITARIO'] . '</td>
                          <td class="left">' . $d['DESCRIPCION_DRECEPCION'] . '</td>
                      </tr>
              ';

endforeach;

$html = $html . '
              
                  <tr class="bt">
                      <th class="color left">&nbsp;</th>
                      <th class="color left">&nbsp;</th>
                      <th class="color right">SUB TOTAL</th>
                      <th class="color left"> ' . $TOTALCANTIDAD . '</th>
                      <th class="color left">&nbsp;</th>
                      <th class="color left">&nbsp;</th>
                  </tr>
              ';





$html = $html . '
        </tbody>
      </table>';


      $html = $html . '

  <table border="0" cellspacing="0" cellpadding="0">
      <thead>
        <tr>
          <th colspan="6" class="center">FOLIOS.</th>
        </tr>
        <tr>
          <th class="color left">Número Folio</th>
          <th class="color left">Codigo Producto</th>
          <th class="color left">Producto</th>
          <th class="color left">Tipo Contenedor</th>
          <th class="color left">Unidad Medida</th>
          <th class="color left">Cantidad</th>
        </tr>
      </thead>
     <tbody>';


     foreach ($ARRAYTARJAM as $s) :

      $ARRAYVERPRODUCTO = $PRODUCTO_ADO->verProducto($s['ID_PRODUCTO']);
      if ($ARRAYVERPRODUCTO) {
        $CODIGOPRODUCTO = $ARRAYVERPRODUCTO[0]["CODIGO_PRODUCTO"];
        $NOMBREPRODUCTO = $ARRAYVERPRODUCTO[0]["NOMBRE_PRODUCTO"];
      }
      $ARRAYVERTCONTENDOR = $TCONTENEDOR_ADO->verTcontenedor($s['ID_TCONTENEDOR']);
      if ($ARRAYVERTCONTENDOR) {
        $NOMBRETCONTEDOR = $ARRAYVERTCONTENDOR[0]["NOMBRE_TCONTENEDOR"];
      }
      $ARRAYVERTUMEDIDA = $TUMEDIDA_ADO->verTumedida($s['ID_TUMEDIDA']);
      if ($ARRAYVERTUMEDIDA) {
        $NOMBRETUMEDIDA = $ARRAYVERTUMEDIDA[0]["NOMBRE_TUMEDIDA"];
      }

     $html = $html . '
          
      <tr >
          <td class="left">' . $s['FOLIO_TARJA'] . '</td>
          <td class="left">' . $CODIGOPRODUCTO . '</td>
          <td class="left">' . $NOMBREPRODUCTO . '</td>
          <td class="left">' . $NOMBRETCONTEDOR . '</td>
          <td class="left">' . $NOMBRETUMEDIDA . '</td>
          <td class="left">' . $s['CANTIDAD_TARJA'] . '</td>
      </tr>
  ';

endforeach;


$html = $html . '

    </tbody>
    </table>';

    $html = $html . '
    <table border="0" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
        <th colspan="7" class=" center">CHEQUEO DE LA INFORMACIÓN Y CONDICIONES DE LA RECEPCIÓN.</th>
      </tr>
      
    </thead>
    
      <tbody>
          <tr class="">
              <th class="color2 left">1- La información ingresada en esta despacho concuerda con la documentación y lo fisico.</th>
              <th class="color2 left">Si</th>
              <th class="color2 left"> <input type="checkbox" > </th>
              <th class="color2 left">No</th>
              <th class="color2 left"> <input type="checkbox" > </th>
              <th class="color2 left">No Aplica</th>              
              <th class="color2 left"> <input type="checkbox" > </th>
          </tr>          
          <tr class="">
              <th class="color2 left">2- si es No, se informa la diferencia a quien correponde.</th>
              <th class="color2 left">Si</th>
              <th class="color2 left"> <input type="checkbox" > </th>
              <th class="color2 left">No</th>
              <th class="color2 left"> <input type="checkbox" > </th>
              <th class="color2 left">No Aplica</th>              
              <th class="color2 left"> <input type="checkbox" > </th>
          </tr>
          <tr class="">
              <th class="color2 left">3- El transporte donde llegaron los materiales cumple con las condiciones de transporte.</th>
              <th class="color2 left">Si</th>
              <th class="color2 left"> <input type="checkbox" > </th>
              <th class="color2 left">No</th>
              <th class="color2 left"> <input type="checkbox" > </th>
              <th class="color2 left">No Aplica</th>              
              <th class="color2 left"> <input type="checkbox" > </th>
          </tr>
          <tr class="">
              <th class="color2 left">4- Los materiales despachados estan en optimas condiciones para la recepción.</th>
              <th class="color2 left">Si</th>
              <th class="color2 left"> <input type="checkbox" > </th>
              <th class="color2 left">No</th>
              <th class="color2 left"> <input type="checkbox" > </th>
              <th class="color2 left">No Aplica</th>              
              <th class="color2 left"> <input type="checkbox" > </th>
          </tr>
      </tbody>
    </table>';

    $html=$html.'
    <br>&nbsp;<br><br><br>

      <div id="details" class="clearfix">
        <div id="client">
          <div class="address"><b>Información de Transporte</b></div>
          <div class="address">Empresa Transporte:  ' . $NOMBRETRANSPORTE . ' </div>
          <div class="address">Conductor: ' . $NOMBRECONDUCTOR . '</div>
          <div class="address">Patente Camión: ' . $PATENTECAMION . '</div>
          <div class="address">Patente Carro: ' . $PATENTECARRO . '</div>
        </div>
        
        <div id="client">
          <div class="address"><b>Notas Generales</b></div>
          <div class="address">  ' . $OBSERVACIONES . ' </div>
        </div>
        
        <div id="invoice">
          <div class="date "><b><hr></b></div>
          <div class="date  center">  Firma Responsable</div>
          <div class="date  center">  ' . $NOMBRERESPONSABLE . '</div>
        </div>
      </div>
    </main>
  </body>
</html>

';






//CREACION NOMBRE DEL ARCHIVO
$NOMBREARCHIVO = "InformeRecepionMateriales_";
$FECHADOCUMENTO = $FECHANORMAL . "_" . $HORAFINAL;
$TIPODOCUMENTO = "Informe";
$FORMATO = ".pdf";
$NOMBREARCHIVOFINAL = $NOMBREARCHIVO . $FECHADOCUMENTO . $FORMATO;

//CONFIGURACIOND DEL DOCUMENTO
$TIPOPAPEL = "LETTER";
$ORIENTACION = "P";
$LENGUAJE = "ES";
$UNICODE = "true";
$ENCODING = "UTF-8";

//DETALLE DEL CREADOR DEL INFORME
$TIPOINFORME = "Informe Recepcion Materiales";
$CREADOR = "Usuario";
$AUTOR = "Usuario";
$ASUNTO = "Informe";

//API DE GENERACION DE PDF
require_once '../../api/mpdf/mpdf/autoload.php';
//$PDF = new \Mpdf\Mpdf();W
$PDF = new \Mpdf\Mpdf(['format' => 'letter']);

//CONFIGURACION FOOTER Y HEADER DEL PDF
$PDF->SetHTMLHeader('
<table width="100%" >
    <tbody>
        <tr>
          <th width="55%" class="left f10">' . $EMPRESA . '</th>
          <td width="45%" class="right f10">' . $FECHANORMAL2 . '</td>
          <td width="5%"  class="right f10"><span>{PAGENO}/{nbpg}</span></td>
        </tr>
    </tbody>
</table>
<br>
    
');

$PDF->SetHTMLFooter('

<footer>
Informe generado por Departamento TI Fruticola Volcan <a href="mailto:ti@fvolcan.cl">ti@fvolcan.cl.</a>
<br>
Impreso por: <b>' . $NOMBRE . '.</b> Hora impresión: <b>' . $HORAFINAL2 . '</b>
</footer>
    
');


$PDF->SetTitle($TIPOINFORME); //titulo pdf
$PDF->SetCreator($CREADOR); //CREADOR PDF
$PDF->SetAuthor($AUTOR); //AUTOR PDF
$PDF->SetSubject($ASUNTO); //ASUNTO PDF


//CONFIGURACION

//$PDF->simpleTables = true; 
//$PDF->packTableData = true;

//INICIALIZACION DEL CSS
$stylesheet = file_get_contents('../../assest//css/stylePdf.css'); // carga archivo css
$stylesheet2 = file_get_contents('../../assest//css/reset.css'); // carga archivo css

//ENLASAR CSS CON LA VISTA DEL PDF
$PDF->WriteHTML($stylesheet, 1);
$PDF->WriteHTML($stylesheet2, 1);

//GENERAR PDF
$PDF->WriteHTML($html);
//METODO DE SALIDA
$PDF->Output($NOMBREARCHIVOFINAL, \Mpdf\Output\Destination::INLINE);
