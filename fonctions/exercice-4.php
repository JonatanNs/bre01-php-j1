<?php

function getFirst(array $tableau) : ? int {
    if (!empty($tableau)) { //Utilisation de !empty($tableau) pour vérifier si le tableau n'est pas vide.
        return $tableau[0];//Utilisation de (int) pour convertir la première valeur du tableau en entier.
    }
        return null;
}

echo getFirst([13, 24, 45]);
echo "<br>";
var_dump(getFirst([]));//Utilisation de var_dump pour afficher le résultat, y compris le cas où le tableau est vide.
echo "<br>";

?>


<!---->

<!--function getFirst(array $tab) : ? int-->
<!--{-->
<!--    if(count($tab) > 0)-->
<!--        return $tab[0];-->

<!--    return null;-->
<!--}-->

<!--var_dump(getFirst([13, 24, 45]));-->
<!--echo "<br>";-->
<!--var_dump(getFirst([]));-->
<!--echo "<br>";-->

<!---->