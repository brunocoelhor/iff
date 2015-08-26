<pre>
<?php
$alunos = array(0 => "Bruno",1 => "Maria", 5 => "Pedro");

$time = array(
  "suporte"=>array(
    0=>"Sona",
    1=>"Leona"
  ),
  "carry"=>array(
    0=>"Ashe",
    1=>"Draven"
  ),
  "tank"=>array(
    0=>"Malphite",
    1=>"Shen"
  )
);

// $turma20 = [
//   1 => "Bruno",
//   2 => "Maria",
//   3 => "Pablo"
// ];

$turma20 = [
  "Bruno" => [
    "nota1" => 8,
    "nota2" => 7,
    "nota3" => 7,
    "nota4" => 6
  ],
  2 => "Maria",
  3 => "Pablo"
];

//echo $alunos[5];

//echo "<br>";

//print_r($time);

//print_r($time[suporte]);

// print_r($turma20);

//$media = ($turma20["Bruno"]["nota1"]+$turma20["Bruno"]["nota2"]+$turma20["Bruno"]["nota3"]+$turma20["Bruno"]["nota4"])/count($turma20["Bruno"]);


// for($i=1; $i <= count($turma20["Bruno"]); $i++){
//   echo $turma20["Bruno"]["nota".$i];
// }

for($i=1; $i <= count($turma20["Bruno"]); $i++){
  $media += $turma20["Bruno"]["nota".$i];
}
$media = $media / count($turma20["Bruno"]);
echo "<h1>A media eh: ".$media."</h1>";
?>

</pre>
