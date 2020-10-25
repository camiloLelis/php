<?php
$dataAtual=new \DateTime('now',new \DateTimeZone('America/Sao_Paulo'));
$dataVencimento=filter_input(INPUT_POST,'dataVencimento',FILTER_DEFAULT);
$dataVencimento2=new \DateTime($dataVencimento,new \DateTimeZone('America/Sao_Paulo'));
$dataDiff=$dataVencimento2->diff($dataAtual);

if($dataDiff->invert === 0){
    echo "Esse boleto já venceu!";
}else{
    echo "Você pode pagar o boleto!";
}