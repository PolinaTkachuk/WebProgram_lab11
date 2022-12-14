<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calculator_Model extends Model
{
    public $first_number;
    public $second_number;
    public $addition;
    public $subtraction;
    public $division;
    public $multiplication;
    public $array=array();
    public function Creation_Model():array
    {
        $first_number= mt_rand(0, 10);
        $second_number = mt_rand(0, 10);

        $addition=$first_number +$second_number;
        $subtraction=$first_number -$second_number;
        $multiplication=$first_number *$second_number ;

        if ($second_number)
        {
         $division =$first_number/$second_number;
        }
        else{
            $division='404';
            echo "division by zero";
        }
        $array=array(['first_number'=>$first_number,'second_number'=>$second_number,'addition'=>$addition ,'subtraction'=>$subtraction,
            'multiplication'=>$multiplication, 'division'=>$division]);
        return $array;
    }
    public function Calculator_Model() {//создающий объект
        $model= new Calculator_Model();
        $model->Creation_Model();
    }

}
