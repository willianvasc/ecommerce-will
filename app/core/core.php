<?php
        class core{
            public function start(){
               $controller=ucfirst($_GET['url'].'Controller');
                //caso a url for vazia, ele enviará para a home que pedirá login caso o usuário não esteja logado
               if($_GET['url']==""){
                header('Location:/login_adireto/home');
               }
               $acao = 'index';
               if(!class_exists($controller)){
                $controller = 'ErroController';
               }
               //função para chamar métodos de forma dinâmica
               call_user_func_array(array(new $controller,$acao), array());
            }
        }
        ?>