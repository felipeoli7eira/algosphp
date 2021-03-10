<?php

    /**
     * ASCII [ https://marquesfernandes.com/desenvolvimento/codigo-ascii-tabela-ascii-completa/ ]
     * 
     * chr() [ https://www.php.net/manual/pt_BR/function.chr.php ]
    */

    $codigoASCII_letra_A = 65;
    $codigoASCII_letra_Z = 90;

    for ($i = $codigoASCII_letra_A ; $i <= $codigoASCII_letra_Z ; $i++)
    {
        echo chr($i) . PHP_EOL;
    }