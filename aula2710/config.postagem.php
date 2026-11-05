<?php

include("conexao.php");

function inserirPostagem($titulo, $descricao, $idUsuario, $conn) {
     $sql = "INSERT INTO postagem (titulo, descricao, dta, idUsuario) VALUES ('$titulo', '$descricao', NOW(), '$idUsuario')";

    return mysqli_query($conn, $sql);
};

function deletarPostagem($id, $conn) {
    $sql = "DELETE FROM postagem WHERE id = $id";

    return mysqli_query($conn, $sql);
};
function atualizarPostagem($id, $titulo, $descricao, $dta, $idUsuario, $conn) {
    $sql = "UPDATE postagem SET titulo = '$titulo', descricao = '$descricao', dta = '$dta', idUsuario = '$idUsuario' WHERE id = $id";
    
    return mysqli_query($conn, $sql);
};
function listarPostagem($conn){
    
};
function listarPostagemUsuario($idUsuario, $conn){

};

?>