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

<form action="UpdateCars.php" method="post">
        <label>ІД рядка який змінюємо</label><input name="cars_id" type="text"><br>
        <label>Нове значення ІД Власника</label><input name="owners_id" type="text"><br>
        <label>Нове значення марки</label><input name="car_brand" type="text"><br>
        <label>Нове значення номера машини</label><input name="car_number" type="text"><br>
        <input type="submit" value="Змінюємо рядок">
</form>

</body>
</html>