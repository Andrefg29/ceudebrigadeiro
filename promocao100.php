<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Céu de Brigadeiro - Um Horizonte de Doces</title>
    <link href="css/responsivo.css" rel="stylesheet"> 
    <link href="css/navbar.css" rel="stylesheet"> 
    <link href="css/footer.css" rel="stylesheet"> 
    <link href="css/cardesprod.css" rel="stylesheet"> 
    <link href="css/promocao.css" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <style>

.fundopromo{
    background-image: url('img/promo/3.jpg');
    width: 100%;
    height: 250px;
    color: #fff;
    display: flex;
    align-items: center;
    align-content: center;
    justify-content: center;
    justify-items: center;
}

    </style>
</head>
<body>
    <div class="principal">
    <?php include('navbar.html') ?>

        <div class="fundopromo">
        <h1 class="titu">Produtos em até R$100,00</h1>
    </div>

<br><br>

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

        <?php include('footer.html')?>
    </div>

    <script src="js/navbar.js"></script>
</body>
</html>