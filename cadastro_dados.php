<?php
	@$cod_numero = $_POST['cod_numero'];
	@$titulo_conteudo = $_POST['titulo_conteudo'];
	@$sub_titulo = $_POST['sub_titulo'];
	@$imagem_img = $_POST['imagem_img'];
	@$data_hora = $_POST['data_hora'];
	@$conteudo = $_POST['conteudo'];
	@$autor_nome = $_POST['autor_nome'];
	
	
if($autor_nome){
 $conn = new PDO('mysql:host=localhost;dbname=banco','root', '');
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 $query="INSERT INTO tb_dados_conteudo set 
	cod_numero='{$cod_numero}',
	titulo_conteudo='{$titulo_conteudo}',
	sub_titulo='{$sub_titulo}',
	imagem_img='{$imagem_img}',
	data_hora='{$data_hora}',
	conteudo='{$conteudo}',
	autor_nome='{$autor_nome}'";
 $conn->query($query);
 
 $sql="SELECT * FROM tb_dados_conteudo";
 $dados=$conn->query($sql);
 
}//variaveis

?>
<html>
	<head>
		<title>Inserção dados_site</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/site_dados.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/default.css">
	</head>
  
<body>
	<div id="pagina_mestra">
	
		<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="page-scroll" href="index.php">Inicio</a></li>
					
                    <li><a class="page-scroll" href="#corpo_pagina_conteudo">Conteudo</a></li>
					
                    <li><a class="page-scroll" href="#rodape">Contato</a></li>
                </ul>
            </div>
            
        </div>
        <!-- /.container-fluid -->
		</nav>
		
		<div id="banner">
		</div>
		
		<div id="menu_pricipal">
		
			<div>
				<nav class="codrops-demos">
					<a href="index.php">Inicio</a>
					<a href="login_adm.php">Sair</a>
				</nav>
			</div>
		
		</div>
		
		<div id="corpo_pagina_conteudo">
			<hr>
			<form class="" action="cadastro_dados.php" id="formulario" method="post">
				<legend>Formulário Cadastro Dados</legend>
					
				<fieldset>	
					<label for="titulo_conteudo" class="">Titulo</label>
						<input type="text" class="" id="titulo_conteudo" name="titulo_conteudo">
						
					<label for="sub_titulo" class="">Sub-Titulo</label>
						<input type="text" class="" id="subtitulo" name="sub_titulo">
						
					<label for="imagem_img" class="">Link Imagem</label>
						<input type="text" class="" id="imagem_img" name="imagem_img">
				</fieldset>
				
				<fieldset>	
					<label for="conteudo" class="">Conteudo</label>
						<textarea type="text" class="" id="conteudo_site" name="conteudo">
						</textarea>
<!--				</fieldset>
				
				<fieldset>	
					<label for="imagem_img" class="">Imagem</label>
						<input type="text" class="" id="imagem_img" name="imagem_img">
				</fieldset>
-->			
				<fieldset>	
					<label for="autor_nome" class="">Autor</label>
						<input type="text" class="" id="autor_nome" name="autor_nome">
				</fieldset>

				<button type="submit" id="botao_gravar">Postar</button>
				<button type="" id="botao_gravar">Sair</button>

			</form>
		
		</div>
		
		<div id="menu_rodape">
		</div>
		
		<div id="rodape">
		</div>
	</div>
</body> 
    