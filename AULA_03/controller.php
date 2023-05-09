<?php

$email = $_POST['email'];
$name = $_POST['name'];

if (isset($email) && isset($name)) {

    echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FORMS</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-stone-800">
         <a href="http://localhost/AULAS/AULA_03/" class="text-white font-bold m-5 text-[25px]">Voltar</a>
        <div class="flex items-center  flex-col justify-center h-[100vh]">
                <h1 class="font-bold text-[55px] text-green-500">Bem-vindo/a ' . $name . '</h1>
                <p class="font-semibold text-white text-[25px]">Email:  ' . $email . '</p>
              
        </div>
    </body>
    </html>';
}
