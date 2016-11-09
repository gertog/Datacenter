<?PHP
$subject=$_GET['subject'];
$page=$_GET['page'];
$link='';
set_include_path('/var/apache2/htdocs/training/inc_');
include 'header.php';

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

$link = $subject.'.php';
include($link);		
include 'footer.php';
?>

