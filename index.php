<?php
include_once('epiphany/Epi.php');

Epi::init('route');
Epi::setSetting('exceptions', true);

$router = new EpiRoute();
$router->get('/', 'home');
$router->get('/contact', 'contact');
$router->get('/test', 'test');

$router->run();

function home() {
    echo 'You are at the home page';
}

function test() {
    echo 'You are at the test page';
}

function home() {
    echo 'You are at the contact page';
}