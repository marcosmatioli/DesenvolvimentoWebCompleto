<?php
//include "menu.php"; da pra fazer também

include_once("menu.php"); //gera um warning ele não para o processamento dos dados abaixo

require_once("menu.php"); //gera um fatal error que para todo o processo dali pra frente

/**então basicamente é o seguinte
 * ambos include e require fazem a mesma coisa porem na hora do erro o include gera um warning e o require gera um fatal error
 * e um fatal erro para todo o processamento dali em diante enquanto o warning da o erro mas não impede o processamento restante
 * da pagina.
 * Agora o include_once e o require_once faz a pagina ser inclusa somente uma única vez
 */
?>
<hr/>

<?php

include_once("menu.php"); //gera um warning ele não para o processamento dos dados abaixo

require_once("menu.php"); //gera um fatal error que para todo o processo dali pra frente

?>