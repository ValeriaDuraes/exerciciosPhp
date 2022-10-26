<?php
/*
**********ENUNCIADO**********
Remover os caracteres especiais de uma string. Crie uma função que
recebe uma string e remove todos os caracteres "especiais" (por
exemplo,!@#$%^&\*) E retorne a nova string. Os únicos caracteres não
alfanuméricos permitidos são traços -, underscore _ e espaços.
Exemplos:
removeCharacters("The quick green dog!") ➞ "The quick green dog"
removeCharacters("%fd76$fd(-)6GvKlO.") ➞ "fd76fd-6GvKlO"
removeCharacters("D0n$c sed 0di0 du1") ➞ "D0nc sed 0di0 du1"
*/

function removeCharacters($str) {
  $res = preg_replace('/[!@#%^&\*\$]+/', '', $str);
  return $res;
}

$str = "Hello World!!";
$str1 = removeCharacters($str);
echo "$str ➞ $str1<br>";

$str = "!@#fa]b fifir 59768$%^&\*";
$str1 = removeCharacters($str);
echo "$str ➞ $str1<br>";

$str = "!baufb fer0 $%^&\ y8j9**";
$str1 = removeCharacters($str);
echo "$str ➞ $str1<br>";

?>