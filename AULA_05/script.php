<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-stone-900">
    <div class="w-full flex flex-col items-center justify-center h-[100vh]">
        <div>
            <?php
            $number = intval($_POST["quantidade"]);
            $palavra = $_POST["palavra"];

            for ($i = 1; $i < $number; $i++) {
                echo "<p class='text-white font-bold text-[32px] animate-bounce'>" . $palavra . "<p>";
            } ?>
        </div>
    </div>
</body>


</html>