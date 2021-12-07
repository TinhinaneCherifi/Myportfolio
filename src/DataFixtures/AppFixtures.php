<?php

namespace App\DataFixtures;

use App\Entity\Project;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $project = new Project();
        $project->setProjectName("Sarah Haywood");
        $project->setTechno("Symfony");
        $project->setDescription("Site de wedding planner de luxe");
        $project->setImg("sarahhaywood.png");
        $project->setLink("https://www.sarahhaywood.com");

        $manager->persist($project);

        $manager->flush();
    }
}
