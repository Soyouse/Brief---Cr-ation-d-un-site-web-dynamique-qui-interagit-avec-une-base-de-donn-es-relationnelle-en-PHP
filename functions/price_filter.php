<?php
// Traitement du formulaire de filtrage
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des valeurs des champs de formulaire envoyées via POST
    $minPrice = $_POST['minPrice']; // Récupère la valeur du champ de saisie pour le prix minimum
    $maxPrice = $_POST['maxPrice']; // Récupère la valeur du champ de saisie pour le prix maximum

    // Préparation de la requête SQL pour sélectionner les produits avec des prix compris dans la fourchette spécifiée
    $stmt = $conn->prepare('SELECT m.id, i.img_name, t.title, d.description, p.prix
                            FROM medicaments m
                            INNER JOIN images i ON m.img_id = i.id
                            INNER JOIN titres t ON m.title_id = t.id
                            INNER JOIN descriptions d ON m.description_id = d.id
                            INNER JOIN prix p ON m.prix_id = p.id
                            WHERE p.prix BETWEEN :minPrice AND :maxPrice'); // Requête SQL avec clause WHERE pour filtrer par prix
    $stmt->bindParam(':minPrice', $minPrice); // Lie la variable $minPrice à un paramètre nommé :minPrice dans la requête
    $stmt->bindParam(':maxPrice', $maxPrice); // Lie la variable $maxPrice à un paramètre nommé :maxPrice dans la requête
    $stmt->execute(); // Exécute la requête préparée
    $medicaments = $stmt->fetchAll(PDO::FETCH_ASSOC); // Récupère les résultats de la requête dans un tableau associatif
} else {
    // Si le formulaire n'a pas été soumis via POST, récupérer tous les médicaments sans filtrage
    $result = $conn->query('SELECT m.id, i.img_name, t.title, d.description, p.prix
                            FROM medicaments m
                            INNER JOIN images i ON m.img_id = i.id
                            INNER JOIN titres t ON m.title_id = t.id
                            INNER JOIN descriptions d ON m.description_id = d.id
                            INNER JOIN prix p ON m.prix_id = p.id');
    $medicaments = $result->fetchAll(PDO::FETCH_ASSOC); // Récupère tous les médicaments dans un tableau associatif
}
?>