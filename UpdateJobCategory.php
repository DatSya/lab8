<?php

$mysqli = new mysqli('localhost', 'root', '', 'car_service'); // Створюємо нове підключення з назвою $mysqli за допомогою створення об'єта класу mysqli. Параметри підключення по порядку: сервер, логін, пароль, БД
$mysqli->set_charset("utf8"); // Встановлюємо кодування utf8

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}
if( isset($_POST["job_id"]) || isset($_POST["name_job"]) || isset($_POST["price"]) ){
  
    
    $job_id = $_POST["job_id"];
    $name_job = $_POST["name_job"];
    $price = $_POST["price"];
    ;


    $sql = "UPDATE job_category SET name_job='$name_job', price='$price' WHERE job_id='$job_id'";

if($mysqli->query($sql)){
    echo "Рядок вставлено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    } 
}
/*Закриваємо з'єднання*/
$mysqli->close();

include("ShowJobCategory.php")
?>