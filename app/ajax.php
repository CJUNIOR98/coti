<?php
header('Content-Type: application/json');

$action = $_POST['action'];
$productos = [];
if (!isset($_SESSION['productos'])) {
    $_SESSION['productos'] = [];
} else {
    $productos = $_SESSION['productos'];
}

switch ($action) {
    case 'add_producto':
        $producto =
            [
                'producto' => $_POST['producto'],
                'cantidad' => (int) $_POST['cantidad'],
                'precio' => $_POST['precio'],
                'subtotal' => floatval($_POST['cantidad'] * $_POST['precio'])
            ];
            $_SESSION['productos'][] = $producto;
            echo json_encode(['status' => 200, 'msg' => 'Producto agregado con exito']);
        break;

    default:
        # code...
        break;
}
