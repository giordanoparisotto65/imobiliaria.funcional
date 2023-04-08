<?php 
include "../controller/UsuarioController.php";


   $usuario = new UsuarioController();

  if(!empty($_GET['id'])){
    $usuario->deletar($_GET['id']);
    header("location: UsuarioList.php");
  }
  if(!empty($_POST)){
    $load = $usuario->pesquisar($_POST);

  }else{
    $load = $usuario->carregar();

  }

  ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Banco de Clientes</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  <body>

  <div class="container">
  <br>
  <h1>Página do Administrador</h1>

  <div class="col-8">
  <button class="btn btn-link">
  <a href="VendasForm.php" class="btn btn-danger">Nova Venda</a>



  <button class="btn btn-link">
  <a href="VendasList.php" class="btn btn-danger">Listar vendas</a>



    <button class="btn btn-link">
  <a href="ImoveisForm.php" class="btn btn-danger">Cadastrar Imóvel</a>



  <button class="btn btn-link">
  <a href="ImoveisList.php" class="btn btn-danger">Listar Imóvel</a>
  </div>


    <br>

    <h2>Usuários Cadastrados</h2>
    <form action="UsuarioList.php" method="post">
      <div class="row">

        <div class="col-2">
          <select name="campo" class="form-select">
            <option value="nome">Nome</option>
            <option value="telefone">Telefone</option>
            <option value="cpf">CPF</option>
          </select>
        </div>

        <div class="col-4">
          <input type="text" class="form-control" placeholder="Pesquisar" name="valor" />
        </div>

        <div class="col-4">
          <button class="btn btn-dark" style="color:white" type="submit">
            <i class="fa-solid fa-magnifying-glass" style="color:white" ;></i> Buscar
          </button>

          <a class="btn btn-dark" href="UsuarioForm.php"><i class="fa-solid fa-plus"></i> Cadastrar</a>
        </div>

      

    </form>
      <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th scope="col">ID Usuário</th>
          <th scope="col">Nome</th>
          <th scope="col">Telefone</th>
          <th scope="col">CPF</th>
        </tr>
      </thead>
      <tbody>

      <?php 
      foreach($load as $item){
        echo"<tr>
              <td scope='row'>$item->id</td>
              <td>$item->nome</td>
              <td>$item->telefone</td>
              <td>$item->cpf</td>
              <td><a href='./UsuarioForm.php?id=$item->id'><i class='fa-solid fa-pen-to-square' style='color:grey;'></i></a></td>
              <td><a href='./UsuarioList.php?id=$item->id'
               onclick='return confirm(\"Deseja Excluir?\")' >
               <i class='fa-solid fa-trash' style='color:grey;'></i></a></td>
            </tr>";
      }
          ?>

        </tbody>
      </table>
      <br>

      <div class="col-3">
          <button class="btn btn-link"  type="button">
        <a href="../index.html" class="btn btn-danger"><i class="fa-solid fa-arrow-left"></i> Voltar</a>
      </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>
