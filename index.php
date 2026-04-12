<!-- TP PHP by Siham Essaouab -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> TP 01 </title>
    
</head>
<body>
    <form action="" method="post" >
        <input type = "text" name = "nom" required />
        <input type = "text" name = "prenom" required />
        <input type = "number" name = "age" required />
        <input type = "text" name = "etablissement" required />
        <input type = "number" name = "Note1" min=0 max=20 required />
        <input type = "number" name = "Note2" min=0 max=20 required />
        <input type = "number" name = "Note3" min=0 max=20 required />
        <input type = "submit" name = "Valider1">

</form>
<?php
if(isset($_POST['Valider1'])) {
define("etablissement","FPK");
echo etablissement."<br>";

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$age = $_POST['age'];
$etablissement = $_POST['etablissement'];

$Note1 = $_POST['Note1'];
$Note2 = $_POST['Note2'];
$Note3 = $_POST['Note3'];

$somme = $Note1 + $Note2 + $Note3;
echo "somme: ".$somme ."<br>";
$moyenne = $somme/3;
echo "la moyenne est : $moyenne"."<br>";

echo "nom: ".$nom."<br>";
echo "prenom: ".$prenom."<br>";
echo "age: ".$age."<br>";
echo "etablissement:".$etablissement."<br>";
echo "Note 1: ".$Note1."<br>";
echo "Note 2: ".$Note2."<br>";
echo "Note 3: ".$Note3."<br>";
echo "Somme: ".$somme."<br>";
$moyenne = $somme / 3;
echo "moyenne: ".$moyenne."<br>";

if($moyenne >= 16){
   echo"Excellent"."<br>";
} elseif($moyenne >= 14){
   echo "Bien"."<br>";
} if($moyenne >= 12){
   echo"Assez bien"."<br>";
} elseif($moyenne >= 10){
   echo"Passable"."<br>";
}else{
    echo"Echec"."<br>";
}

if($age <= 18){
echo"mineur"."<br>";
}else{
echo"majeur"."<br>";
}
if($moyenne >= 10){
echo"admis"."<br>";
}else{
 echo"non admis"."<br>";
}
switch(True){ 
    case($moyenne>=16):
        echo "Felicitations"."<br>";
        break;
    case($moyenne>=14):
        echo "Bon travail"."<br>";
        break;
    case($moyenne>=12):
        echo "efforts satisfaisons"."<br>";
        break;
    case($moyenne>=10):
        echo "Peut mieux faire"."<br>";
        break;
    default:
        echo"Doit redoubler d'effort"."<br>";
    }

$notes = [$Note1, $Note2, $Note3];
for($i = 1; $i<= 20; $i++){
    echo $i. "<br>"."<br>";
}

while($age >= 1){
     echo $age."<br>"."<br>";
     $age--;
}
$matiers = ["PHP","HTML","CSS"];
foreach($matiers as $matiere){
    foreach($notes as $note)
        echo $matiere. ":".$note."<br>"."<br>";
}
    }

// exercice 3:
?>
<form action="" method="post" >
        <input type = "number" name = "n" required />
        <input type = "submit" name = "Valider2">
</form>
<?php
if(isset($_POST['Valider2'])) {

$n = $_POST['n']; 
echo "n: ".$n."<br>";
echo "<pre>";
for ($i = 1; $i < 10; $i++){
    echo "$n * $i=".($n*$i)."<br>"."<br>";
}

for($i=1;$i<=$n;$i++){
    for($j=1;$j <= $n-$i; $j++){
        echo" ";
    }
    for($k=1; $k <= (2*$i-1);$k++){
        echo"*";
    }
   echo "<br>";
}

echo "<pre>";
for($i=1;$i<=$n;$i++){
    for($j=1; $j <= $n;$j++){
        echo"*";
    }
   echo "<br>";
}
echo "Nombres pairs entre 1 et ".$n." est: "."<br>";
    for ($i = 1; $i <= $n; $i++) {
        if ($i % 2 == 0) {
            echo $i." ";
            
        }
    }

echo "<br>";

 $somme = 0;
    for ($i = 1; $i <= $n; $i++) {
        $somme += $i;
    }
    echo "Somme = $somme"."<br>";
if($n%2 == 0){
    echo $n ." est un nombre paire."."<br>";
}
    else{
        echo $n ." est un nombre impaire"."<br>";
} 

// exercice 4:
function fibonacci($n) {

    $a = 0;
    $b = 1;

    echo "<pre>";
    echo "F0 = $a"."<br>";
    echo "F1 = $b"."<br>";

    for ($i = 2; $i < $n; $i++) {
        $c = $a + $b;
        echo "F$i = $c"."<br>";

        $a = $b;
        $b = $c;
    }
    echo "</pre>";
}
fibonacci($n);

}
?>
</body>
</html>
