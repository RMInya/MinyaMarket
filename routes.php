<?php

return [
    '/' => function () {
        require './pages/loginPage.php';
    },
    '/register' => function () {
        require './pages/registerPage.php';
    },
    '/main' => function () {
        require './pages/main.php';
    },
    '/products' => function () {
        require './pages/productPage.php';
    },
    '/statement' => function () {
        require './pages/statementPage.php';
    },
    '/addProduct' => function () {
        require './pages/addProductPage.php';
    },
    '/administration' => function () {
        require './pages/administration/adminPage.php';
    },
    '/administration/statements' => function () {
        require './pages/administration/adminStatements.php';
    },
    '/administration/users' => function () {
        require './pages/administration/adminUsers.php';
    },
];
