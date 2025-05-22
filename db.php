<?php
// Habilitar la visualización de errores
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Datos de conexión
$host = "sql206.infinityfree.com"; 
$user = "if0_39009437";             
$pass = "BQPAqv4jjDjGxno";         
$dbname = "if0_39009437_infi_superheroes_db";  

$conn = new mysqli($host, $user, $pass, $dbname);

// Verificar si la conexión fue exitosa
if ($conn->connect_error) {
    die("❌ Conexión fallida: " . $conn->connect_error);  // Muestra el error exacto
} else {
    echo "✅ Conexión exitosa.";
}
?>
