 <?php
 $ppm = $_POST['ppm'];
 $conexion = mysqli_connect("sql107.infinityfree.com", "if0_41749531", "OQJYHljsnukme", "if0_41749531_monitor_gases");
 
 $sql = "INSERT INTO lecturas (valor_gas, fecha_hora) VALUES ($ppm, NOW())";
 mysqli_query($conexion, $sql);
 
 // Enviar alerta si el nivel es alto
if ($ppm > 400) {
   $para = "alertas@tucorreo.com";
   $asunto = "⚠️ Alerta de CO₂";
   $mensaje = "Nivel peligroso de CO₂ detectado: $ppm ppm. Verifica la zona inmediatamente.";
   $cabeceras = "From: sistema@monitor.com";

   mail($para, $asunto, $mensaje, $cabeceras);
}
?>