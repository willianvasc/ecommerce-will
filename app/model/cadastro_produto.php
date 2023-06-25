<?php
class cadastro_produto
{
    //função para cadastrar um novo produto
    public static function cadastro($post)
    {
        $con = conecta_banco::conecta();
        //variáveis para salvar o produto cadastrado
        $nome_prod = $post['nome_prod'];
        $descricao = $post['descricao'];
        $valor = $post['valor'];
        $estoque = $post['estoque'];
        //////////////
        //diretorio dos arquivos
        $arquivo = $_FILES["imagem"];
        $imagem_produto = $_FILES["imagem"]["name"];
        $pasta = "app/public/images/produtos/";
        //////////////
        // $arquivo_nome salva o caminho do arquivo enviado
        $arquivo_nome = $pasta . $imagem_produto;
        //função que faz upload do arquivo para o diretório do servidor
        move_uploaded_file($arquivo["tmp_name"],  $arquivo_nome);
        //////////////
        //query para salvar o produto no produto no banco de dados
        $sql = "INSERT INTO adireto.produtos(nome_produto,valor_produto,descricao,estoque,arquivo) VALUES('$nome_prod','$valor','$descricao','$estoque','$arquivo_nome')";
        $sql = $con->prepare($sql);
        $sql->execute();
        if ($sql->rowCount()) {
            return true;
        }
    }
}
