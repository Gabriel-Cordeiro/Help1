<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        //Pega token da api para autenticar outros metodos
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://localhost:50871/Token");
        curl_setopt($ch, CURLOPT_POST, 1); // set post data to true
        
        /*Usuário e senha da tabela adm do banco de dados, ao informar a api reconhece o usuário
        e cria um token válido por uma hora*/
        curl_setopt($ch, CURLOPT_POSTFIELDS, "username=HelpOneApi&password=helponeapi2018&grant_type=password");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        //Salva token no formato json
        $json = curl_exec($ch);
        
        //Objeto json com valor do token
       
        //print_r($json);
        
        //Token é salvo na várial $token com apenas o valor do token retornado pela Api
        $json   = json_decode($json);
        $token = $json->access_token;
       
        //print_r($token);
        
        curl_close($ch);
        
        //Modelo de Get válidos para qualquer metodo da api, bastanto mudar a URL
        //Teste para pegar usuarios
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://localhost:50871//api/usuarios");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer ' . $token));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 0);
        
        $curl_response = curl_exec($ch);
        
        //Print do objeto json
        print_r($curl_response);
        
        curl_close($ch);
        ?>
    </body>
</html>
