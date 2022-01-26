<?php

namespace Clases;

class Ejercicio1{
    private int $inicio;
    private int $fin;

    public function __construct(int $inicio, int $fin)
    {
        $this->inicio = $inicio;
        $this->fin    = $fin;
    }

    protected function multiplo3($numero){
        if ($numero%3 == 0) {
            return true;
        } 

        return false;
    }

    protected function multiplo5($numero){
        if ($numero%5 == 0) {
            return true;
        }

        return false;
    }
    public function imprimir(){
        for ($i = $this->inicio; $i <= $this->fin ; $i++) { 
            if ($this->multiplo3($i) == true){
                if ($this->multiplo5($i)==0){
                    echo "FizzBuzz" . "<br/>";
                }else{
                    echo "Fizz" . "<br/>";    
                }
            }elseif ($this->multiplo5($i) == true){
                 if ($this->multiplo3($i) == true){
                    echo "Buzz" . "<br/>";
                }else{
                   echo "FizzBuzz" . "<br/>";
                }
            }
            else{
                echo $i . "<br/>";
            }
        }
    }
}