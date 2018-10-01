<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> Help One - Educacional </title>

    <!-- Bootstrap -->
    <!-- Bootstrap -->
	<link rel="stylesheet" href='<?=  base_url("/css/bootstrap.css"); ?>'>   
    <!-- Estilização Principal -->
	<link rel="stylesheet" href='<?=  base_url("/css/cadastro.css"); ?>'>   
    <!-- Animação CSS -->
	<link rel="stylesheet" href='<?=  base_url("/css/animate.css"); ?>'>  

    <!-- Inclusão de Fontes -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
            <a class="navbar-brand" href="<?= base_url()?>">
			<img src="<?= base_url("img/logo/logo3.png"); ?>"class="logo-menu">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
			<li> <a href= <?= base_url() . 'index.php/Home/sobre' ?>>Sobre</a></li>
                <li><a href="./contato.php">Contate-nos</a></li>
                <li><a href="#">Painel do Usuário</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="container-fluid containerTwo" id="page">

    <div class="info col-md-6 col-sm-12">

        <div class="row">
            <div class="col-md-12">
                <span> <h3>Olá, Bem-vindo ao Help1</h3><br>

   <p> Antes de iniciar, nos conte um pouco sobre você e suas dificuldades e facilidades acadêmicas.<br><br>
    Inscreva-se, descubra o Help1.</p> </span>
   
            </div><!-- Col-md-12 -->
        </div><!-- Row -->

    </div><!-- Informações -->

        <div class="col-md-6 col-sm-12 center-block">
            <div class="row">
                <div class="cad">
                <form action="grava-usuario.php" method="post">
                    
                <div>
                    <label>Nome</label>
                    <input type="text" name="Nome" placeholder="Insira seu nome" required>
                </div>

                <div>
                    <label>Data de nascimento</label>
                    <input type="date" name="data-nascimento" required>
                </div>

                <div>
                    <label>Sexo</label>
                    <select>
                        <option>Masculino</option>
                        <option>Feminino</option>
                    </select>
                </div>

                <div>
                    <label>E-mail</label>
                    <input type="email" name="email" placeholder="Insira seu email" required>
                </div>

                <div>
                    <label>CPF</label>
                    <input type="text" name="cpf" placeholder="xxx.xxx.xxx-xx" required>
                </div>

                <div>
                    <label>Cidade</label>
                    <select name="cidade">
                        <option value="1">Cidade Teste 1</option> 
                    </select>
                </div>

                 <div>
                    <label>Estado</label>
                    <select name="estado">
                        <option value="1">Estado Teste 1</option>
                    </select>

                <div>
                    <label>Nome de usuário</label>
                    <input type="text" name="" required>
                </div>
                <div>
                    <label>Crie sua senha</label>
                    <input type="password" name="senha" required><br>
                    <label>Confirme sua senha</label>
                    <input type="password" name="" required>
                </div>

                <div>
                    <label>Selecione suas forças para dar um Help</label>
                    <select multiple required>
                        <option value="mat">Matemática</option>
                        <option value="por">Português</option>
                        <option value="esp">Espanhol</option>
                        <option value="ing">Inglês</option>
                        <option value="his">História</option>
                        <option value="bio">Biologia</option>
                        <option value="qui">Química</option>
                        <option value="cie">Ciências</option>
                        <option value="fis">Física</option>
                        <option value="geo">Geografia</option>
                        <option value="red">Redação</option>
                        <option value="filo">Filosofia</option>
                        <option value="socio">Sociologia</option>
                        <option value="art">Educação artística</option>

                    </select> <br>

                    <label>Selecione suas dificuldades para pedir um Help</label>
                    <select multiple required>
                        <option value="mat">Matemática</option>
                        <option value="por">Português</option>
                        <option value="esp">Espanhol</option>
                        <option value="ing">Inglês</option>
                        <option value="his">História</option>
                        <option value="bio">Biologia</option>
                        <option value="qui">Química</option>
                        <option value="cie">Ciências</option>
                        <option value="fis">Física</option>
                        <option value="geo">Geografia</option>
                        <option value="red">Redação</option>
                        <option value="filo">Filosofia</option>
                        <option value="socio">Sociologia</option>
                        <option value="art">Educação artística</option>

                    </select> <br>
                </div>

                <button class="btn btn-default btn-block">Vamos começar!</button>
                </div>
                </form>
                </div>
            </div>
        </div>

</div> <!-- ContainerTwo -->


<div class="copy">
    <h6>HelpOne Educacional - 2017 Todos os direitos reservados &copy </h6>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.js"></script>
</body>
</html>
