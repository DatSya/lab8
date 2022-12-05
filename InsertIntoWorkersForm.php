<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Вставка даних</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        include("ShowWorker.php")    
    ?>

    <form method="POST" action="InsertIntoWorkers.php" >
        <label>Ім'я</label><input type="text" name="first_name"><br>
        <label>Прізвище</label><input type="text" name="last_name" ><br>
        <label>Номер телефону</label><input type="text"name="phone_number" ><br>
        <input type="submit" value="Вставити рядок">
    </form>

</body>
</html>
