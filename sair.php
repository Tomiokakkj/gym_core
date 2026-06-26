<?php
session_start();
session_destroy(); // Limpa todos os dados de login salvos na sessão
header("Location: inicialsf.php"); // Redireciona o usuário de volta para a página inicial
exit();
?>