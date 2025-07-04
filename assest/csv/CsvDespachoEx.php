<?php

//LLAMADA ARCHIVOS NECESARIOS PARA LAS OPERACIONES 
include_once '../../assest/controlador/TUSUARIO_ADO.php';
include_once '../../assest/controlador/USUARIO_ADO.php';
include_once '../../assest/controlador/EMPRESA_ADO.php';
include_once '../../assest/controlador/PLANTA_ADO.php';
include_once '../../assest/controlador/TEMPORADA_ADO.php';

include_once '../../assest/controlador/EEXPORTACION_ADO.php';
include_once '../../assest/controlador/EXIEXPORTACION_ADO.php';
include_once '../../assest/controlador/DESPACHOEX_ADO.php';
include_once '../../assest/controlador/ICARGA_ADO.php';

include_once '../../assest/controlador/EXPORTADORA_ADO.php';
include_once '../../assest/controlador/TINPSAG_ADO.php';
include_once '../../assest/controlador/VESPECIES_ADO.php';
include_once '../../assest/controlador/PRODUCTOR_ADO.php';
include_once '../../assest/controlador/INPECTOR_ADO.php';
include_once '../../assest/controlador/CONTRAPARTE_ADO.php';
include_once '../../assest/controlador/PAIS_ADO.php';
include_once '../../assest/controlador/TMANEJO_ADO.php';
include_once '../../assest/controlador/PROVINCIA_ADO.php';
include_once '../../assest/controlador/COMUNA_ADO.php';
include_once '../../assest/controlador/CIUDAD_ADO.php';
include_once '../../assest/controlador/TCALIBRE_ADO.php';
include_once '../../assest/controlador/CONDUCTOR_ADO.php';
include_once '../../assest/controlador/TRANSPORTE_ADO.php';





//INCIALIZAR LAS VARIBLES
//INICIALIZAR CONTROLADOR
$TUSUARIO_ADO = new TUSUARIO_ADO();
$USUARIO_ADO = new USUARIO_ADO();
$EMPRESA_ADO =  new EMPRESA_ADO();
$PLANTA_ADO =  new PLANTA_ADO();
$TEMPORADA_ADO =  new TEMPORADA_ADO();



$EEXPORTACION_ADO = new EEXPORTACION_ADO();
$EXIEXPORTACION_ADO = new EXIEXPORTACION_ADO();
$DESPACHOEX_ADO =  new DESPACHOEX_ADO();

$ICARGA_ADO =  new ICARGA_ADO();
$EXPORTADORA_ADO =  new EXPORTADORA_ADO();
$TINPSAG_ADO =  new TINPSAG_ADO();
$VESPECIES_ADO =  new VESPECIES_ADO();
$PRODUCTOR_ADO = new PRODUCTOR_ADO();
$INPECTOR_ADO =  new INPECTOR_ADO();
$CONTRAPARTE_ADO =  new CONTRAPARTE_ADO();
$PAIS_ADO =  new PAIS_ADO();
$TMANEJO_ADO =  new TMANEJO_ADO();
$PROVINCIA_ADO =  new PROVINCIA_ADO();
$COMUNA_ADO =  new COMUNA_ADO();
$CIUDAD_ADO =  new CIUDAD_ADO();
$TCALIBRE_ADO =  new TCALIBRE_ADO();
$TRANSPORTE_ADO =  new TRANSPORTE_ADO();
$CONDUCTOR_ADO =  new CONDUCTOR_ADO();


//INCIALIZAR VARIBALES A OCUPAR PARA LA FUNCIONALIDAD
$NUMERO = "";
$NUMEROVER = "";
$IDDESPACHOEX = "";
$FECHADESPACHOEX = "";
$FECHAINGRESODESPACHOEX = "";
$FECHAMODIFCIACIONDESPACHOEX = "";
$TINPSAG = "";
$EMBARQUE = "";
$NOMBRETINPSAG = "";
$NOMBRETESTADOSAG = "";

