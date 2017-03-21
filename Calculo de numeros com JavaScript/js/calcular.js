function calcular() {
    var num1 = Number(document.getElementById("num1").value);
    var num2 = Number(document.getElementById("num2").value);
    var num3 = Number(document.getElementById("num3").value);
    var media = document.getElementById("media");
    var multi = document.getElementById("multi");
    var divi = document.getElementById("divi");
    var divi2 = document.getElementById("divi2");
    
      media.innerHTML = "A média do números é: " + Number(num1 + num2 + num3) /3 + ".<br>";
        multi.innerHTML = "A multiplicação dos 3 numeros é: " + Number(num1 * num2 * num3) + ".<br>";
          divi.innerHTML = "Porcentagem em relação ao segundo numero: " + Number(num1 * num2) / 100 + ".<br>";
            divi2.innerHTML = "Porcentagem em relação ao terceiro numero: " + Number(num1 * num3) / 100 + ".<br>";


}