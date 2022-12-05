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
        include("ShowOwners.php")    
    ?>

<form action="UpdateOwners.php" method="post">
        <label>ІД рядка який змінюємо</label><input name="owners_id" type="text"><br>
        <label>Нове значення Ім'я</label><input name="first_name" type="text"><br>
        <label>Нове значення Прізвища</label><input name="last_name" type="text"><br>
        <label>Нове значення номера телефону</label><input name="phone_number" type="text"><br>
        <input type="submit" value="Змінюємо рядок">
</form>

</body>
</html>