<!DOCTYPE html>
<html lang="en">
		
        <?php
	
        $host = "localhost";
        $user = "root";
        $pass = "";
        $banco = "cadastro";
        $conexao = @mysql_connect($host, $user, $pass) or die(mysql_error());
        mysql_select_db($banco) or die(mysql_error());
   
        session_start();
         
        if((!isset ($_SESSION['user']) == true) and (!isset ($_SESSION['pass']) == true)) {
	  unset($_SESSION['user']);
	  unset($_SESSION['pass']);
	  header('location:entraGrupo.html');	
        }
?>
	
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Bem vindo ao Grupo </title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>

	<!-- Inicio da NavBar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<!-- logo do site -->
                <a class="navbar-brand" href="index.html"><img src="assets/img-fonts/logo.png" alt="Progressus HTML5 template"></a>
                
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="active"><a href="index.html">Página Inicial</a></li>
					<li><a href="criaGrupo.html">Criar Grupo</a></li>
                                    <li><a href="Grupo.php">Bem vindo ao grupo: <?php echo $_SESSION['user']; ?> </a></li>
				
					<li><a href="logout.php">Sair</a></li>
				
					
				</ul>
			</div>
		</div>
	</div> 
	<!-- Fim da NavBar -->
    
    
    
	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.html">Home</a></li>
			<li class="active">User access</li>
		</ol>

		<div class="row">
			<h1>Marcar Evento </h1>
            <h4>Fixe as datas das suas provas, trabalhos e seminários </h4>
             <br><br>
			

		</div>
	</div>	<!-- /container -->
	
    <!-- /Inicio do Formulario para marcação do evento -->
  <form class="form-horizontal" name="formulario" action="processa_eventos.php" method="post">
<fieldset>
<!-- Text input Insere Data-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Data">Data</label>  
  <div class="col-md-4">
  <input id="Data" name="data" type="Date" placeholder="dd/mm/aaaa" class="form-control input-md">
  </div>
</div>
<!-- Text input Insere Data -->
<!-- Select Basic Marca Evento -->
<div class="form-group">
  <label class="col-md-4 control-label" for="tipo_evento">Evento</label>
  <div class="col-md-4">
    <select id="tipo_evento" name="tipo_evento" class="form-control">
      <option value="">--</option>
      <option value="Projeto">Projeto</option>
      <option value="Prova">Prova</option>
      <option value="Seminario">Seminário</option>
      <option value="Trabalho">Trabalho</option>
      <option value="Visita tenica">Visita técnica</option>
    </select>
  </div>
</div>
<!-- Select Basic Marca Evento -->


<!-- Textarea Detalhes do Evento -->

<div class="form-group">
  <label class="col-md-4 control-label" for="Detalhes do Evento">Detalhes do Evento</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="Detalhes do Evento" name="detalhes_evento">Insira aqui detalhes do evento...</textarea>
  </div>
</div>
<!-- Textarea Detalhes do Evento -->

<!-- Button Marcar evento -->
<div class="form-group">
  <label class="col-md-4 control-label" for="marcar_evento">Confirmar evento </label>
  <div class="col-md-4">
    <button id="marcar_evento" name="marcar_evento" class="btn btn-primary" onClick="return validarselect()">Marcar </button>
  </div>
</div>
<!-- Button Marcar evento -->
</fieldset>
</form>
<!-- /Fim do Formulario -->
 <hr>
  <br>  <br>  <br>  <br>  <br>  <br>
<!-- Inicio do Rodapé -->
		<div class="footer2">
			<div class="container">
				<div class="row">	
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
								<a href="#">Página Inicial</a> | 
								<a href="about.html">Criar Grupo</a> |
								<a href="sidebar-right.html">Entrar no grupo</a> |
								
							</p>
						</div>
					</div>
</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>
<!-- Fim do Rodapé -->
	</footer>	
		

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
    
<script language="javascript">

//function validarselect(){

//if(document.getElementById("tipo_evento").selectedIndex == ""){
//window.alert("É obrigatório a escolha do evento.");
//document.getElementById("tipo_evento").focus();
//return false;
//}
 
 //if(document.getElementById("disciplina").selectedIndex == "" ){
//window.alert("É obrigatório a escolha da disciplina.");
//document.getElementById("disciplina").focus();
//return false;
//}
 
 
//}

</script>

    
</body>
</html>
