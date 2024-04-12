<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login e Cadastro</title>
</head>
<body>

  <div id="app">
    <?php include 'login.php'; ?>
  </div>

  <script>
    function toggleForm(formType) {
      const app = document.getElementById('app');
      app.innerHTML = '';

      const formFile = (formType === 'login') ? 'login.php' : 'cadastro.php';
      const script = document.createElement('script');
      script.src = formFile;

      app.appendChild(script);
    }
  </script>

  <button onclick="toggleForm('login')">Login</button>
  <button onclick="toggleForm('cadastro')">Cadastro</button>

</body>
</html>
