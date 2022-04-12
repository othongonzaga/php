<div>
    <p>O seu IMC está na faixa da: 
        <b>
        <?php

        $altura = 1.80;
        $peso = 1.80;
        $imc = $peso / ($altura * $altura);
        $faixa = "";

        if($imc < 18.5){
            $faixa = "Magreza";
        }else if($imc >= 18.5 && $imc < 25){
            $faixa = "Normal";
        }else if($imc >= 25 && $imc < 30){
            $faixa = "Sobrepeso";
        }else{
            $faixa = "Obesidade";
        }

        echo $faixa;

        /*Magreza, quando o resultado é menor que 18,5 kg/m2;
        Normal, quando o resultado está entre 18,5 e 24,9 kg/m2;
        Sobrepeso, quando o resultado está entre 24,9 e 30kg/m2;
        Obesidade, quando o resultado é maior que 30kg/m2
        */

        ?>
        </b>
    </p>
</div>