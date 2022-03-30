<?php

include('../controller/verifica_login.php');

?>

<!DOCTYPE html>
<html>
<head>
  <script src="../controller/JavaScript/tiny.js" ></script>
  <script>
  tinymce.init({
    selector: '#mytextarea'
  });
  </script>
</head>
<body>
    <h1>TinyMCE guia de inicialização</h1>

  <form method="post" action="">
    <textarea id="mytextarea" name="mytextarea">Hello, World!</textarea>
    <button type="submit">Submit</button>
  </form>
</body>
</html>