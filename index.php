<?php 

//Funcao para ver o tipo de uma variavel
echo "Exibindo o tipo de uma variavel: ";
$aux = "Curso PHP";
var_dump($aux);
echo "<br>";

//Limpar uma variavel
/*unset($aux);
echo "<br>";*/

//Verifica se uma variavel existe
echo "Verifica se a variavel existe: ";
if(isset($aux)){
	echo $aux;
}
echo "<br>";

//Concatenacao
echo "Exibe um exemplo de concatenacao: ";
$aux2 = $aux . " - 7";
echo $aux2;
echo "<br>";

//Tipos de dados
//Basicos
$string = "Exemplo";
$site = 'www.econeteditora.com.br';
?> 
