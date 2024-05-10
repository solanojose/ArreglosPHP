<?php

$carrito = array();

function agregarProducto($producto, $precio, $cantidad) {
    global $carrito;
    $carrito[] = array(
        'producto' => $producto,
        'precio' => $precio,
        'cantidad' => $cantidad
    );
    echo "Producto agregado al carrito.\n";
}


function listarProductos() {
    global $carrito;
    if (empty($carrito)) {
        echo "Por favor ingrese un producto.\n";
    } else {
        echo "Productos en el carrito:\n";
        foreach ($carrito as $item) {
            echo "- " . $item['producto'] . " - Precio: $" . $item['precio'] . " - Cantidad: " . $item['cantidad'] . "\n";
        }
    }
}


function calcularTotal() {
    global $carrito;
    $total = 0;
    foreach ($carrito as $item) {
        $total += $item['precio'] * $item['cantidad'];
    }
    return $total;
}


while (true) {
    echo "\n1. Agregar producto.\n";
    echo "2. Listar productos.\n";
    echo "3. Ver total de la compra.\n";
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
            $total = calcularTotal();
            echo "Total de la compra: $" . $total . "\n";
            break;
        case '4':
            echo "Que tenga buen dia :)\n";
            exit;
        default:
            echo "Opción no válida. Por favor, ingrese una opción válida.\n";
    }
}


