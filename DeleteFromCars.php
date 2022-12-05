<?php

$mysqli = new mysqli('localhost', 'root', '', 'car_service'); // Створюємо нове підключення з назвою $mysqli за допомогою створення об'єта класу mysqli. Параметри підключення по порядку: сервер, логін, пароль, БД
$mysqli->set_charset("utf8"); // Встановлюємо кодування utf8

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}


if(isset($_POST["cars_id"]) ){
  
    $cars_id= $_POST["cars_id"];



$sql = "DELETE FROM cars WHERE cars_id='$cars_id'";


if($mysqli->query($sql)){
    echo "Рядок видалено успішно";
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
