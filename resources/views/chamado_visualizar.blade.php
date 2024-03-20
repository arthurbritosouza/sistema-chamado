<!DOCTYPE html>
<html lang="pt-BR">
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

  table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
  }

  th, td {
    padding: 10px;
    border-bottom: 1px solid #ddd;
    text-align: left;
  }

  th {
    background-color: #f2f2f2;
    font-weight: bold;
  }

  tr:hover {
    background-color: #f5f5f5;
  }

  .add-button {
    float: right;
  }

  /* Ajustes para o textarea */
  textarea {
    width: 100%; /* Definindo o textarea para ocupar toda a largura */
    height: 150px; /* Ajuste a altura conforme necessário */
    padding: 10px; /* Adicionando padding interno para melhorar a aparência */
    border: none; /* Removendo a borda */
    resize: vertical; /* Permitindo redimensionamento vertical */
    outline: none; /* Removendo o contorno ao focar */
  }
</style>
</head>
<body>
@include('includes.header') 

@if($chamados)


    @foreach($chamados as $chamado)
      <h5><a href="/return" style="color: black;"><i class="bi bi-arrow-return-left"></i></a><a href="/editar_chamado_form/{{$chamado->id}}" style="color: black;"class="add-button"><i class="bi bi-pencil"></i></a></h5>

      <b><h5>Nome do Chamado: </h5></b>
      <h6>{{$chamado->nome_chamado}}</h6>
      <hr>
      <b><h5>Email: </h5></b>
      <h6>{{$chamado->email}}</h6>
      <hr>
      <b><h5>Responsável: </h5></b>
      <h6>Arthur</h6>
      <hr>
      <b><h5>Chamado: </h5></b>
      <h6><textarea readonly>{{$chamado->chamado}}</textarea></h6> <!-- Utilizando textarea -->
      <hr>
    @endforeach

    @else
    @foreach($chamados_relacione as $relacione)
      <h5><a href="/return" style="color: black;"><i class="bi bi-arrow-return-left"></i></a><a href="/editar_chamado_form/{{$relacione->id}}" style="color: black;"class="add-button"><i class="bi bi-pencil"></i></a></h5>

      <b><h5>Nome do Chamado: </h5></b>
      <h6>{{$relacione->nome_chamado}}</h6>
      <hr>
      <b><h5>Email: </h5></b>
      <h6>{{$relacione->email}}</h6>
      <hr>
      <b><h5>Responsável: </h5></b>
      <h6>Arthur</h6>
      <hr>
      <b><h5>Chamado: </h5></b>
      <h6><textarea readonly>{{$relacione->chamado}}</textarea></h6> <!-- Utilizando textarea -->
      <hr>
    @endforeach
    
    @endif
  </div>
</body>
</html>
