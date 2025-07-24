<?php
$url = '/' . trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
if ($url === '/slow') {
    $str = '';
    for ($i = 0; $i < 100000000; ++$i) {
        $str = $i;
    }
    echo "Simulando uma requisição mais lenta (máquina: <b>{$_SERVER['SERVER_ADDR']}</b>)\n";
    return;
}

echo "Hello, world! Eu sou a máquina com IP <b>{$_SERVER['SERVER_ADDR']}</b>\n";

