<?php
require('connection.php');


// RENDERIZADO POR DEFECTO DE PRODUCTOS
if (isset($_GET['card']) && $_GET['card'] == 'get_cards') {
    $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
    $perPage = 4; 
    $offset = ($page - 1) * $perPage;

    $query = "SELECT * FROM `nft` LIMIT ?, ?";
    $data = array();

    
    if ($stmt = $connection->prepare($query)) {
        $stmt->bind_param('ii', $offset, $perPage);
        $stmt->execute();
        $result = $stmt->get_result();

        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        $stmt->close();
        echo json_encode($data);
    } else {
        echo json_encode(array('error' => 'Error en la consulta SQL'));
    }
}







// RENDERIZAR POR PRECIO MENOR
if (isset($_GET['card']) && $_GET['card'] == 'get_cards_by_menor') {
    $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
    $perPage = 4; 
    $offset = ($page - 1) * $perPage;

    $query = "SELECT * FROM `nft` ORDER BY precio ASC LIMIT ?, ?";
    $data = array();

    
    if ($stmt = $connection->prepare($query)) {
        $stmt->bind_param('ii', $offset, $perPage);
        $stmt->execute();
        $result = $stmt->get_result();

        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        $stmt->close();
        echo json_encode($data);
    } else {
        echo json_encode(array('error' => 'Error en la consulta SQL'));
    }
}














// RENDERIZAR POR PRECIO MAYOR
if (isset($_GET['card']) && $_GET['card'] == 'get_cards_by_mayor') {
    $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
    $perPage = 4; 
    $offset = ($page - 1) * $perPage;

    $query = "SELECT * FROM `nft` ORDER BY precio DESC LIMIT ?, ?";
    $data = array();

    
    if ($stmt = $connection->prepare($query)) {
        $stmt->bind_param('ii', $offset, $perPage);
        $stmt->execute();
        $result = $stmt->get_result();

        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        $stmt->close();
        echo json_encode($data);
    } else {
        echo json_encode(array('error' => 'Error en la consulta SQL'));
    }
}












// RENDERIZAR POR ALFABETICO
if (isset($_GET['card']) && $_GET['card'] == 'get_cards_by_alf') {
    $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
    $perPage = 4;
    $offset = ($page - 1) * $perPage;

    $query = "SELECT * FROM `nft` ORDER BY nombre ASC LIMIT ?, ?";
    $data = array();

    
    if ($stmt = $connection->prepare($query)) {
        $stmt->bind_param('ii', $offset, $perPage);
        $stmt->execute();
        $result = $stmt->get_result();

        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        $stmt->close();
        echo json_encode($data);
    } else {
        echo json_encode(array('error' => 'Error en la consulta SQL'));
    }
}












// RENDERIZAR POR BÚSQUEDA
if (isset($_GET['card']) && $_GET['card'] == 'get_cards_by_search') {
    $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
    $perPage = 4; 
    $offset = ($page - 1) * $perPage;

    $searchQuery = isset($_GET['searchQuery']) ? $_GET['searchQuery'] : '';

    $query = "SELECT * FROM `nft` WHERE nombre LIKE ? LIMIT ?, ?";
    $data = array();

    
    if ($stmt = $connection->prepare($query)) {
        // Agrega % al principio y al final del término de búsqueda para buscar coincidencias parciales
        $searchQuery = '%' . $searchQuery . '%';
        
        $stmt->bind_param('sii', $searchQuery, $offset, $perPage);
        $stmt->execute();
        $result = $stmt->get_result();

        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        $stmt->close();
        echo json_encode($data);
    } else {
        echo json_encode(array('error' => 'Error en la consulta SQL'));
    }
}















// ACTIVAR MODAL
if (isset($_GET['card']) && $_GET['card'] == 'modal') {
    if (isset($_POST['product_id'])) {
        $product_id = intval($_POST['product_id']); // Convierte a entero para seguridad
        $query = "SELECT * FROM `nft` WHERE `id` = ?";

        // Utiliza una consulta preparada para evitar la inyección de SQL.
        if ($stmt = $connection->prepare($query)) {
            $stmt->bind_param('i', $product_id);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                echo json_encode($row);
            } else {
                echo json_encode(array('error' => 'Producto no encontrado'));
            }

            $stmt->close();
        } else {
            echo json_encode(array('error' => 'Error en la consulta SQL'));
        }
    } else {
        echo json_encode(array('error' => 'ID de producto no proporcionado'));
    }
}
?>
