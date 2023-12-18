    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="app/public/css/login.css">
        <link rel="stylesheet" href="app/public/css/estilos.css">
        <link rel="stylesheet" href="app/public/css/footer.css">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.7.0.slim.min.js" integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE=" crossorigin="anonymous"></script>
        <title>Loja Adireto</title>
    </head>

    <body>
        <?php
        require_once 'app/core/core.php';
        require_once 'app/controller/HomeController.php';
        require_once 'app/controller/HeaderController.php';
        require_once 'app/controller/ErroController.php';
        require_once 'app/controller/LoginController.php';
        require_once 'app/controller/CadastroController.php';
        require_once 'app/controller/CadastroProdController.php';
        require_once 'app/controller/ProdutoController.php';
        require_once 'app/controller/CarrinhoController.php';
        require_once 'app/controller/PerfilController.php';
        require_once 'app/controller/Cadastro_user_admin_Controller.php';
        require_once 'app/model/conecta_db.php';
        require_once 'app/model/cadastro_user.php';
        require_once 'app/model/login.php';
        require_once 'app/model/valida_email.php';
        require_once 'app/model/cadastro_produto.php';
        require_once 'app/model/consulta_produtos.php';
        require_once 'app/model/produto_interno.php';
        require_once 'app/model/adiciona_carrinho.php';
        require_once 'app/model/mostra_carrinho.php';
        require_once 'app/model/exclui_carrinho.php';
        require_once 'app/model/soma_final_carrinho.php';
        require_once 'app/model/verifica_login.php';
        require_once 'app/model/cadastro_usuario_admin.php';
        require_once 'app/model/perfil.php';
        require_once 'app/model/atualiza_perfil.php';
        require_once 'vendor/autoload.php';
        echo $_GET['url'];
        $core = new Core;
        $core->start($_GET);
        ?>
    </body>

    </html>