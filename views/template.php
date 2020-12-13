<html>
    <head>
        <meta charset="UTF-8">
        <title>Meu Site</title>
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/style.css"/>
        
    </head>
    <body>
    	<header>
    		<h1>Meu Sistema de Contatos</h1>
            <a href="../../php_´PROJETOS_MVC/index.html">Voltar</a>
    	</header>
    	<section>
    		<?php $this->loadViewInTemplate($viewName, $viewData); ?>	
    	</section>
    	<footer>
    		Todos os Direitos Reservados
    	</footer>

        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
        
    </body>
</html>
