<?php
## formulario de cadastro de vendas contendo CODIGO (DE VENDA), ID_IMÓVEL, vALOR_NEGOCIO, ID_CLIENTE

include "../controller/VendasController.php";

$venda = new VendasController();

  if(!empty($_POST['id'])){
    $venda->update($_POST);
    header("location: VendasForm.php");

  } elseif(!empty($_POST)) 
  
  {
    $venda->salvar($_POST);
    header("location: VendasForm.php");

  }

  if(!empty($_GET['id']))
  {
    $data = $venda->buscar($_GET['id']);
  }

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administrador</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  <body>

  <div class="container">

      <div class>
        
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
  
  <h1>Página do Administrador</h1>

  <h2>Registro de venda</h2>

      <br>

        <form action="VendasForm.php" method="POST">
            <input type="hidden" name="id" value="<?php echo !empty($data->id) ? $data->id : "" ?>"/>
            <br>

            <div class="col-">
            <label class="form-label">ID Imóvel</label>
            <br>
            <input type="text" class="form-control" name="id_imovel" value="<?php echo !empty($data->id_imovel) ? $data->id_imovel: "" ?>"/>
            <br>
            </div>

          

            <div class="col-">
            <label class="form-label">Cliente</label><br>
            <input type="num" class="form-control" name="id_cliente" value="<?php echo !empty($data->id_cliente) ? $data->id_cliente : "" ?>"/>
            <br>
            </div>

            <div class="col-">
            <label class="form-label">Valor do Negócio (R$)</label><br>
            <input type="text" class="form-control" name="valor_negocio" value="<?php echo !empty($data->valor_negocio) ? $data->valor_negocio : "" ?>"/>
            <br>
            </div>


           

              
        <a href="../index.html" class="btn btn-dark">Voltar</a>

        <button class="btn btn-secondary" type="submit">
        <i class="fa-solid fa-save"></i> Salvar
        </button>

        <button class="btn btn-danger" type="submit">
        <i class="fa-solid fa-save"></i> Atualizar
        </button>

        </form>
  </div>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>

