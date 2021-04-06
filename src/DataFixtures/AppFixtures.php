<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

use App\Entity\PreguntaTipo;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
                   

  /*      $tipo = new PreguntaTipo();
        $tipo->setNombre('seleccion_multiple');
        $tipo->setDescripcion('desplegable opcion multiple');
        $manager->persist($tipo);

       

        $manager->flush();
*/
    }
}
