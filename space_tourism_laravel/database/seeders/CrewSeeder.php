<?php

namespace Database\Seeders;

use App\Models\Crew;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CrewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $crews = [
            [
                'name' => 'Douglas Hurley',
                'role' => 'Commander',
                'bio' => 'Douglas Gerald Hurley is an American engineer, former Marine Corps pilot and former NASA astronaut. He launched into space for the third time as commander of Crew Dragon Demo-2.',
                'image_url' => 'media/images/crew/image-douglas-hurley.png',
            ],
            [
                'name' => 'Mark Shuttleworth',
                'role' => 'Mission Specialist',
                'bio' => 'Mark Richard Shuttleworth is the founder and CEO of Canonical, the company behind the Linux-based Ubuntu operating system. Shuttleworth became the first South African to travel to space as a space tourist.',
                'image_url' => 'media/images/crew/image-mark-shuttleworth.png',
            ],
            [
                'name' => 'Victor Glover',
                'role' => 'Pilot',
                'bio' => 'Pilot on the first operational flight of the SpaceX Crew Dragon to the International Space Station. Glover is a commander in the U.S. Navy where he pilots an F/A-18.He was a crew member of Expedition 64, and served as a station systems flight engineer.',
                'image_url' => 'media/images/crew/image-victor-glover.png',
            ],
            [
                'name' => 'Anousheh Ansari',
                'role' => 'Flight Engineer',
                'bio' => 'Anousheh Ansari is an Iranian American engineer and co-founder of Prodea Systems. Ansari was the fourth self-funded space tourist, the first self-funded woman to fly to the ISS, and the first Iranian in space.',
                'image_url' => 'media/images/crew/image-anousheh-ansari.png',
            ],
        ];

        foreach ($crews as $data) {
            Crew::create($data);
        }
    }
}
