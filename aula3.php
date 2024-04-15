<!-- Arrays Multidimencionais -->
<?php
$produtos = array(
    [
        "nome" => "Serrote", 
        "marca" => "serra nova",
        "preco" => 15.50 
    ],
    [
        "nome" => "Martelo", 
        "marca" => "serra velha",
        "preco" => 25.50 
    ],
    [
        "nome" => "Alicate", 
        "marca" =>"serra Meia-idade",
        "preco" => 40.90 
    ]
);
echo "<pre>";
print_r($produtos);
echo "</pre>";
echo "<hr>";
echo $produtos[1]["marca"] . "<br>";
echo $produtos[2]["preco"] . "<br>";
echo $produtos[2]["marca"][1];
echo "<hr>";
// comandos de loop (looping)

for ($i = 1; $i <=10; $i++){
    echo "$i - Sextou!<br>";

}
echo "<hr>";
for ($i = 1; $i <=20; $i+=2) {
echo "$i - ";
};
echo "<hr>";
$bebidas = ["Suco Uva","Suco de pêra","vodoka",];
$contagem = count($bebidas);
for ($i=0;$i <= $contagem; $i++ ){
    echo "$bebidas[$i] - ";
}

// while
echo "<hr>";
$indice = 0;
while ($indice < $contagem){
    echo "$bebidas[$indice] | ";
    $indice++;
}

// foreach
foreach($bebidas as $bebida){
    echo "$bebida <hr>";
}

foreach($produtos as $produto){

    echo "O produto: " . $produto['nome'] . " da marca: " . $produto['marca']
    . " está custasndo:" . $produto['preco'] . "<br>";

}

?>