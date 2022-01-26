<?php
require 'vendor/autoload.php';

use Clases\Nodo;
use Clases\ArbolBinario;

$arbol = new ArbolBinario();
/*
	Arbol Binario
	-----------------------
		  1
		/   \
	   2     3
	 /  \   /  \
	5    4 7   	6
	             \	
				  8      		       
*/		
$arbol->nodo = new Nodo(1);
$arbol->nodo->izquierda = new nodo(2);
$arbol->nodo->derecha = new nodo(3);
$arbol->nodo->izquierda->derecha = new nodo(4);
$arbol->nodo->izquierda->izquierda = new nodo(5);
$arbol->nodo->derecha->derecha = new nodo(6);
$arbol->nodo->derecha->izquierda = new nodo(7);
$arbol->nodo->derecha->derecha->izquierda = new nodo(8);

$ramaMayor = $arbol->contarRamaMayor($arbol->nodo);

echo ("Rama mayor tiene: " . $ramaMayor . " nodos");

