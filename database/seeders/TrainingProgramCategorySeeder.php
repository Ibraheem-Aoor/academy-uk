<?php

namespace Database\Seeders;

use App\Enum\TrainingProgramThemeEnum;
use App\Models\TrainingProgramCategory;
use App\Models\TrainingProgram;
use App\Models\TrainingProgramTranslation;
use Illuminate\Database\Seeder;

class TrainingProgramCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TrainingProgramCategory::query()->delete();

        $categories = [
            [
                'name' => 'ACC | ACCOUNTING',
                'image' => 'accounting.jpg',

                'programs' => [
                    [
                        'image' => 'https://img.freepik.com/free-photo/business-finance-man-calculating-budget-numbers-invoices-financial-adviser-working_1423-119.jpg?uid=R95899825&ga=GA1.2.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Finance',
                        'status' => true,
                        'show_in_home' => true,
                        'translations' => ['name' => 'ACC 100 Principles of Financial Accounting', 'quick_description' => 'Introduction to Financial Accounting.', 'description' => 'This course covers the basics of financial accounting...', 'feature_1' => 'Understand financial statements', 'feature_2' => 'Learn accounting principles', 'feature_3' => 'Practical applications of accounting']
                    ],
                    [
                        'image' => 'https://img.freepik.com/free-photo/business-man-financial-inspector-secretary-making-report-calculating-checking-balance-internal-revenue-service-inspector-checking-document-audit-concept_1423-127.jpg?uid=R95899825&ga=GA1.2.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Finance',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'ACC 200 Principles of Managerial Accounting', 'quick_description' => 'Introduction to Managerial Accounting.', 'description' => 'This course provides an overview of managerial accounting...', 'feature_1' => 'Cost behavior analysis', 'feature_2' => 'Budgeting techniques', 'feature_3' => 'Decision-making processes']
                    ],
                    [
                        'image' => 'https://img.freepik.com/premium-photo/business-man-partnership-using-calculator-review-balance-sheet-annual-with-holding-pen-using-laptop-computer-calculating-budget-audit-check-integrity-before-investment-concept_89286-83.jpg?uid=R95899825&ga=GA1.2.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Finance',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'ACC 210 Cost Accounting', 'quick_description' => 'Introduction to Cost Accounting.', 'description' => 'This course provides an overview of cost accounting...', 'feature_1' => 'Cost concepts', 'feature_2' => 'Cost-volume-profit analysis', 'feature_3' => 'Cost management strategies']
                    ],
                    [
                        'image' => 'https://img.freepik.com/premium-photo/close-up-office-supplies-desk_1048944-1656057.jpg?uid=R95899825&ga=GA1.2.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Finance',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'ACC 350 Taxation', 'quick_description' => 'Introduction to Taxation.', 'description' => 'This course covers the principles of taxation...', 'feature_1' => 'Tax regulations', 'feature_2' => 'Tax planning strategies', 'feature_3' => 'Tax compliance']
                    ],
                    [
                        'image' => 'https://img.freepik.com/free-photo/business-corporate-workplace-team-plan-project_1418-45.jpg?uid=R95899825&ga=GA1.2.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Finance',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'ACC 410 Advanced Accounting', 'quick_description' => 'Advanced concepts in Accounting.', 'description' => 'This course delves into advanced accounting topics...', 'feature_1' => 'Complex accounting standards', 'feature_2' => 'Financial reporting', 'feature_3' => 'Consolidation of financial statements']
                    ],
                    [
                        'image' => 'https://img.freepik.com/premium-photo/revenue-operations-concept_23-2150902406.jpg?uid=R95899825&ga=GA1.2.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Finance',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'ACC 420 Auditing I', 'quick_description' => 'Introduction to Auditing.', 'description' => 'This course provides an overview of auditing principles...', 'feature_1' => 'Audit procedures', 'feature_2' => 'Internal controls', 'feature_3' => 'Audit evidence']
                    ],
                    [
                        'image' => 'https://img.freepik.com/premium-photo/financial-investment-make-money-concept-businessman-hand-drawing-virtual-increase-graph-with-money-coins-stacking-business-growth-chart-profits-from-business-fund-stock-dividend-save-money_708636-1802.jpg?uid=R95899825&ga=GA1.2.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Finance',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'ACC 440 International Accounting', 'quick_description' => 'Accounting principles in an international context.', 'description' => 'This course covers international accounting standards...', 'feature_1' => 'International Financial Reporting Standards (IFRS)', 'feature_2' => 'Global accounting practices', 'feature_3' => 'Cross-border transactions']
                    ],
                    [
                        'image' => 'https://img.freepik.com/free-photo/arrangement-finances-elements-graph_23-2148793737.jpg?uid=R95899825&ga=GA1.2.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Finance',
                        'status' => true,
                        'show_in_home' => true,
                        'translations' => ['name' => 'ACC 500 Accounting for Managers', 'quick_description' => 'Accounting principles for managers.', 'description' => 'This course focuses on accounting concepts relevant to managers...', 'feature_1' => 'Managerial accounting principles', 'feature_2' => 'Financial decision-making', 'feature_3' => 'Performance measurement']
                    ],
                ],
            ],
            [
                'name' => 'BUS | BUSINESS',
                'image' => 'business.jpg',

                'programs' => [
                    [
                        'image' => 'https://img.freepik.com/free-photo/group-diverse-people-having-business-meeting_53876-25060.jpg?uid=R95899825&ga=GA1.2.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Global Business',
                        'status' => true,
                        'show_in_home' => true,
                        'translations' => ['name' => 'BUS 100 Global Dimensions of Business', 'quick_description' => 'Introduction to global business.', 'description' => 'This course explores the global dimensions of business...', 'feature_1' => 'Global market strategies', 'feature_2' => 'International trade practices', 'feature_3' => 'Cross-cultural management']
                    ],
                    [
                        'image' => 'https://img.freepik.com/free-photo/businessman-pointing-graphs-symbols_1232-917.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Communication',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'BUS 110 Business Communication', 'quick_description' => 'Effective communication in business.', 'description' => 'This course focuses on communication strategies in business...', 'feature_1' => 'Professional writing skills', 'feature_2' => 'Verbal communication techniques', 'feature_3' => 'Presentation skills']
                    ],
                    [
                        'image' => 'https://img.freepik.com/free-photo/businessman-pointing-graphs-symbols_1232-917.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Entrepreneurship',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'BUS 200 Business Entrepreneurship', 'quick_description' => 'Introduction to Entrepreneurship.', 'description' => 'This course covers the fundamentals of starting and managing a business...', 'feature_1' => 'Business planning', 'feature_2' => 'Startup strategies', 'feature_3' => 'Risk management']
                    ],
                    [
                        'image' => 'https://img.freepik.com/free-photo/aerial-view-business-data-analysis-graph_53876-146152.jpg?uid=R95899825&ga=GA1.2.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Ethics',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'BUS 300 Business Ethics', 'quick_description' => 'Ethical considerations in business.', 'description' => 'This course addresses ethical issues in business...', 'feature_1' => 'Ethical decision-making', 'feature_2' => 'Corporate social responsibility', 'feature_3' => 'Ethics in leadership']
                    ],
                    [
                        'image' => 'https://img.freepik.com/premium-photo/double-exposure-image-business-people-handshake-city-office-building-showing-partnership_31965-7590.jpg?uid=R95899825&ga=GA1.2.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Law',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'BUS 310 Business Law', 'quick_description' => 'Legal aspects of business.', 'description' => 'This course covers legal principles affecting businesses...', 'feature_1' => 'Contract law', 'feature_2' => 'Business regulations', 'feature_3' => 'Legal dispute resolution']
                    ],
                    [
                        'image' => 'https://img.freepik.com/free-photo/close-up-businessman-with-digital-tablet_1098-549.jpg?uid=R95899825&ga=GA1.2.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'International Business',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'BUS 320 Business International Business', 'quick_description' => 'International business practices.', 'description' => 'This course focuses on international business practices...', 'feature_1' => 'Global market strategies', 'feature_2' => 'Cross-cultural negotiations', 'feature_3' => 'International trade regulations']
                    ],
                    [
                        'image' => 'https://img.freepik.com/premium-photo/directly-shot-business-people-shaking-hands-documents-office-desk_1048944-18908589.jpg?uid=R95899825&ga=GA1.2.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'E-Commerce',
                        'status' => true,
                        'show_in_home' => true,
                        'translations' => ['name' => 'BUS 330 E-Commerce', 'quick_description' => 'Business in the digital age.', 'description' => 'This course covers e-commerce strategies and technologies...', 'feature_1' => 'Online business models', 'feature_2' => 'Digital marketing', 'feature_3' => 'E-commerce platforms']
                    ],
                    [
                        'image' => 'https://img.freepik.com/free-photo/business-man-working-office-desktop_23-2148174109.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Strategy',
                        'status' => true,
                        'show_in_home' => true,
                        'translations' => ['name' => 'BUS 400 Business Strategy and Policy', 'quick_description' => 'Developing and implementing business strategies.', 'description' => 'This course focuses on business strategy formulation...', 'feature_1' => 'Strategic planning', 'feature_2' => 'Policy development', 'feature_3' => 'Competitive analysis']
                    ],
                    [
                        'image' => 'https://img.freepik.com/premium-photo/business-meeting-with-professionals-focused-discussions-strategy-formulation-modern-offi_1110022-1225.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Law',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'BUS 540 Business Law for Managers', 'quick_description' => 'Business law concepts for managers.', 'description' => 'This course covers business law topics relevant to managers...', 'feature_1' => 'Legal issues in management', 'feature_2' => 'Contract management', 'feature_3' => 'Risk management']
                    ],
                    [
                        'image' => 'https://img.freepik.com/premium-photo/group-busy-business-people-working-office-top-view_93675-13069.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Strategy',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'BUS 590 Business Strategy', 'quick_description' => 'Strategic management in business.', 'description' => 'This course covers advanced topics in business strategy...', 'feature_1' => 'Strategic decision-making', 'feature_2' => 'Strategic analysis', 'feature_3' => 'Implementation and control']
                    ],
                    [
                        'image' => 'https://img.freepik.com/premium-photo/double-exposure-image-business-profit-growth_31965-3022.jpg?uid=R95899825&ga=GA1.2.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Operations',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'BUS 590K Operations Strategy', 'quick_description' => 'Strategies for operations management.', 'description' => 'This course focuses on operational strategies for businesses...', 'feature_1' => 'Operations planning', 'feature_2' => 'Process optimization', 'feature_3' => 'Supply chain management']
                    ],
                    [
                        'image' => 'https://img.freepik.com/free-photo/business-people-casual-meeting_53876-101882.jpg?uid=R95899825&ga=GA1.2.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Innovation',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'BUS 680 Sustainability and Innovation', 'quick_description' => 'Innovative practices for sustainability.', 'description' => 'This course explores sustainable business practices...', 'feature_1' => 'Sustainability strategies', 'feature_2' => 'Innovation management', 'feature_3' => 'Sustainable development']
                    ],
                    [
                        'image' => 'https://img.freepik.com/free-photo/business-brainstorming-graph-chart-report-data-concept_53876-31213.jpg?uid=R95899825&ga=GA1.2.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Ethics',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'BUS 860 Business Ethics and Social Responsibility', 'quick_description' => 'Ethics and social responsibility in business.', 'description' => 'This course covers ethical and social responsibility issues...', 'feature_1' => 'Ethical frameworks', 'feature_2' => 'Corporate social responsibility', 'feature_3' => 'Ethical leadership']
                    ],
                ],
            ],
            [
                'name' => 'COM | COMMUNICATIONS',
                'image' => 'communications.jpg',

                'programs' => [
                    [
                        'image' => 'https://img.freepik.com/free-photo/aerial-view-business-team_53876-124515.jpg?uid=R95899825&ga=GA1.2.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Mass Communication',
                        'status' => true,
                        'show_in_home' => true,
                        'translations' => ['name' => 'COM 100 Mass Communication', 'quick_description' => 'Introduction to mass communication.', 'description' => 'This course provides an overview of mass communication...', 'feature_1' => 'Media channels', 'feature_2' => 'Communication theories', 'feature_3' => 'Media effects']
                    ],
                    [
                        'image' => 'https://img.freepik.com/premium-photo/businessman-holding-glowing-earth-globe-with-network-connections_833104-22524.jpg?uid=R95899825&ga=GA1.2.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Public Speaking',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'COM 500 Public Speaking for Managers', 'quick_description' => 'Effective public speaking for managers.', 'description' => 'This course focuses on public speaking techniques for managers...', 'feature_1' => 'Speech preparation', 'feature_2' => 'Presentation skills', 'feature_3' => 'Audience engagement']
                    ],
                ],
            ],
            [
                'name' => 'ECN | ECONOMICS',
                'image' => 'economics.jpg',

                'programs' => [
                    [
                        'image' => 'https://img.freepik.com/free-photo/stack-five-rows-coins_1150-17745.jpg?uid=R95899825&ga=GA1.2.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Microeconomics',
                        'status' => true,
                        'show_in_home' => true,
                        'translations' => ['name' => 'ECN 200 Microeconomics', 'quick_description' => 'Introduction to microeconomics.', 'description' => 'This course covers the fundamentals of microeconomics...', 'feature_1' => 'Supply and demand', 'feature_2' => 'Market structures', 'feature_3' => 'Consumer behavior']
                    ],
                    [
                        'image' => 'https://img.freepik.com/free-photo/piles-coin-money-with-drawn-arrow_23-2148445423.jpg?uid=R95899825&ga=GA1.2.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Macroeconomics',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'ECN 210 Macroeconomics', 'quick_description' => 'Introduction to macroeconomics.', 'description' => 'This course covers the fundamentals of macroeconomics...', 'feature_1' => 'Economic growth', 'feature_2' => 'Inflation and unemployment', 'feature_3' => 'Fiscal and monetary policy']
                    ],
                    [
                        'image' => 'https://img.freepik.com/free-photo/flat-lay-financial-instruments-with-glasses_23-2148285322.jpg?uid=R95899825&ga=GA1.2.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Money and Banking',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'ECN 300 Money and Banking', 'quick_description' => 'Money and banking systems.', 'description' => 'This course focuses on money and banking systems...', 'feature_1' => 'Banking operations', 'feature_2' => 'Monetary policy', 'feature_3' => 'Financial institutions']
                    ],
                    [
                        'image' => 'https://img.freepik.com/free-photo/top-view-coins-paper-money-laptop_23-2148285359.jpg?uid=R95899825&ga=GA1.2.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Managerial Economics',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'ECN 500 Managerial Economics', 'quick_description' => 'Economic analysis for managerial decisions.', 'description' => 'This course focuses on applying economic principles to managerial decisions...', 'feature_1' => 'Demand analysis', 'feature_2' => 'Cost analysis', 'feature_3' => 'Pricing strategies']
                    ],
                    [
                        'image' => 'https://img.freepik.com/premium-photo/stack-books-shelf-against-white-background_1048944-20603857.jpg?uid=R95899825&ga=GA1.2.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'International Economics',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'ECN 510 International Economics', 'quick_description' => 'International trade and finance.', 'description' => 'This course covers international trade and finance...', 'feature_1' => 'Trade theories', 'feature_2' => 'Exchange rates', 'feature_3' => 'Global financial markets']
                    ],
                    [
                        'image' => 'https://img.freepik.com/free-photo/business-man-counting-dollar-banknote-online-business-concept_1150-6406.jpg?uid=R95899825&ga=GA1.2.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Money, Banking & Financial Systems',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'ECN 520 Money, Banking & Financial Systems', 'quick_description' => 'Comprehensive study of financial systems.', 'description' => 'This course provides an in-depth study of money, banking, and financial systems...', 'feature_1' => 'Financial system components', 'feature_2' => 'Banking regulations', 'feature_3' => 'Monetary policy impacts']
                    ],
                ],
            ],
            [
                'name' => 'ENG | ENGLISH',
                'image' => 'english.jpg',

                'programs' => [
                    [
                        'image' => 'https://img.freepik.com/free-photo/english-dictionary-pencils-view_23-2149440501.jpg?uid=R95899825&ga=GA1.2.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Composition',
                        'status' => true,
                        'show_in_home' => true,
                        'translations' => ['name' => 'ENG 100 English Composition', 'quick_description' => 'Fundamentals of English composition.', 'description' => 'This course focuses on the fundamentals of English composition...', 'feature_1' => 'Writing techniques', 'feature_2' => 'Grammar and style', 'feature_3' => 'Essay writing']
                    ],
                    [
                        'image' => 'eng110.jpg',
                        'theme' => 'https://img.freepik.com/free-photo/top-view-hand-correcting-grammar-mistakes_23-2150171443.jpg?uid=R95899825&ga=GA1.2.1266518853.1715856292&semt=ais_hybrid',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'ENG 110 Undergraduate Academic Writing/APA', 'quick_description' => 'Academic writing and APA style.', 'description' => 'This course covers academic writing principles and APA style...', 'feature_1' => 'Research papers', 'feature_2' => 'APA formatting', 'feature_3' => 'Academic integrity']
                    ],
                    [
                        'image' => 'https://img.freepik.com/premium-photo/young-student-tired-exhausted-preparing-chemistry-exam_85869-9162.jpg?uid=R95899825&ga=GA1.2.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Critical Thinking',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'ENG 300 Critical Thinking', 'quick_description' => 'Developing critical thinking skills.', 'description' => 'This course focuses on developing critical thinking and analytical skills...', 'feature_1' => 'Logical reasoning', 'feature_2' => 'Argument analysis', 'feature_3' => 'Problem-solving']
                    ],
                ],
            ],
            [
                'name' => 'FIN | FINANCE',
                'image' => 'finance.jpg',

                'programs' => [
                    [
                        'image' => 'https://img.freepik.com/free-photo/arrangement-finances-elements-graph_23-2148793737.jpg?uid=R95899825&ga=GA1.2.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Financial Analysis',
                        'status' => true,
                        'show_in_home' => true,
                        'translations' => ['name' => 'FIN 440 Financial Statement Analysis', 'quick_description' => 'Analyzing financial statements.', 'description' => 'This course covers the analysis of financial statements...', 'feature_1' => 'Financial ratios', 'feature_2' => 'Statement analysis', 'feature_3' => 'Financial forecasting']
                    ],
                    [
                        'image' => 'https://img.freepik.com/free-photo/glasses-pen-report_23-2148148367.jpg?uid=R95899825&ga=GA1.2.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Financial Management',
                        'status' => true,
                        'show_in_home' => true,
                        'translations' => ['name' => 'FIN 500 Financial Management', 'quick_description' => 'Managing financial resources.', 'description' => 'This course covers financial management principles...', 'feature_1' => 'Financial planning', 'feature_2' => 'Investment decisions', 'feature_3' => 'Capital budgeting']
                    ],
                    [
                        'image' => 'https://img.freepik.com/free-photo/front-view-girl-taking-notes-writing-down-notes-front-table-with-schedules-graphics-laptop-job-business-activity_140725-16038.jpg?uid=R95899825&ga=GA1.2.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'International Finance',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'FIN 530 International Financial Management', 'quick_description' => 'International financial management.', 'description' => 'This course covers principles of international financial management...', 'feature_1' => 'Foreign exchange markets', 'feature_2' => 'International investments', 'feature_3' => 'Global financial strategies']
                    ],
                    [
                        'image' => 'https://img.freepik.com/free-photo/business-man-working-office_23-2148179141.jpg?uid=R95899825&ga=GA1.2.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Markets & Institutions',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'FIN 540 Financial Markets & Institutions', 'quick_description' => 'Financial markets and institutions.', 'description' => 'This course focuses on financial markets and institutions...', 'feature_1' => 'Market structures', 'feature_2' => 'Institutional functions', 'feature_3' => 'Regulatory environment']
                    ],
                    [
                        'image' => 'https://img.freepik.com/free-photo/businessman-holding-tablet-with-statistical-data_1098-3942.jpg?uid=R95899825&ga=GA1.2.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Mergers & Acquisitions',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'FIN 550 Mergers, Acquisitions, Restructuring, and Corporate Governance', 'quick_description' => 'Corporate restructuring and governance.', 'description' => 'This course covers mergers, acquisitions, and corporate governance...', 'feature_1' => 'M&A strategies', 'feature_2' => 'Restructuring processes', 'feature_3' => 'Governance structures']
                    ],
                ],
            ],
            [
                'name' => 'HCA | HEALTHCARE ADMINISTRATION',
                'image' => 'healthcare.jpg',

                'programs' => [
                    [
                        'image' => 'https://img.freepik.com/premium-photo/law-concept-judge-law-medical-pharmacy_36325-82.jpg?uid=R95899825&ga=GA1.2.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Healthcare Law',
                        'status' => true,
                        'show_in_home' => true,
                        'translations' => ['name' => 'HCA 510 Health Care Law and Ethics', 'quick_description' => 'Legal and ethical issues in healthcare.', 'description' => 'This course covers legal and ethical issues in healthcare...', 'feature_1' => 'Healthcare regulations', 'feature_2' => 'Ethical dilemmas', 'feature_3' => 'Legal compliance']
                    ],
                    [
                        'image' => 'https://img.freepik.com/free-photo/crop-doctor-writing-notebook_23-2147796579.jpg?uid=R95899825&ga=GA1.2.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Leadership',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'HCA 520 Dynamic Health Care Leadership', 'quick_description' => 'Leadership in healthcare settings.', 'description' => 'This course focuses on leadership skills in healthcare settings...', 'feature_1' => 'Leadership strategies', 'feature_2' => 'Team management', 'feature_3' => 'Change management']
                    ],
                    [
                        'image' => 'hca530.jpg',
                        'theme' => 'https://img.freepik.com/free-photo/recruitment-hiring-career-job-emplyment-concept_53876-133836.jpg?uid=R95899825&ga=GA1.2.1266518853.1715856292&semt=ais_hybrid',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'HCA 530 Healthcare Human Resource Management', 'quick_description' => 'HR management in healthcare.', 'description' => 'This course covers HR management principles in healthcare...', 'feature_1' => 'HR practices', 'feature_2' => 'Employee relations', 'feature_3' => 'Compliance issues']
                    ],
                ],
            ],
            [
                'name' => 'HTT | HOSPITALITY, TRAVEL, & TOURISM',
                'image' => 'hospitality.jpg',

                'programs' => [
                    [
                        'image' => 'https://img.freepik.com/free-photo/colleagues-working-indoors-while-wearing-medical-masks_23-2148693121.jpg?uid=R95899825&ga=GA1.2.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Global Hospitality',
                        'status' => true,
                        'show_in_home' => true,
                        'translations' => ['name' => 'HTT 500 Global Hospitality & Tourism', 'quick_description' => 'Global perspectives in hospitality.', 'description' => 'This course covers global perspectives in hospitality and tourism...', 'feature_1' => 'Global trends', 'feature_2' => 'Tourism management', 'feature_3' => 'Hospitality services']
                    ],
                    [
                        'image' => 'https://img.freepik.com/free-photo/tourist-giving-passport-receptionist_482257-90700.jpg?uid=R95899825&ga=GA1.2.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Hotel Operations',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'HTT 505 Hotel Operations Management', 'quick_description' => 'Managing hotel operations.', 'description' => 'This course focuses on managing hotel operations...', 'feature_1' => 'Hotel management', 'feature_2' => 'Operational efficiency', 'feature_3' => 'Guest services']
                    ],
                    [
                        'image' => 'https://img.freepik.com/free-photo/people-stands-looks-documents_1157-45822.jpg?uid=R95899825&ga=GA1.2.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Restaurant Management',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'HTT 510 Restaurant & Culinary Management', 'quick_description' => 'Managing restaurant and culinary operations.', 'description' => 'This course covers restaurant and culinary management...', 'feature_1' => 'Restaurant operations', 'feature_2' => 'Menu planning', 'feature_3' => 'Customer service']
                    ],
                ],
            ],
            [
                'name' => 'MGT | MANAGEMENT',
                'image' => 'management.jpg',

                'programs' => [
                    [
                        'image' => 'https://img.freepik.com/free-photo/brand-branding-high-quality-exclusive-concept_53876-132313.jpg?uid=R95899825&ga=GA1.2.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Organizational Theory',
                        'status' => true,
                        'show_in_home' => true,
                        'translations' => ['name' => 'MGT 320 Organizational Theory and Behavior', 'quick_description' => 'Theories of organizational behavior.', 'description' => 'This course explores theories of organizational behavior...', 'feature_1' => 'Organizational structures', 'feature_2' => 'Behavioral theories', 'feature_3' => 'Motivation']
                    ],
                    [
                        'image' => 'https://img.freepik.com/free-photo/standard-quality-control-concept-m_23-2150041850.jpg?uid=R95899825&ga=GA1.2.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Operations Management',
                        'status' => true,
                        'show_in_home' => true,
                        'translations' => ['name' => 'MGT 400 Operations Management', 'quick_description' => 'Managing operations in organizations.', 'description' => 'This course covers principles of operations management...', 'feature_1' => 'Operations strategies', 'feature_2' => 'Process improvement', 'feature_3' => 'Resource management']
                    ],
                    [
                        'image' => 'https://img.freepik.com/free-photo/standard-quality-control-collage-concept_23-2149595847.jpg?uid=R95899825&ga=GA1.2.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Organizational Behavior',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'MGT 500 Organizational Behavior and Leadership', 'quick_description' => 'Behavior and leadership in organizations.', 'description' => 'This course covers organizational behavior and leadership...', 'feature_1' => 'Leadership styles', 'feature_2' => 'Behavioral analysis', 'feature_3' => 'Change management']
                    ],
                    [
                        'image' => 'https://img.freepik.com/premium-photo/startup-small-business-entrepreneurcheck-sales-check-business_1253175-171.jpg?uid=R95899825&ga=GA1.2.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Human Resource Management',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'MGT 510 Human Resource Management', 'quick_description' => 'Human resource management practices.', 'description' => 'This course focuses on human resource management practices...', 'feature_1' => 'Recruitment', 'feature_2' => 'Employee development', 'feature_3' => 'Performance management']
                    ],
                    [
                        'image' => 'https://img.freepik.com/free-photo/standard-quality-control-collage-concept_23-2149595836.jpg?uid=R95899825&ga=GA1.2.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Organizational Theory & Design',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'MGT 600 Organizational Theory & Design', 'quick_description' => 'Organizational design and theory.', 'description' => 'This course focuses on organizational design and theory...', 'feature_1' => 'Organizational structures', 'feature_2' => 'Design principles', 'feature_3' => 'Organizational change']
                    ],
                    [
                        'image' => 'https://img.freepik.com/free-photo/standard-quality-control-collage_23-2149631015.jpg?uid=R95899825&ga=GA1.2.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Materials Management',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'MGT 605 Materials Management', 'quick_description' => 'Managing materials and inventory.', 'description' => 'This course focuses on materials management and inventory control...', 'feature_1' => 'Inventory management', 'feature_2' => 'Procurement', 'feature_3' => 'Supply chain integration']
                    ],
                    [
                        'image' => 'https://img.freepik.com/premium-photo/businessman-hand-working-with-new-modern-computer-business-success-as-concept_488220-62185.jpg?uid=R95899825&ga=GA1.2.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Operations and Supply Chain',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'MGT 620 Operations Management and Supply Chain', 'quick_description' => 'Managing operations and supply chains.', 'description' => 'This course covers operations management and supply chain principles...', 'feature_1' => 'Supply chain strategies', 'feature_2' => 'Operations efficiency', 'feature_3' => 'Supply chain analytics']
                    ],
                    [
                        'image' => 'https://img.freepik.com/premium-photo/man-holding-business-elements-icons-screen_488220-11921.jpg?uid=R95899825&ga=GA1.2.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Operations and Supply Chain',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'MGT 620K Operations Management and Supply Chain', 'quick_description' => 'Advanced operations and supply chain management.', 'description' => 'This course focuses on advanced topics in operations management and supply chain...', 'feature_1' => 'Advanced supply chain strategies', 'feature_2' => 'Process optimization', 'feature_3' => 'Global supply chains']
                    ],
                    [
                        'image' => 'https://img.freepik.com/free-photo/strategy-plan-is-help-business-development_53876-133861.jpg?uid=R95899825&ga=GA1.2.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Quality Management',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'MGT 630 Quality Management in Supply Chain', 'quick_description' => 'Quality management in supply chains.', 'description' => 'This course focuses on quality management in supply chains...', 'feature_1' => 'Quality control', 'feature_2' => 'Continuous improvement', 'feature_3' => 'Supplier quality management']
                    ],
                    [
                        'image' => 'https://img.freepik.com/premium-photo/project-planning-software-modish-business-project-management_31965-110811.jpg?uid=R95899825&ga=GA1.2.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Consumer Management',
                        'status' => true,
                        'show_in_home' => false,
                        'translations' => ['name' => 'MGT 650K Consumer Management for Beauty Industry', 'quick_description' => 'Consumer management in the beauty industry.', 'description' => 'This course covers consumer management strategies specific to the beauty industry...', 'feature_1' => 'Consumer behavior', 'feature_2' => 'Beauty industry trends', 'feature_3' => 'Consumer relationship management']
                    ],
                ],
            ],
        ];

        foreach ($categories as $category) {
            $cat = TrainingProgramCategory::create([
                getCurrentLocale() => [
                    'name' => $category['name'],
                ],
                'image' => $category['image'],
            ]);

            foreach ($category['programs'] as $program) {
                $course = TrainingProgram::create([
                    'category_id' => $cat->id,
                    'image' => $program['image'],
                    'theme' => TrainingProgramThemeEnum::AccreditedTraining->value,
                    'status' => $program['status'],
                    'show_in_home' => $program['show_in_home'],
                ]);

                TrainingProgramTranslation::create([
                    'training_program_id' => $course->id,
                    'locale' => 'en',
                    'name' => $program['translations']['name'],
                    'quick_description' => $program['translations']['quick_description'],
                    'description' => $program['translations']['description'],
                    'feature_1' => $program['translations']['feature_1'],
                    'feature_2' => $program['translations']['feature_2'],
                    'feature_3' => $program['translations']['feature_3'],
                ]);
            }
        }

        // Remote Freelancing Platforms


        $categories = [
            
            [
                'name' => 'CONSULTING | BUSINESS CONSULTING',
                'image' => 'consulting.jpg',
                'programs' => [
                    [
                        'image' => 'https://img.freepik.com/free-photo/chief-executive-officer-evaluating-opportunities-business-expansion_482257-91052.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Business',
                        'status' => true,
                        'show_in_home' => true,
                        'translations' => [
                            'name' => 'Basic Business Consulting',
                            'quick_description' => 'Introduction to business consulting.',
                            'description' => 'Learn the fundamentals of consulting for business.',
                            'feature_1' => 'Consulting techniques',
                            'feature_2' => 'Business analysis',
                            'feature_3' => 'Client interaction'
                        ]
                    ],
                ],
            ],
            [
                'name' => 'WRITING | CONTENT WRITING',
                'image' => 'content_writing.jpg',
                'programs' => [
                    [
                        'image' => 'https://img.freepik.com/free-photo/crop-hand-writing-notebook-near-computer_23-2147863504.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Creative Writing',
                        'status' => true,
                        'show_in_home' => true,
                        'translations' => [
                            'name' => 'Introduction to Content Writing',
                            'quick_description' => 'Learn the basics of content writing.',
                            'description' => 'This course covers key aspects of writing engaging content.',
                            'feature_1' => 'Writing techniques',
                            'feature_2' => 'SEO basics',
                            'feature_3' => 'Content strategy'
                        ]
                    ],
                ],
            ],
            [
                'name' => 'MARKETING | DIGITAL MARKETING',
                'image' => 'https://img.freepik.com/free-photo/three-young-colleagues-sitting-while-work-with-laptops-desk_171337-16935.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                'programs' => [
                    [
                        'image' => 'https://img.freepik.com/free-photo/three-young-colleagues-sitting-while-work-with-laptops-desk_171337-16935.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Marketing',
                        'status' => true,
                        'show_in_home' => true,
                        'translations' => [
                            'name' => 'Digital Marketing Essentials',
                            'quick_description' => 'Introduction to digital marketing strategies.',
                            'description' => 'Explore key digital marketing techniques and tools.',
                            'feature_1' => 'SEO and SEM',
                            'feature_2' => 'Social media marketing',
                            'feature_3' => 'Content marketing'
                        ]
                    ],
                ],
            ],
            [
                'name' => 'E-COMMERCE | ONLINE BUSINESS',
                'image' => 'ecommerce.jpg',
                'programs' => [
                    [
                        'image' => 'https://img.freepik.com/premium-photo/business-online-concept-closeup-landing-page-laptop-screen-background-comfortable-working-place-modern-office-blurred-toned-image_226262-1904.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Business',
                        'status' => true,
                        'show_in_home' => true,
                        'translations' => [
                            'name' => 'Introduction to E-commerce',
                            'quick_description' => 'Learn how to start and manage an online store.',
                            'description' => 'This course covers the fundamentals of e-commerce.',
                            'feature_1' => 'E-commerce platforms',
                            'feature_2' => 'Payment gateways',
                            'feature_3' => 'Customer management'
                        ]
                    ],
                ],
            ],
            [
                'name' => 'ENGINEERING | SOFTWARE ENGINEERING',
                'image' => 'https://img.freepik.com/free-photo/man-working-energy-innovations_23-2148820171.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                'programs' => [
                    [
                        'image' => 'https://img.freepik.com/free-photo/man-working-energy-innovations_23-2148820171.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Engineering',
                        'status' => true,
                        'show_in_home' => true,
                        'translations' => [
                            'name' => 'Introduction to Software Engineering',
                            'quick_description' => 'Learn the basics of software engineering.',
                            'description' => 'Explore software development methodologies and practices.',
                            'feature_1' => 'Software development life cycle',
                            'feature_2' => 'Project management',
                            'feature_3' => 'Quality assurance'
                        ]
                    ],
                ],
            ],
            [
                'name' => 'DESIGN | GRAPHIC DESIGN',
                'image' => 'https://img.freepik.com/free-photo/photo-editor-working-independent-production-company-using-professional-graphic-tablet-photographer-adjusting-white-balance-overexposed-pictures-touchscreen-device-using-stylus-close-up_482257-73691.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                'programs' => [
                    [
                        'image' => 'https://img.freepik.com/free-photo/photo-editor-working-independent-production-company-using-professional-graphic-tablet-photographer-adjusting-white-balance-overexposed-pictures-touchscreen-device-using-stylus-close-up_482257-73691.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Design',
                        'status' => true,
                        'show_in_home' => true,
                        'translations' => [
                            'name' => 'Introduction to Graphic Design',
                            'quick_description' => 'Basics of graphic design principles.',
                            'description' => 'Learn the fundamentals of creating visual content.',
                            'feature_1' => 'Design principles',
                            'feature_2' => 'Typography',
                            'feature_3' => 'Color theory'
                        ]
                    ],
                ],
            ],
            [
                'name' => 'TECH | MOBILE APP DEVELOPMENT',
                'image' => 'https://img.freepik.com/free-photo/unrecognizable-african-man-holding-yellow-pencil-pointing-it-blank-screen-smart-phone-his-hand_273609-9436.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                'programs' => [
                    [
                        'image' => 'https://img.freepik.com/free-photo/unrecognizable-african-man-holding-yellow-pencil-pointing-it-blank-screen-smart-phone-his-hand_273609-9436.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Technology',
                        'status' => true,
                        'show_in_home' => true,
                        'translations' => [
                            'name' => 'Introduction to Mobile App Development',
                            'quick_description' => 'Learn how to develop mobile applications.',
                            'description' => 'This course covers mobile app development for iOS and Android.',
                            'feature_1' => 'Mobile development platforms',
                            'feature_2' => 'User interface design',
                            'feature_3' => 'App deployment'
                        ]
                    ],
                ],
            ],
            [
                'name' => 'LANGUAGE | TRANSLATION',
                'image' => 'https://img.freepik.com/free-photo/day-office-travel-agency_23-2150769995.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                'programs' => [
                    [
                        'image' => 'https://img.freepik.com/free-photo/day-office-travel-agency_23-2150769995.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Language',
                        'status' => true,
                        'show_in_home' => true,
                        'translations' => [
                            'name' => 'Introduction to Translation',
                            'quick_description' => 'Basics of translation and interpretation.',
                            'description' => 'Learn techniques for translating various types of content.',
                            'feature_1' => 'Translation methods',
                            'feature_2' => 'Cultural nuances',
                            'feature_3' => 'Translation tools'
                        ]
                    ],
                ],
            ],
            [
                'name' => 'MEDIA | VIDEO MONTAGE',
                'image' => 'https://img.freepik.com/premium-photo/interactive-media-designer-creating-engaging-content_1280275-168232.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                'programs' => [
                    [
                        'image' => 'https://img.freepik.com/premium-photo/interactive-media-designer-creating-engaging-content_1280275-168232.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Media',
                        'status' => true,
                        'show_in_home' => true,
                        'translations' => [
                            'name' => 'Introduction to Video Montage',
                            'quick_description' => 'Learn the basics of video editing.',
                            'description' => 'This course covers techniques for editing and montaging videos.',
                            'feature_1' => 'Editing software',
                            'feature_2' => 'Cutting and trimming',
                            'feature_3' => 'Adding effects'
                        ]
                    ],
                ],
            ],
            [
                'name' => 'VOICE | VOICE OVER',
                'image' => 'voice_over.jpg',
                'programs' => [
                    [
                        'image' => 'https://img.freepik.com/free-photo/man-with-microphone-headphones-running-podcast-studio_23-2149434273.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Voice',
                        'status' => true,
                        'show_in_home' => true,
                        'translations' => [
                            'name' => 'Introduction to Voice Over',
                            'quick_description' => 'Basics of voice-over techniques and recording.',
                            'description' => 'Learn how to effectively use your voice for various applications.',
                            'feature_1' => 'Voice techniques',
                            'feature_2' => 'Recording equipment',
                            'feature_3' => 'Voice editing'
                        ]
                    ],
                ],
            ],
            [
                'name' => 'WEB | WEB DEVELOPMENT',
                'image' => 'https://img.freepik.com/free-photo/programming-script-text-coding-word_53876-64939.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                'programs' => [
                    [
                        'image' => 'https://img.freepik.com/free-photo/programming-script-text-coding-word_53876-64939.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Technology',
                        'status' => true,
                        'show_in_home' => true,
                        'translations' => [
                            'name' => 'Introduction to Web Development',
                            'quick_description' => 'Learn the fundamentals of web development.',
                            'description' => 'This course covers basic and advanced web development techniques.',
                            'feature_1' => 'HTML and CSS',
                            'feature_2' => 'JavaScript and frameworks',
                            'feature_3' => 'Backend development'
                        ]
                    ],
                ],
            ],
        ];

        foreach ($categories as $category) {
            $cat = TrainingProgramCategory::create([
                getCurrentLocale() => [
                    'name' => $category['name'],
                ],
                'image' => $category['image'],
            ]);

            foreach ($category['programs'] as $program) {
                $course = TrainingProgram::create([
                    'category_id' => $cat->id,
                    'image' => $program['image'],
                    'theme' => TrainingProgramThemeEnum::RemoteFreelancingPlatform->value,
                    'status' => $program['status'],
                    'show_in_home' => $program['show_in_home'],
                    getCurrentLocale() => $program['translations'],
                ]);
            }
        }

        $this->seedProfissionalTrainingPrograms();
    }

    private function seedProfissionalTrainingPrograms()
    {
        $categories = [
            [
                'name' => 'Profissional Training ',
                'image' => 'accounting.jpg',
                'programs' => [
                    [
                        'image' => 'https://img.freepik.com/free-photo/senior-businessman-discussing-paper-with-his-colleague-office_23-2147923436.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Finance',
                        'status' => true,
                        'show_in_home' => true,
                        'translations' => [
                            'name' => 'Certified Internal Auditor (CIA)',
                            'quick_description' => 'Professional certification for internal auditors.',
                            'description' => 'The CIA designation is the only globally recognized certification for internal auditors...',
                            'feature_1' => 'Recognized globally',
                            'feature_2' => 'Key auditing techniques',
                            'feature_3' => 'Ethical and professional standards'
                        ]
                    ],
                    [
                        'image' => 'https://img.freepik.com/free-photo/multitasking-handsome-young-man-working-with-touchpad-while-sitting-couch-office-financial-statistic-graph_1423-117.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Finance',
                        'status' => true,
                        'show_in_home' => true,
                        'translations' => [
                            'name' => 'Certified Financial Analyst (CFA)',
                            'quick_description' => 'A designation for finance and investment professionals.',
                            'description' => 'The CFA program is a globally recognized credential for investment and financial professionals...',
                            'feature_1' => 'Comprehensive finance education',
                            'feature_2' => 'Global recognition',
                            'feature_3' => 'Networking opportunities'
                        ]
                    ],
                    [
                        'image' => 'https://img.freepik.com/free-photo/business-man-working-office-desktop_23-2148194719.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Finance',
                        'status' => true,
                        'show_in_home' => true,
                        'translations' => [
                            'name' => 'Certified Management Accountant (CMA)',
                            'quick_description' => 'Credential in management accounting and financial management.',
                            'description' => 'The CMA certification offers critical skills in financial planning, analysis, control, and decision support...',
                            'feature_1' => 'Strategic management skills',
                            'feature_2' => 'Global credential',
                            'feature_3' => 'Professional growth'
                        ]
                    ],
                    [
                        'image' => 'https://img.freepik.com/premium-photo/bookkeeper-female-financial-inspector-making-report-calculating-checking-balance-internal-revenue-service-checking-financial-document-audit-concept_665183-3444.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Finance',
                        'status' => true,
                        'show_in_home' => true,
                        'translations' => [
                            'name' => 'Certified Public Accountant (CPA)',
                            'quick_description' => 'Designation for accounting professionals.',
                            'description' => 'The CPA designation is the standard of excellence in the accounting profession...',
                            'feature_1' => 'Widely recognized credential',
                            'feature_2' => 'High earning potential',
                            'feature_3' => 'Comprehensive knowledge'
                        ]
                    ],
                    [
                        'image' => 'https://img.freepik.com/premium-photo/international-business-trade-concept_928112-979.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Finance',
                        'status' => true,
                        'show_in_home' => true,
                        'translations' => [
                            'name' => 'Global Financial Compliance',
                            'quick_description' => 'Course on global financial regulations and compliance.',
                            'description' => 'This course covers key aspects of global financial regulations and compliance, including anti-money laundering, and more...',
                            'feature_1' => 'Understand global regulations',
                            'feature_2' => 'Ensure compliance',
                            'feature_3' => 'Minimize financial risks'
                        ]
                    ],
                    [
                        'image' => 'https://img.freepik.com/premium-photo/hammer-money-court_391052-1257.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Finance',
                        'status' => true,
                        'show_in_home' => true,
                        'translations' => [
                            'name' => 'Combating Financial Crime',
                            'quick_description' => 'Strategies for detecting and preventing financial crime.',
                            'description' => 'This program provides the knowledge and tools necessary to combat financial crime, including fraud, money laundering, and terrorism financing...',
                            'feature_1' => 'Detect financial crime',
                            'feature_2' => 'Implement prevention strategies',
                            'feature_3' => 'Legal and ethical considerations'
                        ]
                    ],
                    [
                        'image' => 'https://img.freepik.com/free-photo/business-proposal-purchase-hands-holding-money_53876-128955.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Finance',
                        'status' => true,
                        'show_in_home' => true,
                        'translations' => [
                            'name' => 'International Certificate in Wealth & Investment Management (ICWIM)',
                            'quick_description' => 'Certification in wealth management and investment.',
                            'description' => 'The ICWIM qualification offers insight into global wealth management, investment management, and client advisory services...',
                            'feature_1' => 'Global wealth management',
                            'feature_2' => 'Client advisory skills',
                            'feature_3' => 'Investment management'
                        ]
                    ],
                    [
                        'image' => 'https://img.freepik.com/free-photo/risk-assessment-graph-chart-spreadsheet-table-word_53876-121237.jpg?uid=R95899825&ga=GA1.1.1266518853.1715856292&semt=ais_hybrid',
                        'theme' => 'Finance',
                        'status' => true,
                        'show_in_home' => true,
                        'translations' => [
                            'name' => 'Risk in Financial Services',
                            'quick_description' => 'Understanding risk management in financial services.',
                            'description' => 'This program covers the essentials of risk management in the financial services industry, including identifying and mitigating risks...',
                            'feature_1' => 'Identify financial risks',
                            'feature_2' => 'Mitigate potential risks',
                            'feature_3' => 'Risk management strategies'
                        ]
                    ],
                ],
            ],
            // Additional categories can be added here
        ];
        foreach ($categories as $category) {
            $cat = TrainingProgramCategory::create([
                getCurrentLocale() => [
                    'name' => $category['name'],
                ],
                'image' => $category['image'],
            ]);

            foreach ($category['programs'] as $program) {
                $course = TrainingProgram::create([
                    'category_id' => $cat->id,
                    'image' => $program['image'],
                    'theme' => TrainingProgramThemeEnum::ProfessionalTraining->value,
                    'status' => $program['status'],
                    'show_in_home' => $program['show_in_home'],
                    getCurrentLocale() => $program['translations'],
                ]);
            }
        }
    }
}
