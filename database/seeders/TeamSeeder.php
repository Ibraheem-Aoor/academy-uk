<?php

namespace Database\Seeders;

use App\Models\TeamMember;
use App\Models\TeamMemberCategory;
use App\Models\TeamMemberCategoryTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TeamMemberCategory::query()->delete();
        TeamMemberCategoryTranslation::query()->delete();
        TeamMember::query()->delete();
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
                    'name' => 'Academic Staff and Consultants',
                ],
                'order' => 2,
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
                    ['name' => 'Prof. Zire Kyle', 'image' => 'https://academy-uk.net/img/New%20Project%20(7).png'],
                    ['name' => 'Dr. Asem Al-Hajj'],
                    ['name' => 'Prof. Omar Qnaiber'],
                    ['name' => 'Prof. Osama Jamal'],
                    ['name' => 'Dr. Abdul Karim Jouda'],
                    ['name' => 'Dr. Osama Dawoud'],
                    ['name' => 'Prof. Ahmad Abo Ainein'],
                    ['name' => 'Add Dr. Noha Nijim'],
                ];
                break;

            case 2: // Board of Trustees
                $members = [
                    ['name' => 'Murad Othman Abdallah Albarghouthi'],
                    ['name' => 'Mustafa Saleh Faleh Alshraah'],
                    ['name' => 'Bashar I A Al-Awamleh'],
                    ['name' => 'Hadeel Hasan Khaleel Hussein'],
                    ['name' => 'Sawsan Mahmoud Hussein Alzamli'],
                    ['name' => 'Lina Rasem Khaleel Arafah'],
                    ['name' => 'Khaldun Khalaf Suleiman Alajarmeh'],
                    ['name' => 'Ala\' Mohammad Ibrahim Alshdaifat'],
                    ['name' => 'Abdal Hafeth Saleh Abdalhafeth Alaraj'],
                    ['name' => 'Firas Nawfal Abdalghafor Dabbagh'],
                    ['name' => 'Adnan Faris Faiysal Al-Shatnawi'],
                    ['name' => 'Hosny Fahed Hosny Al Horany'],
                    ['name' => 'Mohammad Ameen Lafi Alsarayra'],
                    ['name' => 'Thamer Mubarak Saleem Almasarweh'],
                    ['name' => 'Zaid Odah Mohammad Al-Zboun'],
                    ['name' => 'Mohammad Ibrahim Salim Alhamshari'],
                    ['name' => 'Soumaia Kheirallah Omar Echarif'],
                    ['name' => 'Mohammed Mahmoud Mossa Sallam'],
                    ['name' => 'Samer Saleh Faleh Al-Shra\'a'],
                    ['name' => 'Samer Ahmad Abdallah Abunemeh'],
                    ['name' => 'Iyad Mohammad Ahmad Al Ghonimat'],
                    ['name' => 'Leena Ali Mohammad Alhawash'],
                    ['name' => 'Eyad Walid Mohammed Jobair'],
                    ['name' => 'Hanan Hussein Moh\'d Subhi Alturk'],
                    ['name' => 'Mohammad Mosleh Mohammad Aldham'],
                    ['name' => 'Anas Nawaf Mustafa Abu Ghunmi'],
                    ['name' => 'Ekhlas Khalid Moh\'d Abu Sharikh'],
                    ['name' => 'Ahmad Omar Ahmad Hamdan'],
                    ['name' => 'Eman Sager Ahmad Al-Maaith'],
                    ['name' => 'Dalal Fawzi Niazi Abu Al Rob'],
                    ['name' => 'Wafa Abdelmajid Ali Alkafaween'],
                    ['name' => 'Ahmad Mohammad Ali Yousef Al-Qudah'],
                    ['name' => 'Bara Yasseen Salameh Al-Btoush'],
                    ['name' => 'Abdelhaleem Islaim Salman Alqaralleh'],
                    ['name' => 'Ehab Ismail Al-Abed Bawadi'],
                    ['name' => 'Rami Tahseen Othman Al Qatawneh'],
                    ['name' => 'Zaid Daoud Aqeel Alsawalmeh'],
                    ['name' => 'Suleiman Mousa Atwah Abuyahia'],
                    ['name' => 'Sana Mohammad Khateeb'],
                    ['name' => 'Khaled Salem Abdallah Melhem'],
                    ['name' => 'Hani Adel Mohammad Alqubelat'],
                    ['name' => 'Suha Said Abdelaziz Khanfar'],
                    ['name' => 'Mohammad Dar Assi'],
                    ['name' => 'Mouna Mohamed Ismail'],
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
