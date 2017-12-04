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


include('dbconnect.php');

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
					<td><a href='http://localhost/php-image/generate_id_card.php?varname=".$row["nama"]."
					&varkerjaan=".$row["kerjaan"]."
					&varimage=".$row["image"]."
					&varstatus=".$row["status"]."' target=\"_blank\">" . "Cetak" . "</a></td>
					
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