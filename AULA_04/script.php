<?php


if ($_POST) {
    $name = $_POST['name'];
    $nota1 = number_format($_POST['n1']);
    $nota2 = number_format($_POST['n2']);
    $curse = $_POST['selectcurse'];

    $calculo = 2 / ($nota1 + $nota2);

    if ($calculo >= 5) {
        echo '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Verificar Nota</title>
            <script src="https://cdn.tailwindcss.com"></script>
        </head>
        <body class="bg-stone-900">
            <div class="flex items-center justify-center w-full h-[100vh]">
                <div class="flex items-center justify-center w-[40%] h-[70vh] bg-white rounded-lg">
                <h1 class="font-bold text-[25px]  ">`Parabens  o aluno   ' . $name .  '  do curso ' . $curse . '  </h1>
                <h1 class="font-bold text-[60px] text-green-600 "> APROVADO</h1>
             
        </div>
        </div>
        </body>
        </html>';
    } else if ($calculo < 5) {
        echo '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Verificar Nota</title>
            <script src="https://cdn.tailwindcss.com"></script>
        </head>
        <body class="bg-stone-900">
            <div class="flex flex-col items-center justify-center w-full h-[100vh] text-white">
                   
            <h1 class="font-bold text-[25px]  ">Sinto muito  o aluno   ' . $name .  '  do curso ' . $curse . ' foi </h1>
            <h1 class="font-bold text-[60px] text-red-600 "> REPROVADO</h1>
             
    
        </div>
        </body>
        </html>';
    }
}
