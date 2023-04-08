<?php 
include "../controller/VendasController.php";

$venda = new VendasController();

  if(!empty($_GET['id'])){
    $venda->deletar($_GET['id']);
    header("location: VendasList.php");
  }
  if(!empty($_POST)){
    $load = $venda->pesquisar($_POST);

  }else{
    $load = $venda->carregar();

  }
  
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Banco de vendas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
    <h1>Listagem de Negócios</h1>
    <form action="/view/VendasList.php" method="post">
      <div class="row">
        <div class="col-3">
          <select name="campo" class="form-select">
            <option value="id_imovel">ID Imóvel</option>
            <option value="valor_negocio">Valor do Negócio (R$)</option>
            <option value="id_cliente">Cliente</option>
          </select>
        </div>


        <div class="col-4">
        <input type="text" class="form-control" placeholder="Pesquisar" name="valor" />
        </div>
        <div class="col-6">
        <button class="btn btn-dark" type="submit">
        <i class="fa-solid fa-magnifying-glass"></i> Buscar
        </button>
        <a class="btn btn-danger" href="VendasForm.php"><i class="fa-solid fa-plus"></i> Cadastrar</a>
        </div>
        </div>



    </form>
      <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th scope="col">Código de Venda</th>
          <th scope="col">ID Imóvel</th>
          <th scope="col">Valor do Negócio (R$)</th>
          <th scope="col">ID Cliente</th>
        </tr>
      </thead>
      <tbody>

      <?php 
      foreach($load as $item)
      {
        echo"<tr>
              <td scope='row'>$item->id</td>
              <td>$item->id_imovel</td>
              <td>$item->valor_negocio</td>
              <td>$item->id_cliente</td>
              <td><a href='../view/VendasForm.php?id=$item->id'><i class='fa-solid fa-pen-to-square' style='color:grey;'></i></a></td>
              <td><a href='../view/VendasList.php?id=$item->id'onclick='return confirm(\"Excluir?\")'
              ><i class='fa-solid fa-trash' style='color:red;'></i></a></td>
            </tr>";
      }
          ?>


        </tbody>
      </table>


    <br>

    <a href="../index.html" class="btn btn-dark"><i class="fa-solid fa-arrow-left"></i> Início</a>

    </div>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </body>
</html>