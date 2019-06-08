<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medication;

class MedicationController extends Controller
{
    //
    public function getAllMedication(){
      $counter = 0;
      $medicationInfo = [];

      $allMedicationNames = Medication::pluck('name');
      $allMedicationUses = Medication::pluck('use');
      $allMedicationSorts = Medication::pluck('sort');


      foreach ($allMedicationNames as $medication) {
        $thisMedicationInfo = [
          "name" => $medication,
          "use" => $allMedicationUses[$counter],
          "sort" => $allMedicationSorts[$counter],
        ];

        $thisMedicationInfo2 = [
          $medication => $thisMedicationInfo,
        ];

        $counter = $counter + 1;
        array_push($medicationInfo, $thisMedicationInfo2);
      }


      return $medicationInfo;
    }
}
