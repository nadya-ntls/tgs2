<html>
<body>

<?php
//contoh 1
$t = date ("H");
if ($t > "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}

echo "<br>";

//contoh 2
$teman="Diana";

    if ($teman=="Ruth") {
        echo "Dia adalah teman ku";
    } else {
        echo "Dia bukan teman ku";
    }

echo "<br>";

//contoh 3
$a=15;
$b=8;

    if ($a < $b) {
        echo "a lebih besar daripada b";
    } else {
        echo "a lebih kecil daripada b";
    }

echo "<br>";

//contoh 4
$nilai = 3;
    if ($nilai > 8){
        echo "Sangat baik";
        echo "Baik";
    } else {
        echo "Sedang";
    }

echo "<br>";

//contoh 5
$total = 150000;
    if($total > 100000) {
        echo "Anda Dapat Hadiah!";
    } else {
        echo "Maaf Anda Belum Mendapat Hadiah";
    }
?>
</body>
</html>
