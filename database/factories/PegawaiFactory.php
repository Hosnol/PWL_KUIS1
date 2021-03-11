<?php

namespace Database\Factories;

use App\Models\Pegawai;
use Illuminate\Database\Eloquent\Factories\Factory;

class PegawaiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pegawai::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender = $this->faker->randomElements(['male', 'female'])[0];
        return [
            'nama_pegawai' => $this->faker->firstName($gender),
            'jk'=> $gender,
            'jabatan' => $this->faker->jobTitle,
            'no_telepon' => $this->faker->tollFreePhoneNumber,
            'alamat' => $this->faker->address
        ];
    }
}
