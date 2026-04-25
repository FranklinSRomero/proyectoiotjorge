<?php
if (!isset($_POST['ppm'])) {
    http_response_code(400);
    exit("No llegó ppm");
}

$ppm = $_POST['ppm'];

echo "Render funcionando. PPM recibido: " . $ppm;
?>