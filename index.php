
<html>
<head>
</head>
<body>
<?php
	include_once('topo.php');
    include_once("menu.php");
	?>
	<div class='container'>
	<?php
	if(empty($_SERVER["QUERY_STRING"])){
	        $var = "conteudo.php";
	        include_once("$var");
	}else {
            $pg = $_GET['pg']; 
	        include_once("$pg.php");
	}
	?>
	</div>
	<?php
		include_once('rodape.php');
	?>
</body>
</html>
