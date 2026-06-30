

<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$conn = mysqli_connect("localhost", "root", "", "cd_system");

if (!$conn) {
    die("Erro ao conectar: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8mb4");

function esc($conn, $valor) {
    return mysqli_real_escape_string($conn, trim($valor));
}

function h($valor) {
    return htmlspecialchars($valor, ENT_QUOTES, 'UTF-8');
}
?>
