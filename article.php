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
    
    public function readArticles() {
    $stmt = $this->connexion()->query("SELECT * FROM acticles");
    $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $articles;
}
public function updateArticle($id, $titre, $contenu, $date_creation) {
    $stmt = $this->connexion()->prepare("UPDATE acticles
                                        SET titre = :titre, contenu = :contenu, date_creation = :date_creation
                                        WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':titre', $titre);
    $stmt->bindParam(':contenu', $contenu);
    $stmt->bindParam(':date_creation', $date_creation);

    $stmt->execute();
}

public function deleteArticle($id) {
    $stmt = $this->connexion()->prepare("DELETE FROM acticles WHERE id = :id");
    $stmt->bindParam(':id', $id);

    $stmt->execute();
}
}

$article = new Article();
$article->createArticle('Ataay', 'zwin bzf ', '2024-12-12');

$articles = $article->readArticles();
print_r($articles);

$article->updateArticle(1, 'Tea', 'goooooooood', '2024-12-13');

$article->deleteArticle(1);



?>
