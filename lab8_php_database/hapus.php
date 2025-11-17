<?php 
include_once 'koneksi.php'; 
$id = $_GET['id']; 
// Menggunakan prepared statement untuk keamanan
$sql = "DELETE FROM data_barang WHERE id_barang = ?"; 
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, 'i', $id);
mysqli_stmt_execute($stmt);
header('location: index.php'); 
?>