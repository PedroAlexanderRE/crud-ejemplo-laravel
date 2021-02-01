<?php

namespace Database\Factories;

use App\Models\Empleados;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmpleadosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Empleados::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' =>$this->faker->unique()->safeEmail,
            'about' =>$this->faker->text,
            'image' =>'images/'.$this->faker->image('public/storage/images/',640,480,null,false),
        ];
    }
}
