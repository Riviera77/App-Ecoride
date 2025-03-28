<?php

namespace App\DataFixtures;

use App\Entity\Carpooling;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class CarpoolingFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $carpooling1 = new Carpooling();
        $carpooling1->setDepartureAddress('Paris');
        $carpooling1->setArrivalAddress('Lyon');
        $carpooling1->setDepartureDate(new \DateTime('2025-12-01'));
        $carpooling1->setArrivalDate(new \DateTime('2025-12-01'));
        $carpooling1->setDepartureTime(new \DateTime('08:00:00'));
        $carpooling1->setArrivalTime(new \DateTime('13:00:00'));
        $carpooling1->setPrice(50);
        $carpooling1->setNumberSeats(3);
        $carpooling1->setStatus('open');
        $carpooling1->setPreferences('non fumeur');
        $manager->persist($carpooling1);
        
        $carpooling2 = new Carpooling();
        $carpooling2->setDepartureAddress('Paris');
        $carpooling2->setArrivalAddress('Rennes');
        $carpooling2->setDepartureDate(new \DateTime('2025-12-01'));
        $carpooling2->setArrivalDate(new \DateTime('2025-12-01'));
        $carpooling2->setDepartureTime(new \DateTime('08:30:00'));
        $carpooling2->setArrivalTime(new \DateTime('12:00:00'));
        $carpooling2->setPrice(30);
        $carpooling2->setNumberSeats(2);
        $carpooling2->setStatus('open');
        $carpooling2->setPreferences('animaux acceptés');
        $manager->persist($carpooling2);

        $carpooling3 = new Carpooling();
        $carpooling3->setDepartureAddress('Paris');
        $carpooling3->setArrivalAddress('Rennes');
        $carpooling3->setDepartureDate(new \DateTime('2025-12-01'));
        $carpooling3->setArrivalDate(new \DateTime('2025-12-01'));
        $carpooling3->setDepartureTime(new \DateTime('07:30:00'));
        $carpooling3->setArrivalTime(new \DateTime('15:20:00'));
        $carpooling3->setPrice(80);
        $carpooling3->setNumberSeats(2);
        $carpooling3->setStatus('open');
        $carpooling3->setPreferences('non fumeurs, animaux acceptés');
        $manager->persist($carpooling3);

        $manager->flush();
    }
}