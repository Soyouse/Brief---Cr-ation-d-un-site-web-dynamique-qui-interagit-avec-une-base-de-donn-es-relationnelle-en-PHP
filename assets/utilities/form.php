<?php
// Inclut le fichier de données "form_data.php"
include 'assets/data/form_data.php';
// Début de la création d'une rangée de formulaires, centrée
 echo '<div class="row m-5 d-flex justify-content-center">';
foreach ($name as $value) {
    echo '<div class="col-md-6">
        <div class="md-form mb-0">
            <input type="' . $value['type'] . '" name="' . $value['name'] . '" id="' . $value['id'] . '" class="' . $value['class'] . '"
                placeholder="' . $value['placeholder'] . '">
        </div>
    </div>';
}
// Boucle à travers le tableau $name pour générer des champs de formulaire
foreach ($coord as $value) {
    echo '<div class="col-md-6">
        <div class="md-form mb-0">
            <input type="' . $value['type'] . '" name="' . $value['name'] . '" id="' . $value['id'] . '" class="' . $value['class'] . '"
                placeholder="' . $value['placeholder'] . '">
        </div>
    </div>';
}
echo '</div>';
?>