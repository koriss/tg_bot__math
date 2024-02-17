<?php

namespace App\Enums;

enum MathExampleType: string
{
    case Addition = 'addition';
    case Subtraction = 'subtraction';
    case Multiplication = 'multiplication';
    case Division = 'division';
    case Equation = 'equation';
}
