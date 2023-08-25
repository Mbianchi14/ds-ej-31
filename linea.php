<?php 
require_once 'modelo/respuestaLinea.php';
require_once 'modelo/linea.php';
require_once 'modelo/demostracion.php';
require_once 'modelo/tasa.php';

header('Content-Type: application/json');

$t = new Tasa();
$t->PlazoDesde = 0;
$t->PlazoHasta = 48;
$t->Tem = 4.7671;
$t->Tna = 58;
$t->ListTasaScore = null;

$d = new Demostracion();
$d->Codigo = "1";
$d->Descripcion = "DNI";

$l = new Linea();
$l->Id = 222;
$l->Codigo = "752";
$l->Demostracion = $d;
$l->Tasa = $t;
$l->Tope = 250000;

$rl = new RespuestaLinea();
$rl->Linea = $l;
$rl->ContieneError = false;
$rl->Mensaje = null;

echo json_encode($rl);

