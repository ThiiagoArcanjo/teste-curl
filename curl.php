<?php
    //Inicializando curl
    $curl = curl_init();
    
    //HEADERS
    $headers = [
        'Authorization: Bearer 123412341234123414',
        'Content-Type: application/json'
    ];
    
    //Corpo do post
    $post = [
        'nome' => 'Thiago Arcanjo De Oliveira',
        'canal' => 'ThunderCat'
    ];

    //Corpo JSON
    $json = json_encode($post);
    echo $json;

   /*  //Endpoint da API
    curl_setopt($curl, CURLOPT_URL,"http://localhost/phptestes/teste-curl/teste.php");
    //Tipo de requisição
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST,"GET");
    //Retorna ou não o conteúdo que o curl requer
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); */

    //Definindo opções com array
    curl_setopt_array($curl,[
        CURLOPT_URL => "http://localhost/phptestes/teste-curl/teste.php",
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => $headers,
        /* CURLOPT_POSTFIELDS => $post //Post direto */
        CURLOPT_POSTFIELDS => $json
    ]);

    //Executando requisição
    $response = curl_exec($curl);

    //Fechando requisição
    curl_close($curl);


    echo $response;
?>