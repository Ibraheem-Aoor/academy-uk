<?php

namespace Database\Seeders;

use App\Enum\UniversityTypeEnum;
use App\Models\University;
use App\Models\UniversityProgramCategory;
use App\Models\UniversityProgram;
use Illuminate\Database\Seeder;

class UniverstySeeder extends Seeder
{
    public function run(): void
    {
        $universities = $this->getDataToSeed();
        University::query()->delete();

        foreach ($universities as $university) {
            $parentUniversity = University::create($university['university']);
            if (isset($university['sub_universities'])) {
                foreach ($university['sub_universities'] as $subUniversity) {
                    $subUniversity['parent_id'] = $parentUniversity->id;
                    $createdSubUniversity = University::create($subUniversity);

                    // Seed programs and categories based on the university name
                    $this->seedBritishUniversityPrograms($createdSubUniversity);
                }
            }
            // Seed Programs and Categories for American University
            if ($parentUniversity->name === 'American University') {
                $this->seedProgramsAndCategories($parentUniversity);
            }
        }
    }

    public function getDataToSeed(): array
    {
        return [
            [
                'university' => [
                    getCurrentLocale() => [
                        'name' => 'British Universities',
                        'description' => 'British universities are globally recognized for their academic excellence and innovation, offering world-class education and research opportunities across a wide range of disciplines.',
                    ],
                    'image' => 'https://img.freepik.com/free-photo/vertical-shot-radcliffe-camera-oxford-england_181624-2116.jpg',
                    'type' => UniversityTypeEnum::INTERNATIONAL,
                    'status' => true,
                ],
                'sub_universities' => [
                    [
                        getCurrentLocale() => [
                            'name' => 'Anglia Ruskin University',
                            'description' => 'Offering top-up degrees in Business Management, Project Management, and Healthcare, with flexible intakes and durations.',
                        ],
                        'image' => 'https://img.freepik.com/free-photo/hercules-hall-surrounded-by-greenery-sunlight-daytime-munich-germany_181624-17876.jpg?uid=R95899825&ga=GA1.2.1266518853.1715856292&semt=ais_hybrid',
                        'type' => UniversityTypeEnum::INTERNATIONAL,
                        'status' => true,
                    ],
                    [
                        getCurrentLocale() => [
                            'name' => 'University of Buckingham',
                            'description' => 'Providing renowned postgraduate degrees in Business, Human Resource Management, Project Management, and Accounting & Finance.',
                        ],
                        'image' => 'https://img.freepik.com/free-photo/closeup-shot-two-domed-towers-old-royal-naval-college-greenwich-london_181624-44376.jpg?uid=R95899825&ga=GA1.2.1266518853.1715856292&semt=ais_hybrid',
                        'type' => UniversityTypeEnum::INTERNATIONAL,
                        'status' => true,
                    ],
                    [
                        getCurrentLocale() => [
                            'name' => 'Edinburgh Napier University',
                            'description' => 'A leading Scottish university, offering top-up degrees in Business Management with flexible durations and intakes.',
                        ],
                        'image' => 'https://img.freepik.com/free-photo/palau-nacional-barcelona-spain-cloudy-sky_1268-18007.jpg?uid=R95899825&ga=GA1.2.1266518853.1715856292&semt=ais_hybrid',
                        'type' => UniversityTypeEnum::INTERNATIONAL,
                        'status' => true,
                    ],
                    [
                        getCurrentLocale() => [
                            'name' => 'Wrexham Glyndwr University',
                            'description' => 'Specializing in Business, IT, and Computing programs, offering top-up degrees with multiple intakes annually.',
                        ],
                        'image' => 'https://img.freepik.com/premium-photo/aerial-view-old-town-cambridge-beautiful-kings-college-chapel_536604-10715.jpg?uid=R95899825&ga=GA1.2.1266518853.1715856292&semt=ais_hybrid',
                        'type' => UniversityTypeEnum::INTERNATIONAL,
                        'status' => true,
                    ],
                    [
                        getCurrentLocale() => [
                            'name' => 'University of Chichester',
                            'description' => 'Providing business-focused postgraduate top-up degrees with a streamlined duration and flexible intakes.',
                        ],
                        'image' => 'https://img.freepik.com/premium-photo/summer-time-stockholm_1150964-96133.jpg?uid=R95899825&ga=GA1.2.1266518853.1715856292&semt=ais_hybrid',
                        'type' => UniversityTypeEnum::INTERNATIONAL,
                        'status' => true,
                    ],
                    [
                        getCurrentLocale() => [
                            'name' => 'University of Bolton',
                            'description' => 'Offering diverse top-up degrees in Business, IT, Software Engineering, and Data Analytics with competitive intakes.',
                        ],
                        'image' => 'https://img.freepik.com/premium-photo/ancient-imperial-castle-city-center-poznan-poland_192985-531.jpg?uid=R95899825&ga=GA1.2.1266518853.1715856292&semt=ais_hybrid',
                        'type' => UniversityTypeEnum::INTERNATIONAL,
                        'status' => true,
                    ],
                    [
                        getCurrentLocale() => [
                            'name' => 'University of Gloucestershire',
                            'description' => 'Recognized for its top-up degrees in Business and HR Management, with multiple intakes throughout the year.',
                        ],
                        'image' => 'https://img.freepik.com/free-photo/royal-palace-madrid-spain-gloomy-day_181624-22110.jpg?uid=R95899825&ga=GA1.2.1266518853.1715856292&semt=ais_hybrid',
                        'type' => UniversityTypeEnum::INTERNATIONAL,
                        'status' => true,
                    ],
                    [
                        getCurrentLocale() => [
                            'name' => 'University of Derby',
                            'description' => 'A top institution offering business-focused top-up degrees, including BA and MBA programs with global reach.',
                        ],
                        'image' => 'https://img.freepik.com/free-photo/full-shot-women-walking-city-winter-season_23-2149142294.jpg?uid=R95899825&ga=GA1.2.1266518853.1715856292&semt=ais_hybrid',
                        'type' => UniversityTypeEnum::INTERNATIONAL,
                        'status' => true,
                    ],
                    [
                        getCurrentLocale() => [
                            'name' => 'University of Essex',
                            'description' => 'Known for its excellent Business and Management programs, offering flexible learning options.',
                        ],
                        'image' => 'https://img.freepik.com/free-photo/sunny-urban-landscape_23-2149504819.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                        'type' => UniversityTypeEnum::INTERNATIONAL,
                        'status' => true,
                    ],
                    [
                        getCurrentLocale() => [
                            'name' => 'University of Liverpool',
                            'description' => 'World-renowned for its MBA programs with a focus on global business strategies.',
                        ],
                        'image' => 'https://img.freepik.com/premium-photo/view-state-historical-museum-red-square-moscow_552127-2085.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                        'type' => UniversityTypeEnum::INTERNATIONAL,
                        'status' => true,
                    ],
                    [
                        getCurrentLocale() => [
                            'name' => 'University of Central Lancashire',
                            'description' => 'A diverse university offering top-up degrees in Business, Law, and Finance, with global reach.',
                        ],
                        'image' => 'https://img.freepik.com/premium-photo/12-07-2020-bydgoszcz-poland-trip-bydgoszcz-european-city-architecture-old-town-poland-europe_262383-207.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                        'type' => UniversityTypeEnum::INTERNATIONAL,
                        'status' => true,
                    ],
                    [
                        getCurrentLocale() => [
                            'name' => 'University of Arden',
                            'description' => 'Offering specialized MSc programs in Project Management and Data Science with a practical approach.',
                        ],
                        'image' => 'https://img.freepik.com/free-photo/aerial-view-residence-bukovinian-dalmatian-metropolitans-chernivtsi-national-university-chernivtsi-touristic-destination-western-ukraine_231208-41.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                        'type' => UniversityTypeEnum::INTERNATIONAL,
                        'status' => true,
                    ],
                    [
                        getCurrentLocale() => [
                            'name' => 'Girne American University',
                            'description' => 'A globally focused university offering top-up degrees in Business Management and PhD programs.',
                        ],
                        'image' => 'https://img.freepik.com/premium-photo/image-entrance-view-summer-auburn-courthouse-aerial_501731-12746.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                        'type' => UniversityTypeEnum::INTERNATIONAL,
                        'status' => true,
                    ],
                ],
            ],
            [
                'university' => [
                    getCurrentLocale() => [
                        'name' => 'American University',
                        'description' => 'The American University is a globally recognized institution offering dynamic, interdisciplinary academic programs.',
                    ],
                    'image' => 'https://img.freepik.com/premium-photo/college-campus-indiana-university-exterior-limestone-architecture_501731-5673.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                    'type' => UniversityTypeEnum::INTERNATIONAL,
                    'status' => true,
                ],
            ],
        ];
    }

