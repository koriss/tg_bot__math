<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MathExample;
use Illuminate\Support\Facades\DB;

class MathExampleStatisticsController extends Controller
{
    public function index()
    {
        // Получение количества примеров по каждому типу
        $statistics = MathExample::select('type', DB::raw('count(*) as total'))
                         ->groupBy('type')
                         ->get();

        // Передача статистики в представление
        return view('math_examples.statistics', compact('statistics'));
    }
}