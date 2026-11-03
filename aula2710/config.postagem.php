<?php

function inserirPostagem($titulo, $descricao, $idUsuario, $conn) {
     $sql = "INSERT INTO postagens (titulo, descricao, dta, idUsuario) VALUES ('$titulo', '$descricao', NOW(), '$idUsuario')";

    return mysqli_query($conn, $sql);
};

function deletarPostagem($idPostagem, $conn) {
    $sql = "DELETE FROM postagens WHERE id = $idPostagem";

    return mysqli_query($conn, $sql);
};
function atualizarPostagem($idPostagem, $titulo, $descricao, $conn) {

};
function listarPostagem($conn){
    
};
function listarPostagemUsuario($idUsuario, $conn){
    
};

?>