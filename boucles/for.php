<?php

/*****************************************/
/********** Les boucles : For ************/
/*****************************************/
echo '1.Nombre de mouton : <br>';
for ($i = 0; $i <= 10; ++$i) {
    echo $i.' mouton(s)<br>';
}
echo '<br><br>';
//----------------------------------------
//for : particulièrement utile pour pacourir un tableau
$couleurs = ['rouge', 'bleu', 'vert', 'orange', 'marron', 'noir', 'blanc'];
//count est une fonction proposée par php qui sert à compter le nombre d'éléments d'un tableau
echo '2.Les couleurs : <br>';

$num = count($couleurs); // J'effectue le count en dehors de la boucle for pour éviter que php ne doive recalculer à chaque itération le nombre d'éléments du tableau
for ($i = 0; $i < $num; ++$i) {
    echo $couleurs[$i].'<br>';
}
echo '<br><br>';

//----------------------------------------
//Parcourir un tableau depuis la fin
echo '3.Les couleurs depuis la fin: <br>';
//n'oubliez pas qu'un tableau commence à l'index 0. C'est pour ça qu'on commence notre $i à la taille du tableau moins 1

$num = count($couleurs);
for ($i = $num - 1; $i >= 0; --$i) {
    echo $couleurs[$i].'<br>';
}
echo '<br><br>';
//----------------------------------------
//Parcourir un tableau multidimensionnel à 2 dimensions
$couleurs = array(
  array('rouge clair', 'rouge', 'rouge fonce'),
  array('bleu clair', 'bleu', 'bleu fonce'),
  array('vert clair', 'vert', 'vert fonce'),
  array('orange clair', 'orange', 'orange fonce'),
  array('marron clair', 'marron', 'marron fonce'),
);

echo '4.Les nuances de couleurs : <br>';
$num = count($couleurs);
for ($i = 0; $i < $num; ++$i) {
    for ($j = 0; $j < count($couleurs[$i]); ++$j) {
        echo $couleurs[$i][$j].'<br>';
    }
}

echo '<br><br>';

/*****************************************/
/********** Les boucles : Foreach ********/
/*****************************************/
//parcourir un tableau simple
$couleurs = ['rouge', 'bleu', 'vert', 'orange', 'marron', 'noir', 'blanc'];
echo '5.Les couleurs : <br>';
foreach ($couleurs as $couleur) {
    echo $couleur.'<br>';
}
echo '<br><br>';

//----------------------------------------
//parcourir un tableau associatif
$vehicule = array(
  //clé => valeur
  'nom' => 'Aventador LP 700-4',
  'marque' => 'Lamborghini',
  'puissance' => 700,
  'prix' => 200000,
);

echo '6.Specificite de ma voiture : <br>';
//syntax : foreach($tableau as $cle => $valeur )
foreach ($vehicule as $propriete => $valeur) {
    echo $propriete.':'.$valeur.'<br>';
}
echo '<br><br>';

//----------------------------------------
//parcourir un tableau associatif multidimensionnel
$vehiculeConcession = array(
  'Bas de gamme' => array(
    'nom' => 'C1',
       'marque' => 'Citroen',
       'puissance' => 70,
       'prix' => 10000,
  ),
  'Milieu de gamme' => array(
    'nom' => 'Golf',
       'marque' => 'VW',
       'puissance' => 140,
       'prix' => 270000,
  ),
  'Haut de gamme' => array(
    'nom' => 'Aventador LP 700-4',
       'marque' => 'Lamborghini',
       'puissance' => 700,
       'prix' => 200000,
  ),
);

echo '7.Les voitures dans la concession :';
foreach ($vehiculeConcession as $gamme => $vehicule) {
    echo '<br>'.$gamme;
    foreach ($vehicule as $propriete => $valeur) {
        echo $propriete.' : '.$valeur.'<br>';
    }
}
echo '<br><br>';

/*###############################################*/
/*################# ACTIVITÉS ###################*/
/*###############################################*/

//----------------------------------------
//Créer un tableau pour les mois de l'année et affiché tous les mois de Janvier à Décembre
//modifier et/ou remplacer les éléments ci-dessous
echo "8.Les mois depuis le debut de l'annee : <br>";
$mois = ["janvier", "fevrier", "Mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre",
    "decembre"];

