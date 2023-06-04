<?php

include __DIR__ . '/../models/genres.php';
include __DIR__ . '/../models/products.php';

$arrayProdotti = [

    new Categories("../assets/img/eukanuba12-.jpg", "Eukanuba", "cibo", "€ 12.99", "cane"),
    new Categories("../assets/img/eukanuba13+.jpg", "Eukanuba", "cibo", "€ 15.99", "cane"),
    new Categories("../assets/img/eukanuba12+.jpg", "Eukanuba", "cibo", "€ 9.99", "gatto"),
    new Categories("../assets/img/gomitologatto.jpg", "Lana Gatto", "gioco", "€ 6.99", "gatto"),
];