<?php


$uploaddir = 'www/local/files';
$uploadfile = $uploaddir . basename($_FILES['files']['name']);

if (move_uploaded_file($_FILES['files']['tmp_name'], $uploadfile)) {
	echo json_encode("Добавленно!", JSON_UNESCAPED_UNICODE);
}
else
{
	echo json_encode("Ошибка загрузки, повторите позже!", JSON_UNESCAPED_UNICODE);
}




