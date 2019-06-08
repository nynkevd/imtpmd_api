<?php

use Illuminate\Database\Seeder;

class MedsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('meds')->insert([
          'name' => 'Diclofenac',
          'use' => 'Ontstekingsremmende pijnstiller',
          'sort' => 'Tablet',
        ]);

        DB::table('meds')->insert([
          'name' => 'Amoxicilline',
          'use' => 'Antibioticum',
          'sort' => 'Capsule',
        ]);

        DB::table('meds')->insert([
          'name' => 'Omeprazol',
          'use' => 'Maagzuurremmer',
          'sort' => 'Tablet, poeder',
        ]);

        DB::table('meds')->insert([
          'name' => 'Doxycycline',
          'use' => 'Antibioticum',
          'sort' => 'Tablet, capsule',
        ]);

        DB::table('meds')->insert([
          'name' => 'Ibuprofen',
          'use' => 'Ontstekingsremmende pijnstiller',
          'sort' => 'Tablet, capsule, zalf, pil, korrels',
        ]);

        DB::table('meds')->insert([
          'name' => 'Metoprolol',
          'use' => 'Bètablokker, bloeddruk verlager',
          'sort' => 'Tablet',
        ]);

        DB::table('meds')->insert([
          'name' => 'Cortisol',
          'use' => 'Hydrocortison niertekort aanvullen',
          'sort' => 'Tablet, capsule',
        ]);

        DB::table('meds')->insert([
          'name' => 'Oxazepam',
          'use' => 'Tablet',
          'sort' => 'Kalmeringsmiddel',
        ]);

        DB::table('meds')->insert([
          'name' => 'Naproxen',
          'use' => 'Tablet',
          'sort' => 'Ontstekingsremmende pijnstiller',
        ]);

        DB::table('meds')->insert([
          'name' => 'Famiciclovir',
          'use' => 'Tablet',
          'sort' => 'Virusremmer',
        ]);

        DB::table('meds')->insert([
          'name' => 'Alimemazine',
          'use' => 'Tablet',
          'sort' => 'Anti-allergiemedicijn',
        ]);

        DB::table('meds')->insert([
          'name' => 'Metapirone',
          'use' => 'Tablet',
          'sort' => 'Bijnierschorshormoonremmer',
        ]);

        DB::table('meds')->insert([
          'name' => 'Zanamivir',
          'use' => 'Inhalatiepoeder',
          'sort' => 'Antivirusmiddel',
        ]);

        DB::table('meds')->insert([
          'name' => 'Indometacine',
          'use' => 'Capsule',
          'sort' => 'Ontstekingsremmende pijnstiller',
        ]);

        DB::table('meds')->insert([
          'name' => 'Edoxaban',
          'use' => 'Tablet',
          'sort' => 'Antistollingsmedicijn',
        ]);

        DB::table('meds')->insert([
          'name' => 'Hydroxyzine',
          'use' => 'Tablet',
          'sort' => 'Anti-allergiemedicijn',
        ]);

        DB::table('meds')->insert([
          'name' => 'Felbamaat',
          'use' => 'Tablet, drank',
          'sort' => 'Remt overprikkeling hersenen',
        ]);

        DB::table('meds')->insert([
          'name' => 'Codeine',
          'use' => 'Tablet, capsules, drank',
          'sort' => 'Hoestprikkeldempend middel',
        ]);

        DB::table('meds')->insert([
          'name' => 'Acetylsalicylzuur',
          'use' => 'Tablet, kauwtablet',
          'sort' => 'Ontstekingsremmende pijnstiller',
        ]);

        DB::table('meds')->insert([
          'name' => 'Triamcinolon',
          'use' => 'Tablet',
          'sort' => 'Overgevoeligheidsreactie- en ontstekingsremmer',
        ]);

        DB::table('meds')->insert([
          'name' => 'Fluticason',
          'use' => 'Neusspray, neusdruppels',
          'sort' => 'Ontstekingsremmend (voor de neus)',
        ]);

        DB::table('meds')->insert([
          'name' => 'Levofloxacine',
          'use' => 'Tablet',
          'sort' => 'Antibioticum',
        ]);

        DB::table('meds')->insert([
          'name' => 'Fidaxomicine',
          'use' => 'Tablet',
          'sort' => 'Antibioticum',
        ]);

        DB::table('meds')->insert([
          'name' => 'Metformine',
          'use' => 'Tablet',
          'sort' => 'Bloedglucose verlager',
        ]);

        DB::table('meds')->insert([
          'name' => 'Rifampicine',
          'use' => 'Tablet, capsule, drank',
          'sort' => 'Antibioticum',
        ]);
    }
}
