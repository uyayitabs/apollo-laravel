<?php

namespace App\Console\Commands;

use App\Models\Breakdown;
use App\Models\Random;
use Illuminate\Console\Command;
use Faker;

class CreateTestData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create_data {--min=5} {--max=10}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create some test data for the randoms and breakdowns table';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $min = $this->option('min');
        $max = $this->option('max');
        
        $numbers = range($min, $max);
        shuffle($numbers);

        $faker = Faker\Factory::create();
        foreach ($numbers as $number) {
            $random = Random::create([
                'values' => $faker->word(),
            ]);
            $breakdownNumbers = range($min, $max);
            shuffle($breakdownNumbers);
            foreach ($breakdownNumbers as $breakDownNumber) {
                $random->breakdowns()->create([
                    'values' => $faker->word()
                ]);
            }
        }
    }
}