foreach ($mois as $m) {
    echo "$m" . "\n";
}

echo '<br><br>';

//Afficher les mois de la fin de l'année jusqu'au début de l'année
//modifier et/ou remplacer les éléments ci-dessous
echo "9.Les mois depuis la fin de l'annee : <br>";
$mois2 = ["janvier", "fevrier", "Mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre",
    "decembre"];
$mois2 = array_reverse($mois2);

foreach ($mois2 as $mo) {
    echo "$mo" . "\n";
}
echo '<br><br>';


//----------------------------------------
//Afficher le nom et prénoms des élèves de ce collège
$college = array(
  'Sixieme' => array(
    array('Nom' => 'Payet', 'Prenom' => 'Mickael'),
    array('Nom' => 'Hoareau', 'Prenom' => 'Christine'),
    array('Nom' => 'Maillot', 'Prenom' => 'Laure'),
  ),
  'Cinquieme' => array(
    array('Nom' => 'Bourdon', 'Prenom' => 'Didier'),
    array('Nom' => 'Legitimus', 'Prenom' => 'Pascal'),
    array('Nom' => 'Campan', 'Prenom' => 'Bernard'),
    array('Nom' => 'Fois', 'Prenom' => 'Marina'),
    array('Nom' => 'Floresti', 'Prenom' => 'Florence'),
  ),
  'Quatrieme' => array(
    array('Nom' => 'Willis', 'Prenom' => 'Bruce'),
    array('Nom' => 'Lawrence', 'Prenom' => 'Laurence'),
    array('Nom' => 'Johannson', 'Prenom' => 'Scarlett'),
    array('Nom' => 'Jackson', 'Prenom' => 'Samuel'),
  ),
);

echo '10.Les eleves du college : <br>';
//ajoutez votre code ici
foreach ($college as $classe => $etudiants) {
    echo "Classe: $classe <br>";
    foreach ($etudiants as $etudiant) {
        echo "Nom: " . $etudiant["Nom"] . ", Prénom: " . $etudiant["Prenom"] . "<br>";
    }
    echo "<br>";
}

echo '<br><br>';

//----------------------------------------
//Afficher le nom et prénoms des élèves de ce collège
//reprenez le tableau ci-dessus, ajoutez des éléves pour la classe de troisième et réaffichez tout
echo '11.Les eleves du college (avec les nouveaux arrivants): <br>';
//ajoutez votre code ici
$collegeNew = array(
    'Sixieme' => array(
        array('Nom' => 'Payet', 'Prenom' => 'Mickael'),
        array('Nom' => 'Hoareau', 'Prenom' => 'Christine'),
        array('Nom' => 'Maillot', 'Prenom' => 'Laure'),
    ),
    'Cinquieme' => array(
        array('Nom' => 'Bourdon', 'Prenom' => 'Didier'),
        array('Nom' => 'Legitimus', 'Prenom' => 'Pascal'),
        array('Nom' => 'Campan', 'Prenom' => 'Bernard'),
        array('Nom' => 'Fois', 'Prenom' => 'Marina'),
        array('Nom' => 'Floresti', 'Prenom' => 'Florence'),
    ),
    'Quatrieme' => array(
        array('Nom' => 'Willis', 'Prenom' => 'Bruce'),
        array('Nom' => 'Lawrence', 'Prenom' => 'Laurence'),
        array('Nom' => 'Johannson', 'Prenom' => 'Scarlett'),
        array('Nom' => 'Jackson', 'Prenom' => 'Samuel'),
    ),
    'Troisieme' => array(
        array('Nom' => 'Cruise', 'Prenom' => 'Tom'),
        array('Nom' => 'Jolie', 'Prenom' => 'Angelina'),
        array('Nom' => 'Cage', 'Prenom' => 'Nicolas'),
        array('Nom' => 'Anniston', 'Prenom' => 'Jennifer'),
    )
);

foreach ($collegeNew as $classe => $etudiants) {
    echo "Classe: $classe <br>";
    foreach ($etudiants as $etudiant) {
        echo "Nom: " . $etudiant["Nom"] . ", Prénom: " . $etudiant["Prenom"] . "<br>";
    }
    echo "<br>";
}

echo '<br><br>';