$OBSERVACIONDESPACHOEX = "";
$INPECTOR = "";
$CONTRAPARTE = "";
$PAIS = "";
$EMPRESA = "";
$TEMPORADA = "";
$PLANTA = "";
$CALIBRE = "";
$TMANEJO = "";
$EMPRESAURL = "";

$CIF = "";

$TOTALENVASE = "";
$TOTALNETO = "";
$TOTALBRUTO = "";

$TOTALENVASE2 = "";
$TOTALNETO2 = "";
$TOTALBRUTO2 = "";

$CSGPRODUCTOR = "";
$NOMBREPRODUCTOR = "";
$COMUNAPRODUCTOR = "";
$PROVINCIAPRODUCTOR = "";

$CODIGOESTANDAR = "";
$NOMBREESTANDAR = "";
$NOMBREVARIEDAD = "";


$CSPPLANTA = "";
$RAZONPLANTA = "";
$COMUNAPLANTA = "";
$CIUDADPLANTA = "";

$CSPPLANTA2 = "";
$NOMBREPLANTA2 = "";
$COMUNAPLANTA2 = "";
$PROVINCIAPLANTA2 = "";


$CSPPLANTA3 = "";
$NOMBREPLANTA3 = "";
$COMUNAPLANTA3 = "";
$PROVINCIAPLANTA3 = "";
$NOMBRENAVE = "";
$NOMBREEXPORTADORA = "";
$NOMBRECONTRAPARTE = "";

$FECHAETA = "";
$FECHAETD = "";

//INICIALIZAR ARREGLOS
$ARRAYDESPACHOEX = "";
$ARRAYEXIEXPORTACION = "";
$ARRAYEXIEXPORTACION2 = "";
$ARRAYEXIEXPORTACIONBOLSA = "";
$ARRAYEXIEXPORTACIONBOLSA2 = "";
$ARRAYEXIEXPORTACIONBOLSA3 = "";

$ARRAYEXIEXPORTACIONPRODUCTOR = "";
$ARRAYEXIEXPORTACIONPRODUCTORESTANDAR = "";
$ARRAYEXIEXPORTACIONPRODUCTORESTANDARPVARIEDAD = "";

$ARRAYEXIEXPORTACIONPRODUCTORTOTAL = "";
$ARRAYEXIEXPORTACIONPRODUCTORESTANDARTOTAL = "";
$ARRAYEXIEXPORTACIONPRODUCTORESTANDARPVARIEDADTOTAL = "";

$ARRAYEXIEXPORTACIONTOTAL = "";
$ARRAYEXIEXPORTACIONTOTAL2 = "";
$ARRAYEXIEXPORTACIONBOLSATOTAL = "";

$ARRAYINPECTOR = "";
$ARRAYCONTRAPARTE = "";
$ARRAYPAIS = "";
$ARRAYCIUDAD = "";
$ARRAYCOMUNA = "";
$ARRAYPROVINCIA = "";


$ARRAYCIUDAD3 = "";
$ARRAYCOMUNA3 = "";
$ARRAYCIUDAD2 = "";
$ARRAYCOMUNA2 = "";
$ARRAYNAVE = "";

$ARRAYEXPORTADORA = "";
$ARRAYFOLIO = "";
$ARRAYEMPRESA = "";
$ARRAYPLANTA = "";
$ARRAYPLANTA2 = "";
$ARRAYTEMPORADA = "";
$ARRAYVESPECIES = "";
$ARRAYPVESPECIES = "";
$ARRAYEEXPORTACION = "";
$ARRAYPRODUCTOR = "";
$ARRAYCALIBRE = "";
$ARRAYTMANEJO = "";
$ARRAYUSUARIO = "";
$ARRAYICARGA = "";
$ARRAYCALIBRE="";



if (isset($_REQUEST['usuario'])) {
  $USUARIO = $_REQUEST['usuario'];
  $ARRAYUSUARIO = $USUARIO_ADO->ObtenerNombreCompleto($USUARIO);
  $NOMBRE = $ARRAYUSUARIO[0]["NOMBRE_COMPLETO"];
}




if (isset($_REQUEST['parametro'])) {
  $IDOP = $_REQUEST['parametro'];
}

