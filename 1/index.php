<!DOCTYPE HTML>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html ; charset=UTF-8">
    <title>Page de test PHP</title>
</head>

<body>
    <h1>Page de test</h1>
    <?php echo "Hello World !<br>Bonjour à tous !" ;
/*1er Exercice*/    

    $Citation = "<br>Tu bluffes Martoni.";

/*2ième Exercice*/    echo $Citation;

/*3ième Exercice*/    echo "<br>$Citation Moi, je dis y bluffe.";

/*4ième Exercice*/

    $Bluffe = true;
    if($Bluffe != true) {
        echo "<br>Il bluffe";
    }else{
        echo "<br>Y bluffe pas le con";
    };

    echo "<br> 1er Tableau <br>";

/*5ième Exercice*/

    for ($i = 1; $i <= 10; $i++){
        echo ($i . " ");
    };

    echo "<br>";

    for ($i = 10; $i > 0 ; $i--){
        echo ($i . " ");
    };

    echo "<br> 2ième Tableau <br>";

/*6ième Exercice*/

    $i=1;
    while($i <= 10 ){
        echo ($i . " ");
        $i++;
    };

    echo "<br>";

    $i=10;
    while($i > 0){
        echo ($i . " ");
        $i--;
    };
/*7ième Exercice*/

    echo "<br> 3ième Tableau <br>";

    $Tableau = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10"];
    foreach($Tableau as $char){
        echo($char . " ");
    };

    echo "<br>";

    $Tableau = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10"];
    foreach (array_reverse($Tableau) as $char) {
        echo($char . " ");
    };

/*8ième Exercice*/

    echo "<br> 4ième Tableau <br>";
    /* Enlever les commentaire pour vérifier que tout fonctionne, car elle peut prendre ENORMEMENT de place*/
    /*$Tab = range(0, 20);

    function FctPair (Htab $Tab){
        $Pair = [];

        foreach($Tab as $Nb){
            if($Nb % 2 == 0){
                Htab_push($Pair, $Nb);
            }
        }

        return $Pair;
    };

    foreach(FctPair($Tab) as $Nb){
        echo $Nb . " ";
    };*/

    function NbPair() {
        for ($i = 0; $i <21 ; $i++){
            if ($i % 2 == 0) {
            echo $i . " ";
            }
        }
    }
    NbPair();

/*9ième Exercice*/

    echo "<br> 5ième Tableau <br>";

   /* function InfPair() {
        for ($i = 0; $i < rand() ; $i++){
            if ($i % 2 == 0){
                echo $i . " ";
            }
        }
    }
    InfPair();*/

/* 10ième Exercice */

    echo "<br> 6ième Tableau <br>";

    for($i = 0; $i < 8; $i++){
        echo "*";
    }

/* 11ième Exercice */

    echo "<br> 7ième Tableau <br>";

    for($j = 0; $j < 8; $j++){
        for($i = 0; $i < 8; $i++){
            echo "*";
        }
        echo "<br>";
    }
    
/* 12ième Exercice */

    echo "<br> 8ième Tableau <br>";

    
    for ($j = 0; $j < 8; $j++) {
        for ($i = 0; $i < 8; $i++) {
            if ($i == 0 || $j == 0 || $j == 7 || $i == 7){                
                echo "*";
            } else {                
                echo "&nbsp ";
            };
            
        };  
        echo "<br>";
    };

/* 13ième Exercice */

    echo "<br> 9ième Tableau <br>";

    $Htab = [4, 5.5, 6.8, 1, 2, 3];
    foreach($Htab as $char){
        echo($char . "+");
    };
    echo "=";
    echo array_sum($Htab);

    echo "<br>";

/* 14ième Exercice */

    echo "<br> 10ième Tableau <br>";

    $Htab = [4, 5.5, 6.8, 1, 2, 3];

    $min = $Htab[0];
    $minIndex = 0;

    for($i = 0; $i < 6; $i++){
        if($Htab[$i] < $min){
            $min = $Htab[$i];
            $minIndex = $i;
        };
    };
    echo "Nb min :" . $min . " (indice " . $minIndex . ")<br/>";

    $max = $Htab[0];
    $maxIndex = 0;

    for($i = 0; $i < 6; $i++){
        if($Htab[$i] > $max){
            $max = $Htab[$i];
            $maxIndex = $i;
        };
    };
    echo "Nb max :" . $max . " (indice " . $maxIndex . ")";


    echo "<br>";

/* 15ième Exercice */

    echo "<br> 11ième Tableau <br>";

    $Htab = [4, 5.5, 6.8, 1, 2, 3];
    $Qlq = 8;

    function QulConq($Htab, $Qlq) {
        for ($i = 0; $i < 6; $i++) {
            if ($Htab[$i] == $Qlq) {
                echo "Wesh, C ok il est là.";
                return;
            }
        }
        echo "Non dommage, essaie encore.";
    }
    QulConq($Htab, $Qlq);
    

    echo "<br>";

/* 16ième Exercice */

    echo "<br> 12ième Tableau <br>";

    

    /*$Htab = [4, 5.5, 6.8, 1, 2, 3];
    $n = count($Htab); 


    for ($i = 0; $i < $n-1; $i++) {
        for ($j = $i+1; $j < $n; $j++) {
            if ($Htab[$i] > $Htab[$j]) {
                $temp = $Htab[$i];
                $Htab[$i] = $Htab[$j];
                $Htab[$j] = $temp;
            }
        }
    }

    foreach ($Htab as $val) {
        echo $val . " ";
    }*/

    $Htab = [4, 5.5, 6.8, 1, 2, 3];

    function triCroissant($Htab) {
        $n = count($Htab); 
        $tri = []; 
    
        while ($n > 0) {
            $min = min($Htab);
            $key = array_search($min, $Htab);
            unset($Htab[$key]);
            array_push($tri, $min);
            $n -= 1;
        }
    
        foreach ($tri as $element) {
            echo $element . " ";
        }
    }
    
    triCroissant($Htab);

    echo "<br>";

/* 17ième Exercice */

    echo "<br> 12ième Tableau <br>";
/*****************************************/
    $Htab = [4, 5.5, 6.8, 1, 2, 3];
    $min = min($Htab);
    $min_index = array_keys($Htab, $min);
    $max = max($Htab);
    $max_index = array_keys($Htab, $max);

    echo "Minimum : " . $min . " Indice : " . $min_index[0];
    echo "Maximum : " . $max . " Indice : " . $max_index[0];



/******************************************/
    echo "<br>";

    $Htab = [4, 5.5, 6.8, 1, 2, 3];

    if(in_array("8", $Htab)){
        echo "Wesh, C ok il est là.";
    }else{
        echo "Non dommage, essaie encore.";
    }
/******************************************/
    echo "<br>";

    $Htab = [4, 5.5, 6.8, 1, 2, 3];

    sort($Htab);
    foreach ($Htab as $element) {
        echo $element . " ";
    }

    echo "<br>";
/**********************************************/    

/* 18ième Exercice */




    



    
    







    ?>
</body>

</html>