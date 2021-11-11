<!DOCTYPE html>
<html lang="pt-br">
  <head>
  <link rel="stylesheet" href="style2.css">
     <meta charset="UTF-8">
	 <meta http-equiv="X-UA-Compatible" content="Ie-edge">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Cadastro</title>
	<style type="text/css" >
	<script defer src="./style.js"> 
	  </script>
</head>
<body>
   
	<!--
		body {
			padding:0px;
			margin:0px;
			background-image: url(cadastro.png);
			background-repeat: no-repeat;
			background-position: 0px 0px;
			background-size: 1500px 700px;
		}
		#wrapperHeader{
    position: center;
	background-image:url(logo.png) ;
	background-size: 220px 110px;
	background-repeat: no-repeat;
}
#header{
    left: 200%;
    margin-left: -100px;
    width:200px;
    height:100px;
}
 
		#menu ul {
			padding:0px;
			margin:0px;
			float: left;
			width: 100%;
			background-color:#000000;
			list-style:none;
			font:90% Tahoma;
		}
 
		#menu ul li { display: inline; }
 
		#menu ul li a {
			background-color:#000000;
			color: #fff;
			text-decoration: none;
			border-bottom:4px solid #000000;
			padding: 20px 139px;
			float:left;
		}
 
		#menu ul li a:hover {
			background-color:#48D1CC;
			color: #000000;
			border-bottom:4px solid #48D1CC;
		}
		font-family: Times New Roman;
		}

	-->
	</style>
</head>

  </script>
<body>
<div id="wrapperHeader">
    <div id="header">
             <img src="icambu.png" width="500" height="100" alt="logo" />
    </div> 
</div> 

	<div id="menu">
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="sobre.html">Sobre</a></li>
			<li><a href="buscar.html">Buscar Hospital</a></li>
			<li><a href="cadastro.php">Cadastro</a></li>
		</ul>
	</div>
	 <main>
	 <h1>Faça seu pré-cadastro:</h1>
		<form class="Cadastro"  method="post" action="cadastro.php">
		   <label for="Registro Municipal">
		       <span>Registro Municipal</span>
			   <input type="text" id="Rm" name="Rm" placeholder="Digite seu Registro Municipal" minlength="8" maxlength="8"> <span class="required"></span>
			</label>
			<label for="name">
		       <span>Nome</span>
			   <input type="name" id="Nome" name="Nome" placeholder="Digite seu nome" maxlength="100" required="required"/><span class="required"></span>
			</label>
			
			<label for="date">
		       <span>Data de nascimento</span>
			   <input type="date" id="Data" name="Data" required="required"/><span class="required"></span>
			</label> 
			
			 <label for="email">
		       <span>E-mail</span>
			   <input type="text" id="Email" name="Email" placeholder="Digite seu e-mail" maxlength="150" required="required"/><span class="required"></span>
			</label>
			
			 <label for="password">
		       <span>Crie uma Senha</span>
			   <input type="password" id="Senha" name="Senha" placeholder="Crie uma senha" minlength="8" maxlength="8" required="required"/><span class="required"></span>
			</label>
		
			
			<input type="submit" name="Submit" id="Submit" value="Cadastrar">
			<h1></h1>
			
		</form>
	</main>
	 <center>

<?php

$con = mysqli_connect('localhost', 'formdbuser', 'abc123', 'db_usuario');
//check connection
 if ($con === false) {
    die("ERROR: Could not connect."  (mysqli_connect_error()));
}
$Rm = $_REQUEST['Rm'];
$Nome = $_REQUEST['Nome'];
$Data = $_REQUEST['Data'];
$Email = $_REQUEST['Email'];
$Senha = $_REQUEST['Senha'];
  
$sql = "INSERT INTO tbl_usuario VALUES ('$Rm', '$Nome', '$Data', '$Email', '$Senha')" ;
if(mysqli_query($con, $sql)){
			echo "<h2 style = 'color: green;'> Cadastro realizado com sucesso!!";
  
         } else{
            echo "<h2 style = 'color: red;'>FALHA A REALIZAR CADASTRO!!";
               
        }
 mysqli_close($con);
?>
    </center>
	<h1></h1>
	</body>
</html>