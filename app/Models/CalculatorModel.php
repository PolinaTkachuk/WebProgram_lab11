<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//модель
class CalculatorModel extends Model
{
    public $first_number;
    public $second_number;

    public function __construct(array $attributes = [])//конструктор
    {
        parent::__construct($attributes);
        $this->first_number = mt_rand(0, 10);
        $this->second_number = mt_rand(0, 10);
    }

}
