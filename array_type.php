
<?php

/*
is_array ($array) = verifica se a variavel é um array
in_array ($valor, $array) = verifica se um valor está em um determinado array
array_keys($array) = retorna as chaves(indices) do array especificado
array_values($array) = retorna os valores do array especificado
array_merge ($array1,$array2) = agrega os conteudos de dois arrays
array_pop ($array) = remove a ultima posicao do array
array_shift($array) = remove a primeira posicao do array
array_unshift($array, "valor") = adiciona um ou mais elementos no inicio do array
array_push($array, $valor, "valor") = adiciona um ou mais elementos no fim do array
array_combine($keys,$values) = mescla os dois arrays em chaves e valores.
array_sum() = calcula a soma dos elementos do array 
explode("/","20/10/2009") = transforma uma string em um array
implode ("separador", $array) = transforma um array em uma string
*/

$nomes = array("Rodrigo", "Felipe", 'Matheus', 'Maria');
echo is_array($nomes); // 1


var_dump(is_array($nomes)); //true

if (is_array($nomes)) :
    echo 'é um array';
else :
    echo 'não é um array';
endif; //é um array

//-------------------------------------------------------

echo in_array('Matheus', $nomes); // 1 ou true

echo in_array('Carlos', $nomes); // "" ou false 

if (in_array('Matheus', $nomes)) :
    echo 'está no array';
else :
    echo 'não está no array';
endif; //está no array


//-------------------------------------------------------
$nome_keys = array("Primo" => "Rodrigo", "Vizinho" => "Felipe", "Dono" => "Matheus", "Sócia" => "Maria");

$keys = array_keys($nome_keys);
print_r($keys);
//Array([0] => Primo [1] => Vizinho [2] => Dono [3] => Sócia)


//-------------------------------------------------------

$values = array_values($nome_keys);
print_r($values); 
// //Array([0] => Rodrigo [1] => Felipe [2] => Matheus [3] => Maria)

//-------------------------------------------------------

$carros = array("Camaro", "Uno", "Gol");

$moto = array('Pop100', '50cc', 'cb1000');
$veiculos = array_merge($carros, $motos);
print_r($veiculos);

//Array([0] => Camaro [1] => Uno [2] => Gol [3] => Pop100 [4] => 50cc [5] => cb1000)

//-------------------------------------------------------

print_r($carros);
array_pop($carros); //Array([0] => Camaro [1] => Uno [2] => Gol)
echo '<br>';
echo array_pop($carros); // Gol
echo '<br>';
print_r($carros);  //Array([0] => Camaro [1] => Uno )

//-------------------------------------------------------

print_r($carros);
array_pop($carros); //Array([0] => Camaro [1] => Uno [2] => Gol)
echo '<br>';
echo array_shift($carros); // Camaro
echo '<br>';
print_r($carros);  //Array( [0] => Uno [1] => Gol)


//-------------------------------------------------------

$frutas = array("uva", "laranja", "maçã");
print_r($frutas); //Array([0] => uva [1] => laranja [2] => maçã)
array_unshift($frutas, 'banana'); 
print_r($frutas); //Array([0] => banana [1] => uva [2] => laranja [3] => maçã)


//-------------------------------------------------------

print_r($frutas); //Array([0] => uva [1] => laranja [2] => maçã)
array_push($frutas, 'banana'); 
print_r($frutas); //Array([0] => uva [1] => laranja [2] => maçã [3] => banana)


//-------------------------------------------------------

$keys_titulos = array("Campeão", "Vice", "Terceiro");
$values_times = array("Vasco", "Flamengo", "Botafogo");

$times = array_combine($keys_titulos, $values_times);
print_r($times); //Array([Campeão"] => Vasco [Vice] => Flamengo [Terceiro] => Botafogo )

//-------------------------------------------------------

$data = "30/02/2023";
$novaData = explode("/", $data);
print_r($novaData); //Array([0] => 30 [1] => 02 [2] => 2023)


$frase = 'meu nome não é jhonny';
$array = explode(" ", $frase);
print_r($array);

//-------------------------------------------------------

$string = implode(", ", $nomes);
echo $string; // Rodrigo, Felipe, Matheus, Maria