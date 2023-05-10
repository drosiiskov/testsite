<?php

    $file = fopen('./data.txt', 'a');

    $data = '';

    foreach($_POST as $key => $value) {
        $data .= $key . ': ' . $value . "\t";
    }
    $data .= "\n";
    fwrite($file, $data);
    fclose($file);
?>