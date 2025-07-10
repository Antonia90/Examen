<?php
require_once('Refuge.php');

$animal1 = new Animal('Mochi', "Perro", Status::Reception, Gender::Female);
$animal2 = new Animal('Nox', "Gato", Status::Adoption, Gender::Male);
$animal3 = new Animal('Kiwi', "Perro", Status::Adoption, Gender::Male);
$animal4 = new Animal('Lua', "Gato", Status::Reception, Gender::Female);

$animals = [$animal1, $animal2, $animal3, $animal4];

$refugio = new Refuge($animals);

$type= "Perro";
echo "<h3> Animales de tipo {$type}: </h3>";
$animalsByType = $refugio->sameTypeAnimals($type);
if (empty($animalsByType)) {
    echo "No hay animales de ese tipo en el refugio.";
} else {
    foreach ($animalsByType as $animal) {
        echo $animal;
    }
}
echo "<h3>El nombre más largo es: </h3>";
echo $refugio->longerName();
