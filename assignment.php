<!-- <form action="" method ="get">
    <label for="">Enter Number: </label><br>
    <input type="number" name="num">
    <input type="submit" name="submit" value="send">
</form> -->
<?php
// if(isset($_GET['submit']))
// {
//     $num=2;
//     for($i=$num;$i<=1;$i++){
//         echo $num*$i."<br>";
//     }
// }

$num=5;
for($i = $num; $i <= 1; --$i){
    echo "num".$num*i."<br>";
}
?>