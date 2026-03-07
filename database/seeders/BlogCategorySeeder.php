<?php

namespace Database\Seeders;

use App\Models\BlogCategory;
use Illuminate\Database\Seeder;

class BlogCategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Company News',
                'slug' => 'company-news',
                'description' => 'Updates and announcements from AVEC Technologies',
            ],
            [
                'name' => 'Industry Insights',
                'slug' => 'industry-insights',
                'description' => 'Thought leadership on digital transformation in Africa',
            ],
            [
                'name' => 'Technology',
                'slug' => 'technology',
                'description' => 'Technical articles on AI, infrastructure, and development',
            ],
            [
                'name' => 'Case Studies',
                'slug' => 'case-studies',
                'description' => 'Real-world implementations and success stories',
            ],
        ];

        foreach ($categories as $category) {
            BlogCategory::create($category);
        }
    }
}
