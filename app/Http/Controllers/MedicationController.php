<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medication;

class MedicationController extends Controller
{
    //
    public function getAllMedication(){
      $allMedication = Medication::pluck('name');

      return $allMedication;
    }

    public function getMedicationInfoByName($name){
      $medicationId = Medication::where(['name' => $name])->pluck('id');
      $medicationName = Medication::where(['name' => $name])->pluck('name');
      $medicationUse = Medication::where(['name' => $name])->pluck('use');
      $medicationSort = Medication::where(['name' => $name])->pluck('sort');

      $thisMedicationInfo = [
        "id" => $medicationId[0],
        "name" => $medicationName[0],
        "use" => $medicationUse[0],
        "sort" => $medicationSort[0],
      ];

    return $thisMedicationInfo;
    }
}
