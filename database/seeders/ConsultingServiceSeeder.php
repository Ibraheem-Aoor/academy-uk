<?php
namespace Database\Seeders;

use App\Models\ConsultingService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConsultingServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = $this->getDataToSeed();
        ConsultingService::query()->delete();
        foreach($services as $service)
        {
            ConsultingService::query()->create($service);
        }
    }

    private function getDataToSeed(): array
    {
        return [
            [
                'image' => 'https://plus.unsplash.com/premium_photo-1661589129079-95caa4609375?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8U3RyYXRlZ2ljJTIwQ29uc3VsdGluZ3xlbnwwfHwwfHx8MA%3D%3D',  // Strategic Consulting
                'status' => 1,
                getCurrentLocale() => [
                    'name' => 'Strategic Consulting',
                    'description' => 'Providing expert guidance in business strategy development, market research and analysis, competitive intelligence, and operational efficiency to drive sustainable growth.'
                ],
            ],
            [
                'image' => 'https://images.unsplash.com/photo-1516321497487-e288fb19713f?fit=crop&w=500&q=80',  // Technology Consulting
                'status' => 1,
                getCurrentLocale() => [
                    'name' => 'Technology Consulting',
                    'description' => 'Assisting businesses in digital transformation, IT strategy and planning, cybersecurity, and data analytics to enhance their technological capabilities.'
                ],
            ],
            [
                'image' => 'https://images.unsplash.com/photo-1556742393-d75f468bfcb0?fit=crop&w=500&q=80',  // Innovation Consulting
                'status' => 1,
                getCurrentLocale() => [
                    'name' => 'Innovation Consulting',
                    'description' => 'Fostering innovation through management, idea generation, intellectual property strategy, and technology commercialization to maintain a competitive edge.'
                ],
            ],
            [
                'image' => 'https://plus.unsplash.com/premium_photo-1661420128622-4a5267435ce4?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8Y29uc3VsdGluZ3xlbnwwfHwwfHx8MA%3D%3D',  // Sustainability Consulting
                'status' => 1,
                getCurrentLocale() => [
                    'name' => 'Sustainability Consulting',
                    'description' => 'Helping businesses adopt sustainable practices, reduce their environmental footprint, and contribute to a more sustainable future through green technology solutions and environmental impact assessments.'
                ],
            ],
        ];
    }
}
