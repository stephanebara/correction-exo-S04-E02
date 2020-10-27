<?php

// À zapper : permet juste d'exécuter ce fichier via navigateur ou via le terminal.
if (empty($argv)) {
    echo '<pre>';
}





// TODO : définir une classe Article (ou charger le fichier déclarant la classe Article)

// --- START OF YOUR CODE ---
require_once("Article.php");
// --- END OF YOUR CODE ---





// Vérification de l'existence de la classe Article demandée.
if (!class_exists('Article')) {
    die(PHP_EOL.'La classe n\'a pas été écrite ou n\'a pas été incluse'.PHP_EOL.PHP_EOL);
}

// Création du premier objet de type Article.
$prems = new Article();
$prems->title = 'Ivre, il refait tous les challenges en un week-end sans dormir.';
$prems->content = 'Ou comment j\'ai appris plein de choses en faisant une nouvelle fois tous les challenges que j\'avais loupé.';
$prems->author = 'Alexandre';
$prems->date = '2017-07-13';
$prems->category = 'Ma Vie De Dev';


// Debug pour contrôler son travail.
// À toi de vérifier visuellement que les données sont dans les bonnes propriétés !
print_r($prems);

// Création de la seconde instance Article.
$deuz = new Article(
    'POO or not POO, that is the question.',
    'La POO est-elle vraiment indispensable pour une architecture solide ? Etude de cas avec PHP.',
    'Julie',
    '2017-07-04',
    'TeamBack'
);

// Auto-contrôle visuel, à nouveau.
print_r($deuz);





// TODO : créer une instance Article pour un 3e article. Les infos de l'article
// à créer sont fournies (en vrac) ci-dessous.

/*
    Git, pour les n00bs.
    Un p'tit récap rapide pour tout ceux qui, comme moi, ont galéré sur ce magnifique outil de versionning.
    Posté par Lucie le 19 juin 2017 dans #Collaboration.
*/

// --- START OF YOUR CODE ---
// maintenant notre classe nous permet d'utiliser le constructeur de differentes manières
// 1 - on peut créer l'objet vide
$troiz = new Article();
// puis le remplir (propriété par propriété)
$troiz->title = 'Git, pour les n00bs.';
$troiz->content = 'Un ptit récap rapide pour tout ceux qui, comme moi, ont galéré sur ce magnifique outil de versionning.';
$troiz->author = 'Lucie';
$troiz->date = '2017-06-19';
$troiz->category = 'Collaboration';

// --- END OF YOUR CODE ---

// Auto-contrôle visuel, à nouveau.
if (!empty($troiz)) {
    print_r($troiz);
}
else {
    die(PHP_EOL.'Il faut instancier un objet Article pour le troisième article'.PHP_EOL.PHP_EOL);
}

// Bonus méthode getDateFr !
if (method_exists($prems, 'getDateFr')) {
    echo 'Article "'.$prems->title.'" publié le '.$prems->getDateFr().PHP_EOL;
    echo 'Article "'.$deuz->title.'" publié le '.$deuz->getDateFr().PHP_EOL;
    echo 'Article "'.$troiz->title.'" publié le '.$troiz->getDateFr().PHP_EOL;

    // vérif, toussa…
    if (empty($prems->getDateFr())) {
        die(PHP_EOL.'Il manquerait pas un petit "retour" dans la méthode ?');
    }
}
else {
    die(PHP_EOL.'Il faut déclarer une méthode "getDateFr" dans la classe Article'.PHP_EOL.PHP_EOL);
}

// À zapper : permet juste d'exécuter ce fichier via navigateur ou via le terminal.
if (empty($argv)) {
    echo '</pre>';
}