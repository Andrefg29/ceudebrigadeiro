<?php
<<<<<<< HEAD:estrutura.php
include('conecta.php');
    if(isset($_POST["entrar"])){
        $email = $_POST['email'];
$senha = $_POST['senha'];
=======

$email = $_POST['email'];
$senha = $_POST['senha'];

include('conecta.php');
>>>>>>> 53664b451d7ea5b54322f45b89facd6ce794f456:estrutura.html
    $comando = $pdo->prepare("SELECT * from cadastro WHERE email='$email' and senha='$senha'" );
    $resultado = $comando->execute();
    $n = 0;
    while ($linhas = $comando->fetch())
    {
        $n = $n-1;
    }
    if($n == 0){
        header("Location: login.php?login=0");
    }
<<<<<<< HEAD:estrutura.php
    }
    if(isset($_POST["cadastro"])){
        header("Location: estrutura.php");}
    if(isset($_POST["anonimo"])){
    header("Location: estrutura.php");}
=======
>>>>>>> 53664b451d7ea5b54322f45b89facd6ce794f456:estrutura.html

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Céu de Brigadeiro - Um Horizonte de Doces</title>
    <link href="css/responsivo.css" rel="stylesheet"> 
    <link href="css/entregas.css" rel="stylesheet"> 
    <link href="css/footer.css" rel="stylesheet"> 
    <link href="css/slider.css" rel="stylesheet"> 
    <link href="css/cardesprod.css" rel="stylesheet"> 
    <link href="css/promocao.css" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <style>
        html {
    scroll-behavior: smooth;
  }

    </style>
</head>
<body>
   <?php include("navbar.html") ?>

        <div class="divslider">
            <div class="slide  fade">
                <div class="numeroslides">1 / 5</div>
                <div style="width: 100%; background-image: url('img/slider/3.png')" class="img"></div>
            </div>

            <div class="slide fade">
                <div class="numeroslides">2 / 5</div>
                <div style="width: 100%; background-image: url('img/slider/2.png')" class="img"></div>
            </div>

            <div class="slide fade">
                <div class="numeroslides">3 / 5</div>
                <div style="width: 100%; background-image: url('img/slider/1.png')" class="img"></div>
            </div>

            <div class="slide fade">
                <div class="numeroslides">4 / 5</div>
                <div style="width: 100%; background-image: url('img/slider/4.png')" class="img"></div>
            </div>

            <div class="slide fade">
                <div class="numeroslides">5 / 5</div>
                <div style="width: 100%; background-image: url('img/slider/5.png')" class="img"></div>
            </div>

            <a class="pre" onclick="plusSlides(-1)">&#10094;</a>
            <a class="pro" onclick="plusSlides(1)">&#10095;</a>

            
        </div>
    
        <div class="botoesslide" style="text-align: center">
            <span class="dot" onclick="currentSlides(1)"></span>
            <span class="dot" onclick="currentSlides(2)"></span>
            <span class="dot" onclick="currentSlides(3)"></span>
            <span class="dot" onclick="currentSlides(4)"></span>
            <span class="dot" onclick="currentSlides(5)"></span>
        </div>

        <h1>Produtos</h1>
      
        <div class="divanuncio1" id="divanuncio1">

            <a href="brigadeiro.html"><div class="card">
                <div class="imgcard"><img src="img/brigadeiro.jpg"></div>
                <div class="textocard">
                    <h2>Combo Brigadeiros</h2>
                    <p>R$24,50</p>
                </div>
            </div></a>  

            <a href="copo_felicidade.html"><div class="card">
                <div class="imgcard"><img src="img/copo_felicidade.jpg"></div>
                <div class="textocard">
                    <h2>Copo da Felicidade</h2>
                    <p>R$15,90</p>
                </div>
            </div></a>

            <a href="algodao.html"><div class="card">
                <div class="imgcard"><img src="img/algodao.jpg"></div>
                <div class="textocard">
                    <h2>Algodão Doce - 400ml</h2>
                    <p>R$8,50</p>
                </div>
            </div></a>

            <a href="fondue.html"><div class="card">
                <div class="imgcard"><img src="img/fondue.jpg"></div>
                <div class="textocard">
                    <h2>Fondue - Pote com 500ml</h2>
                    <p>R$20,00</p>
                </div>
            </div></a>

        </div>
        <div class="divanuncio1" id="divanuncio1">

          <a href="brownie.html"><div class="card">
                <div class="imgcard"><img src="img/brownie.jpg"></div>
                <div class="textocard">
                    <h2>Brownie Recheado</h2>
                    <p>R$12,50</p>
                </div>
            </div></a>  

            <a href="buque.html"><div class="card">
                <div class="imgcard"><img src="img/buque.jpg"></div>
                <div class="textocard">
                    <h2>Buque de Chocolate</h2>
                    <p>R$99,90</p>
                </div>
            </div></a>

            <a href="ovo.html"><div class="card">
                <div class="imgcard"><img src="img/ovinho.jpg"></div>
                <div class="textocard">
                    <h2>Ovo de Colher</h2>
                    <p>R$28,90</p>
                </div>
            </div></a>  

            <a href="cupcake.html"><div class="card">
                <div class="imgcard"><img src="img/cupcake.jpg"></div>
                <div class="textocard">
                    <h2>Mini Cupcake - 12un</h2>
                    <p>R$16,00</p>
                </div>
            </div></a>  

