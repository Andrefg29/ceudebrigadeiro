<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/responsivo.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/faleconosco.css">
    <link rel="stylesheet" href="css/footer.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/paho-mqtt/1.0.1/mqttws31.js" type="text/javascript"></script>
    <title>Fale Conosco - Céu de Brigadeiro</title>

    <style>
        .divfooter{
            margin-top: 100px;
        }
    </style>
</head>

<body>
<div class="fundo"></div>

  <?php include('navbar.html') ?>

<div class="principalfaq">
<div class="caixamens">
<h1 class="titulos5">Digite aqui em que podemos melhorar:</h1>

    <div class="texto"><textarea id="mensagem" required="required"></textarea><span>Digite Aqui</span></div> <br>
    <button onclick="Enviar();">Enviar</button>
  </div>

<hr>

  <div class="caixaresp">
    <h1>Comentários:</h1> 
   <div id="resposta">  </div>

  </div>
  </div>

  <?php include('footer.html') ?>

    <script src="js/faleconosco.js"></script>
</body>

</html>