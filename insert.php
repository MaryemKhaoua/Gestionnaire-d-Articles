<?php

class Insert
{
   
   
    public function insertArticle($titre, $contenu, $date_ceation) {
        try {
            $rqt = $this->pdo->prepare("INSERT INTO article (titre, contenu, date_insertion) VALUES ()");
            $rqt->execute([$titre, $contenu, $date_ceation]);
            echo "Article inserted successfully!";
        } catch (PDOException $e) {
            
            die('Insertion failed: ' . $e->getMessage());
        }
    }
}










?>