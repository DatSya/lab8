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

    <form method="POST" action="InsertIntoService.php" >
        <label>ІД машини</label><input type="text" name="car_id" ><br>
        <label>ІД роботи</label><input type="text"name="job_id" ><br>
        <label>Кінцева дата</label><input type="date"name="end_date" ><br>
        <label>ІД робітника</label><input type="text"name="worker_id" ><br> 
        <input type="submit" value="Вставити рядок">
    </form>

</body>
</html>
