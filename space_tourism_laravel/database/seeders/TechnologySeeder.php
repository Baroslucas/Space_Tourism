<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = [
            [
                'name' => 'Launch vehicle',
                'description' => "A launch vehicle or carrier rocket is a rocket-propelled vehicle used to carry a payload from Earth's surface to space, usually to Earth orbit or beyond. Our WEB-X carrier rocket is the most powerful in operation. Standing 150 metres tall, it's quite an awe-inspiring sight on the launch pad!",
                'image_url' => 'media/images/technology/image-launch-vehicule-portrait.jpg',
                'image_landscape_url' => 'media/images/technology/image-launch-vehicule-landscape.jpg'
            ],
            [
                'name' => 'Spaceport',
                'description' => "A spaceport or cosmodrome is a site for launching (or receiving) spacecraft, by analogy to the seaport for ships or airport for aircraft. Based in the famous Cape Canaveral, our spaceport is ideally situated to take advantage of the Earth’s rotation for launch.",
                'image_url' => 'media/images/technology/image-spaceport-portrait.jpg',
                'image_landscape_url' => 'media/images/technology/image-spaceport-landscape.jpg'
            ],
            [
                'name' => 'Space capsule',
                'description' => "A space capsule is an often-crewed spacecraft that uses a blunt-body reentry capsule to reenter the Earth's atmosphere without wings. Our capsule is where you'll spend your time during the flight. It includes a space gym, cinema, and plenty of other activities to keep you entertained.",
                'image_url' => 'media/images/technology/image-space-capsule-portrait.jpg',
                'image_landscape_url' => 'media/images/technology/image-space-capsule-landscape.jpg'
            ],
        ];
        foreach ($technologies as $data) {
            Technology::create($data);
        };
    }
}
