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

    <form method="POST" action="InsertIntoJobCategory.php" >
        <label>ІД роботи</label><input type="text" name="job_id"><br>
        <label>Назва роботи</label><input type="text" name="name_job" ><br>
        <label>Ціна роботи</label><input type="text"name="price" ><br>
        <input type="submit" value="Вставити рядок">
    </form>

</body>
</html>
