<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MathExampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = MathExampleType::cases(); // Получаем все случаи enum
        $maxNumber = 100; // Уменьшено для примера
        $batch = [];
        $batchSize = 100;

        foreach ($types as $type) {
            for ($i = 1; $i <= $maxNumber; $i++) {
                for ($j = 1; $j <= $maxNumber; $j++) {
                    if ($type === MathExampleType::Division && $j === 0) continue;

                    $question = $this->generateQuestion($i, $j, $type->value);
                    $answer = $this->calculateAnswer($i, $j, $type->value);

                    $batch[] = [
                        'question' => $question,
                        'answer' => $answer,
                        'type' => $type->value,
                        'min_number_in_tens' => min($i, $j) / 10,
                        'max_number_in_tens' => max($i, $j) / 10,
                        'max_answer_in_tens' => abs($answer) / 10,
                    ];

                    if (count($batch) >= $batchSize) {
                        DB::table('math_examples')->insert($batch);
                        $batch = [];
                    }
                }
            }
        }

        if (!empty($batch)) {
            DB::table('math_examples')->insert($batch);
        }
    }

    private function generateQuestion($num1, $num2, $type)
    {
        switch ($type) {
            case 'addition':
                return "$num1 + $num2";
            case 'subtraction':
                return "$num1 - $num2";
            case 'multiplication':
                return "$num1 * $num2";
            case 'division':
                return "$num2 !== 0" ? "$num1 / $num2" : '';
            case 'equation':
                return "x + $num2 = $num1";
            default:
                return '';
        }
    }

    private function calculateAnswer($num1, $num2, $type)
    {
        switch ($type) {
            case 'addition':
                return $num1 + $num2;
            case 'subtraction':
                return $num1 - $num2;
            case 'multiplication':
                return $num1 * $num2;
            case 'division':
                return $num2 !== 0 ? $num1 / $num2 : 0;
            case 'equation':
                return $num1 - $num2;
            default:
                return 0;
        }
    }
}
