<?php
class Person{
    /*
    Nome
    CPF
    Altura
    Endereco
    RG
    Data de Nascimento
    Sexo

     */
//atributos - propriedades
     public string $Nome;
     public string $CPF;
     public double $Height;
     public string $Address;

     //metodos
     //address(parametros)
     public function Address(string $street, int $number, string $neighboarhood,
                             string $city, string $state){
                                $this->Address = $street . ' ' . $number . ' ' . $neighborhood . ' ' . $city . ' ' . $state;
                            }
                        

     }
}