//----------------------------------------
//Afficher toutes les informations de la vidéothèque
$videotheque = array(
  array(
    'nom' => 'Independance day',
    'date' => 1996,
    'realisateur' => 'Roland Emmerich',
    'acteurs' => array(
      'Will Smith', 'Bill Pullman', 'Jeff Goldblum', 'Mary McDonnell',
    ),
  ),
  array(
    'nom' => 'Bienvenue a Gattaca',
    'date' => 1998,
    'realisateur' => 'Andrew Niccol',
    'acteurs' => array(
      'Ethan Hawke', 'Uma Thurman', 'Jude Law',
    ),
  ),
  array(
    'nom' => 'Forrest Gump',
    'date' => 1994,
    'realisateur' => 'Robert Zemeckis',
    'acteurs' => array(
      	'Tom Hanks', 'Gary Sinise',
    ),
  ),
  array(
    'nom' => '12 hommes en colere',
    'date' => 1957,
    'realisateur' => 'Sidney Lumet',
    'acteurs' => array(
      	'Henry Fonda','Martin Balsam','John Fiedler','Lee J. Cobb','E.G. Marshall',
    ),
  ),
);

echo '12.Mes films : <br>';
//ajoutez votre code ici
foreach ($videotheque as $film) {
    echo "Nom: " . $film['nom'] . "<br>";
    echo "Date: " . $film['date'] . "<br>";
    echo "Réalisateur: " . $film['realisateur'] . "<br>";
    echo "Acteurs: ";
    foreach ($film['acteurs'] as $acteur) {
        echo "$acteur, ";
    }
    echo "<br><br>";
}

echo '<br><br>';

//----------------------------------------
//Afficher toutes les informations de la vidéothèque
//reprenez le tableau ci-dessus, ajoutez-y 3 de vos films préférés avec les mêmes
//d'informations (nom, date, realisateur, acteurs) et en plus de ces informations
//rajoutez un synopsis

echo '13.Mes films : <br>';
//ajoutez votre code ici
$videothequeNew = array(
    array(
        'nom' => 'Independance day',
        'date' => 1996,
        'realisateur' => 'Roland Emmerich',
        'acteurs' => array(
            'Will Smith', 'Bill Pullman', 'Jeff Goldblum', 'Mary McDonnell',
        ),
    ),
    array(
        'nom' => 'Bienvenue a Gattaca',
        'date' => 1998,
        'realisateur' => 'Andrew Niccol',
        'acteurs' => array(
            'Ethan Hawke', 'Uma Thurman', 'Jude Law',
        ),
    ),
    array(
        'nom' => 'Forrest Gump',
        'date' => 1994,
        'realisateur' => 'Robert Zemeckis',
        'acteurs' => array(
            'Tom Hanks', 'Gary Sinise',
        ),
    ),
    array(
        'nom' => '12 hommes en colere',
        'date' => 1957,
        'realisateur' => 'Sidney Lumet',
        'acteurs' => array(
            'Henry Fonda','Martin Balsam','John Fiedler','Lee J. Cobb','E.G. Marshall',
        ),
    ),
    array(
        'nom' => 'Top Gun : Maverick',
        'date' => 2022,
        'realisateur' => 'Joseph Kosinski',
        'acteurs' => array(
            'Tom Cruise','Miles Teller','Val Kilmer','Glen Powell','Jennifer Connelly',
        ),
    ),
    array(
        'nom' => 'Cruella',
        'date' => 2021,
        'realisateur' => 'Craig Gillespie',
        'acteurs' => array(
            'Emma Stone','Emma Thompson','Joel Fry','Mark Strong','Paul Walter',
        ),
    ),
    array(
        'nom' => 'Commando',
        'date' => 1985,
        'realisateur' => 'Mark. L Lester',
        'acteurs' => array(
            'Arnold Schwarzenegger','Rae Dawn Chong','Dan Hedaya','Vernon Wells','James Olson',
        ),
    ),
);

foreach ($videothequeNew as $film) {
    echo "Nom: " . $film['nom'] . "<br>";
    echo "Date: " . $film['date'] . "<br>";
    echo "Réalisateur: " . $film['realisateur'] . "<br>";
    echo "Acteurs: ";
    foreach ($film['acteurs'] as $acteur) {
        echo "$acteur, ";
    }
    echo "<br><br>";
}
echo '<br><br>';
