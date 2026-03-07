<?php

namespace Database\Seeders;

use App\Models\TeamMember;
use Illuminate\Database\Seeder;

class TeamMemberSeeder extends Seeder
{
    public function run(): void
    {
        $team = [
            [
                'name' => 'Violet Nswana Kaponda',
                'role' => 'Founder & Director (CEO)',
                'bio' => 'A technology, digital transformation, and systems delivery leader focused on building African-owned digital capability and enabling institutions to use data and AI responsibly.',
                'photo' => 'violet-kaponda.jpg',
                'email' => null,
                'linkedin' => null,
                'twitter' => null,
                'order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Chisomo Mutale',
                'role' => 'Chief Technology Officer',
                'bio' => 'Leading technical architecture and innovation at AVEC Technologies, driving excellence in digital infrastructure and AI-enabled systems.',
                'photo' => null,
                'email' => null,
                'linkedin' => null,
                'twitter' => null,
                'order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Clivet Lungu',
                'role' => 'Head of Engineering',
                'bio' => 'Leading engineering teams to build scalable, secure, and intelligent systems that power African economies.',
                'photo' => null,
                'email' => 'clivetlungu1@gmail.com',
                'linkedin' => null,
                'twitter' => null,
                'order' => 3,
                'is_active' => true,
            ],
            [
                'name' => 'Samuel Kaoma',
                'role' => 'Engineering Intern',
                'bio' => 'Supporting the development of cutting-edge digital solutions and learning from industry experts.',
                'photo' => null,
                'email' => null,
                'linkedin' => null,
                'twitter' => null,
                'order' => 4,
                'is_active' => true,
            ],
        ];

        foreach ($team as $member) {
            TeamMember::create($member);
        }
    }
}
