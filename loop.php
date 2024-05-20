<form action="" method="get">
    <label for="">Enter a number:</label><br>
    <input type="number" name="num">
    <input type="submit" value="Send" name="submit">
</form>
<?php
// if (isset($_GET['submit'])){
//     $num=$_GET['num'];
//     for($i=1 ;$i <= 10 ; $i++){
//         echo $num."x".$i."=". $num*$i."<br>";
//     }
// }
if (isset($_GET['submit'])){
    $num=$_GET['num'];
    $sum= $num ^ 3;
    echo $num . "square" . " " .$sum;
}
?>