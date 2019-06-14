<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medication;

class MedicationController extends Controller
{
    //
    public function getMedication($id){
      $medicationId = Medication::where(['id' => $id])->pluck('id');
      $medicationName = Medication::where(['id' => $id])->pluck('name');
      $medicationUse = Medication::where(['id' => $id])->pluck('use');
      $medicationSort = Medication::where(['id' => $id])->pluck('sort');


        $thisMedicationInfo = [
          "id" => $medicationId[0],
          "name" => $medicationName[0],
          "use" => $medicationUse[0],
          "sort" => $medicationSort[0],
        ];

      return $thisMedicationInfo;
    }
}
