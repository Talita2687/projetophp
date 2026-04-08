<?php 

     $numero1 = 10;
     $numero2 = 20;
     $op = 5;


     // função para calcular 



     function soma($numero1,$numero2){
     	return ($numero1 + $numero2);
    }


    function subtração($numero1,$numero2){
     	return ($numero1 - $numero2);

     }
     function multiplicação($numero1,$numero2){
     	return ($numero1 * $numero2);

     }

     	function divisão($numero1,$numero2){
     	return ($numero1 / $numero2);

     }

    //executando uma função

      

    switch ($op) {
		
		case 1:

        $resp = soma($numero1, $numero2); 
        opendi "Soma de $numero1 + $numero2 =$resp"


      break;
     
     case 2:

        $resp = subtração($numero1, $numero2); 
        echo "Subtração de $numero1 - $numero2 =$resp"
        

      break;
    
    case 3:

        $resp = divisão($numero1, $numero2); 
        echo "Divisão de $numero1 / $numero2 =$resp"
        

      break;
    
    case 4:

        $resp = multiplicação($numero1, $numero2); 
        echo "Multiplicação de $numero1 / $numero2 =$resp"
        

      break;
      default:echo ("Sair");

      break
     }

echo "$numero1 $op $numero2 =$resp";


  ?>
