<html>
	<head>
		<title>Lista 02 - CSS</title>
		<meta charset="utf-8">
		
		<link rel="stylesheet" type="text/css" href="css/site_dados.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/default.css">
	</head>
  
<body>
	<div id="pagina_mestra"><!-- Inicio corpo pagina raiz-->
	
		<nav id="mainNav" class="navbar navbar-default navbar-fixed-top"><!-- Inicio comando nav -->
        <div class="container-fluid">
            

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="page-scroll" href="index.php">Inicio</a></li>
					
					
                    <li><a class="page-scroll" href="#rodape">Contato</a></li>
                </ul>
            </div>
            
        </div>
        <!-- /.container-fluid -->
		</nav><!-- Fim comando nav -->
	
		<div id="banner"><!-- Inicio div banner -->
		</div><!-- Fim div banner -->
		
		<div id="menu_pricipal"><!-- Inicio menu principal -->
			
			<div>
				<nav class="codrops-demos">
					<a href="index.php">Inicio</a>
				</nav>
			</div>
			
		</div><!-- Fim menu principal -->
		
		<div id="corpo_pagina_conteudo"><!-- Inicio div corpo conteudo -->
			<hr>
			<div class="container">    
			<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-4 col-md-offset-2 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="p   el-title">Login</div>
                        
                        </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" role="form" action="validar.php" method="GET">
                                 <!-- LOGIN   -->    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login" type="text" class="form-control" name="login" value="" placeholder="usuario"> 
                            </div>
                                     <!-- campo SENHA -->
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="senha" type="password" class="form-control" name="senha" placeholder="senha">
                            </div>
                                    

                                
                            <div style="margin:10px" class="form-group">
                                   <!-- Button -->
                                <div class="col-sm-12 controls">
                                    <input type="submit" class="btn btn-success" value="Login"> 
                                 </div>
                            </div>

                        </form>     

                      </div>                     
                    </div>  
                  </div>      
            </div><!-- Fecha classe container -->
		</div><!-- Fecha div corpo conteudo -->
			
		
		<div id="menu_rodape"><!-- Inicio menu rodape -->
		</div><!-- Fecha div menu rodape -->
		
		<div id="rodape"><!-- Inicio rodape -->
		
			UCP – Faculdades do Centro do Paraná – Av. Universitária, S/N – Pitanga – PR<br>
			<b>Aluno:</b> Juliano Claudio Lino - <b>Fone:</b> 9854-0590 <b>E-mail:</b> Juliano.C.Lino@hotmail.com
		
		</div><!-- Fecha rodape -->
	</div><!-- Fecha pagina mestra -->
</body> 
    