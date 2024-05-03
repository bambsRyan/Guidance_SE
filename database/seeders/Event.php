<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Event extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dummyData = [
            [
                'event_number' => 1,
                'title' => 'Mental Health Awareness Seminar',
                'description' => 'Join us for a seminar to raise awareness about mental health issues and learn about coping mechanisms and available resources.',
                'time' => '10:00:00',
                'date' => '2024-05-15',
                'venue' => 'University Activity Center',
                'image' => 'plm.png',
                'id' => 1,
            ],
            [
                'event_number' => 2,
                'title' => 'Stress Management Workshop',
                'description' => 'Learn effective strategies to manage stress and improve your mental well-being in this interactive workshop.',
                'time' => '14:00:00',
                'date' => '2024-05-20',
                'venue' => 'Justo Albert Auditorium',
                'image' => 'plm.png',
                'id' => 2,
            ],
            [
                'event_number' => 3,
                'title' => 'Mindfulness Meditation Session',
                'description' => 'Practice mindfulness meditation techniques to reduce anxiety and improve focus.',
                'time' => '09:00:00',
                'date' => '2024-05-10',
                'venue' => 'GEE AVR',
                'image' => 'plm.png',
                'id' => 3,
            ],
            [
                'event_number' => 4,
                'title' => 'Depression Support Group Meeting',
                'description' => 'Connect with others who are experiencing depression and share experiences in a supportive environment.',
                'time' => '10:00:00',
                'date' => '2024-05-05',
                'venue' => 'Natatanging Bulwagan',
                'image' => 'plm.png',
                'id' => 4,
            ],
            [
                'event_number' => 5,
                'title' => 'Youth Mental Health Program Launch',
                'description' => 'Join us for the launch of our youth mental health program aimed at providing support and resources for young individuals.',
                'time' => '11:00:00',
                'date' => '2024-05-15',
                'venue' => 'Tanghalang Bayan',
                'image' => 'plm.png',
                'id' => 5,
            ],
        ];

        DB::table('events')->insert($dummyData);
    }
}