</div>
    <br>
    <h1>Promoções</h1>
        <div class="promocao">
           <a href="promocao30.php"><div class="p1">Produtos até<br>R$30</div></a> 
           <a href="promocao50.php"><div class="p2">Produtos até<br>R$50</div></a> 
           <a href="promocao100.php"><div class="p3">Produtos até<br>R$100</div></a> 
        </div>

        <br>
        <h1>Entregas</h1>
        <div class="entregas">
            <div class="mapa">
                <h2>Nossa Localização</h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3667.7931506038317!2d-46.918865784879266!3d-23.177748453422932!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf253dda0dfe29%3A0x6ac8941126b9620e!2sC%C3%A9u%20de%20Brigadeiro%20-%20Confeitaria%20Artesanal!5e0!3m2!1spt-BR!2sbr!4v1680188173436!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="cadastro">
                <h2>Cadastro</h2>
                <form action="inserirendereco.php" method="post">

                    <!-- ENDEREÇO -->
                    <fieldset>
                     <legend> Adicionar Endereço </legend>
                     
                             <input type="text" name="nomeendereco" placeholder="Apelido do Endereço">
                             <input type="text" name="emailendereco" placeholder="Email"> <br>
                             <input type="text" name="rua" placeholder="Rua" id="rua">
                             <input type="text" name="numerocasa" size="4" placeholder="Nº Casa" id="numerocasa">
                             <input type="text" name="bairro" placeholder="Bairro" id="bairro">
                        <select name="estado" id="estado"> 
                        <option value="ac">Acre</option> 
                        <option value="al">Alagoas</option> 
                        <option value="am">Amazonas</option> 
                        <option value="ap">Amapá</option> 
                        <option value="ba">Bahia</option> 
                        <option value="ce">Ceará</option> 
                        <option value="df">Distrito Federal</option> 
                        <option value="es">Espírito Santo</option> 
                        <option value="go">Goiás</option> 
                        <option value="ma">Maranhão</option> 
                        <option value="mt">Mato Grosso</option> 
                        <option value="ms">Mato Grosso do Sul</option> 
                        <option value="mg">Minas Gerais</option> 
                        <option value="pa">Pará</option> 
                        <option value="pb">Paraíba</option> 
                        <option value="pr">Paraná</option> 
                        <option value="pe">Pernambuco</option> 
                        <option value="pi">Piauí</option> 
                        <option value="rj">Rio de Janeiro</option> 
                        <option value="rn">Rio Grande do Norte</option> 
                        <option value="ro">Rondônia</option> 
                        <option value="rs">Rio Grande do Sul</option> 
                        <option value="rr">Roraima</option> 
                        <option value="sc">Santa Catarina</option> 
                        <option value="se">Sergipe</option> 
                        <option value="sp">São Paulo</option> 
                        <option value="to">Tocantins</option> 
                       </select>
                        <input type="text" name="cidade" placeholder="Cidade" id="cidade">
                        <input type="text" name="cep" placeholder="CEP" id="cep">
                      
                    </fieldset>
                  
                    <div class="botoesen">
                    <input type="submit" class="botaoen">
                    <input type="reset" value="Limpar" class="botaoen">
                </div>
                    </form>
            </div>
        </div>

        <h1>Últimos Pedidos</h1>

