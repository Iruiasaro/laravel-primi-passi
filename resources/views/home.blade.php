<!-- Esercizio di oggi:
nome repo: laravel-primi-passi
Ciao ragazzi, oggi iniziamo a muovere i primi passi con questo fantastico framework che è Laravel! Per prima cosa, creiamo un nuovo progetto Laravel 7, utilizzando questo comando:
composer create-project --prefer-dist laravel/laravel:^7.0 laravel-primi-passi
Al termine dell'installazione, entriamo nella cartella del progetto
cd laravel-primi-passi e avviamo l'artisan serve con uno di questi due comandi:
php artisan serve
oppure
php -S localhost:8000 -t public
A questo punto, iniziamo a prendere confidenza con le rotte e le views:
cancelliamo la view welcome.blade.php e creiamo una nostra homepage.
Facciamo quindi sì che la rotta / visualizzi home.blade.php
Inizialmente stampiamo un Hello World, poi passiamo dei dati alla view in modo da visualizzarli dinamicamente con Blade.
Bonus: Creiamo più di una pagina e visualizziamo un header menu con i link di tutte le pagine, utilizzando la funzione route() -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel_Primi_Passi</title>
</head>
<body>
    <h1>HELLO WORLD</h1>

    <span>Nome: {{$name }} </span> <br>
    <span>Cognome: {{$surname}} </span> <br>
    <span>Alias: {{$alias}}</span> <br>
    <br>

    <a href="{{ route('page1') }}">Vai alla Page1</a>

</body>
</html>