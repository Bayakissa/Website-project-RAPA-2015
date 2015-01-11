<?php
 
class CommentTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('comments')->insert(
 
            array(
                array(
                    'id' => 1,
                    'username' => 'Marcia',
                    'email' => 'marcia@gmail.com',
                    'comment' => 'Une révolution! Ma famille a adopté RAPA depuis deux mois maintenant et nous trouvons ce robot parfait pour nos besoins. Ayant tous du travail, il est difficile de visiter ma mère aussi souvent qu\'il le faudrait et c\'est vraiment rassurant d\'avoir un outil pareil à disposition ! Merci'
                ),
                array(
                    'id' => 2,
                    'username' => 'Thomas',
                    'email' => 'thomas.leroy@gmail.com',
                    'comment' => 'Bravo ! La France recèle de bons ingénieurs avec de très bonnes idées! Mon grand père est utilisateur de RAPA depuis un an maintenant, il n\'a (réellement) servi qu\'une fois jusqu\'ici mais cette unique fois l\'a complètement rentabilisé puisque mon grand-père a eu besoin d\'assistance en urgence et que sans RAPA, je n\'en aurait jamais été prévenu à temps... Merci encore à l\'équipe RAPA !'
                ),
                array(
                    'id' => 3,
                    'username' => 'Philippe',
                    'email' => 'philippe123@gmail.com',
                    'comment' => 'Génial... Je ne suis pas encore utilisateur de RAPA mais un ami qui l\'utilise m\'en a parlé et je trouve c\'est vraiment une très bonne idée. Je n\'en ai pour l\'instant aucune utilité mais je tenais à laisser un commentaire pour vous faire savoir que j\'en parlerai très largement autour de moi, pour ceux qui ne vous connaissent pas encore et que ça pourrait vraiment intéresser. Bonne continuation!'
                )
            )
        );
    }
 
}