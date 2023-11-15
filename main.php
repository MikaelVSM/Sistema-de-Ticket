<!DOCTYPE html>
<html>
<head>
<style>

/* Estilos para os elementos */

.fragment {
  position: relative;
  opacity: 0;
  animation: fadein 2s ease-in-out forwards;
  display: inline-block; /* Adicionado para colocar os elementos na horizontal */
  margin-right: 10px; /* Adicionado para adicionar espaço entre as palavras */
}

.letter {
  font-size: 40px; /* Aumentado para tornar as letras maiores */
  font-family: sans-serif;
  text-align: center;
}

/* Estilos para a animação */

@keyframes fadein {
  from { opacity: 0; }
  to { opacity: 1; }
}

/* Estilos para o texto */

#text {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  margin: 10px;
}

</style>
</head>
<body>

<!-- Elementos que formam a frase -->

<div id="text">
  <div class="fragment" style="animation-delay: 0s;"><div class="letter">S</div></div>
  <div class="fragment" style="animation-delay: 0.5s;"><div class="letter">i</div></div>
  <div class="fragment" style="animation-delay: 1s;"><div class="letter">s</div></div>
  <div class="fragment" style="animation-delay: 1.5s;"><div class="letter">t</div></div>
  <div class="fragment" style="animation-delay: 2s;"><div class="letter">e</div></div>
  <div class="fragment" style="animation-delay: 2.5s;"><div class="letter">m</div></div>
  <div class="fragment" style="animation-delay: 3s;"><div class="letter">a</div></div>
  <div class="fragment" style="animation-delay: 3.5s;"><div class="letter"> </div></div>
  <div class="fragment" style="animation-delay: 3.5s;"><div class="letter"> d</div></div>
  <div class="fragment" style="animation-delay: 4s;"><div class="letter">e</div></div>
  <div class="fragment" style="animation-delay: 3.5s;"><div class="letter"> </div></div>
  <div class="fragment" style="animation-delay: 4.5s;"><div class="letter"> T</div></div>
  <div class="fragment" style="animation-delay: 5s;"><div class="letter">i</div></div>
  <div class="fragment" style="animation-delay: 5.5s;"><div class="letter">c</div></div>
  <div class="fragment" style="animation-delay: 6s;"><div class="letter">k</div></div>
  <div class="fragment" style="animation-delay: 6.5s;"><div class="letter">e</div></div>
  <div class="fragment" style="animation-delay: 7s;"><div class="letter">t</div></div>
  <div class="fragment" style="animation-delay: 7.5s;"><div class="letter">s</div></div>
</div>

</body>
</html>
