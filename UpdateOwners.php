<?php

$mysqli = new mysqli('localhost', 'root', '', 'car_service'); // Створюємо нове підключення з назвою $mysqli за допомогою створення об'єта класу mysqli. Параметри підключення по порядку: сервер, логін, пароль, БД
$mysqli->set_charset("utf8"); // Встановлюємо кодування utf8

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}
if(isset($_POST["first _name"]) || isset($_POST["last_name"]) || isset($_POST["phone_number"]) || isset($_POST["owners_id"])  ){
  
    
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $phone_number = $_POST["phone_number"];
    $owners_id = $_POST["owners_id"];


    $sql = "UPDATE owners SET first_name='$first_name', last_name='$last_name', phone_number='$phone_number' WHERE owners_id='$owners_id'";

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

include("ShowOwners.php")
?>
