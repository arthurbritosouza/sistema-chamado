<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<style>
  body {
    margin: 0;
    padding: 0;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #f5f5f5; /* cor de fundo cinza claro */
    font-family: Arial, sans-serif;
  }

  .login-container {
    width: 300px;
    padding: 30px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  .login-container h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
  }

  .login-container form {
    display: flex;
    flex-direction: column;
  }

  .login-container form input {
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
  }

  .login-container form button {
    padding: 12px;
    border: none;
    border-radius: 5px;
    background-color: #007bff;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
  }

  .login-container form button:hover {
    background-color: #0056b3;
  }

  .criar-conta{
    text-decoration: none;
    text-align: left;
    color: black;

  }
</style>
</head>
<body>
  <div class="login-container">
    <h2>Cadastrar</h2>
    <form action="/cadastrar_usuario" method="POST">
      @csrf
      <input type="text" name="name" placeholder="Nome">
      <input type="email" name="email" placeholder="Email">
      <button type="submit">Cadastrar</button>
    </form>
  </div>
</body>
</html>
