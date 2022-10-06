<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $question = [
            [ 'title'=>'Question 1','body'=>'Votre adresse mail','type'=>'B','choices'=>null],
            [ 'title'=>'Question 2','body'=>'Votre âge','type'=>'B','choices'=>null],
            [ 'title'=>'Question 3','body'=>'Votre sexe','type'=>'A','choices'=>'Homme, Femme, Préfère ne pas répondre'],
            [ 'title'=>'Question 4','body'=>'Nombre de personne dans votre foyer (adulte & enfants)','type'=>'C','choices'=>'1, 2, 3, 4, 5'],
            [ 'title'=>'Question 5','body'=>'Votre profession','type'=>'B','choices'=>null],
            [ 'title'=>'Question 6','body'=>'Quel marque de casque VR utilisez-vous ?','type'=>'A','choices'=>'Oculus Quest, Oculus Rift/s, HTC Vive, Windows Mixed
            Reality, Valve index'],
            [ 'title'=>'Question 7','body'=>'Sur quel magasin d’application achetez vous des contenus VR ?','type'=>'A','choices'=>'SteamVR, Occulus store, Viveport, Windows store'],
            [ 'title'=>'Question 8','body'=>'Quel casque envisagez-vous d’acheter dans un futur proche  ?','type'=>'A','choices'=>'Occulus Quest, Occulus Go, HTC Vive Pro, PSVR, Autre,
            Aucun'],
            [ 'title'=>'Question 9','body'=>'Au sein de votre foyer, combien de personnes utilisent votre casque VR pour regarder
            Bigscreen ?','type'=>'C','choices'=>'1, 2, 3, 4, 5'],
            [ 'title'=>'Question 10','body'=>'Vous utilisez principalement Bigscreen pour','type'=>'A','choices'=>'regarder la TV en direct, regarder des films, travailler, jouer en solo, jouer en équipe'],
            [ 'title'=>'Question 11','body'=>'Combien donnez-vous de point pour la qualité de l’image sur Bigscreen ?','type'=>'C','choices'=>'1, 2, 3, 4, 5'],
            [ 'title'=>'Question 12','body'=>'Combien donnez-vous de point pour le confort d’utilisation de l’interface Bigscreen ?','type'=>'C','choices'=>'1, 2, 3, 4, 5'],
            [ 'title'=>'Question 13','body'=>'Combien donnez-vous de point pour la connexion réseau de Bigscreen ?','type'=>'C','choices'=>'1, 2, 3, 4, 5'],
            [ 'title'=>'Question 14','body'=>'Combien donnez-vous de point pour la qualité des graphismes 3D dans Bigscreen ?','type'=>'C','choices'=>'1, 2, 3, 4, 5'],
            [ 'title'=>'Question 15','body'=>'Combien donnez-vous de point pour la qualité audio dans Bigscreen ?','type'=>'C','choices'=>'1, 2, 3, 4, 5'],
            [ 'title'=>'Question 16','body'=>'Aimeriez vous avoir des notifications plus précises au cours de vos sessions Bigscreen ?','type'=>'A','choices'=>'Oui, Non'],
            [ 'title'=>'Question 17','body'=>'Aimeriez vous pouvoir inviter un ami à rejoindre votre session via son smartphone ?','type'=>'A','choices'=>'Oui, Non'],
            [ 'title'=>'Question 18','body'=>'Aimeriez vous pouvoir enregistrer des émissions TV pour pouvoir les regarder ultérieurement ?','type'=>'A','choices'=>'Oui, Non'],
            [ 'title'=>'Question 19','body'=>'Aimeriez-vous jouer à des jeux exclusifs sur votre Bigscreen ?','type'=>'A','choices'=>'Oui, Non'],
            [ 'title'=>'Question 20/','body'=>'Quelle nouvelle fonctionnalité devrait exister sur Bigscreen ?','type'=>'B','choices'=>null],
        ];
        Question::insert($question);
    }
}

