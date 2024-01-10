<?php

// Définition de la fonction concat avec deux paramètres de type chaîne et un type de retour de chaîne
function concat(string $a, string $b): string {
    return "$a $b"; // Utilisation de l'opérateur de concaténation pour joindre les chaînes et retourner le résultat
}

echo concat("Hello ", "World !<br>");
echo concat("À la ", "claire fontaine<br>");
echo concat("La vie, l'univers ", "et tout le reste<br>");

?>
