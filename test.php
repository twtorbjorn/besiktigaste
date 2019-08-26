<?php




if($_SERVER['HTTPS']!="on") {

	$redirect= "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

	header("Location:$redirect"); 
} 



	$_SERVER['DOCUMENT_ROOT'] = "C:/Users/Kenneth Jakobsson/Documents/Mina webbplatser/besiktigaste2/";	   
    $root = $_SERVER['DOCUMENT_ROOT'];
    //folder for functions, headers and so forth
    $includes = $root.'/assets/scripts/';
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="/assets/style/main-screen3.css">  
</head>

<body>
<p>hej</p>

<?php
echo "<p>ROOT: " . $root . "</p>";
echo "<p>includes: " . $includes . "</p>";
phpinfo()
?>
</body>
</html>