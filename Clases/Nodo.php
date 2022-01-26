<?php

namespace Clases;

class Nodo
{
	public $info;
	public $izquierda;
	public $derecha;
    
	public	function __construct($info)
	{		
		$this->info = $info;
		$this->izquierda = NULL;
		$this->derecha = NULL;
	}
}