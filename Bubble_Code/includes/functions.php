<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agua";
$port = "3306";

function connect()
{

    global $servername, $username, $password, $dbname, $port;

    $conn = mysqli_connect($servername, $username, $password, $dbname, $port);

    if (!$conn) {
        die("Falha ao conectar no banco de dados " . mysqli_connect_error());
    }

    return $conn;
}

function addUser($nome, $data_nasc, $email, $senha, $tipo)
{

    $conn = connect();
    $senha_crip = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios(nome, data_nasc, email, senha, tipo) VALUES (?,?,?,?,?)";

    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sssss", $nome, $data_nasc, $email, $senha_crip, $tipo);
    $ret = mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    return $ret;
}

function checkEmail($email) {
    $conn = connect();
    $sql = "SELECT COUNT(*) FROM usuarios WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 's', $email); 
    
    $count = 0;
    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_bind_result($stmt, $count);
        mysqli_stmt_fetch($stmt);
    }
    
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    
    return $count > 0;
}

function login($email, $senha)
{

    $conn = connect();

    $sql = "SELECT id, nome, data_nasc, email, senha, tipo FROM usuarios WHERE email = ?";

    $stmt = mysqli_prepare($conn, $sql);

    mysqli_stmt_bind_param($stmt, "s", $email);

    if (mysqli_stmt_execute($stmt)) {
        $result = mysqli_stmt_get_result($stmt);
        $usuario = mysqli_fetch_assoc($result);
        if (password_verify($senha, $usuario["senha"])) {
            mysqli_close($conn);
            unset($usuario["senha"]);
            $usuario["token"] = bin2hex(openssl_random_pseudo_bytes(32));
            atToken($usuario["id"], $usuario["token"]);
            return $usuario;
        }
    }

    mysqli_close($conn);
    return false;
}

function atToken($id, $token)
{
    $conn = connect();

    $sql = "UPDATE usuarios SET token = ? WHERE id = ?";

    $stmt = mysqli_prepare($conn, $sql);

    mysqli_stmt_bind_param($stmt, "si", $token, $id);

    $ret = false;

    if (mysqli_stmt_execute($stmt)) {
        $ret = true;
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    return $ret;
}

function validateToken($id, $token){

    $ret = false;

    $conn = connect();

    $sql = "SELECT token FROM usuarios WHERE id = ?";

    $stmt = mysqli_prepare($conn,$sql);

    mysqli_stmt_bind_param($stmt,"i",$id);

    if(mysqli_stmt_execute($stmt)){
        $result = mysqli_stmt_get_result($stmt);                
        $row = mysqli_fetch_assoc($result);     
                   
        if($row){
            if($token == $row["token"]){
                $ret = true;
            }
        }
    }   

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    
    return $ret;
}



function cadastraCategoria($nome_categoria){
    $conn = connect();
    $sql="INSERT INTO categorias(nome_categoria) VALUES (?)";

    $stmt=mysqli_prepare($conn, $sql);
    if ($stmt === false) {
        // Tratar erro na preparação da query
        mysqli_close($conn);
        return false;
    }


    mysqli_stmt_bind_param($stmt,"s",$nome_categoria);
    
    $ret = mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    return $ret;

}

function consultarCategoria() {
    $conn = connect();
    $sql = "SELECT id_categoria, nome_categoria FROM categorias";
    $stmt = mysqli_prepare($conn, $sql);
            
    mysqli_stmt_execute($stmt);
    $categs = array();

    $result = mysqli_stmt_get_result($stmt);

    while ($row = mysqli_fetch_assoc($result)) {
        array_push($categs, $row);
    }

    mysqli_free_result($result);
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    return $categs;
}
function editarCategoria($nome_categoria, $id_categoria){
    $conn = connect();
    $sql = "UPDATE categorias SET nome_categoria = ? WHERE id_categoria = ?";
    
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "si", $nome_categoria, $id_categoria);

    $ret = false;
    if(mysqli_stmt_execute($stmt)){
    $ret = true;
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    return $ret;
}

function excluirCategoria($id_categoria){
    $conn= connect();
    $sql= " DELETE from categorias WHERE id_categoria=?";
    $stmt = mysqli_prepare($conn,$sql);

    mysqli_stmt_bind_param($stmt,"i",$id_categoria);
    
    $ret = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    mysqli_close($conn);
    return $ret;

}

function cadastrarMaterial($nome_material, $video, $noticia, $id_categoria, $destino = null){
    $conn= connect();
    $sql="INSERT INTO materiais(nome_material, video, noticia, id_categoria, doc) VALUES (?,?,?,?,?)";
    $stmt= mysqli_prepare($conn,$sql);
    mysqli_stmt_bind_param($stmt,"sssis",$nome_material,$video, $noticia, $id_categoria, $destino);
    $ret = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    return $ret;

}

?>