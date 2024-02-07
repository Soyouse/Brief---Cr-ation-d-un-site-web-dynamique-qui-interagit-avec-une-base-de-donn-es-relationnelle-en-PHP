<?php
    include ("assets/utilities/header.php");
?>
 <div class='container row col-1 position-absolute card bg-op text-white' style="top: 15%; height: 35%;">
    <!-- Début du formulaire -->

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <!-- Champ de saisie pour le prix minimum -->
        <div class="mb-3">
            <label for="minPrice" class="form-label">Prix minimum:</label>
            <input type="text" class="form-control" id="minPrice" name="minPrice">
            <!--
                L'attribut 'name' est utilisé pour identifier le champ lors de la soumission du formulaire.
                Lorsque le formulaire est soumis, le nom 'minPrice' sera associé à la valeur saisie par l'utilisateur.
                pour le prix minimum et sera envoyé au serveur sous forme de variable POST.
                La valeur saisie dans ce champ sera accessible via $_POST['minPrice'].
            -->
            
        </div>
        <!-- Champ de saisie pour le prix maximum -->
        <div class="mb-3">
            <label for="maxPrice" class="form-label">Prix maximum:</label>
            <input type="text" class="form-control" id="maxPrice" name="maxPrice">
            <!--
                De même, le champ 'maxPrice' sera associé à la valeur saisie pour le prix maximum
                et envoyé au serveur sous forme de variable POST lors de la soumission du formulaire.
                La valeur saisie dans ce champ sera accessible via $_POST['maxPrice'].
            -->
        </div>
        <!-- Bouton de soumission du formulaire -->
        <button type="submit" class="btn btn-primary">Filtrer</button>
        <!--
            Ce bouton de type 'submit' déclenche l'envoi des données du formulaire au serveur lorsque l'utilisateur le clique.
        -->
    </form>
    <!-- Fin du formulaire -->
 </div>
 <div class="row row-cols-3 row-cols-md-4 g-4 w-75 position-absolute top-55 start-50 translate-middle  ft">
        <?php include ('assets/utilities/card.php'); ?>
    </div>
        </main> 
    </body>
</html>