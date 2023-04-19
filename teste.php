<?php
    //Método HTTP
    echo "Método:<br>";
    echo $_SERVER['REQUEST_METHOD'];

    //headers
    echo "<br><br>Headers:<br>";
    $headers = getallheaders();
    print_r($headers);


    //post
    echo "<br><br>Posts:<br>";
    $input =  file_get_contents('php://input');
    $array = json_decode($input, true);
    $_POST = !empty($array) ? $array : $_POST;
    print_r($_POST);

/* 
    //Resposta
    echo "<br><br>Resposta<br>";
    $response_array = [
        'codigo' => 200,
        'sucesso' => true
    ];

    //Convertendo array para Json
    echo json_encode($response_array); */
?>