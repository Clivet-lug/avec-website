<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TeamMember;

class TeamMemberSeeder extends Seeder
{
    public function run(): void
    {
        $teamMembers = [
            [
                'name' => 'Violet Nswana Kaponda',
                'position' => 'Founder & Director (CEO)',
                'bio' => 'A technology, digital transformation, and systems delivery leader focused on building African-owned digital capability and enabling institutions to use data and AI responsibly.',
                'photo' => 'images/violet-kaponda1.jpg',
                'email' => 'violet@avectechnologies.com',
                'linkedin' => 'https://www.linkedin.com/in/violet-nswana-kaponda-bsc-msc-a2761a153/',
                'twitter' => null,
                'order' => 1,
                'is_active' => true,
            ],
                        [
                'name' => 'Chiyembekezo Charles Phiri',
                'position' => 'Chief Technology Officer',
                'bio' => 'Driving technological innovation and strategic technical direction to deliver world-class digital solutions for African institutions.',
                'photo' => null,
                'email' => 'charles@avectechnologies.com',
                'linkedin' => null,
                'twitter' => null,
                'order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Chisomo Mutale',
                'position' => 'Head of Technology and Business',
                'bio' => 'Leading technical architecture and innovation at AVEC Technologies, driving excellence in digital infrastructure and AI-enabled systems.',
                'photo' => null,
                'email' => 'chisomo@avectechnologies.com',
                'linkedin' => null,
                'twitter' => null,
                'order' => 3,
                'is_active' => true,
            ],
            [
                'name' => 'Clivet Lungu',
                'position' => 'Head of Engineering',
                'bio' => 'Leading engineering teams to build scalable, secure, and intelligent systems that power African economies.',
                'photo' => null,
                'email' => 'clivet@avectechnologies.com',
                'linkedin' => null,
                'twitter' => null,
                'order' => 4,
                'is_active' => true,
            ],

        ];

        foreach ($teamMembers as $member) {
            TeamMember::create($member);
        }
    }
}
