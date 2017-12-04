<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pendataan_anggota";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, nama, kerjaan, status, image FROM detail_anggota";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>ID Card</th>
			</tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td></tr>";
		echo 	"<tr>
					<td>".$row["id"]."</td>
					<td>".$row["nama"]."</td>
					<!-- <td><a href='".$row["image"]."'>" . "Cetak" . "</a></td>  -->
					<td><a href='http://localhost/php-image/test.php?varname=".$row["nama"]."'>" . "Cetak" . "</a></td>
					
				</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?> 

</body>
</html>