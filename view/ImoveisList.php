<?php 
include "../controller/ImoveisController.php";

$imovel = new ImoveisController();

  if(!empty($_GET['id'])){
    $imovel->deletar($_GET['id']);
    header("location: ImoveisList.php");
  }
  if(!empty($_POST)){
    $load = $imovel->pesquisar($_POST);

  }else{
    $load = $imovel->carregar();

  }
 
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de Imóveis</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
    <h1>Imóveis Disponíveis</h1>
    <form action="ImoveisList.php" method="post">
      <div class="row">
        <div class="col-3">
          <select name="campo" class="form-select">
          <option value="id">Código do imóvel</option>
            <option value="nome">Nome</option>
            <option value="qtd_pessoas">Quantidade de pessoas</option>
            <option value="tam_imovel">Tamanho em m³</option>
            <option value="qtd_quartos">Quantidade de Quartos/suítes</option>
            <option value="qtd_lavabos">Quantidade de Lavabos</option>
            <option value="qtd_banheiros">Quantidade de Banheiros</option>
          </select>
        </div>
        <div class="col-4">
          <input type="text" class="form-control" placeholder="Pesquisar" name="valor" />
        </div>
        <br>
        <div class="col-6">
        <br>
          <button class="btn btn-dark" type="submit">
            <i class="fa-solid fa-magnifying-glass"></i> Buscar
          </button>
          <a class="btn btn-danger" href="ImoveisForm.php"><i class="fa-solid fa-plus"></i> Cadastrar</a>
        </div>
      </div>
    </form>
      <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th scope="col">ID Imóvel</th>
          <th scope="col">Nome</th>
          <th scope="col">N° Pessoas</th>
          <th scope="col">Tamanho (m³)</th>
          <th scope="col">N° Quartos</th>
          <th scope="col">N° Lavabos</th>
          <th scope="col">N° Banheiros</th>
          <th scope="col">Sobre</th>


          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
      <?php 
      foreach($load as $item){
        echo"<tr>
              <td scope='row'>$item->id</td>
              <td>$item->nome</td>
              <td>$item->qtd_pessoas</td>
              <td>$item->tam_imovel</td>
              <td>$item->qtd_quartos</td>
              <td>$item->qtd_lavabos</td>
              <td>$item->qtd_banheiros</td>
              <td>$item->descricao_imovel</td>


              <td><a href='../view/ImoveisForm.php?id=$item->id'><i class='fa-solid fa-pen-to-square' style='color:grey;'></i></a></td>
              <td><a href='../view/ImoveisList.php?id=$item->id' onclick='return confirm(\"Excluir?\")'><i class='fa-solid fa-trash' style='color:red;'></i></a></td>
            </tr>";
      }
          ?>
        </tbody>

    


    </table>
    </div>
    <div class="container">
    <div class="col-6">
    <br>
    <button class="btn btn-link"  type="button">
    <a href="../view/VendasForm.php" class="btn btn-danger"><i class="fa-solid fa-arrow-left"></i> Voltar </a>
    </div>


    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>