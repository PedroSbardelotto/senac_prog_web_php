<?php
// 3 sinais de = verifica o valor e o tipo de dado é o mesmo
// Condicionais IF-ELSE
//!== (diferente de ou não do mesmo tipo).
if(5 > 5){
    echo "TRUE";

}else{
    echo "FALSE";
}
echo "<hr>";
$typeUser = "10";
if ($typeUser === 10 ){
    echo "Acesso APROVADO!";

}else{ 
    echo "Acesso NEGADO!";
}
echo "<hr>";
$setor = "financeiro";
if ($setor != "gerente" ){
    echo "sem acesso ao sistema";

}else{ 
    echo "bem vindo ao sistema";
}
echo "<hr>";

$user ="fulano";
$password = "12345";
// & ou AND 
if($user == "ciclano" AND $password == "12345"){
    echo "Bem vindo ao sistema $user!";
} else{
    echo "Acesso negado";
}
echo "<hr>";

$setor ="Financeiro";
if($setor == "gerente" || $setor == "financeiro" ){
    echo "Bem vindo ao sistema $user!";
} else{
    echo "Acesso negado";
}
echo "<hr>";

$nota1 = 3; 
$nota2 = 4;
$nota3 = 5; 
$aluno = "Pedro";
$mediaFinal = ($nota1 + $nota2 + $nota3) / 3;

if ($mediaFinal > 7){
    echo "O aluno $aluno está Aprovado com média $mediaFinal";
}else if($mediaFinal <= 5 ) {
    echo "O aluno $aluno está Reprovado com média $mediaFinal";
}else{
    echo "O aluno $aluno está de Recuperação com média $mediaFinal";
}
echo "<hr>";

$side1 = 9; 
$side2 = 9;
$side3 = 9;
if ($side1 == $side2 and $side1 == $side3){
    echo "Equilatero";
}else if(($side1 != $side2 and $side1 != $side3 and $side2
 != $side3)){
    echo "Isósceles";
}else{ 
    echo "Escaleno";
}

echo "<hr>";
$cdz = "Touro";
switch($cdz){
    case "áries":
        echo "Mú";
        break;
    case "Touro":
        echo "Aldebaran";
        break; 
    case "Gemeos":
        echo "saga";
        break;
    case "cancer":
        echo "Mascara da morte";
        break;       
    case "leao":
        echo "Aiolia";
        break;
    case "virgem":
        echo "Shaka";
        break;
    case "libra":
        echo "Doku";
        break;
    case "Escorpião":
        echo "Milo";
        break;
    case "Sagitário":
        echo "Aiorros";
        break;
    case "aquario":
        echo "Kamus";
        break;
    case "peixes":
        echo "afrodite";
        break;
    
    default : 
        echo "Não encontrei esse signo!";    
}
echo "<hr>";
$idade =22;
switch($idade){
    case $idade <= 17:
       echo "vc é menor de idade";
        break; 
    case $idade <= 39:
       echo "vc é adulto";
        break; 
    case $idade <= 59:
       echo "vc é adulto";
        break;
    case $idade <= 69:
       echo "vc está madura";
        break;  
    case $idade <= 79:
       echo "vc já pode considerar uma pessoa experiente";
        break;    
    case $idade >= 80:
       echo "Você está mais próximo de DEUS";
        break;
    
        default:        
        

}

echo "<hr>";
// Operador ternario 
// teste lógico ? "verdadeir" : "Falso";
$notaFinal = 5;
$resultadoFinal = $notaFinal >= 7 ? "APROVADO" : "REPROVADO"; 

echo $resultadoFinal 

// EXERCICIO 



?>