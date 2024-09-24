<?php
namespace App\Enum;

enum TrainingProgramThemeEnum: string
{
    case ConventionalTraining = 'conventional-training';
    case ProfessionalTraining = 'professional-training';
    case AccreditedTraining = 'accredited-training';
    case ETraining = 'e-training';
    case RemoteFreelancingPlatform = 'remote-freelancing-platform';
    case SmartTrainingDevelopment = 'smart-training-development';
}
