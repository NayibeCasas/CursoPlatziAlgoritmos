/*exercise of places recommendation*/
<?php 
function placeRecommendation($condition="",$question=""){
    $weather=array("Bogota"=>"cold","Monteria"=>"hot","Medellin"=>"mild");
    $ubication=array("Guajira"=>"north","Leticia"=>"South","Santander"=>"east","Antioquia"=>"west");
    $tourism=array("Santa Marta"=>"sea","villavicencio"=>"plains","Rioacha"=>"desert","Quindio"=>"Valley");
    switch($condition){
        case "weather":
            echo array_search($question,$weather);
        break;
        case "ubication":
            echo array_search($question,$ubication);
        break;
        case "tourism":
            echo array_search($question,$tourism);
        break;
        default:
            echo"welcom to colombia";
    }
}
placeRecommendation("weather","cold");