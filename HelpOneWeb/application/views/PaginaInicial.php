<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> Help One - Educacional </title>

    <!-- Bootstrap -->
	<link rel="stylesheet" href='<?=  base_url("/css/bootstrap.css"); ?>'>   
    <!-- Estilização Principal -->
	<link rel="stylesheet" href='<?=  base_url("/css/index.css"); ?>'>   
    <!-- Animação CSS -->
	<link rel="stylesheet" href='<?=  base_url("/css/animate.css"); ?>'>  

    <!-- Inclusão de Fontes -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />

</head>
<body>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
				<img src="<?= base_url("img/logo/logo3.png"); ?>"class="logo-menu">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li> <a href= <?= base_url() . 'index.php/Home/sobre' ?>>Sobre</a></li>
                <li><a href= <?= base_url() . "index.php/Home/contato"?>>Contate-nos</a></li>
                <li><a href="#">Painel do Usuário</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="container animated fadeIn">
    <div class="logo center-block">
	<img src="<?= base_url("img/logo/logo.png"); ?>" class="center-block">
    </div><!-- Logo -->

    <div class="mais center-block">
        <a href="#page" id="logo" class="dece">
            <span> Saiba Mais </span>
        </a>
    </div><!-- Mais -->

</div> <!-- Container -->

<div class="container-fluid containerTwo" id="page">

    <div class="info col-md-6 col-sm-12">

        <div class="row">
            <div class="col-md-12">
			<img src="<?= base_url("img/icon/001.png"); ?>">
                <span> O Help1 é um Sistema de Educação <br>Extraclasse em Comunidade!!</span>
            </div><!-- Col-md-12 -->
        </div><!-- Row -->

        <div class="row">
            <div class="col-md-12">
				<img src="<?= base_url("img/icon/002.png"); ?>">
                <span> Você pode encontrar pessoas para <br>'Dar um HELP' ou 'Pedir um HELP'!</span>
            </div><!-- Col-md-12 -->
        </div><!-- Row -->

        <div class="row">
            <div class="col-md-12">
				<img src="<?= base_url("img/icon/003.png"); ?>">
                <span> Cadastre-se informando suas <br>facilidades e dificuldades acadêmicas!</span>
            </div><!-- Col-md-12 -->
        </div><!-- Row -->

        <div class="row">
            <div class="col-md-12 logo-footer">
			<img src="<?= base_url("img/icon/004.png"); ?>">
                <span> Encontre pessoas com suas mesmas <br>facilidades ou dificuldades!!</span>
            </div><!-- Col-md-12 -->
        </div><!-- Row -->

    </div><!-- Informações -->

    <div class="login col-md-6 col-sm-12 center-block">

        <h2> Acesse seu perfil </h2>

        <form action="index.php/Usuario/login" method="POST">
          <div class="row">
              <div class="col-md-12">
                  <input type="text" name="login" placeholder="Digite seu Login" />
              </div><!-- Col-md-12 -->

              <div class="col-md-12">
                  <input type="password" name="password" placeholder="Digite sua senha" />
                  <br />
                  <a href="#">
                      <span class="es-senha"> Esqueci minha senha </span>
                  </a>
              </div><!-- Col-md-12 -->
          </div><!-- Row -->

          <div class="row row-btn">

              <div class="col-md-6 col-xs-6">
                  <button type="submit" class="btn btn-default" > Entrar </button>
              </div><!-- Col-md-6 -->

              <div class="col-md-6 col-xs-6">
                <a href= <?= base_url() . 'index.php/Usuario/cadastrar' ?> </a>
                  <button type="button" class="btn btn-default"> Cadastre-se </button></a>
              </div><!-- Col-md-6 -->

          </div><!-- Row -->

        </form>

    </div><!-- Login -->

</div> <!-- ContainerTwo -->

<footer>
    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-4 logo-footer">
		<img src="<?= base_url("img/logo/logo2.png"); ?>"class="center-block">
            <br />
            <h5> Mostre o que você sabe. Descubra o que você não sabe.</h5>
        </div><!-- Col-md-4 -->

        <div class="col-md-4 col-sm-4 col-xs-4 menu-footer">
            <h6>Menu Principal</h6>
            <ul>
			    <a href= <?= base_url() ?>>
                    <li>
                        Página Inicial
                    </li>
                </a>
                <a href= <?= base_url() . 'index.php/Home/sobre' ?>>

                    <li>
                        Sobre nós
                    </li>
                </a>
                <a href="#">
                    <li>
                        Painel do Usuário
                    </li>
                </a>
                <a href="#">
                    <li>
                        Termos de Privacidade
                    </li>
                </a>
                <a href="#">
                    <li>
                        Contate-nos
                    </li>
                </a>
            </ul>
        </div><!-- Col-md-4 -->

        <div class="col-md-4 col-sm-4 col-xs-4 form-footer">
            <form action="#" method="POST">
                <div class="row">
                    <div class="col-md-12">
                        <h6>Receba nossas atualizações</h6>
                        <input type="email" name="email" placeholder="Digite seu email" />
                        <button type="submit" class="btn btn-default">Enviar</button>
                    </div><!-- Col-md-12 -->
                </div><!-- Row -->
                <div class="row">
                    <h6> Apoio: </h6>  
                    <a href="https://www.puc-campinas.edu.br/" target="_blank">
						<img src="<?= base_url("img/logo/puc.png"); ?>">
                    </a>
                </div><!-- Row -->
            </form>
        </div><!-- Col-md-4 -->
    </div><!-- Row -->
</footer>
<div class="copy">
    <h6>HelpOne Educacional - 2017 Todos os direitos reservados &copy </h6>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.js"></script>
<script>
    $(function() {
        $('a').bind('click',function(event){
            var $anchor = $(this);
            $('html, body').stop().animate({scrollTop: $($anchor.attr('href')).offset().top}, 1000,'swing');
        });
    });

    $(document).ready(function(){
        var menu = $('.navbar');
        function scroll() {
            if ($(window).scrollTop() > 600) {
                $('.navbar').addClass('navbar-fixed-top navscroll').fadeIn(200);
            } else {
                $('.navbar').removeClass('navbar-fixed-top navscroll');
                $('.navbar').hide();
            };


        };

        document.onscroll = scroll;

    });
</script>
</body>
</html>
