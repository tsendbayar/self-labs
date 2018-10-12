<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
</head>
<body>

<?php

$z=array("red","green");
array_push($z,"blue","yellow");
print_r($z);
$z["b"] = "vl";
print_r($z);

$students = array
  (
  "0"=>array("ovog"=>"Од","ner"=>"Хангай","ID"=>"14B1SEAS0509","angi"=>"МС","hicheel"=>array("IS01","IS02","IS03")),
  "1"=>array("ovog"=>"Батсүх","ner"=>"Тамир","ID"=>"14B1SEAS1422","angi"=>"МС","hicheel"=>array("IS02","IS03")),
  "2"=>array("ovog"=>"Жамц","ner"=>"Хангал","ID"=>"14B1SEAS0196","angi"=>"ПХ","hicheel"=>array("IS01","IS02")),
  "3"=>array("ovog"=>"Энхбат","ner"=>"Ариунтуяа","ID"=>"14B1SEAS1581","angi"=>"МС","hicheel"=>array("IS01","IS02","IS03")),
  "4"=>array("ovog"=>"Мөнхжаргал","ner"=>"Батзориг","ID"=>"14B1SEAS0996","angi"=>"ПХ","hicheel"=>array("IS01","IS03")),
  );
  $studentsLength = count($students);
$lessons = array
    (
	"IS01"=>array("index"=>"IS01","ner"=>"Мэдээллийн системийн үндэс","credit"=>"2"),
	"IS02"=>array("index"=>"IS02","ner"=>"Вэб програмчлал","credit"=>"3"),
	"IS03"=>array("index"=>"IS03","ner"=>"Си хэл","credit"=>"3")
	);  
array_push($students['1']['hicheel'],"IS01");
print_r($students['1']['hicheel']);
function printHead(){
	echo "<tr>";
    echo    "<th>Овог</th>";
    echo    "<th>Нэр</th>"; 
    echo    "<th>SISI ID</th>";
    echo    "<th>Мэргэжилийн хөтөлбөр</th>";
    echo    "<th>Сонгосон хичээл</th>";
    echo "</tr> \n";
}
function printArray($students, $lessons, $arrLength){ 
echo "<table border =\"1\" style='border-collapse: collapse'>";
printHead();
    
	for ($row=0; $row < $arrLength; $row++) { 
	    oneLine($students, $lessons, $row);
		   	}
	  	    echo "</tr>"; 
echo "</table><br>"; 
}
function oneLine($students, $lessons, $row){
	$p = count($students[$row]['hicheel']);;
		echo "<tr> \n"; 
		   echo "<td>".$students[$row]['ovog']."</td> \n";
		   echo "<td>".$students[$row]['ner']."</td> \n";
		   echo "<td>".$students[$row]['ID']."</td> \n";
		   echo "<td>".$students[$row]['angi']."</td> \n";
		   echo "<td> \n";
		   for($q=0; $q<$p; $q++){
			   echo $lessons[$students[$row]['hicheel'][$q]]['ner'];
		   echo "<br>";
		   }
		   echo "</td>";
}
printArray($students, $lessons, $studentsLength);

function matchName($name, $students){
	$count = array("0");
	for($i=0; $i<=4; $i++) {
		if (preg_match('/^'.$name.'/',$students[$i]['ner'])) {
			array_push($count, $i);
		}
	}
	return $count;
}

$count = matchName("Хан",$students);
$arrlength = count($count);
echo "<table border =\"1\" style='border-collapse: collapse'>";
printHead();
for($i=1; $i<$arrlength; $i++){
	oneLine($students, $lessons, $count[$i]);
}
echo "</table>"; 

?>

</body>
</html>