<style>
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

  /* Estilo para o menu suspenso */
  .dropdown-menu {
    background-color: #fff; /* Cor de fundo padrão */
    border: 1px solid #ccc;
    padding: 10px;
    width: 200px;
  }
  
  /* Estilo para os itens do menu */
  .dropdown-item {
    display: block;
    text-decoration: none;
    color: #333;
    padding: 5px 10px;
    transition: background-color 0.3s ease;
  }
  
  /* Mudança de cor ao passar o mouse */
  .dropdown-item:hover {
    background-color: #f0f0f0; /* Cor de fundo ao passar o mouse */
  }
  
  /* Remover cor de fundo ao clicar */
  .dropdown-item:focus {
    background-color: transparent !important; /* !important para sobrescrever estilos padrão */
  }
    </style>


<div class="container">
    <div class="navbar">
      <a href="#" class="left">Início</a>
      <a href="/banco_chamados" class="left">Bancos de chamados</a>
      <div class="right">
            <div class="dropdown show">
  <a class="dropdown-toggle" style="text-decoration: none; color:white;" href="#" id="dropdownMenuLink" data-toggle="dropdown">
  <i class="fas fa-user-circle"></i>&nbsp;Perfil
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="/logout">logout</a>
  </div>
</div>

      </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>