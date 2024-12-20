<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Url;

class Index extends Component
{
    #[Url]
    public $grid = 3;

    #[Url]
    public $max = 10;

    #[Url]
    public $operations = ['+'];

    public function colorizeText($text)
    {
        $colors = ['text-red-500', 'text-green-500', 'text-blue-500', 'text-yellow-500', 'text-purple-500', 'text-pink-500', 'text-indigo-500', 'text-teal-500', 'text-orange-500'];
        $coloredText = '';
        $colorIndex = 0;

        foreach (str_split($text) as $char) {
            $coloredText .= '<span class="' . $colors[$colorIndex] . '">' . $char . '</span>';
            $colorIndex = ($colorIndex + 1) % count($colors);
        }

        return $coloredText;
    }

    public function tasks($numTasks)
    {
        $tasks = [];
        for ($i = 0; $i < $numTasks; $i++) {
            $num1 = rand(1, $this->max);
            $num2 = rand(1, $this->max);
            $operation = $this->operations[array_rand($this->operations)];

            $result = 0;
            switch ($operation) {
                case '+':
                    $result = $num1 + $num2;
                    break;
                case '-':
                    $result = $num1 - $num2;
                    break;
            }

            if ($result < 0) {
                $i--;
                continue;
            }

            $tasks[] = [
                'task' => "$num1 $operation $num2",
                'result' => $result
            ];
        }
        return $tasks;
    }
    // // https://www.helpfully.de/wp-content/uploads/2024/12/weihnachten-adventskranz-ausmalen-helpfully.jpg
    public function render()
    {
        $tasks = $this->tasks($this->grid * 3);
        return view('livewire.index', compact('tasks'));
    }
}
