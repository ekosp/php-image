<?php
/**
 * Created by: Eko Setyo Purnomo
 * Date: 04-Dec-17
 * Site: https://ekosp.com
 * Email: ekosetyopurnomo@gmail.com
 */

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