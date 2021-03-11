<?php

namespace Database\Factories;

use App\Models\Pelanggan;
use Illuminate\Database\Eloquent\Factories\Factory;

class PelangganFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pelanggan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender = $this->faker->randomElements(['male', 'female'])[0];
        return [
            'nama_pelanggan' => $this->faker->firstName($gender),
            'jk'=> $gender,
            'no_telepon' => $this->faker->tollFreePhoneNumber,
            'alamat' => $this->faker->address
        ];
    }
}
