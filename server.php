<?php 
$paragraph = $_GET['paragraph'];
$word = $_GET['word'];

var_dump($_GET);

$sentence = str_replace($word,'***',$paragraph);

// Lunghezza della frase prima della censura
echo strlen($paragraph);

echo $sentence;

// Lunghezza della frase dopo la censura
echo strlen($sentence);
?>

<h1><?php echo $sentence ?></h1>