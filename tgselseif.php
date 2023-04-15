<html>
<body>

<?php
//contoh 1
$nilai = 88;

if ($nilai > 90) {
    $grade = "A+";
} elseif($nilai > 80){
    $grade = "A";
} elseif($nilai > 70){
    $grade = "B+";
} elseif($nilai > 60){
    $grade = "B";
} elseif($nilai > 50){
    $grade = "C+";
} elseif($nilai > 40){
    $grade = "C";
} elseif($nilai > 30){
    $grade = "D";
} elseif($nilai > 20){
    $grade = "E";
} else {
    $grade = "F";
}

echo "Nilai anda: $nilai<br>";
echo "Grade: $grade";

echo "<br>";
echo "<br>";

//contoh 2
$t = date("H");

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}

echo "<br>";
echo "<br>";

//contoh 3
$teman = "andi";
if($teman == "Budi"){
	echo "Budi adalah teman saya";
}elseif($teman == "andi"){
	echo "Andi adalah teman saya";
}else{
	echo "Saya tidak punya teman";
}

echo "<br>";
echo "<br>";

//contoh 4
$age = 50;
if ($age < 30)
{
  echo "Your age is less than 30!";
}
elseif ($age > 30 && $age < 40)
{
  echo "Your age is between 30 and 40!";
}
elseif ($age > 40 && $age < 50)
{
  echo "Your age is between 40 and 50!";
}
else
{
  echo "Your age is greater than 50!";
}

echo "<br>";
echo "<br>";

//contoh 5
$randomScore = rand(0,4); // random score between 0-4
if ($randomScore === 0) {
	echo '0 Points, please try again';
} elseif ($randomScore === 1) {
	echo '1 Point, Try more';
} elseif ($randomScore === 2) {
	echo '2 Points, Nice!';
} elseif ($randomScore === 3) {
	echo '3 Points, One more to reach the best';
} elseif ($randomScore === 4) {
	echo '4 Points, You won!';
}
?>
</body>
</html>