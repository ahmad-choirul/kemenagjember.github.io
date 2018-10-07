<?php 
define('BASEPATH') or exit('no direct script access allowed');

function ambildata()
{
	$x['data']=$this->Madd->ambil();
	return $x;
}

