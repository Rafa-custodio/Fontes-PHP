<!DOCTYPE html>
<html>
<head>
	<title>Operadores PHP</title>
</head>
<body>

<?php
/*
	Operação de Equivalência (==): Avalia como verdadeiro se os dois operandos são equivalentes, isto é, eles podem ser convertidos para um tipo de dados comum no qual eles têm o mesmo valor, mas não necessariamente do mesmo tipo.

*/
$n = 4;
$a = '4';

if ($n == $a) {
	echo "As duas varáveis são iguais<p>";
}else
	echo "As duas variáveis não são iguais!!<p>";

	/*
	Operação de Identidade (===): Avalia como verdadeiro somente se os operandos são do mesmo tipo de dados e têm o mesmo valor.
	*/

	if ($n === $a) {
	echo "As duas varáveis são identicas!<p>";
}else
	echo "As duas variáveis não são identicas!<p>";

	/*
		Operação não equivalente (! =): Avalia como verdadeiro se os dois operandos não são equivalentes, sem considerar o tipo de dados.
	*/

if ($n != $a) {
	echo "TRUE - Os dois operadores não são iguais!<p>";
}else
	echo "FALSE - Os dois operadores são iguais!<p>";

	/*
	Operação não idêntica (! ==): Avalia como verdadeiro se os dois operandos não são do mesmo tipo de dados ou não têm o mesmo valor.
	*/

	if ($n !== $a) {
	echo "TRUE - Os dois operadores não são do mesmo tipo de dados ou não tem o mesmo valor!<p>";
}else
	echo "FALSE - Os dois operadores são do mesmo tipo de dados e tem o mesmo valor!<p>";

?>

</body>
</html>


