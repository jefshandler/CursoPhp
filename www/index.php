<?php
//phpinfo();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//define('CONSTANTE', 'CONTEUDO DA COSTANTE');

//const ENDERECO_DO_SITE = 'http://www.curso.php';
const EVIRONMENT = 'production';

//----------------------------------------------------------
//TIPOS DE COMMENTARIO
// COMENTARIO DE UMA LINHA
# UM COMENTARIO ESTIVER PULA
/* */
/** */
//----------------------------------------------------------
/*
if ( EVIRONMENT == 'production'){
    echo 'estou trabalhando em ambiente de desenvolvimento. ';

}else{
    Echo ' nao estou trabalhando em anbiente de desenvolvimento';
};
*/
/*
switch(EVIRONMENT):
    case 'development':{
        Echo 'Ambiente de des';
    };break;
    case 'production':{
        Echo 'Ambiente de produc ao';
    };break;
    default:{
        Echo 'Ambiente de lazarento';
    };break;
endswitch;
*/
require_once 'DotFw/Domain/Entity/Person.php';