<?php
$response = ['success' => false, 'message' => 'Erro ao inserir o arquivo CSV'];

if($_SERVER["REQUEST_METHOD"] === "POST"){

    $nome_ponto = $_POST["nome_material"];
    $descricao_ponto = $_POST["video"];
    $localizacao = $_POST["noticia"];
    $id_categoria = $_POST["id_categoria"];

if(isset($_FILES['doc'])):
    $doc = $_FILES['doc'];
    $doc_nome = $doc['name'];
    $doc_tamanho = $doc['size'];
    $doc_tipo = $doc['type'];
    $doc_erro = $doc['error'];
    $doc_tmp = $doc['tmp_name'];

    if($doc_erro == UPLOAD_ERR_OK):
        $destino = "../uploads/".$doc_nome;
        move_uploaded_file($doc_tmp,$destino);
        $ret = cadastrarMaterial($nome_material,$video,$noticia,$id_categoria,$destino);
        if($ret)
            $response = ['success' => true, 'message' => 'Tarefa adicionada com sucesso'];
        else
            $response = ['success' => false, 'message' => 'Tarefa não pode ser adicionado'];
    else:
        $ret = cadastrarMaterial($nome_material,$video,$noticia,$id_categoria);
        if($ret)
            $response = ['success' => true, 'message' => 'Tarefa adicionada com sucesso'];
        else
            $response = ['success' => false, 'message' => 'Tarefa não pode ser adicionado'];
    endif;    
 endif;

?>