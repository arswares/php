
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title></title>
  </head>
  <body>
  	<?php
// echo "Firstname: ";
// echo $firstname=$_POST["firstname"];
// echo "<br> Lastname: ";
// echo $lastname=$_POST["lastname"];
// echo "<br> Fullname: ";
// echo $fullname=$_POST["lastname"].$_POST["firstname"];
// echo "<br> Mật khẩu: ";
// echo $password1=$_POST["password"];
// echo "<br> Giới tính: ";
// echo $gender=($_POST["gender"]==1.)?"Nam":"Nữ";
// echo "<br>Email: ";
// echo $mail=$_POST["mail"];
// echo "<br>Phone: ";
// echo $Phone=$_POST["Phone"];
// echo "<br>Câu hỏi: ";
// echo $cauhoi=$_POST["cauhoi"];
// echo "<br>Câu trả lời: ";
// echo $answer=$_POST["answer"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";




$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "SELECT * FROM myguests";

$result = mysqli_query($conn, $sql);
if ($result->num_rows >0 ) {
?>
 <table>
 	<thead>
 		<tr>
 			<th>STT</th>
 			<th> firstname</th>
 			<th>Lastname</th>
 			<th>Password</th>
 			<th>Action</th>
 		</tr>
 	</thead>
 	<tbody>
 		<?php $i=1;
 		 while($row = $result->fetch_assoc()) { ?> 
 			<!-- hàm lấy ra mảng -->

 		<tr>
 			<td><?php echo $i; ?> </td>
 			<td><?php echo $row["firstname"] ?></td>
 			<td><?php echo $row["lastname"]; ?></td>
 			<td><?php echo $row["password"];?></td>
 			<td><a href="sua.php?id=<?php echo $row['id']?>" class="btn-secondary ">Sửa</a></td>
 		</tr>
 	<?php $i++; } ?>
 	</tbody>
 </table>

<?php } ?>
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>