<?php
include 'connexion.php';

class Article extends Connexion {
    private $id;
    private $titre;
    private $contenu;
    private $date_creation;
    private $id_user;

    public function createArticle($titre, $contenu, $date_creation) {
        $stmt = $this->connexion()->prepare("INSERT INTO acticles (titre, contenu, date_creation)
                                            VALUES (:titre, :contenu, :date_creation)");
        $stmt->bindParam(':titre', $titre);
        $stmt->bindParam(':contenu', $contenu);
        $stmt->bindParam(':date_creation', $date_creation);

        $stmt->execute();
    }
}

$article = new Article();
$article->createArticle('Ataay', 'zwin bzf ', '2024-12-12');
?>