    private function seedProgramsAndCategories(University $university)
    {
        // Seed categories for American University
        $dbaCategory = UniversityProgramCategory::create([
            getCurrentLocale() => [
                'name' => 'Doctor of Business Administration (DBA)',
                'description' => 'Advanced business administration programs designed to provide high-level expertise in management.',
            ],
            'image' => 'https://img.freepik.com/free-photo/caucasian-businessman-sitting-desk-front-computer-writing-document-folder_1098-20576.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid'
        ]);

        $mbaCategory = UniversityProgramCategory::create([
            getCurrentLocale() => [
                'name' => 'Master of Business Administration (MBA)',
                'description' => 'Graduate-level programs focusing on developing business leadership and management skills.',
            ],
            'image' => 'https://img.freepik.com/free-photo/modern-office-composition-with-businessman_23-2147900141.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid'
        ]);

        $programs = [
            'Doctor of Management (DM)' => [
                'image' => 'https://img.freepik.com/free-photo/caucasian-businessman-sitting-desk-front-computer-writing-document-folder_1098-20576.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                'description' => 'The Doctor of Management (DM) program equips leaders with advanced strategic management and decision-making skills. It focuses on innovation, leadership, and business transformation to foster successful organizational growth.'
            ],
            'Agribusiness DBA' => [
                'image' => 'https://img.freepik.com/free-photo/bearded-male-researcher-studies-plants-with-tablet-standing-greenhouse_8353-7155.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                'description' => 'The Agribusiness DBA provides advanced knowledge in agricultural economics, supply chain management, and sustainable farming practices. It prepares professionals to lead in the global agricultural business sector.'
            ],
            'Beauty Management DBA' => [
                'image' => 'https://img.freepik.com/premium-photo/attractive-caucasian-middle-aged-woman-white-terry-bathrobe-medical-appointment-cosmetological-wellness-spa-clinic-getting-ready-receive-professional-skin-body-care_328764-8714.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                'description' => 'The Beauty Management DBA focuses on the business aspects of the beauty and wellness industry. It prepares professionals to lead and innovate in areas such as cosmetic production, salon management, and brand development.'
            ],
            'Business Analytics DBA' => [
                'image' => 'https://img.freepik.com/free-photo/bar-graph-statistics-analysis-business-concept_53876-128027.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                'description' => 'The Business Analytics DBA trains executives to apply data-driven decision-making and predictive analytics to business strategies. Graduates will gain expertise in advanced data analysis, big data, and AI-driven solutions for business challenges.'
            ],
            'Economics Finance DBA' => [
                'image' => 'https://img.freepik.com/premium-photo/chart-analyze_948100-1526.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                'description' => 'The Economics Finance DBA program provides in-depth expertise in financial markets, risk management, and economic policy. It is designed to develop leaders in finance who can manage complex economic systems and drive financial innovation.'
            ],
            'Healthcare Administration DBA' => [
                'image' => 'https://img.freepik.com/premium-photo/medical-technology-concepts-medical-students-use-mobile-phones-search-information-modern-office-morning-desk_533890-529.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                'description' => 'The Healthcare Administration DBA prepares executives for leadership roles in healthcare organizations. The program covers healthcare management, policy, and administration to improve operational efficiency and patient care outcomes.'
            ],
            'Agribusiness MBA' => [
                'image' => 'https://img.freepik.com/free-photo/bearded-male-researcher-studies-plants-with-tablet-standing-greenhouse_8353-7155.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                'description' => 'The Agribusiness MBA provides professionals with the skills needed to manage agricultural enterprises. It emphasizes agribusiness economics, sustainable practices, and the global food supply chain, preparing graduates for leadership roles.'
            ],
            'Beauty Management MBA' => [
                'image' => 'https://img.freepik.com/premium-photo/attractive-caucasian-middle-aged-woman-white-terry-bathrobe-medical-appointment-cosmetological-wellness-spa-clinic-getting-ready-receive-professional-skin-body-care_328764-8714.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                'description' => 'The Beauty Management MBA focuses on the intersection of business and beauty. It covers topics such as beauty brand management, marketing, and entrepreneurship, giving students the tools to succeed in the growing beauty industry.'
            ],
        ];

        foreach ($programs as $program => $data) {
            $category = str_contains($program, 'DBA') ? $dbaCategory : $mbaCategory;
            UniversityProgram::create([
                'status' => true,
                'category_id' => $category->id,
                'university_id' => $university->id,
                'image' => $data['image'],
                getCurrentLocale() => [
                    'name' => $program,
                    'description' => $data['description'],
                ]
            ]);
        }

    }

