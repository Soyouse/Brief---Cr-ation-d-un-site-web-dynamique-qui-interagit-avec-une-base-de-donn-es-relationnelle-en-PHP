<?php 
// Essai de connexion à la base de données
try {
    $conn = new PDO('mysql:host=localhost;dbname=medicament;charset=utf8', 'root', '' );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Échec de la connexion : " . $e->getMessage();
    die(); // Arrête l'exécution du script en cas d'échec de la connexion
}
?>
