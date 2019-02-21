


 public function water($height, $weight){
    $daily_water = 0;
    
    if (isset($height, $weight)) {
    echo "Die Variable ist gesetzt.";
    } 
      else {
      echo "noch nix eingefügt";
      }
      public function water_calculator {
      if ($height < 130 && $weight < 40){
        $daily_water = 1.5;
      }elseif($height < 130 && $weight < 50){
        $daily_water = 1.75;
        }
