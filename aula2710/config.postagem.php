<?php
include("conexao.php");

function inserirPostagem($titulo, $descricao, $idUsuario, $conn) {
    $sql = "INSERT INTO postagem (titulo, descricao, dta, idUsuario) VALUES ('$titulo', '$descricao', NOW(), '$idUsuario')";

    $resultado = mysqli_query($conn, $sql);

    return $resultado;
};

function deletarPostagem($id, $conn) {
    $sql = "DELETE FROM postagem WHERE id = $id";

    $resultado = mysqli_query($conn, $sql);

    return $resultado;
};
function atualizarPostagem($id, $titulo, $descricao, $dta, $idUsuario, $conn) {
    $sql = "UPDATE postagem SET titulo = '$titulo', descricao = '$descricao', dta = '$dta', idUsuario = '$idUsuario' WHERE id = $id";
    
    $resultado = mysqli_query($conn, $sql);

    return $resultado;
};
function listarPostagem($conn){
    $sql = "SELECT * FROM postagem";

    $resultado = mysqli_query($conn, $sql);

    return $resultado;
};
function listarPostagemUsuario($idUsuario, $conn){
    $sql = "SELECT * FROM postagem WHERE idUsuario = '$idUsuario'";

    $resultado = mysqli_query($conn, $sql);

    return $resultado;
};

?>
