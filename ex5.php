<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fatorial</title>
</head>
<body>
<!-- **********ENUNCIADO**********
Retorne o valor de um número multiplicado por ele mesmo - 1 até chegar
a 1
Exemplo:
mutiplicar(3) ➞ 6 // pois 3*2*1=6
mutiplicar(2) ➞ 2 // pois 2*1=2
mutiplicar(5) ➞ 120 // pois 5*4*3*2*1=120
mutiplicar(10) ➞ 3628800 // pois 10*9*8*7*6*5*4*3*2*1=3628800 -->

  <form action="" method="POST">
    <input type="number" name="num" placeholder="Digite um número:" required="true">
    <br><br><input type="submit" name="submit" value="Enviar">
  </form>

  <?php
  if(isset($_POST['submit'])){
      $num = $_POST['num'];

    function calculoFatorial($num){
      $fatorial = 1;
      for($i= 1; $i <= $num; $i++){
        $fatorial = $fatorial *= $i;
    }
    return $fatorial;
      }
    }

    $resultado = calculoFatorial($num);
    echo "<br>O fatorial de $num é $resultado."
  
  ?>

</body>
</html>
