<?

$_SESSION['id'] = NULL;
setcookie('pass',NULL,time()-3600);
header('Location: index.php');
?>
