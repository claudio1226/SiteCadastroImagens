<?php
 
 $conn = new PDO('mysql:host=localhost;dbname=banco','root', '');
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   $sql="SELECT * FROM tb_dados_conteudo ORDER BY cod_numero desc limit 10";
  $dados=$conn->query($sql);

?>
<html>
	<head>
		<title>Site-Web</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
					<a href="#">Cadastro</a>
					<a href="login_adm.php">Login</a>
				</nav>
			</div>
		
		</div>

		<div id="corpo_pagina_conteudo">
		<?php foreach($dados as $linha){ ?>
		<div id="corpo_pagina_conteudo_conteudo">
		<hr>	
			<div id="div_01">
				<div id="cod_numero">
					<?=$linha['cod_numero'];?>
				</div>
			
				<div id="data_hora">
					<?=$linha['data_hora'];?>
				</div>
			</div>
			
			<div id="div_02">
				<div id="titulo">
					<?=$linha['titulo_conteudo'];?>
				</div>
			
				<div id="sub_titulo">
					<?=$linha['sub_titulo'];?>				
				</div>
			</div>

			<div id="imagem_img">
					<img src="<?=$linha['imagem_img'];?>">
			</div>
	
			<div id="conteudo">
					<p>
					<?=$linha['conteudo'];?>
					</p>
			</div>

			<div id="autor">
			<b>Autor:</b>
					<?=$linha['autor_nome'];?>	
		</div>	
		<?php } ?>	
		</div>
		
		
		<div id="menu_rodape">
		</div>
		
		<div id="rodape">
		
			UCP – Faculdades do Centro do Paraná – Av. Universitária, S/N – Pitanga – PR<br>
			<b>Aluno:</b> Juliano Claudio Lino - <b>Fone:</b> 9854-0590 <b>E-mail:</b> Juliano.C.Lino@hotmail.com
		
		</div>
	</div>
</body> 
    