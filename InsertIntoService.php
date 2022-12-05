<?php

$mysqli = new mysqli('localhost', 'root', '', 'car_service'); // Створюємо нове підключення з назвою $mysqli за допомогою створення об'єта класу mysqli. Параметри підключення по порядку: сервер, логін, пароль, БД
$mysqli->set_charset("utf8"); // Встановлюємо кодування utf8

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}
if( isset($_POST["car_id"]) || isset($_POST["job_id"]) || isset($_POST["end_date"]) || isset($_POST["worker_id"]) ){
  
    
    $car_id = $_POST["car_id"];
    $job_id = $_POST["job_id"];
    $end_date = $_POST["end_date"];
    $worker_id = $_POST["worker_id"];


$sql = "INSERT INTO service ( car_id, job_id, end_date, worker_id) VALUES ('$car_id' , '$job_id', '$end_date', '$worker_id')";

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

include("ShowService.php")

?>