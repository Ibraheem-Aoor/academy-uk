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
                    ['name' => 'Prof. Zire Kyle', 'image' => 'https://academy-uk.net/img/New%20Project%20(7).png' , 'designation' => 'President'],
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
                    ['name' => 'Prof Dr Zaher Kyle', 'designation' => 'Civil Engineering', 'country' => 'Manchester, UK', 'specialization' => 'Civil Engineering', 'location' => 'UK'],
                    ['name' => 'Prof Dr Issam Buhaisi', 'designation' => 'Accounting and Financial Management', 'country' => 'Spain', 'specialization' => 'Accounting', 'location' => 'Spain'],
                    ['name' => 'Prof Dr Mohammed Migdad', 'designation' => 'Economics', 'country' => 'UK', 'specialization' => 'Economics', 'location' => 'UK'],
                    ['name' => 'Akram I. H. Samour', 'designation' => 'Business Administration', 'country' => 'Ireland', 'specialization' => 'Business Administration', 'location' => 'Italy'],
                    ['name' => 'EzzElarab Mohammed Awour', 'designation' => 'Quality Management', 'country' => 'Egypt', 'specialization' => 'International Transport & Logistics Management', 'location' => 'Egypt'],
                    ['name' => 'Ismail J Abusaada', 'designation' => 'Business Administration', 'country' => 'Malaysia', 'specialization' => 'Business Administration', 'location' => 'Palestine'],
                    ['name' => 'Kamal Hamdan', 'designation' => 'Political Science', 'country' => 'Egypt', 'specialization' => 'Regional Studies', 'location' => 'Palestine'],
                    ['name' => 'Noha A. Nijim', 'designation' => 'Economics', 'country' => 'Egypt', 'specialization' => 'Applied Economics', 'location' => 'USA'],
                    ['name' => 'Zubair Hassan', 'designation' => 'Business Administration', 'country' => 'Malaysia', 'specialization' => 'Public Policy and Management', 'location' => 'Australia'],
                    ['name' => 'Mohammad Amoor', 'designation' => '-', 'country' => '-', 'specialization' => 'Human Science in Communication', 'location' => 'Malaysia'],
                    ['name' => 'Belal Mahmoud', 'designation' => 'Islamic Law', 'country' => 'Malaysia', 'specialization' => 'Fiqh and Islamic Law', 'location' => 'Palestine'],
                    ['name' => 'Omar Barzak', 'designation' => 'Information Technology', 'country' => 'Malaysia', 'specialization' => 'Information Technology', 'location' => 'Malaysia'],
                    ['name' => 'Ahmed Hamdi Abo absa', 'designation' => 'Signal Processing Engineering', 'country' => 'Saudi Arabia', 'specialization' => 'Communication Engineering', 'location' => 'Palestine'],
                    ['name' => 'Khaled Mohamed Mohamed Eissa', 'designation' => 'Accounting', 'country' => 'Egypt', 'specialization' => 'Accounting', 'location' => 'Egypt'],
                    ['name' => 'Nashaat Elmassri', 'designation' => '-', 'country' => '-', 'specialization' => '-', 'location' => '-'],
                    ['name' => 'Ola Ibrahim', 'designation' => 'Quality Management', 'country' => 'UK', 'specialization' => 'Quality Management', 'location' => 'Egypt'],
                    ['name' => 'Mohammad Adm', 'designation' => 'Mathematics', 'country' => 'Germany', 'specialization' => 'Mathematics', 'location' => 'Jordan'],
                    ['name' => 'Yara Magdy Ibrahim', 'designation' => 'Financial Markets', 'country' => 'Malaysia', 'specialization' => 'Science in Investment Management', 'location' => 'Egypt'],
                    ['name' => 'Mohamed Mahmoud Feyala', 'designation' => 'Public Law', 'country' => 'Egypt', 'specialization' => 'Public Law', 'location' => 'Egypt'],
                    ['name' => 'Ahmad Alfarra', 'designation' => 'Accounting', 'country' => 'China', 'specialization' => 'Accounting', 'location' => 'Palestine'],
                    ['name' => 'Sahar Naser', 'designation' => 'Economics & Business Administration', 'country' => 'Egypt', 'specialization' => 'Human Resources Management', 'location' => 'Egypt'],
                    ['name' => 'Amer Abuhantash', 'designation' => 'Human Resource Management', 'country' => 'United States', 'specialization' => 'Planning and Political Development', 'location' => 'Palestine'],
                    ['name' => 'Mohamed Masry', 'designation' => 'Business Administration', 'country' => 'Egypt', 'specialization' => 'Business Administration', 'location' => 'Sheffield Hallam University'],
                    ['name' => 'Mazen Mohamed El-Tahan', 'designation' => 'Business Administration', 'country' => 'UK', 'specialization' => 'Business Administration', 'location' => 'The Advanced Management Institute'],
                    ['name' => 'Ahmed Mohamed Abdelbary', 'designation' => 'Air-Conditioning', 'country' => 'Egypt', 'specialization' => 'Air-Conditioning', 'location' => 'Cairo'],
                    ['name' => 'Ahmed Abdelmajed Al-Khodary', 'designation' => 'Health Economics', 'country' => 'Malaysia', 'specialization' => 'Health Management', 'location' => 'Palestine'],
                    ['name' => 'Nibal Khalil', 'designation' => 'Social and Cultural Anthropology', 'country' => 'Egypt', 'specialization' => 'Anthropology', 'location' => 'Jordan'],
                    ['name' => 'Marwa Mohamed Hussain', 'designation' => 'Electronics & Communication Engineering', 'country' => 'Egypt', 'specialization' => 'Electronics & Communication', 'location' => 'Egypt'],
                    ['name' => 'Wafaa M. Rashed', 'designation' => 'Biochemistry', 'country' => 'Egypt', 'specialization' => 'Biochemistry', 'location' => 'Egypt'],
                    ['name' => 'Fayrouz Abdel Hamid Jaber', 'designation' => 'Arts', 'country' => 'Egypt', 'specialization' => 'Media', 'location' => 'Egypt'],
                    ['name' => 'Mohammed Waleed Mudalal', 'designation' => 'Crisis Management and Strategic Planning', 'country' => 'Malaysia', 'specialization' => 'Communication and Public Relations', 'location' => 'Malaysia'],
                    ['name' => 'Fadwa Abdul-Bari Ahmed', 'designation' => 'PhD Candidate', 'country' => 'Egypt', 'specialization' => 'Information Technology', 'location' => 'Yemen'],
                    ['name' => 'Ahmed Raja Haj Ali', 'designation' => 'Islamic Management', 'country' => 'Malaysia', 'specialization' => 'Human Resource Management', 'location' => 'Malaysia'],
                    ['name' => 'Ahmed Zaid', 'designation' => 'Technology Management', 'country' => 'Malaysia', 'specialization' => 'Industrial and System Engineering', 'location' => 'Saudi Arabia'],
                    ['name' => 'Adham Akram Muhammad Mubarak', 'designation' => 'Business Administration', 'country' => 'Sudan', 'specialization' => 'Business Administration', 'location' => 'Palestine'],
                    ['name' => 'Tareq Altalmas', 'designation' => 'Mechatronics', 'country' => 'Malaysia', 'specialization' => 'Mechatronics', 'location' => 'Malaysia'],
                    ['name' => 'Amin M. F. Seder', 'designation' => '-', 'country' => '-', 'specialization' => 'Manufacturing Engineering', 'location' => 'Malaysia'],
                    ['name' => 'Ismail F O Amer', 'designation' => 'Engineering (Technical) Sciences', 'country' => 'Russian Federation', 'specialization' => 'Automated Systems Software', 'location' => 'Ukraine'],
                    ['name' => 'Mutaz Bellah Alatrash', 'designation' => 'Accounting and Finance', 'country' => 'Cyprus', 'specialization' => 'Financial Management', 'location' => 'Cyprus'],
                    ['name' => 'Khaled Mahmoud', 'designation' => 'Accounting', 'country' => 'Egypt', 'specialization' => 'Accounting', 'location' => 'Egypt']
                ];
                

                break;

        }

        // Set common fields for all members
        foreach ($members as &$member) {
            $member['image'] = '1';
            $member['designation'] = @$member['designation'] ?? 'Member';
            $member['facebook'] = null;
            $member['instagram'] = null;
            $member['twitter'] = null;
            $member['linkedin'] = null;
            unset($member['country']);
            unset($member['location']);
            unset($member['specialization']);
        }

        return $members;
    }
}
