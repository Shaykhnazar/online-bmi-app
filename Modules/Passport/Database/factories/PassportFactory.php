<?php
namespace Modules\Passport\Database\factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Passport\Entities\PassportType;

class PassportFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\Passport\Entities\Passport::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code' => 'AB'.$this->faker->randomDigit(),
            'expired_at' => $this->faker->date(),
            'type_id' => PassportType::inRandomOrder()->first()->id,
            'user_id' => User::inRandomOrder()->first()->id
        ];
    }
}

