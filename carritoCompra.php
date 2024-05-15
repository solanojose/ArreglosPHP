<?php

$carrito = array();

function agregarProducto($producto, $precio, $cantidad) {
    global $carrito;
    $carrito[] = array(
        'producto' => $producto,
        'precio' => $precio,
        'cantidad' => $cantidad
    );
    echo "Producto agregado con exito !!.\n";
}


function listarProductos() {
    global $carrito;
    if (empty($carrito)) {
        echo "No hay productos.\n";
    } else {
        echo "-- Productos --\n";
        foreach ($carrito as $producto) {
            echo "- " . $producto['producto'] . " - Precio: $" . $producto['precio'] . " - Cantidad: " . $producto['cantidad'] . "\n";
        }
    }
}


function totalCompra() {
    global $carrito;
    $total = 0;
    foreach ($carrito as $producto) {
        $total += $producto['precio'] * $producto['cantidad'];
    }
    return $total;
}


while (true) {
    echo "\n1. Agregar producto.\n";
    echo "2. Listar productos.\n";
    echo "3. Ver total.\n";
    echo "4. Salir\n";
    

    $opcion = readline("Ingrese una opción: ");

    switch ($opcion) {
        case '1':
            $producto = readline("Ingrese el nombre del producto: ");
            $precio = readline("Ingrese el precio del producto: ");
            $cantidad = readline("Ingrese la cantidad: ");
            agregarProducto($producto, $precio, $cantidad);
            break;
        case '2':
            listarProductos();
            break;
        case '3':
            $total = totalCompra();
            echo "Total de la compra: $" . $total . "\n";
            break;
        case '4':
            echo "Que tenga buen dia :)\n";
            exit;
        default:
            echo "Opción no valida!!\n";
    }
}


