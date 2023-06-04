<?php

include_once __DIR__ . '/../models/genres.php';
include_once __DIR__ . '/../models/products.php';

$arrayGenres = [

    new Genres("./assets/img/eukanuba12-.jpg", "Eukanuba", "cibo", "€ 12.99", "cane"),
    new Genres("./assets/img/eukanuba13+.jpg", "Eukanuba", "cibo", "€ 15.99", "cane"),
    new Genres("./assets/img/eukanubagatto12+.jpg", "Eukanuba", "cibo", "€ 9.99", "gatto"),
    new Genres("./assets/img/gomitologatto.jpg", "Lana Gatto", "gioco", "€ 6.99", "gatto"),
];

?>