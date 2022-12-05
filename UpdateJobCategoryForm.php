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
        include("ShowJobCategory.php")    
    ?>

<form action="UpdateJobCategory.php" method="post">
        <label>ІД рядка який змінюємо</label><input name="job_id" type="text"><br>
        <label>Нове значення назва роботи</label><input name="name_job" type="text"><br>
        <label>Нове значення ціни</label><input name="price" type="text"><br>
        <input type="submit" value="Змінюємо рядок">
</form>

</body>
</html>