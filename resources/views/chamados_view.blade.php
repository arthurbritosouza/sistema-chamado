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
</style>
</head>
<body>
@include('includes.header') 
    <h2><a href="/return" style="color: black;"><i class="bi bi-arrow-return-left"></i></a><a href="/cadastrar_chamado_form/{{$id}}" style="color: black;"class="add-button"><i class="bi bi-plus"></i></a></h2>
    <table>
      <thead>
        <tr>
          <th></th>
          <th>Descrição do Chamado</th>
          <th>Responsável</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          @if($chamados_relacionados->count(1))
          @foreach($chamados_relacionados as $chamados_relacionado)
            <tr>
              <td><input type="checkbox"></td>
                <td><a style="color: blue;" href="/chamado_visualizar/{{$chamados_relacionado->id}}"><span style="color: black;">{{$chamados_relacionado->nome_chamado}}</span></a></td>
                <td>Arthur</td>
                <td>
                  <a href="/editar_chamado_form/{{$chamados_relacionado->id}}" style="color: blue;"><i class="bi bi-person-add"></i></a>
                  <a href="/excluir_chamado/{{$chamados_relacionado->id}}/{{$chamados_relacionado->banco}}" style="color: red;"><i class="bi bi-trash"></i></a>
              </td>
            </tr>
          @endforeach
          @else
          @foreach($chamados as $chamado)
            <tr>
              <td><input type="checkbox"></td>
                <td><a style="color: blue;" href="/chamado_visualizar/{{$chamado->id}}"><span style="color: black;">{{$chamado->nome_chamado}}</span></a></td>
                <td>Arthur</td>
                <td>
                  <a href="/editar_chamado_form/{{$chamado->id}}" style="color: blue;"><i class="bi bi-person-add"></i></a>
                  <a href="/excluir_chamado/{{$chamado->id}}/{{$chamado->banco}}" style="color: red;"><i class="bi bi-trash"></i></a>
              </td>
            </tr>
          @endforeach
          @endif


        </tr>
      </tbody>
    </table>
  </div>
</body>
</html>
