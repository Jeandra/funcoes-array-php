<?php 
echo "<p>ARRAYS</p>";

$cores = ["rosa", "azul", "verde","roxo", "branco", "preto", "lilás", "amarelo"];
$fruta = ["banana", "uva", "laranja", "morango", "jaca", "goiaba", "manga"];

$dados = [
    "nome" => ["Ana", "Pedro", "Alex", "Hugo"],
    "idade" => ["25", "37", "32", "14"],
];

$cardapio =[];
$cardapio [0] = "Tapioca";
$cardapio [1] = "Suco";
$cardapio [2] = "Doce";
$cardapio [3] = "Salgada";

echo "<hr><br>";
echo "Funções para Array <br><hr>";

//funções para array
//adicionando valor no final do array
array_push($fruta, "acerola", "maracujá");
print_r($fruta); 
echo "<hr><br>";

//adicionando valores no inicio do array
array_unshift($fruta, "MELANCIA", "PITANGA");
print_r($fruta);
echo "<hr><br>";

//apagando valores do final array 
array_pop($fruta);
print_r($fruta);
echo "<hr><br>";

//apagando valores do início do array
array_shift($fruta);
print_r($fruta);

//contando elementos do array
$contar_elementos = count($fruta);

echo "<p> Quantidade de frutas $fruta </p>";
