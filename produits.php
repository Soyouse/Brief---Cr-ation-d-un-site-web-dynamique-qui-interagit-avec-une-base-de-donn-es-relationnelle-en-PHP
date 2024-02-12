<?php
    include ("assets/utilities/header.php");
?>
<div class='container position-absolute card bg-op text-white' style="top: 20%; max-width: 400px;">
    <!-- Début du formulaire -->
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <!-- Champ de saisie pour le prix minimum -->
        <div class="mb-3">
            <label for="minPrice" class="form-label">Prix minimum:</label>
            <input type="text" class="form-control" id="minPrice" name="minPrice">
        </div>
        <!-- Champ de saisie pour le prix maximum -->
        <div class="mb-3">
            <label for="maxPrice" class="form-label">Prix maximum:</label>
            <input type="text" class="form-control" id="maxPrice" name="maxPrice">
        </div>
        <!-- Bouton de soumission du formulaire -->
        <button type="submit" class="btn btn-primary">Filtrer</button>
    </form>
    <!-- Fin du formulaire -->
</div>

<div class="container mt-5 position-absolute top-55 start-50 translate-middle" style="width: 75%;">
    <div class="row row-cols-1 row-cols-md-4 g-4">
        <?php include ('assets/utilities/card.php'); ?>
    </div>
</div>

</main>
</body>
</html>