<html>
	<head>
		<script language="JavaScript" type="text/javascript">
			alert("Publicado com sucesso");
			history.back();
		</script>
	</head>
	<body>
		<?php //insnoticia.php
		include("conexao.php");
	
		$titulo = $_POST['titulo'];
		$texto = $_POST['texto'];
		$data = $_POST['data'];
 
		$sql =	"insert into tblnoticias (titulo,texto,data) values ('$titulo','$texto','$data')";
		$qry =	mysqli_query($conn,$sql);
		if(!$qry){
		echo "<h1>Falha no Cadastro!</h1>";
		}
		?>			
	</body>
</html>	