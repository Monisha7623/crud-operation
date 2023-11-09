<?php
error_reporting(0);

header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
header('Action-Control-Allow-Method:PUT');
header('Access-COntrol-Allow: Content-Type,Access-Control-Allow-Header, Authorization, x-Request-with');

include('function.php');
$requestMethod = $_SERVER['REQUEST_METHOD'];

if($requestMethod == 'PUT'){

    $inputData = json_decode(file_get_contents("php://input"), true);
    $updateCustomer = updateCustomer($inputData, $_GET  );
    echo $updateCustomer;

}else{
    $data = [
        'status' => 405,
        'message' => $requestMethod. '  Method Not Allowed',
    ];
    header("HTTP/1.0 405 Method Not Allowed");
    echo json_encode( $data);

}

?>