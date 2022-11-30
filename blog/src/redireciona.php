<?php
function redireciona(string $url): void
 {
    //redirecionar para uma pagina
    header("Location: $url");
    die();
}

?>