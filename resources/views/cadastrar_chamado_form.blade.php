<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Página Inicial</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">
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

  .container {
    width: 1200px;
    height: 600px;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
  }

  .navbar {
    background-color: #333; /* cor de fundo cinza */
    padding: 10px 20px;
    display: flex;
    justify-content: space-between;
  }

  .navbar .left {
    color: #fff; /* cor do texto */
    text-decoration: none;
    margin-right: 20px;
  }

  .navbar .right {
    color: #fff; /* cor do texto */
    text-decoration: none;
    display: flex;
    align-items: center;
  }

  .navbar .right a {
    margin-left: 10px;
  }

  .navbar a:hover {
    color: #ddd; /* cor do texto ao passar o mouse */
  }

  form {
    margin-top: 20px;
  }

  .form-group {
    margin-bottom: 20px;
  }

  .form-group label {
    font-weight: bold;
  }

  .form-group select {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
  }

  .form-group textarea {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    resize: none;
    height: 100px; /* altura do campo de texto grande */
  }

  .submit-button {
    padding: 10px 20px;
    background-color: #007bff; /* cor de fundo azul */
    color: #fff; /* cor do texto */
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  .submit-button:hover {
    background-color: #0056b3; /* cor de fundo azul mais escuro ao passar o mouse */
  }
</style>
</head>
<body>
@include('includes.header') 
  <h2><a href="/return" style="color: black;"><i class="bi bi-arrow-return-left"></i></a></h2>
  <h2>Formulário de Cadastro</h2>
  <form action="/cadastrar_chamado" method="POST">
    <input type="hidden" name="id" value="{{$id}}">
    @csrf
    <div class="form-group">
      <label for="nome_chamado">Nome do Chamado:</label>
      <input type="text" id="nome_chamado" name="nome_chamado" class="form-control">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" class="form-control">
    </div>

    <div class="form-group">
      <label for="reponsavel">Responsável:</label>
      <input type="text"  name="reponsavel" class="form-control">
    </div>

    <div class="form-group">
      <label for="chamado">Chamado:</label>
      <textarea id="chamado" name="chamado" class="form-control"></textarea>
    </div>
    <div class="form-group">
      <label for="prioridade">Nível de Prioridade:</label>
      <select id="prioridade" name="prioridade" class="form-control">
        <option value="1">Básico</option>
        <option value="2">Médio</option>
        <option value="3">Crítico</option>
      </select>
    </div>
    <button type="submit" class="submit-button">Enviar</button>
  </form>
</div>
</body>
</html>
