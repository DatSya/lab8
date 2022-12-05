<?php

$mysqli = new mysqli('localhost', 'root', '', 'car_service'); // Створюємо нове підключення з назвою $mysqli за допомогою створення об'єта класу mysqli. Параметри підключення по порядку: сервер, логін, пароль, БД
$mysqli->set_charset("utf8"); // Встановлюємо кодування utf8

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}
if(isset($_POST["owners_id"]) || isset($_POST["car_brand"]) || isset($_POST["car_number"])  ){
  
    $owners_id = $_POST["owners_id"];
    $car_brand= $_POST["car_brand"];
    $car_number = $_POST["car_number"];



$sql = "INSERT INTO cars (owners_id, car_brand, car_number) VALUES ('$owners_id','$car_brand' , '$car_number')";

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

include("ShowCars.php")

?>