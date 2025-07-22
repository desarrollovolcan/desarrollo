<?php
// CREAR URL PARA LOS DATOS DE LA ENTIDAD SEGREGACION
// URL PARA VER LA ENTIDAD SEGREGACION
if (isset($_REQUEST['VERURL'])) {
    // $_SESSION["parametro"] = $_REQUEST['ID'];
    // $_SESSION["parametro1"] = "ver";
    $_SESSION["urlO"] = $_REQUEST['URLO'];
    echo "<script type='text/javascript'> location.href ='" . $_REQUEST['URL'] . ".php';</script>";
}

// URL PARA EDITAR LA ENTIDAD SEGREGACION
if (isset($_REQUEST['EDITARURL'])) {
    // $_SESSION["parametro"] = $_REQUEST['ID'];
    // $_SESSION["parametro1"] = "editar";
    $_SESSION["urlO"] = $_REQUEST['URLO'];
    echo "<script type='text/javascript'> location.href ='" . $_REQUEST['URL'] . ".php';</script>";
}

// URL PARA DUPLICAR LA ENTIDAD SEGREGACION
if (isset($_REQUEST['DUPLICARURL'])) {
    $id_dato = $_REQUEST['ID'];
    $accion_dato = "duplicar";
    $_SESSION["urlO"] = $_REQUEST['URLO'];
    echo "<script type='text/javascript'> location.href ='" . $_REQUEST['URL'] . ".php?op&id=" . $id_dato . "&a=" . $accion_dato . "';</script>";
}

// URL PARA ELIMINAR LA ENTIDAD SEGREGACION
if (isset($_REQUEST['ELIMINARURL'])) {
    // $_SESSION["parametro"] = $_REQUEST['ID'];
    // $_SESSION["parametro1"] = "0";
    $id_dato = $_REQUEST['ID'];
    $accion_dato = "0";
    $_SESSION["urlO"] = $_REQUEST['URLO'];
    echo "<script type='text/javascript'> location.href ='" . $_REQUEST['URL'] . ".php?op&id=".$id_dato."&a=".$accion_dato."';</script>";
}
// URL PARA HABILITAR LA ENTIDAD SEGREGACION
if (isset($_REQUEST['HABILITARURL'])) {
    // $_SESSION["parametro"] = $_REQUEST['ID'];
    // $_SESSION["parametro1"] = "1";
    $id_dato = $_REQUEST['ID'];
    $accion_dato = "1";
    $_SESSION["urlO"] = $_REQUEST['URLO'];
    echo "<script type='text/javascript'> location.href ='" . $_REQUEST['URL'] . ".php?op&id=".$id_dato."&a=".$accion_dato."';</script>";
}

// URL PARA DESHABILITAR LA ENTIDAD SEGREGACION
if (isset($_REQUEST['DESHABILITARURL'])) {

    // $_SESSION["parametro"] = $_REQUEST['ID'];
    // $_SESSION["parametro1"] = "0";
    $id_dato = $_REQUEST['ID'];
    $accion_dato = "0";
    $_SESSION["urlO"] = $_REQUEST['URLO'];
    echo "<script type='text/javascript'> location.href ='" . $_REQUEST['URL'] . ".php?op&id=".$id_dato."&a=".$accion_dato."';</script>";
}
// URL PARA VER MOTIVOS DE RECHAZO DE LA ENTIDAD SEGREGACION
if (isset($_REQUEST['VERMOTIVOSRURL'])) {
    // $_SESSION["parametro"] = $_REQUEST['ID'];
    // $_SESSION["parametro1"] = "motivo";
    $id_dato = $_REQUEST['ID'];
    $accion_dato = "motivo";
    $_SESSION["urlO"] = $_REQUEST['URLO'];
    echo "<script type='text/javascript'> location.href ='" . $_REQUEST['URLMR'] . ".php?op&id=".$id_dato."&a=".$accion_dato."';</script>";
}   



