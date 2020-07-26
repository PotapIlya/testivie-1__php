<?

$first = $_POST['first'];
$second = $_POST['second'];

$nameFile = $_FILES['files']['name'];

$uploaddir = 'file/';
$uploadfile = $uploaddir . basename($_FILES['files']['name']);

move_uploaded_file($_FILES['files']['tmp_name'], $uploadfile);




$fd = fopen('file/'.$nameFile, 'r');
while(!feof($fd))
{
	$str = htmlentities(fgets($fd));
	$test = str_replace($first, $second, $str);

	echo json_encode($test, JSON_UNESCAPED_UNICODE);
}
fclose($fd);

