<?php
$language = 'ドイツ語';

switch ($language) {
    case '英語':
        echo '私は英語を話せます';
        break;
    case 'ドイツ語':
        echo '私はドイツ語を話せます';
        break;
    case 'フランス語':
        echo '私はフランス語を話せます';
        break;
    default:
        echo '私は日本語しか話せません';
        break;
}