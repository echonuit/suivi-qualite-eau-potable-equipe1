<?php

declare(strict_types=1);

namespace EauPotable\Donnees;

final class RechercheManager
{
    public function rechercher(string $terme)
    {
        $pdo = Connexion::ouvrir();
        $sql = 'SELECT nom_commune FROM Commune WHERE LOWER(nom_commune) LIKE LOWER(:terme)';
        $requete = $pdo->prepare($sql);
        $requete->execute(['terme' => $terme . '%']);
        $resultats = $requete->fetchAll();
        return $resultats;
    }
}

