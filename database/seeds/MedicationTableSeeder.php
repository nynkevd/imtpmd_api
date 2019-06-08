<?php

use Illuminate\Database\Seeder;

class MedicationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('medication')->insert([
        'name' => 'Diclofenac',
        'use' => 'Ontstekingsremmende pijnstiller',
        'sort' => 'Tablet',
      ]);

      DB::table('medication')->insert([
        'name' => 'Amoxicilline',
        'use' => 'Antibioticum',
        'sort' => 'Capsule',
      ]);

      DB::table('medication')->insert([
        'name' => 'Omeprazol',
        'use' => 'Maagzuurremmer',
        'sort' => 'Tablet, poeder',
      ]);

      DB::table('medication')->insert([
        'name' => 'Doxycycline',
        'use' => 'Antibioticum',
        'sort' => 'Tablet, capsule',
      ]);

      DB::table('medication')->insert([
        'name' => 'Ibuprofen',
        'use' => 'Ontstekingsremmende pijnstiller',
        'sort' => 'Tablet, capsule, zalf, pil, korrels',
      ]);

      DB::table('medication')->insert([
        'name' => 'Metoprolol',
        'use' => 'Bètablokker, bloeddruk verlager',
        'sort' => 'Tablet',
      ]);

      DB::table('medication')->insert([
        'name' => 'Cortisol',
        'use' => 'Hydrocortison niertekort aanvullen',
        'sort' => 'Tablet, capsule',
      ]);

      DB::table('medication')->insert([
        'name' => 'Oxazepam',
        'use' => 'Tablet',
        'sort' => 'Kalmeringsmiddel',
      ]);

      DB::table('medication')->insert([
        'name' => 'Naproxen',
        'use' => 'Tablet',
        'sort' => 'Ontstekingsremmende pijnstiller',
      ]);

      DB::table('medication')->insert([
        'name' => 'Famiciclovir',
        'use' => 'Tablet',
        'sort' => 'Virusremmer',
      ]);

      DB::table('medication')->insert([
        'name' => 'Alimemazine',
        'use' => 'Tablet',
        'sort' => 'Anti-allergiemedicijn',
      ]);

      DB::table('medication')->insert([
        'name' => 'Metapirone',
        'use' => 'Tablet',
        'sort' => 'Bijnierschorshormoonremmer',
      ]);

      DB::table('medication')->insert([
        'name' => 'Zanamivir',
        'use' => 'Inhalatiepoeder',
        'sort' => 'Antivirusmiddel',
      ]);

      DB::table('medication')->insert([
        'name' => 'Indometacine',
        'use' => 'Capsule',
        'sort' => 'Ontstekingsremmende pijnstiller',
      ]);

      DB::table('medication')->insert([
        'name' => 'Edoxaban',
        'use' => 'Tablet',
        'sort' => 'Antistollingsmedicijn',
      ]);

      DB::table('medication')->insert([
        'name' => 'Hydroxyzine',
        'use' => 'Tablet',
        'sort' => 'Anti-allergiemedicijn',
      ]);

      DB::table('medication')->insert([
        'name' => 'Felbamaat',
        'use' => 'Tablet, drank',
        'sort' => 'Remt overprikkeling hersenen',
      ]);

      DB::table('medication')->insert([
        'name' => 'Codeine',
        'use' => 'Tablet, capsules, drank',
        'sort' => 'Hoestprikkeldempend middel',
      ]);

      DB::table('medication')->insert([
        'name' => 'Acetylsalicylzuur',
        'use' => 'Tablet, kauwtablet',
        'sort' => 'Ontstekingsremmende pijnstiller',
      ]);

      DB::table('medication')->insert([
        'name' => 'Triamcinolon',
        'use' => 'Tablet',
        'sort' => 'Overgevoeligheidsreactie- en ontstekingsremmer',
      ]);

      DB::table('medication')->insert([
        'name' => 'Fluticason',
        'use' => 'Neusspray, neusdruppels',
        'sort' => 'Ontstekingsremmend (voor de neus)',
      ]);

      DB::table('medication')->insert([
        'name' => 'Levofloxacine',
        'use' => 'Tablet',
        'sort' => 'Antibioticum',
      ]);

      DB::table('medication')->insert([
        'name' => 'Fidaxomicine',
        'use' => 'Tablet',
        'sort' => 'Antibioticum',
      ]);

      DB::table('medication')->insert([
        'name' => 'Metformine',
        'use' => 'Tablet',
        'sort' => 'Bloedglucose verlager',
      ]);

      DB::table('medication')->insert([
        'name' => 'Rifampicine',
        'use' => 'Tablet, capsule, drank',
        'sort' => 'Antibioticum',
      ]);
    }
}
