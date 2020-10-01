<?php
    function arrayPaises(){
        $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;
        ksort($ceu);
        $stringPaises = '<p> ';
        foreach($ceu as $pais=>$capital){
            $stringPaises = $stringPaises . 'The capital of '. $pais .'  is '. $capital ."\t /// \t";
        }
        echo $stringPaises . '</p>';
    }
    arrayPaises();

    echo '<br/><br/><br/><br/>';

    function temperatures(){
        $temp = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
        $avgTemp = 0;
        $lwTemp = '';
        $hgTemp = '';
        foreach($temp as $number){
            $avgTemp += $number;
        }
        $avgTemp /= (count($temp));

         echo 'Average Temperature is: ' . $avgTemp . '<br/>'. '<br/>';

         $temp = array_unique($temp);

         sort($temp);
         for($i=0; $i<5;$i++){
            $lwTemp .= $temp[$i] . ', ';
         }
         echo 'List of five lowest temperatures: '. $lwTemp . '<br/>'. '<br/>';

         rsort($temp);
         for($i=0; $i<5;$i++){
            $hgTemp .= $temp[$i] . ', ';
         }

        echo 'List of five highest temperatures: '. $hgTemp . '<br/>'. '<br/>';
    }
    temperatures();
?>