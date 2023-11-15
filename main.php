<!DOCTYPE html>
<html>
<head>
<style>
#animated-text {
  font-size: 80px;
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
</style>
</head>
<body>

<h1 id="animated-text"></h1>

<script>
window.onload = function() {
  var text = document.getElementById('animated-text');
  var message = 'Controle de Chamados';
  var i = 0;
  var intervalId = setInterval(function() {
    if (i < message.length) {
      text.textContent += message[i];
      i++;
    } else {
      clearInterval(intervalId);
    }
  }, 100);
}
</script>

</body>
</html>