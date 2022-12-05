<?php

$mysqli = new mysqli('localhost', 'root', '', 'car_service'); // Створюємо нове підключення з назвою $mysqli за допомогою створення об'єта класу mysqli. Параметри підключення по порядку: сервер, логін, пароль, БД
$mysqli->set_charset("utf8"); // Встановлюємо кодування utf8

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}
if(isset($_POST["car_id"]) || isset($_POST["job_id"]) || isset($_POST["end-date"]) || isset($_POST["worker_id"]) || isset($_POST["service_id"])  ){
  
    
    $car_id = $_POST["car_id"];
    $job_id = $_POST["job_id"];
    $end_date= $_POST["end_date"];
    $worker_id= $_POST["worker_id"];
    $service_id = $_POST["service_id"];


    $sql = "UPDATE service SET car_id='$car_id', job_id='$job_id', end_date='$end_date', worker_id='$worker_id' WHERE service_id='$service_id'";

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
