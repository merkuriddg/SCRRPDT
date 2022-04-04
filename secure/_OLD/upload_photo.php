<?php 

$message = 'Received New Photo ' . $file['name'];
$dir_upload = 'upload/';
$max_size = 2000000;

$file = $_FILES['example'];

if ($file['size'] <= $max_size && $file['size'] > 0) {
	$new_name = time() . '-' . $file['name'];
	$copied = copy($file['tmp_name'], $dir_upload . $new_name);

	if ($copied) {
		$message = 'Ok!';
	} else {
		$message = 'Error!';
	}
} else {
	$message = 'Max file size 2MB!';
}

echo json_encode(array("message" => $message));

?>
