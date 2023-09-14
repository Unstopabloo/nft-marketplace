<?php

require('connection.php');

if(isset($_GET['card']) && $_GET['card']=='get_cards'){ 

	$query='SELECT * FROM `nfts`';

	$resource = $connection->query($query); 
	$total = $resource->num_rows;
	$data=array();
	while ($row = $resource->fetch_assoc()){
		$data[]=$row;
	}
	
	//echo "<pre>",print_r($data,1),"</pre>";
	echo json_encode($data);
}require('connection.php');



// if(isset($_GET['card']) && $_GET['card'] == 'modal'){
//     // Validar y escapar $_POST['product_id'] para evitar SQL injection
//     if(isset($_POST['product_id'])){
//         $product_id = intval($_POST['product_id']); // Convierte a entero para seguridad
//         $query = "SELECT * FROM `nft` WHERE `id` = $product_id";

//         // Realizar la consulta y manejar posibles errores
//         $resource = $connection->query($query);
//         if($resource === false){
//             // Manejar el error, por ejemplo, mostrando un mensaje de error o registrándolo
//             echo "Error en la consulta SQL: " . $connection->error;
//         } else {
//             $total = $resource->num_rows;
//             if($total > 0){
//                 $row = $resource->fetch_assoc();
//                 echo json_encode($row);
//             } else {
//                 echo json_encode(array('error' => 'Producto no encontrado'));
//             }
//         }
//     } else {
//         echo json_encode(array('error' => 'ID de producto no proporcionado'));
//     }
// }