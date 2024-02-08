<?php require_once 'functions\login.php'; ?>
<?php require_once 'functions\price_filter.php'; ?>
<?php
// Affichage des médicaments
// Utilisation de l'opérateur de négation "!" pour changer la valeur booléenne renvoyée par la fonction empty.
if (!empty($medicaments)) {
    foreach ($medicaments as $medicament) {
        echo '<div class="col">
                <div class="card bg-op text-white d-flex align-items-center ">
                    <img src="/bc/assets/img/medicament/' . $medicament['img_name'] . '.png" class="card-img-top w-40" alt="">
                    <div class="card-body d-flex align-items-center flex-column ">
                        <h5 class="card-title text-center">' . $medicament['title'] . '</h5>
                        <p class="card-text text-center ft">' . $medicament['description'] . '</p>
                        <p class="card-text text-center">' . $medicament['prix'] .  ' €</p>
                        <a href="#" class="btn btn-success w-50 d-flex justify-content-center" role="button">Acheter</a>
                    </div>
                </div>
            </div>';
    }
} else {
    echo "Aucun médicament trouvé.";
}
?>