<div class="divanuncio1" id="divanuncio1">

    <a href="brownie.html"><div class="card">
        <div class="imgcard"><img src="img/brownie.jpg"></div>
        <div class="textocard">
            <h2>Brownie Recheado</h2>
            <p>R$12,50</p>
        </div>
    </div></a>  

    <a href="buque.html"><div class="card">
        <div class="imgcard"><img src="img/buque.jpg"></div>
        <div class="textocard">
            <h2>Buque de Chocolate</h2>
            <p>R$99,90</p>
        </div>
    </div></a>

    <a href="ovo.html"><div class="card">
        <div class="imgcard"><img src="img/ovinho.jpg"></div>
        <div class="textocard">
            <h2>Ovo de Colher</h2>
            <p>R$28,90</p>
<<<<<<< HEAD:estrutura.php
=======
        </div>
    </div></a>  

    <a href="cupcake.html"><div class="card">
        <div class="imgcard"><img src="img/cupcake.jpg"></div>
        <div class="textocard">
            <h2>Mini Cupcake - 12un</h2>
            <p>R$16,00</p>
        </div>
        </div></a>

        <a href="copo_felicidade.html"><div class="card">
            <div class="imgcard"><img src="img/copo_felicidade.jpg"></div>
            <div class="textocard">
                <h2>Copo da Felicidade</h2>
                <p>R$15,90</p>
            </div>
            </div></a>
</div>
<br>

<br>

        <div class="divfooter" id="divfooter">
            <div class="footer" id="footer">
                <div class="main-content">
                <div class="left box">
                  <h2>Sobre Nós</h2>
                    <div class="content">
                    <p class="texto">Céu de Brigadeiro, empresa genuinamente brasileira, com 10 anos de mercado, foi a primeira rede de  fast food  do Brasil a incluir drones nas entregas. Sinta-se a vontade para saborear o melhor doce da região, Agradecemos sua visita em nosso site.</p>
                        <div class="social">
              <a href="" target="_blank"><span class="fab fa-facebook-f"></span></a>
              <a href="" target="_blank"><span class="fab fa-instagram"></span></a>
              <a href="" target="_blank"><span class="fab fa-twitter"></span></a>
                        </div>
                    </div>
                  </div>
                  <div class="center box">
                  <h2>&nbsp;Contato</h2>
                      <div class="content">
                          <div class="place">
                          <span class="fas fa-map-marker-alt"></span>
                          <span class="text">Joinville, Santa Catarina</span>
                          </div>
                          <div class="phone">
                          <span class="fas fa-phone-alt"></span>
                          <span class="text">Em breve</span>
                          </div>
                          <div class="email">
                          <span class="fas fa-envelope"></span>
                          <span class="text">ceudebrigadeiro@gmail.com</span>
                          </div>
                      </div>
                  </div>
                  <div class="right box">
                  <h2>Nos Mande uma Mensagem</h2>
                      <div class="content">
                          <form action="https://api.staticforms.xyz/submit" method="post" id="musica">
                              <div class="email">
                                  <div class="text" id="te">Email</div>
                                  <input type="email" required class="enputz" name="email">
                              </div>
                              <div class="msg">
                                  <div class="text" id="te2">Mensagem</div>
                                  <textarea rows="2" cols="25" required class="enputz" name="message"></textarea>
                              </div>
                              <div class="btn">
                              <input type="submit" class="btn btn-info" id="enviar">
                              </div>
                              <input type="hidden" name="redirectTo" value="obrigado.html">
                              <input type="hidden" name="accessKey" value="40630892-3374-416c-bd3e-a6b368d51678">
                          </form>
                      </div>
                  </div>
              </div>
            </div>
>>>>>>> 53664b451d7ea5b54322f45b89facd6ce794f456:estrutura.html
        </div>
    </div></a>  

    <a href="cupcake.html"><div class="card">
        <div class="imgcard"><img src="img/cupcake.jpg"></div>
        <div class="textocard">
            <h2>Mini Cupcake - 12un</h2>
            <p>R$16,00</p>
        </div>
        </div></a>

        <a href="copo_felicidade.html"><div class="card">
            <div class="imgcard"><img src="img/copo_felicidade.jpg"></div>
            <div class="textocard">
                <h2>Copo da Felicidade</h2>
                <p>R$15,90</p>
            </div>
            </div></a>
</div>
<br>

<br>
<?php include('footer.html') ?>
    <script src="js/slider.js"></script>
    <script src="js/maps.js"></script>
</body>


</html>