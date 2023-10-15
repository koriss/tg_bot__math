<?php


namespace App\Modules\Math\Services;


use App\Modules\Math\Contracts\Math;

/**
 *
 */
class MathService extends BaseService implements Math
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
    private ?int $var_1 = null;
    /**
     * @var_2 int
     */
    private ?int $var_2 = null;
    /**
     * @var string
     */
    private ?string $operator = null;

    /**
     * @param string|null $operator
     * @return void
     */
    public function setOperator(string $operator = null): void
    {
        $this->operator = $operator;
    }

    /**
     * @param int $var_1
     */
    public function setVar1(int $var_1 = null): void
    {
        $this->var_1 = $var_1;
    }

    /**
     * @return void
     */
    public function getVar1(): void
    {
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
    }

    /**
     * @return int
     */
    public function getVar2(): void
    {
        if($this->var_2 === null) {
            if($this->operator === '-') {
                $this->var_2 = mt_rand(10,$this->var_1);
            } else {
                $this->var_2 = mt_rand(10,999);
            }
        }
    }

    public function getOperator(): void
    {
        if(!$this->operator) {
            shuffle($this->operators);
            $this->operator = $this->operators[0];
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
    public function get(): array
    {
        $this->getOperator();
        $this->getVar1();
        $this->getVar2();

        return $this->getMath($this->operator);
    }

    public function check(int $answer): bool
    {
     return true;
    }
}
