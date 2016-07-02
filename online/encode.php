<?php

$out = '';
for ($i = 0; $i < strlen($_GET['server']); $i++) {
    $out .= sprintf('%02x', ord($_GET['server'][$i]));
}

header('Location: ' . $out . '.jnlp');