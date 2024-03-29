<?php

if(isset($_GET["login"])){
  $login = $_GET["login"];
  if($login == 0){
    echo("<script>
    function alerta()
    {
      alert('Email ou Senha incorretos')
    }
    </script>");
  }
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro - Céu de Brigadeiro</title>
  <link rel="stylesheet" href="css/style.css">
  <script src="https://kit.fontawesome.com/cf6fa412bd.js" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <style>
    body{
      flex-direction: column
    }

    .errado 
{
    background: rgba(255, 0, 0, 0.271);

}

.certo 
{
    background-color: rgba(0, 128, 0, 0.272);

}

a{
  color: #fff
}
  </style>
</head>

<!--CAIXA DE LOGIN E CADASTRO-->

<body onload="alerta();">

  <h1>Céu de Brigadeiro</h1>

  <div class="container">
    <div class="buttonsForm">
      <div class="btnColor"></div>
      <button id="btnSignin">Login</button>
      <button id="btnSignup">Cadastro</button>
    </div>


    <!--LOGIN EMAIL-->

    <form id="signin" action="estrutura.php" method="post">
  

      <div class="email">
        <i class="fas fa-envelope iEmail"></i>
        <input type="text"  id="email" onkeyup="Email();" placeholder="Email" name="email" required />
      </div>

      <!--LOGIN SENHA-->
      <div class="senha">
        <i class="fas fa-lock iSenha"></i>
        <input type="password" placeholder="Senha" name="senha" required />
      </div>
      <div class="divCheck">
        <input type="checkbox" />
        <span>Lembrar Senha</span>
      </div>
      <input type="submit" value="Entrar" name="entrar">
    </form>

    <!--CADASTRO EMAIL E SENHA-->
    <form id="signup" action="inserir.php" method="post" class="cads">
      <div class="nome">
        <i class="fa fa-user iUser"></i>
        <input type="text" placeholder="Nome Completo" name="nome" id="email2"required />
      </div>
      <div class="email">
        <i class="fa fa-envelope iEmail3"></i>
        <input type="text" placeholder="Email" name="email" id="email2" onkeyup="Email();" required />
      </div>
      <div class="cep">
        <i class="fas fa-thumbtack icami"></i>
        <input type="text" placeholder="CEP" name="cep" id="email2" required />
      </div>
      <div class="senha">
        <i class="fa fa-lock isenhazinha"></i>
        <input type="password" placeholder="Senha" name="senha" id="senha" required />
      </div>
      <div class="senha2">
        <i class="fa fa-lock  isenhazinha2" ></i>
        <input type="password" placeholder="Confirme a Senha" id="senha2" onkeyup="Senha();" required />


        <!--CAIXA OK-->
      </div>
      <div class="divCheck">
        <input type="checkbox" required />
        <span>Aceitar Termos e Condições</span> 
      </div>
      <input type="submit" value="Cadastrar" name="cadastro">
    </form>
  </div>
  <br>

    <a href="estrutura.php" name="anonimo">Continuar sem Login</a>

  <script src="./js/index.js"></script>
  <script src="./js/validar.js"></script>
</body>

</html>