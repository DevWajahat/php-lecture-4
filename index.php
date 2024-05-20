<form action="" method ="get">
    <label for="">Enter Number: </label><br>
    <input type="number" name="num">
    <input type="submit" name="submit" value="send">
</form>
<?php
if(isset($_GET['submit']))
{
$num=$_GET['num'];
if($num %2==0){
    echo "number is even";
}
else{
    echo "number is odd";
}
}
?>
