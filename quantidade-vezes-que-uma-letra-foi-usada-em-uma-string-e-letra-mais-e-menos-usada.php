<?php

    $string = "aa bb c dddd";

    $byteCodeAsKey_frequenceAsValue = count_chars($string, /** mode */ 1);

    $max = max( array_values($byteCodeAsKey_frequenceAsValue) );
    $min = min( array_values($byteCodeAsKey_frequenceAsValue) );

    $maxByteCode = null;
    $minByteCode = null;

    echo '<ul>';
        foreach ($byteCodeAsKey_frequenceAsValue as $byteCode => $frequence)
        {
            echo '<li>O caractere "' . chr($byteCode) . '" foi usado ' . $frequence . 'x</li>';

            if ($frequence === $max)
            {
                $maxByteCode = $byteCode;
            }

            if ($frequence === $min)
            {
                $minByteCode = $byteCode;
            }
        }
    echo '</ul>';

    echo '<ul>';
        echo '<li>O caractete mais usado na string foi: "' . chr($maxByteCode) . '"</li>';
        echo '<li>O caractete menos usado na string foi: "' . chr($minByteCode) . '"</li>';
    echo '</ul>';
