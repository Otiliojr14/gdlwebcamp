<?php 
include_once './includes/functions/functions.php';
    if (isset($_POST['submit'])):
        //Personalizar los valores del formulario
        $nombre = $_POST['name'];
        $apellido = $_POST['last_name'];
        $email = $_POST['mail'];
        $regalo = $_POST['regalo'];
        $total = $_POST['total_pedido'];
        $fecha = date('Y-m-d H:i:s');

        // Pedidos
        $boletos = $_POST['boletos'];
        $camisas = $_POST['pedido_camisas'];
        $etiquetas = $_POST['pedido_etiquetas'];

        // Convertir los productos de boletos camisas y etiquetas a un array json
        $pedido = productos_json($boletos, $camisas, $etiquetas);

        //eventos
        $eventos = $_POST['registro'];

        // Convertir los registros de talleres a un array json
        $registro = eventos_json($eventos);

        try {
            require_once('./includes/functions/bd_conexion.php');
            $stmt = $conn->prepare("INSERT INTO registrados (nombre_registrado, apellido_registrado, email_registrado, fecha_registro, pases_articulos, talleres_registrados, regalo, total_pagado) VALUES (?,?,?,?,?,?,?,?)");
            $stmt->bind_param("ssssssis", $nombre, $apellido, $email, $fecha, $pedido, $registro, $regalo, $total);
            $stmt->execute();
            $stmt->close();
            $conn->close();
            header('Location: validar_registro.php?exitoso=1');
        } catch (\Exception $e) {
            $e->getMessage();
        }
    endif;  ?>

<?php include_once './includes/templates/header.php'; ?>
<?php  ?>
    <section class="form-reservation">
        <h2>Registro de usuarios</h2>
        <section class="message">
            <?php if(isset($_GET['exitoso'])): ?>
                <h3>Registro exitoso</h3>
            <?php endif; ?>
        </section>        
    </section>
<?php include_once './includes/templates/footer.php'; ?>