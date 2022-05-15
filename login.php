<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <form   method="$_POST" >
<table>
<tr>
<th>Kullancı Ad </th>
<th>:</th>
<th><input type="text" name="user" required ></th>
<tr>
<th>Şifre</th>
<th>:</th>
<th><input type="password" name="pass" required></th>
<tr>
<th>
<input type="submit" value="Gonder" name="submit" >
</th>
</tr>

</tr>


</tr>



</table>
</form>
</center>
<?php  
if(isset($_POST["submit"]))
{
$user=$_POST["user"]; 
$pass=$_POST["pass"];
if(($user=="b201210573@sakarya.edu.tr" && $pass=="b201210573") )
{
echo "başarı yapıldı";

}
else{

    header("Location: login.php");
}
}



?>

</body>
</html>