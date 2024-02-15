<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $textInput = $_POST['textInput'];

    // Параметры для отправки письма
    $to = "rum-44@mail.ru";
    $subject = "=?UTF-8?B?".base64_encode("Новая заявка с сайта $textInput")."?=";
    $message = "Заявка с вашего сайта принята\n Имя: $name\nТелефон: $phone\nДополнительная информация: $textInput";
    $headers = "From: info@alklimova.ru";
    $headers .= "\nMIME-Version: 1.0\n" .
    "Content-Type: text/plain; charset=UTF-8\n" .
    "Content-Transfer-Encoding: quoted-printable\n";

    // Добавляем подписи
    $signature = "\n\n--\nС уважением, Александра Климова \n\n";
    $message .= $signature;

    // Отправляем письмо
    if (mail($to, $subject, $message, $headers)) {
        echo "Письмо успешно отправлено";
    } else {
        echo "Ошибка при отправке письма";
    }
}
?>
