<?php
class Valida {
      public function cpf($cpf){
        /*Expressão regular para CPF
          "/^([0-9]{3})\.([0-9]{3})\.([0-9]{3})\-([0-9]{2})$/";

          Iginora números repetidos
          '/(?!(\d)\1{8})\d{9}/';*/

        /* Se o CPF estiver nos padrão estabelecido em $expr, gera-se um array $matches contendo na posição $matches[0]
           o cpf completo ($matches[0] = 123.456.789-00) e nas outras posições os blocos numéricos de 3, e na última posição o
           dígito de verificação; */
        preg_match('/^([0-9]{3})\.([0-9]{3})\.([0-9]{3})\-([0-9]{2})$/', $cpf, $matches);
        
        //preg_match('/(?!(\d)\1{8})\d{9}/', $cpf, $equals);

        $sndVD = 1;
        $sumfd = 0;
        $sumsd = 0;
        $resto = 0;
        $fstVD = 1;
        $ncpf = array();
        $p = pow(10,10); // 10000000000;
        
        //echo "CPF: ".$n."<br>";
        if(isset($matches) && $matches != array()){
            $n = (int) preg_replace('/([\.\-])/','',$matches[0]);
            preg_replace(array('/[0-9]/'), '', $n, -1 , $count);

            if(isset($count) && $count == 11){
                for($i = 0; $i < 10; $i++){
                    $ncpf[$i] = (int) ($n / $p);
                    $resto = $n - ($ncpf[$i] * $p);
                    $n = $resto;
                    $p =  $p / 10;

                    if($i < 9){
                        $sumfd = $sumfd + ($ncpf[$i]*(10-$i));                             
                    }

                    $sumsd = $sumsd + ($ncpf[$i]*(11-$i));         
                }

                //echo "Soma Primeiro: ".$sumfd."<br>";
                //echo "Soma Segundo: ".$sumsd."<br>";

                //Primeiro dígito                                   
                $rdfd = $sumfd % 11;      
                
                //echo $rdfd."<br>";

                $rdsd = $sumsd % 11;                          

                //echo $rdsd."<br>";

                if ($rdfd < 2){
                    $fstVD = 0;
                }else{
                    $fstVD = 11 - $rdfd;
                }

                if($rdsd < 2){
                    $sndVD = 0;
                }else{
                    $sndVD = 11 - $rdsd;    
                }

                $dv = $fstVD.$sndVD;
                //echo "Primeiro: ".$fstVD."<br>Segundo: ".$sndVD."<br>VD: ".$dv;
                if($dv == $matches[4]){
                    return true;
                }            
            }else{
                return false;
            }
        }else {
                return false;
        }
    }
}

?>