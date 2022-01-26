<?php
namespace Clases;

class ArbolBinario
{
	public $nodo;
    
	public	function __construct()
	{
		$this->nodo = NULL;
	}
	
	public function contarRamaMayor($arbol)
	{
		if ($arbol != NULL)
		{		
            $valIzq = intval($this->contarRamaMayor($arbol->izquierda));
            $valDer = intval($this->contarRamaMayor($arbol->derecha));

            if ($valIzq > $valDer){
                return $valIzq + 1;
            }else{
                return $valDer + 1;
            }
		}
		else
		{
			return 0;
		}
	}
}