<?php
$janta = ["frango","Arroz","salada",];
print_r($janta);
$janta[] = "suco de maça";
echo "<hr>";
print_r($janta);
// array_push()
array_push($janta,"Fruki","Dolly");
echo "<hr>";
print_r($janta);
//array_pop()
$last = array_pop($janta);
echo "<hr>";
print_r($last);
//array_shift
$first = array_shift($janta);
echo "<hr>";
print_r($first);
//asort() - ordena o array mantando a associação entre indices e valores 
echo "<hr>";
asort($janta);
print_r($janta);
echo "<hr>";
arsort($janta);
print_r($janta);

$totais = [10, 15, 22,"teste10", 36, 24, 10];
$soma = array_sum($totais);
echo "<hr>";
echo $soma;
$users = [
    "Elias" =>"12345",
    "Vitor" =>"admin",
    "Carlos" =>"teste",
    "fernanda" =>"testando"
];
$user = "vitor";
$pass = "exemplo";
if(array_key_exists($user, $users)){
    if($users[$user] == $pass){

    }else{
        echo "<h2>Senha incorreta</h2>";    
    }
        echo "<h2>User Encontrado: $user</h2>";
}else{
    echo "<h2>User n Encontrado: $user</h2>";
};
echo "<hr>";
//in_array
echo in_array("admin",$users);
echo "<hr>";
//echo in_array("Elias",$users);
$buscar = "teste";
if(in_array($buscar, $users)){
    echo "<h2>Busca Encontrada: $buscar</h2>";
}else{
    echo "<h2>Busca Não Econtrada</h2>";
};
//array_keys
$keys = array_keys($users);
echo "<hr>";
print_r($keys);
echo "<hr>";
print_r($users);
//ksort
ksort($users);
echo "<hr>";
print_r($users);
echo "<hr>";
//krsort
krsort($users);
echo "<hr>";
print_r($users);



?>