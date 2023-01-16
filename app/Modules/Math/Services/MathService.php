<?php


namespace App\Modules\Math\Services;


/**
 *
 */
class MathService implements \App\Modules\Math\Contracts\Math
{
    /**
     * @var array|string[]
     */
    protected array $operators = [
        '-','+',
    ];

    /**
     * @var_1 int
     */
    /**
     * @var_2 int
     */
    private int $var_1, $var_2;
    /**
     * @var string
     */
    private string $operator;

    /**
     * @param string|null $operator
     * @return void
     */
    public function setOperator(string $operator = null): void
    {
        $this->operator = $operator;

        if($this->operator === null) {
            shuffle($this->operators);
            $this->operator = $this->operators[0];
        }
    }

    /**
     * @param int $var_1
     */
    public function setVar1(int $var_1 = null): void
    {
        $this->var_1 = $var_1;

        if($this->var_1 === null) {
            $this->var_1 = mt_rand(10,999);
        }
    }

    /**
     * @param int $var_2
     */
    public function setVar2(int $var_2 = null): void
    {
        $this->var_2 = $var_2;
        if($this->var_2 === null) {
            if($this->operator === '-') {
                $this->var_2 = mt_rand($this->var_1,999);
            } else {
                $this->var_2 = mt_rand(10,999);
            }
        }
    }

    public function getMath($operator): array
    {
        switch ($operator) {
            case "-":
                $answer = $this->var_1 - $this->var_2;
                $math = $this->var_1.' - '.$this->var_2;
                break;
            case "+":
                $answer = $this->var_1 + $this->var_2;
                $math = $this->var_1.' + '.$this->var_2;
                break;
            case "*":
                $answer = $this->var_1 * $this->var_2;
                $math = $this->var_1.' * '.$this->var_2;
                break;
            case "/":
                $answer = $this->var_1 / $this->var_2;
                $math = $this->var_1.' / '.$this->var_2;
                break;
            default:
                echo "сhoose operator first";
        }
        return [
            'math' => $math,
            'answer' => $answer,
        ];
    }

    public function get(): string
    {


        return '';
    }

    public function check(int $answer): bool
    {
     return true;
    }
}
