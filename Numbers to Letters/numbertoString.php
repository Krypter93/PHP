<!-- We must create a function that, receiving an integer number and greater than 0, converts each number into its corresponding letter,
that is, 3523 should display it as "three five two three".  -->
<?php
    function numbertoString($num) {
        $numeros = array("cero","uno","dos","tres","cuatro","cinco","seis","siete","ocho","nueve");
        $numToString = (string) $num;
        $array_caracter = str_split($numToString);
        $numToLetters = array();

        foreach($array_caracter as $char){
            switch($char){
                case "0":
                    array_push($numToLetters, $numeros[0]);
                    break;
                    case "1":
                        array_push($numToLetters, $numeros[1]);
                        break;
                    case "2":
                        array_push($numToLetters, $numeros[2]);
                        break;
                    case "3":
                        array_push($numToLetters, $numeros[3]);
                        break;
                    case "4":
                        array_push($numToLetters, $numeros[4]);
                        break;
                    case "5":
                        array_push($numToLetters, $numeros[5]);
                        break;
                    case "6":
                        array_push($numToLetters, $numeros[6]);
                        break;
                    case "7":
                        array_push($numToLetters, $numeros[7]);
                        break;
                    case "8":
                        array_push($numToLetters, $numeros[8]);
                        break;
                    case "9":
                        array_push($numToLetters, $numeros[9]);
                        break;
            }
        }

        return implode(" " , $numToLetters);
    }

    echo numbertoString(3523);
?>
