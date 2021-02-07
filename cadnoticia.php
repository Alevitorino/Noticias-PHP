<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
		<script type="text/javascript">
			window.onload = function()  {
			CKEDITOR.replace( 'editor1' );
		};
    </script>   
	</head>
	<body>
		<?php include('barnavigation.php') ?> 
		<div class="container-fluid">
		<!-- Formulario --> 
			<form action="insnoticia.php" method="POST">
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="inputEmail4">Titulo</label>
						<input type="title" class="form-control" name="titulo" id="title" placeholder="Digite o título">
					</div>
					<div class="form-group col-md-6">
						<label for="inputPassword4">Data</label>
						<input type="date" class="form-control" name="data" id="date" placeholder="Digite a data">
					</div>
				</div>
				<div class="form-group">
					<label for="exampleFormControlTextarea1">Digite o texto</label>
					<textarea id="editor1" name="texto">&lt;p&gt;&lt;/p&gt;</textarea>
				</div>
					<button type="submit" class="btn btn-success">Publicar</button>
			</form>
		</div>	
		<!-- Jquery e Java <3 -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
	</body>
</html>	