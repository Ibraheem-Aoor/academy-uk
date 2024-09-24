<?php

namespace Database\Seeders;

use App\Models\TeamMemberCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = $this->getCategoriesToSeed();
        foreach ($categories as $category) {
            $created_category = TeamMemberCategory::query()->updateOrCreate(['order' => $category['order']], $category);
            $created_category->members()->delete();
            $created_category->members()->createMany($this->getMembersToSeed($category['order']));
        }
    }

    public function getCategoriesToSeed(): array
    {
        return [
            // 1 - Executive Team
            [
                getCurrentLocale() => [
                    'name' => 'Executive Team',
                ],
                'order' => 1,
                'show_in_home' => true,
            ],
            // 2 - Board of Trustees
            [
                getCurrentLocale() => [
                    'name' => 'Board of Trustees',
                ],
                'order' => 2,
                'show_in_home' => true,
            ],
            // 3 - Board of Consultants
            [
                getCurrentLocale() => [
                    'name' => 'Board of Consultants',
                ],
                'order' => 3,
                'show_in_home' => true,
            ],
        ];
    }

    /**
     * Get members to seed based on category order.
     * @param int $order
     * @return array
     */
    private function getMembersToSeed(int $order): array
    {
        $members = [];

        switch ($order) {
            case 1: // Executive Team
                $members = [
                    ['name' => 'Prof. Zire Kyle' , 'image' => 'https://academy-uk.net/img/New%20Project%20(7).png'],
                    ['name' => 'Dr. Asem Al-Hajj'],
                    ['name' => 'Prof. Omar Qnaiber'],
                    ['name' => 'Prof. Osama Jamal'],
                    ['name' => 'Dr. Abdul Karim Jouda'],
                    ['name' => 'Dr. Osama Dawoud'],
                ];
                break;

            case 2: // Board of Trustees
                $members = [
                    ['name' => 'Prof. Zire Kyle' , 'image' => 'https://academy-uk.net/img/New%20Project%20(7).png'],
                    ['name' => 'Dr. Asem Al-Hajj'],
                    ['name' => 'Prof. Omar Qnaiber'],
                    ['name' => 'Prof. Osama Jamal'],
                    ['name' => 'Dr. Abdul Karim Jouda'],
                    ['name' => 'Dr. Osama Dawoud'],
                    ['name' => 'Dr. Noha Nijim'],
                    ['name' => 'Dr. Ramdan Omari'],
                    ['name' => 'Dr. Iyad Jubair'],
                    ['name' => 'Dr. Hadeel Hussain'],
                    ['name' => 'Dr. Khalid Melhem'],
                ];
                break;

            case 3: // Board of Consultants
                $members = [
                    ['name' => 'Dr. Tamer Eshtawi'],
                    ['name' => 'Dr. Noha Nijim'],
                    ['name' => 'Dr. Akram Samour'],
                    ['name' => 'Dr. A/Karim Jouda'],
                    ['name' => 'Dr. Ramdan Omari'],
                    ['name' => 'Dr. Yasir Saed'],
                    ['name' => 'Dr. Muhammed Mudalal'],
                    ['name' => 'Prof. Muhammed Meqdad'],
                    ['name' => 'Prof. Issam Buhaisi'],
                    ['name' => 'Dr. Ezz Awour'],
                    ['name' => 'Dr. Khalid Issa'],
                    ['name' => 'Dr. Kamal Hamdan'],
                    ['name' => 'Dr. Zubair Omar'],
                    ['name' => 'Dr. Ekhlas Abu Sharekh'],
                    ['name' => 'Dr. Iyad Jubair'],
                    ['name' => 'Dr. Iyad Ghunaimat'],
                    ['name' => 'Dr. Omair -Malysia'],
                    ['name' => 'Dr. Yara Ibrahim'],
                    ['name' => 'Dr. Muhammed Feyala'],
                    ['name' => 'Prof. Ahmad Abu Ainin'],
                    ['name' => 'Dr. Belal Omar'],
                    ['name' => 'Dr. Mohammed Sallam'],
                    ['name' => 'Dr. Hadeel Hussain'],
                    ['name' => 'Dr. Soumaia Charif'],
                    ['name' => 'Dr. Hani Qbeelat'],
                    ['name' => 'Dr. Ibrahim Nigris'],
                    ['name' => 'Dr. Khalid Melhem'],
                    ['name' => 'Dr. Mohammed Hamshari'],
                ];
                break;
        }

        // Set common fields for all members
        foreach ($members as &$member) {
            $member['image'] = '1';
            $member['designation'] = 'Member';
            $member['facebook'] = null;
            $member['instagram'] = null;
            $member['twitter'] = null;
            $member['linkedin'] = null;
        }

        return $members;
    }
}
