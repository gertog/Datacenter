<html>
<head>
</head>
<body>
<?PHP

if(isset($_GET['subject'])){
	$subject=$_GET['subject'];
}
if(isset($_GET['page'])){
	$page=$_GET['page'];
}
$link='';
set_include_path('/var/www/html/training/');
include 'inc_/header.php';

if(!empty($subject)){
  If(!empty($page)){
    $subject.=$page;
	
  }
  else{
    $subject.='1';

  }
}
else{

  $subject='index1';
}

$link = 'inc_/'.$subject.'.php';
include($link);
include 'inc_/footer.php';
?>
</body>
</html>
