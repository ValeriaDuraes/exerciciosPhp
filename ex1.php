<?php 
/*
**********ENUNCIADO**********
O número de telefone está formatado corretamente? Crie uma função que
aceite uma string e retorne true se estiver no formato de um número de
telefone adequado e false se não estiver. Assuma que qualquer número entre
0 e 9 (nos locais apropriados) produzem um número de telefone válido. É
assim que um número de telefone válido se parece: (123) 456-7890
Exemplos:
isValid("(123) 456-7890") ➞ true
isValid("1111)555 2345") ➞ false
isValid("098) 123 4567") ➞ false
Nota: Não esqueça o espaço após os parênteses.
*/

  $pattern = '/^([1-9]{3})([0-9]{3})([0-9]{4})$/';

  $source = '1148959016';
  $source1 = '0148959016';
  $source2 = '4148959016';

  $result = preg_match($pattern, $source, $matches);
  $result1 = preg_match($pattern, $source1, $matches);
  $result2 = preg_match($pattern, $source2, $matches);

  $replace = preg_replace($pattern, '($1) $2-$3',$source);
  $replace1 = preg_replace($pattern, '($1) $2-$3',$source1);
  $replace2 = preg_replace($pattern, '($1) $2-$3',$source2);

  echo "<pre>";print_r($source);echo "</pre>";
  echo "<pre>";var_dump($replace);echo "</pre>";
  if ($result == 0){
    echo "false";
  }else{
    echo "true<br>";
  }

  echo "<pre>";print_r($source1);echo "</pre>";
  echo "<pre>";var_dump($replace1);echo "</pre>";
  if ($result1 == 0){
    echo "false";
  }else{
    echo "true";
  }

  echo "<pre>";print_r($source2);echo "</pre>";
  echo "<pre>";var_dump($replace2);echo "</pre>";
  if ($result2 == 0){
    echo "false";
  }else{
    echo "true";
  }

?>

 