$ARRAYDESPACHOEX = $DESPACHOEX_ADO->verDespachoexCsv($IDOP);
if($ARRAYDESPACHOEX){

  $ARRAYEXIEXPORTACION = $EXIEXPORTACION_ADO->buscarPorDespachoexAgrupadoFolio($IDOP);
  $ARRAYDESPACHOEXESPECIES = $DESPACHOEX_ADO->buscarPorDespachoexEspecies($IDOP);
  if($ARRAYEXIEXPORTACION){
    $CODIGOESPECIES=$ARRAYDESPACHOEXESPECIES[0]["CODIGO"];
    if( strlen($CODIGOESPECIES)==1){
      $CODIGOESPECIES="0000000".$CODIGOESPECIES;
    }else if( strlen($CODIGOESPECIES)==2){
      $CODIGOESPECIES="000000".$CODIGOESPECIES;
    }else if( strlen($CODIGOESPECIES)==3){
      $CODIGOESPECIES="00000".$CODIGOESPECIES;
    } else if( strlen($CODIGOESPECIES)==4){
      $CODIGOESPECIES="0000".$CODIGOESPECIES;
    } else if( strlen($CODIGOESPECIES)==5){
      $CODIGOESPECIES="000".$CODIGOESPECIES;
    } else if( strlen($CODIGOESPECIES)==6){
      $CODIGOESPECIES="00".$CODIGOESPECIES;
    } else if( strlen($CODIGOESPECIES)==7){
      $CODIGOESPECIES="0".$CODIGOESPECIES;
    } else{
      $CODIGOESPECIES=substr($CODIGOESPECIES,-8);
    } 
  }else{
    $CODIGOESPECIES="00000000";
  }




  $ARRAYEXIEXPORTACIONTOTAL = $EXIEXPORTACION_ADO->obtenerTotalesDespachoEx2($IDOP);
  $ARRAYEXIEXPORTACIONPALLET=$EXIEXPORTACION_ADO->contarTotalPalletDespachoEx2($IDOP);  
  $TOTALPALLET=$ARRAYEXIEXPORTACIONPALLET[0]['PALLET'];
  if( strlen($TOTALPALLET)==1){
    $TOTALPALLET="000".$TOTALPALLET;
  }else if( strlen($TOTALPALLET)==2){
    $TOTALPALLET="00".$TOTALPALLET;
  }else if( strlen($TOTALPALLET)==3){
    $TOTALPALLET="0".$TOTALPALLET;
  }else{
    $TOTALPALLET=substr($TOTALPALLET,-4);
  }   
  $TOTALENVASE = $ARRAYEXIEXPORTACIONTOTAL[0]['ENVASE'];
  $TOTALNETO = $ARRAYEXIEXPORTACIONTOTAL[0]['NETO'];
  $TOTALBRUTO = $ARRAYEXIEXPORTACIONTOTAL[0]['BRUTO'];
  

  $NUMERODESPACHOEX = $ARRAYDESPACHOEX[0]['NUMERO_DESPACHOEX'];
  $NUMEROPLANILLA = $ARRAYDESPACHOEX[0]['NUMERO_PLANILLA_DESPACHOEX'];
  if( strlen($NUMEROPLANILLA)==1){
    $NUMEROPLANILLA="0000".$NUMEROPLANILLA;
  }else if( strlen($NUMEROPLANILLA)==2){
    $NUMEROPLANILLA="000".$NUMEROPLANILLA;
  }else if( strlen($NUMEROPLANILLA)==3){
    $NUMEROPLANILLA="00".$NUMEROPLANILLA;
  } else if( strlen($NUMEROPLANILLA)==4){
    $NUMEROPLANILLA="0".$NUMEROPLANILLA;
  }else{
    $NUMEROPLANILLA=substr($NUMEROPLANILLA,-5);
  } 
  $ARRAYPAIS=$PAIS_ADO->verPais($ARRAYDESPACHOEX[0]['ID_PAIS']);
  if($ARRAYPAIS){
    $PAIS=$ARRAYPAIS[0]['NOMBRE_PAIS'];
    $CODIGOPAIS=$ARRAYPAIS[0]['CODIGO_SAG_PAIS'];   
    if( strlen($CODIGOPAIS)==1){
      $CODIGOPAIS="00".$CODIGOPAIS;
    }else if( strlen($CODIGOPAIS)==2){
      $CODIGOPAIS="0".$CODIGOPAIS;
    }else{
      $CODIGOPAIS=substr($CODIGOPAIS,-3);
    }
  }

  $FECHADESPACHOEX = $ARRAYDESPACHOEX[0]['FECHA'];
  $EMBARQUE = $ARRAYDESPACHOEX[0]['TEMBARQUE_DESPACHOEX'];
  $NUMEROGUIA = $ARRAYDESPACHOEX[0]['NUMERO_GUIA_DESPACHOEX'];
  $NUMEROCONTENEDOR = $ARRAYDESPACHOEX[0]['NUMERO_CONTENEDOR_DESPACHOEX'];
  $ESTADO = $ARRAYDESPACHOEX[0]['ESTADO'];  
  $PATENTECAMION = $ARRAYDESPACHOEX[0]['PATENTE_CAMION'];
  $PATENTECARRO = $ARRAYDESPACHOEX[0]['PATENTE_CARRO'];
  $OBSERVACIONES = $ARRAYDESPACHOEX[0]['OBSERVACION_DESPACHOEX'];
  
  if ($ARRAYDESPACHOEX[0]['ESTADO'] == 1) {
    $ESTADO = "Abierto";
  }else if ($ARRAYDESPACHOEX[0]['ESTADO'] == 0) {
    $ESTADO = "Cerrado";
  }else{
    $ESTADO="Sin Datos";
  }  
  

  $ARRAYPLANTA = $PLANTA_ADO->verPlanta($ARRAYDESPACHOEX[0]['ID_PLANTA']);
  if($ARRAYPLANTA){
    $NOMBREPLANTA = $ARRAYPLANTA[0]['NOMBRE_PLANTA'];
    $RAZONSOCIALPLANTA = $ARRAYPLANTA[0]['RAZON_SOCIAL_PLANTA'];
    $CSPPLANTA = $ARRAYPLANTA[0]['CODIGO_SAG_PLANTA'];
    if( strlen($CSPPLANTA)==1){
      $CSPARCHIVO="00".$CSPPLANTA;
      $CSPENCABEZADO="000".$CSPPLANTA;
    }else if( strlen($CSPPLANTA)==2){
      $CSPARCHIVO="0".$CSPPLANTA;
      $CSPENCABEZADO="00".$CSPPLANTA;
    }else if( strlen($CSPPLANTA)==3){
      $CSPARCHIVO=$CSPPLANTA;
      $CSPENCABEZADO="0".$CSPPLANTA;
    }else if( strlen($CSPPLANTA)==4){
      $CSPARCHIVO=substr($CSPPLANTA,-3);
      $CSPENCABEZADO=$CSPPLANTA;
    }else{
      $CSPARCHIVO=substr($CSPPLANTA,-3);
      $CSPENCABEZADO=substr($CSPPLANTA,-4);    
    }   
  }
  $ARRAYTEMPORADA = $TEMPORADA_ADO->verTemporada($ARRAYDESPACHOEX[0]['ID_TEMPORADA']);
  if($ARRAYTEMPORADA){
    $TEMPORADA = $ARRAYTEMPORADA[0]['NOMBRE_TEMPORADA'];
  }else{
    $TEMPORADA="Sin Datos";
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

$html = ''.$CSPENCABEZADO.''.$CODIGOPAIS.''.$FECHADESPACHOEX.''.$TOTALPALLET.'
';
foreach ($ARRAYEXIEXPORTACION as $r) :
  if( strlen($r["ENVASE"])==1){
    $ENVASE="000".$r["ENVASE"];
  }else if( strlen($r["ENVASE"])==2){
    $ENVASE="00".$r["ENVASE"];
  }else if( strlen($r["ENVASE"])==3){
    $ENVASE="0".$r["ENVASE"];
  }else{
    $ENVASE=$r["ENVASE"]; 
  } 
  if( strlen($r["FOLIO_AUXILIAR_EXIEXPORTACION"])==1){
    $FOLIO="000000000".$r["FOLIO_AUXILIAR_EXIEXPORTACION"];
  }else if( strlen($r["FOLIO_AUXILIAR_EXIEXPORTACION"])==2){
    $FOLIO="00000000".$r["FOLIO_AUXILIAR_EXIEXPORTACION"];
  }else if( strlen($r["FOLIO_AUXILIAR_EXIEXPORTACION"])==3){
    $FOLIO="0000000".$r["FOLIO_AUXILIAR_EXIEXPORTACION"];
  }else if( strlen($r["FOLIO_AUXILIAR_EXIEXPORTACION"])==4){
    $FOLIO="000000".$r["FOLIO_AUXILIAR_EXIEXPORTACION"];
  }else if( strlen($r["FOLIO_AUXILIAR_EXIEXPORTACION"])==5){
    $FOLIO="00000".$r["FOLIO_AUXILIAR_EXIEXPORTACION"];
  }else if( strlen($r["FOLIO_AUXILIAR_EXIEXPORTACION"])==6){
    $FOLIO="0000".$r["FOLIO_AUXILIAR_EXIEXPORTACION"];
  }else if( strlen($r["FOLIO_AUXILIAR_EXIEXPORTACION"])==7){
    $FOLIO="000".$r["FOLIO_AUXILIAR_EXIEXPORTACION"];
  }else if( strlen($r["FOLIO_AUXILIAR_EXIEXPORTACION"])==8){
    $FOLIO="00".$r["FOLIO_AUXILIAR_EXIEXPORTACION"];
  }else if( strlen($r["FOLIO_AUXILIAR_EXIEXPORTACION"])==9){
    $FOLIO="0".$r["FOLIO_AUXILIAR_EXIEXPORTACION"];
  }else{
    $FOLIO=substr($r["FOLIO_AUXILIAR_EXIEXPORTACION"],-10);   
  } 
$html=$html.''.$FOLIO.''.$ENVASE.''.$CODIGOESPECIES.'
';  
endforeach;
$html=$html.'&&
';







//CREACION NOMBRE DEL ARCHIVO
$NOMBREARCHIVO = $CSPARCHIVO.$NUMEROPLANILLA;
//$FECHADOCUMENTO = $FECHANORMAL . "_" . $HORAFINAL;
$TIPODOCUMENTO = "CSV";
$FORMATO = ".DES";
$NOMBREARCHIVOFINAL = $NOMBREARCHIVO  . $FORMATO;
//CONFIGURACIOND DEL DOCUMENTO
$TIPOPAPEL = "LETTER";
$ORIENTACION = "P";
$LENGUAJE = "ES";
$UNICODE = "true";
$ENCODING = "UTF-8";

//DETALLE DEL CREADOR DEL INFORME
$TIPOINFORME = "CSV ";
$CREADOR = "Usuario";
$AUTOR = "Usuario";
$ASUNTO = "CSV";
$DESCRIPCION = "CSV, " . $FECHANOMBRE . ", " . $HORAFINAL2;
$CATEGORIA = "CSV Despacho EX";
$ETIQUETA = "Despacho EX";



//PROPIEDADES PARA GENERAR ARCHIVO

$filename = $NOMBREARCHIVOFINAL; 
$contenido = $html; 
$archivo = fopen('../../assest/csv/des/'.$filename, 'w+'); 
fwrite($archivo, $contenido); 
fclose($archivo); 
header("Cache-Control: public"); 
header("Content-Description: File Transfer");
header("Content-Length: ". 
filesize("../../assest/csv/des/$filename").";"); 
//obliga a descargar archivo
header("Content-Disposition: attachment; filename=$filename");
header("Content-Type: application/octet-stream; "); 
header("Content-Transfer-Encoding: binary"); readfile('../../assest/csv/des/'.$filename);

