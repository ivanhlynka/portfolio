<?php
if (isset($_POST["user_email"]) && isset($_POST["user_phone"]) && isset($_POST["user_message"]) ) { 

	// Формируем массив для JSON ответа
    $result = array(
    	'user_email' => $_POST["user_email"],
        'user_phone' => $_POST["user_phone"]
    	'user_message' => $_POST["user_message"]
        
    ); 

    // Переводим массив в JSON
    echo json_encode($result); 
}

?>