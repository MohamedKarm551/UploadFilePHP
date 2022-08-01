<?php 
echo 'print_r($_FILES)';
echo "<pre>";
print_r($_FILES);
// 
echo "<hr>";
// 
echo "
print_r(".'$_FILES['."file".'])';

print_r(
$_FILES['file']);
$name=$_POST['nameIt'];
// 
echo"name: " . $name;
// 
$extension=explode("/",$_FILES['file']['type']);
print_r( $extension);
print_r( $extension[1]);
// =====
move_uploaded_file($_FILES['file']['tmp_name'],
$name.".".$extension[1]);
?>