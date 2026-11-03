<?php

inserirPostagem($titulo, $descricao, $idUsuario, $conn);
deletarPostagem($idPostagem, $conn);
atualizarPostagem($titulo, $descricao, $idUsuario, $conn);
listarPostagem($id, $titulo, $descricao, $idUsuario, $conn);


?>