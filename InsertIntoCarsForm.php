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
        include("ShowCars.php")    
    ?>

    <form method="POST" action="InsertIntoCars.php" >
        <label>ІД Власника</label><input type="text" name="owners_id"><br>
        <label>Марка машини</label><input type="text" name="car_brand" ><br>
        <label>Номер машини</label><input type="text"name="car_number" ><br>
        <input type="submit" value="Вставити рядок">
    </form>

</body>
</html>
