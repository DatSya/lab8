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
        include("ShowService.php")    
    ?>

<form action="UpdateService.php" method="post">
        <label>ІД рядка який змінюємо</label><input name="service_id" type="text"><br>
        <label>Нове значення ІД машини</label><input name="car_id" type="text"><br>
        <label>Нове значення ІД роботи</label><input name="job_id" type="text"><br>
        <label>Нове значення кінцевої дати</label><input name="end_date" type="date"><br>
        <label>Нове значення ІД робітника</label><input name="worker_id" type="text"><br>
        <input type="submit" value="Змінюємо рядок">
</form>

</body>
</html>