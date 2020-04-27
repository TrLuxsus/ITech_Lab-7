<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <meta http-equiv = "X-UA-Compatible" conten = "IE=edge">
    <title>Dima Moruha trying AJAX</title>
    <meta name = "viewport" content = "width=device-width, initial-scale=1">
    <link rel = "stylesheet" type = "text/css" media = "screen" href = "main.css">
    <script src = "js/main.js"></script>
</head>
<body>
    <?php 
    include "php/connection.php"; 
    ?>
    
    <form method = "GET">
        PC's by CPU<br>

        <select id = "select_CPU">
            <?php include "php/load_data/get_CPU.php"; ?>
        </select>

        <input type = "button" value = "Get" onclick = "getByCPU()">

        <div id = "result_CPU"></div>
    </form>

    <form method = "GET">
        PC's by Software<br>
        <select id = "select_Software">
            <?php include 'php/load_data/get_Software.php'; ?>
        </select>
        <input type = "button" value = "Get" onclick = "getBySoftware()">

        <div id = "result_Software"></div>
    </form>

    <form method = "GET">
        PC's with expired guarantee<br>
        <input type = "button" value = "Get" onclick = "getExpired()">
        
        <div id = "result_Expired"></div>
    </form>
   
</body>
</html>