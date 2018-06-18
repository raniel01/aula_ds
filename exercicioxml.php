<!DOCTYPE html>
<html>
<head>
	<title>Exercicio XML</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1 ">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="style.css">

</head>
<body>
	<p ></p>
<?php
$xml='<?xml version="1.0" encoding="ISO-8859-1"?>
<array>
	<materia>
		<titulo>
		Nome: Raniel Santos Silva /
		E-mail: raniel.silva01@etec.sp.gov.br
		</titulo>
	</materia>
</array>';
$xml=simplexml_load_string($xml);
echo $xml->materia->titulo.'<br><br>';

$link="exercicio.xml";
$xml=simplexml_load_file($link)->viagens;
echo '<table class="tab">
	<tr>';
foreach ($xml->lugares as $lugares) {
	echo '<td class="cel">';
	echo '<p style="text-align: center;"><strong>Titulo:</strong>'.utf8_decode($lugares->titulo).'</p>';
	echo '<img src="'.$lugares->imagem.'" width="200px" height="150px"><br><br>';
	echo '<p style="text-align: justify;"><strong>Descrição:</strong>'.utf8_decode($lugares->descricao).'</p><br></td>';
}
echo "</tr><table>";
?>

	
</div>
</body>
</html>
