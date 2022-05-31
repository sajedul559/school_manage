<?php

namespace App\Jambasangsang\Service\Levels;

class LevelService
{
    //Get Level  Data Function 
  public function getLevelData()
  {
     
  }

  // Store Level Data Function 
  public function storeLevelData($levelModel, $request){
      
    return $levelModel::updateOrCreate(['id'=> $request->edit_id],
    [
        'name' => $request->level_name,
        'status' => $request->level_status,
        'description' => $request->description
    ]);
  }

  // delete Level data function
  public function deleteLevelData($levelModel)
  {
    return $levelModel->delete();
  }

}