    private function seedBritishUniversityPrograms(University $university)
    {
        // Define categories and programs with images for various universities
        $universityCategories = [
            'Anglia Ruskin University' => [
                'categories' => [
                    [
                        'name' => 'Business Management',
                        'description' => 'Programs designed to equip students with leadership and management skills in business...',
                        'image' => 'https://img.freepik.com/free-photo/business-people-meeting-looking-presentation_9975-23056.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                        'programs' => [
                            [
                                'name' => 'BSc (Hons) Management (Top-Up)',
                                'description' => '9-12 months duration, available in January, May, and September.',
                                'image' => 'https://img.freepik.com/free-photo/aerial-view-business-data-analysis-graph_53876-13390.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                            ],
                            [
                                'name' => 'MBA (Top Up)',
                                'description' => '4-6 months duration, available in January, May, and September.',
                                'image' => 'https://img.freepik.com/free-photo/multiethnic-businesspeople-discussing-financial-company-solution-sitting-conference-table_482257-10542.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                            ]
                        ],
                    ],
                    [
                        'name' => 'Project Management',
                        'description' => 'Focus on project management skills and knowledge...',
                        'image' => 'https://img.freepik.com/free-photo/upset-irritated-frustrated-businesswoman-entering-office-meeting-room-late-night-screaming-teamwork-throwing-strategy-paperwork_482257-2392.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                        'programs' => [
                            [
                                'name' => 'MSc in Project Management (Top Up)',
                                'description' => '9 months duration, available in January and September.',
                                'image' => 'https://img.freepik.com/free-photo/multiethnic-businesspeople-discussing-financial-company-solution-sitting-conference-table_482257-10542.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                            ]
                        ],
                    ],
                    [
                        'name' => 'Healthcare',
                        'description' => 'Prepare for roles in healthcare management...',
                        'image' => 'https://img.freepik.com/free-photo/medical-banner-with-stethoscope_23-2149611199.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                        'programs' => [
                            [
                                'name' => 'MSc Healthcare Management (Top Up)',
                                'description' => '12 months duration, available in January and September.',
                                'image' => 'https://img.freepik.com/free-photo/medical-banner-with-doctor-wearing-goggles_23-2149611193.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                            ]
                        ],
                    ],
                    [
                        'name' => 'Education',
                        'description' => 'Programs to enhance leadership in education...',
                        'image' => 'https://img.freepik.com/free-photo/book-with-green-board-background_1150-3837.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                        'programs' => [
                            [
                                'name' => 'MBA in Educational Leadership and Management (Top Up)',
                                'description' => '9 months duration, available in January and September.',
                                'image' => 'https://img.freepik.com/free-photo/everyone-is-smiling-listens-group-people-business-conference-modern-classroom-daytime_146671-16288.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                            ]
                        ],
                    ]
                ],
            ],
            'University of Buckingham' => [
                'categories' => [
                    [
                        'name' => 'Business Management',
                        'description' => 'Programs to develop business management skills...',
                        'image' => 'https://img.freepik.com/free-photo/business-people-meeting-looking-presentation_9975-23056.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',

                        'programs' => [
                            [
                                'name' => 'Master of Business Administration (MBA)',
                                'description' => '6-9 months duration, available in January, April, July, and September.',
                                'image' => 'https://img.freepik.com/free-photo/multiethnic-businesspeople-discussing-financial-company-solution-sitting-conference-table_482257-10542.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',

                            ]
                        ],
                    ],
                    [
                        'name' => 'Human Resource Management',
                        'description' => 'Programs to enhance skills in human resource management...',
                        'image' => 'https://img.freepik.com/free-photo/executive-touching-icon-social-network_1232-158.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                        'programs' => [
                            [
                                'name' => 'MA in Human Resource Management',
                                'description' => '6-9 months duration, available in January, April, July, and September.',
                                'image' => 'https://img.freepik.com/free-photo/recruitment-hiring-career-job-emplyment-concept_53876-133836.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                            ]
                        ],
                    ],
                    [
                        'name' => 'Project Management',
                        'description' => 'Specialized programs in project management...',
                        'image' => 'https://img.freepik.com/free-photo/upset-irritated-frustrated-businesswoman-entering-office-meeting-room-late-night-screaming-teamwork-throwing-strategy-paperwork_482257-2392.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',

                        'programs' => [
                            [
                                'name' => 'MSc in Project Management',
                                'description' => '6-9 months duration, available in January, April, July, and September.',
                                'image' => 'https://img.freepik.com/free-photo/upset-irritated-frustrated-businesswoman-entering-office-meeting-room-late-night-screaming-teamwork-throwing-strategy-paperwork_482257-2392.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',

                            ]
                        ],
                    ],
                    [
                        'name' => 'Accounting & Finance',
                        'description' => 'Programs in accounting and finance...',
                        'image' => 'https://demo.htmlcodex.com/1427/online-courses-html-template/img/cat-4.jpg',
                        'programs' => [
                            [
                                'name' => 'MSc in Accounting & Finance',
                                'description' => '6-9 months duration, available in January, April, July, and September.',
                                'image' => 'https://demo.htmlcodex.com/1427/online-courses-html-template/img/cat-4.jpg',
                            ]
                        ],
                    ]
                ],
            ],
            'Edinburgh Napier University' => [
                'categories' => [
                    [
                        'name' => 'Business Management',
                        'description' => 'Comprehensive programs in business management...',
                        'image' => 'https://img.freepik.com/free-photo/business-people-meeting-looking-presentation_9975-23056.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                        'programs' => [
                            [
                                'name' => 'BA (Hons) in Business Management (Top Up)',
                                'description' => '12-16 months duration, available from May to September.',
                                'image' => 'https://img.freepik.com/free-photo/business-people-meeting-looking-presentation_9975-23056.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                            ]
                        ],
                    ]
                ],
            ],
            'Wrexham Glyndwr University' => [
                'categories' => [
                    [
                        'name' => 'Business Management',
                        'description' => 'Programs focused on business management skills...',
                        'image' => 'https://img.freepik.com/free-photo/business-people-meeting-looking-presentation_9975-23056.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',

                        'programs' => [
                            [
                                'name' => 'BA (Hons) Business (Top-Up)',
                                'description' => '9-12 months duration, available in January, May, and September.',
                                'image' => 'https://img.freepik.com/free-photo/multiethnic-businesspeople-discussing-financial-company-solution-sitting-conference-table_482257-10542.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',

                            ],
                            [
                                'name' => 'MBA (Top Up)',
                                'description' => '6 months duration, available in January, May, and September.',
                                'image' => 'https://img.freepik.com/free-photo/business-people-meeting-looking-presentation_9975-23056.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',

                            ]
                        ],
                    ],
                    [
                        'name' => 'Information Technology',
                        'description' => 'Programs in computing and IT...',
                        'image' => 'https://img.freepik.com/free-photo/data-technology-blue-background-with-hacker-remixed-media_53876-108534.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                        'programs' => [
                            [
                                'name' => 'BSc (Hons) in Computing (Top Up)',
                                'description' => '12 months duration, available in January, May, and September.',
                                'image' => 'https://img.freepik.com/free-photo/data-technology-blue-background-with-hacker-remixed-media_53876-108534.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                            ]
                        ],
                    ]
                ],
            ],
            'University of Chichester' => [
                'categories' => [
                    [
                        'name' => 'Business Management',
                        'description' => 'Master’s programs in business management...',
                        'image' => 'https://img.freepik.com/free-photo/business-people-meeting-looking-presentation_9975-23056.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                        'programs' => [
                            [
                                'name' => 'Master of Business Administration (Top Up)',
                                'description' => '6 months duration, available in February, April, and June.',
                                'image' => 'https://img.freepik.com/free-photo/business-people-meeting-looking-presentation_9975-23056.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',

                            ]
                        ],
                    ]
                ],
            ],
            'University of Bolton' => [
                'categories' => [
                    [
                        'name' => 'Business Management',
                        'description' => 'Programs to develop business management skills...',
                        'image' => 'https://img.freepik.com/free-photo/business-people-meeting-looking-presentation_9975-23056.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',

                        'programs' => [
                            [
                                'name' => 'BSc (Hons) Business Management (Top-Up)',
                                'description' => '12 months duration, available in January, May, and September.',
                                'image' => 'https://img.freepik.com/free-photo/business-people-meeting-looking-presentation_9975-23056.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',

                            ],
                            [
                                'name' => 'MBA (Top Up)',
                                'description' => '6 months duration, available in January, May, and September.',
                                'image' => 'https://img.freepik.com/free-photo/business-people-meeting-looking-presentation_9975-23056.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',

                            ]
                        ],
                    ],
                    [
                        'name' => 'Accounting & Finance',
                        'description' => 'Accounting and finance programs...',
                        'image' => 'https://demo.htmlcodex.com/1427/online-courses-html-template/img/cat-2.jpg',
                        'programs' => [
                            [
                                'name' => 'MSc in Accountancy and Financial Management (Top Up)',
                                'description' => '12 months duration, available in January, May, and September.',
                                'image' => 'https://demo.htmlcodex.com/1427/online-courses-html-template/img/cat-2.jpg',
                            ]
                        ],
                    ],
                    [
                        'name' => 'Information Technology',
                        'description' => 'Specialized IT programs...',
                        'image' => 'https://demo.htmlcodex.com/1427/online-courses-html-template/img/cat-3.jpg',
                        'programs' => [
                            [
                                'name' => 'MSc Data Analytics and Technologies',
                                'description' => '18 months duration, available in January, June, and September.',
                                'image' => 'https://demo.htmlcodex.com/1427/online-courses-html-template/img/cat-3.jpg',
                            ],
                            [
                                'name' => 'MSc in Cloud and Network Security',
                                'description' => '18 months duration, available in January, June, and September.',
                                'image' => 'https://demo.htmlcodex.com/1427/online-courses-html-template/img/cat-3.jpg',
                            ],
                            [
                                'name' => 'MSc in Software Engineering',
                                'description' => '18 months duration, available in January, June, and September.',
                                'image' => 'https://demo.htmlcodex.com/1427/online-courses-html-template/img/cat-3.jpg',
                            ]
                        ],
                    ]
                ],
            ],
            'University of Gloucestershire' => [
                'categories' => [
                    [
                        'name' => 'Business Management',
                        'description' => 'Business management programs...',
                        'image' => 'https://img.freepik.com/premium-photo/business-team-collaboration-discussing-working-analyzing-with-financial-data-marketing-growth-report-graph-team-presentation-digital-tablet-laptopxa_1224146-3384.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                        'programs' => [
                            [
                                'name' => 'MBA (Top up)',
                                'description' => '6 months duration, available in February, June, and October.',
                                'image' => 'https://img.freepik.com/premium-photo/business-team-collaboration-discussing-working-analyzing-with-financial-data-marketing-growth-report-graph-team-presentation-digital-tablet-laptopxa_1224146-3384.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                            ]
                        ],
                    ],
                    [
                        'name' => 'Accounting & Finance',
                        'description' => 'Accounting and finance programs...',
                        'image' => 'https://img.freepik.com/premium-photo/business-people-entrepreneurs-teams-are-meeting-discussing-problem-solving-together-their-project-conference-room-professional-entrepreneurship-teamwork-are-business-dealing-meeting-together_265022-95692.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                        'programs' => [
                            [
                                'name' => 'MSc Accounting and Finance (Top up)',
                                'description' => '12 months duration, available in February, June, and October.',
                                'image' => 'https://img.freepik.com/premium-photo/business-people-entrepreneurs-teams-are-meeting-discussing-problem-solving-together-their-project-conference-room-professional-entrepreneurship-teamwork-are-business-dealing-meeting-together_265022-95692.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                            ]
                        ],
                    ],
                    [
                        'name' => 'Human Resource Management',
                        'description' => 'Programs to develop HR management skills...',
                        'image' => 'https://img.freepik.com/free-photo/recruitment-hiring-career-job-emplyment-concept_53876-133836.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',

                        'programs' => [
                            [
                                'name' => 'MSc Human Resource Management (Top up)',
                                'description' => '12 months duration, available in February, June, and October.',
                                'image' => 'https://img.freepik.com/free-photo/recruitment-hiring-career-job-emplyment-concept_53876-133836.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',

                            ]
                        ],
                    ]
                ],
            ],
            'University of Derby' => [
                'categories' => [
                    [
                        'name' => 'Accounting & Finance',
                        'description' => 'Accounting and finance programs...',
                        'image' => 'https://demo.htmlcodex.com/1427/online-courses-html-template/img/cat-3.jpg',
                        'programs' => [
                            [
                                'name' => 'BA (Hons) Accounting and Finance (Top-Up)',
                                'description' => '12-24 months duration, available in January, May, and September.',
                                'image' => 'https://demo.htmlcodex.com/1427/online-courses-html-template/img/cat-3.jpg',
                            ]
                        ],
                    ],
                    [
                        'name' => 'Business Management',
                        'description' => 'Programs to enhance business management skills...',
                        'image' => 'https://img.freepik.com/free-photo/business-brainstorming-graph-chart-report-data-concept_53876-31216.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                        'programs' => [
                            [
                                'name' => 'BSc (Hons) Business and Management (Top Up)',
                                'description' => '12-24 months duration, available in January, May, and September.',
                                'image' => 'https://img.freepik.com/free-photo/confident-company-manager-giving-working-tasks-diverse-teamworkers_482257-7686.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                            ],
                            [
                                'name' => 'MBA Global',
                                'description' => '24-36 months duration, available in January, May, and September.',
                                'image' => 'https://img.freepik.com/free-photo/business-executives-having-meeting_1098-18316.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                            ]
                        ],
                    ]
                ],
            ],
            'University of Essex' => [
                'categories' => [
                    [
                        'name' => 'Business Management',
                        'description' => 'Programs focused on business management...',
                        'image' => 'https://img.freepik.com/free-photo/aerial-view-business-team_53876-124515.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                        'programs' => [
                            [
                                'name' => 'BA (Hons) Business and Management',
                                'description' => '16 months duration, available in February, April, June, August, and November.',
                                'image' => 'https://img.freepik.com/free-photo/aerial-view-business-team_53876-124515.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                            ]
                        ],
                    ]
                ],
            ],
            'University of Liverpool' => [
                'categories' => [
                    [
                        'name' => 'Business Management',
                        'description' => 'Advanced programs in business management...',
                        'image' => 'https://img.freepik.com/free-photo/aerial-view-business-team_53876-124515.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                        'programs' => [
                            [
                                'name' => 'Master of Business Administration (MBA)',
                                'description' => '30 months duration, available in July and October.',
                                'image' => 'https://img.freepik.com/free-photo/aerial-view-business-team_53876-124515.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                            ]
                        ],
                    ]
                ],
            ],
            'University of Central Lancashire' => [
                'categories' => [
                    [
                        'name' => 'Business Management',
                        'description' => 'Business management and leadership programs...',
                        'image' => 'https://img.freepik.com/free-photo/aerial-view-business-team_53876-124515.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                        'programs' => [
                            [
                                'name' => 'Master of Business Administration (Top-Up)',
                                'description' => '4 months duration, available in January, May, and September.',
                                'image' => 'https://img.freepik.com/premium-photo/financial-analysts-analyze-business-financial-reports-digital-tablet-planning-investment-project-discussion-meeting-corporate-showing-results-their-successful-teamwork_265022-26244.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                            ],
                            [
                                'name' => 'Doctor of Business Administration (DBA)',
                                'description' => '4-7 years duration, available in January, May, and September.',
                                'image' => 'https://img.freepik.com/premium-photo/group-business-analyst-team-analyzing-financial-data-report-habiliment_31965-500295.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                            ]
                        ],
                    ],
                    [
                        'name' => 'Accounting & Finance',
                        'description' => 'Programs in finance and management...',
                        'image' => 'https://img.freepik.com/free-photo/businesspeople-working-finance-accounting-analyze-financi_74952-1411.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                        'programs' => [
                            [
                                'name' => 'MSc Finance and Management',
                                'description' => '9 months duration, available in January, May, and September.',
                                'image' => 'https://img.freepik.com/free-photo/cooperation-analyst-chart-professional-paper-economics_1418-47.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                            ]
                        ],
                    ],
                    [
                        'name' => 'Law',
                        'description' => 'Law programs to advance legal knowledge...',
                        'image' => 'https://img.freepik.com/free-photo/lawyer-pointing_23-2147984179.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                        'programs' => [
                            [
                                'name' => 'Master of Laws (LLM) (Top-Up)',
                                'description' => '9 months duration, available in January, May, and September.',
                                'image' => 'https://img.freepik.com/free-photo/lawyer-pointing_23-2147984179.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                            ],
                            [
                                'name' => 'LLB (Hons) Law (Top-Up)',
                                'description' => '12 months duration, available in January, May, and September.',
                                'image' => 'https://img.freepik.com/free-photo/top-view-career-guidance-items-judges_23-2149443469.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                            ]
                        ],
                    ],
                    [
                        'name' => 'Research',
                        'description' => 'Research programs in management...',
                        'image' => 'https://img.freepik.com/free-photo/handsome-guy-study-library_1157-22207.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                        'programs' => [
                            [
                                'name' => 'Masters of Research: Management (MRes)',
                                'description' => '12 months duration, available in January, May, and September.',
                                'image' => 'https://img.freepik.com/premium-photo/doctor-sitting-desk-writing-prescription-his-patient_692702-27602.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                            ]
                        ],
                    ]
                ],
            ],
            'University of Arden' => [
                'categories' => [
                    [
                        'name' => 'Project Management',
                        'description' => 'Programs in project management...',
                        'image' => 'https://img.freepik.com/free-photo/upset-irritated-frustrated-businesswoman-entering-office-meeting-room-late-night-screaming-teamwork-throwing-strategy-paperwork_482257-2392.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',

                        'programs' => [
                            [
                                'name' => 'MSc Project Management',
                                'description' => '9 months duration, available in January, May, and September.',
                                'image' => 'https://img.freepik.com/free-photo/upset-irritated-frustrated-businesswoman-entering-office-meeting-room-late-night-screaming-teamwork-throwing-strategy-paperwork_482257-2392.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',

                            ]
                        ],
                    ],
                    [
                        'name' => 'Data Science',
                        'description' => 'Programs in data science...',
                        'image' => 'https://img.freepik.com/free-photo/man-using-tablet-work-connect-with-others_23-2149369110.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                        'programs' => [
                            [
                                'name' => 'MSc Data Science',
                                'description' => '9 months duration, available in January, May, and September.',
                                'image' => 'https://img.freepik.com/free-photo/businesswoman-networking-using-digital-devices_53876-101875.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                            ]
                        ],
                    ]
                ],
            ],
            'Girne American University' => [
                'categories' => [
                    [
                        'name' => 'Business Management',
                        'description' => 'Business management programs...',
                        'image' => 'https://img.freepik.com/free-photo/businessman-analyzing-data-laptop-with-digital-interface_9975-22367.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                        'programs' => [
                            [
                                'name' => 'BSc in Business Management (Top-up)',
                                'description' => '9-12 months duration, available in March, July, and November.',
                                'image' => 'https://img.freepik.com/free-photo/confident-company-manager-giving-working-tasks-diverse-teamworkers_482257-7686.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                            ],
                            [
                                'name' => 'MBA (Top-up)',
                                'description' => '6-9 months duration, available in March, July, and November.',
                                'image' => 'https://img.freepik.com/premium-photo/financial-analysts-analyze-business-financial-reports-digital-tablet-planning-investment-project-discussion-meeting-corporate-showing-results-their-successful-teamwork_265022-36072.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                            ],
                            [
                                'name' => 'PhD in Business Management (PhD)',
                                'description' => '2.5 years duration, available in March, July, and November.',
                                'image' => 'https://img.freepik.com/free-photo/millennial-asia-businessmen-businesswomen-meeting-brainstorming-ideas-about-new-paperwork-project-colleagues-working-together-planning-success-strategy-enjoy-teamwork-small-modern-night-office_7861-2386.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                            ]
                        ],
                    ]
                ],
            ],

        ];



        if (isset($universityCategories[$university->name])) {
            foreach ($universityCategories[$university->name]['categories'] as $categoryData) {
                $category = UniversityProgramCategory::create([
                    getCurrentLocale() => [
                        'name' => $categoryData['name'],
                        'description' => $categoryData['description'],
                    ],
                    'image' => $categoryData['image']
                ]);

                foreach ($categoryData['programs'] as $programData) {
                    UniversityProgram::create([
                        'status' => true,
                        'category_id' => $category->id,
                        'university_id' => $university->id,
                        'image' => $programData['image'],
                        getCurrentLocale() => [
                            'name' => $programData['name'],
                            'description' => $programData['description'],
                        ]
                    ]);
                }
            }
        }
    }
}
