<html>
<head>
<title>Database</title>
</head>
<body>
<form action="" method="post">
<p>TICKET RESERVATION :</p>
Name <br><input type="text" name ="name" ><br><br>
EMAIL<br><input type="text" name ="email"><br><br>
MOBILE<br><input type="number" name ="mobile" ><br><br>
DATE OF JOURNY<br><input type="date" name ="dof"><br><br>
NUMBER OF TRICKETS<br><input type="number" name ="nof"><br><br>
<input type="submit" name="book" value="book"><br><br>
</form>
<table border="5">
<tr>
<th>name</th>
<th>email</th>
<th>mobile</th>
<th>dof</th>
<th>nof</th>
</tr>
<?php $servername = "localhost";
$username = "root";
$password = "";
$dbname="reserve";
$conn = mysqli_connect($servername, $username, $password,$dbname);
if(isset($_POST['book']))
{
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$mobile=$_REQUEST['mobile'];
$dof=$_REQUEST['dof'];
$nof=$_REQUEST['nof'];
$sql="insert into reservetest  values('$name','$email','$mobile','$dof','$nof')";
$sql=mysqli_query($conn,$sql);
}
$sql="select * from reservetest";
$sql=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($sql))
{
?>
<tr>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['mobile'];?></td>
<td><?php echo $row['dof'];?></td>
<td><?php echo $row['nof'];?></td>
</tr>
<?php
}
?>
</table>
</body>
</html>