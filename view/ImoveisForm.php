<?php
include_once "../controller/ImoveisController.php";

$imovel = new ImoveisController();

  if(!empty($_POST['id'])){
    $imovel->update($_POST);
    header("location: ImoveisForm.php");

  } elseif(!empty($_POST)) {
    $imovel->salvar($_POST);
    header("location: ImoveisForm.php");

  }

  if(!empty($_GET['id'])){
    $data = $imovel->buscar($_GET['id']);
  }
  ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Novo Imóvel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  <body>
  
  <div class="container">
    <br>
      <h1>CADASTRAR IMÓVEL</h1>
        <form action="ImoveisForm.php" method="POST">
            <input type="hidden" name="id" value="<?php echo !empty($data->id) ? $data->id : "" ?>"/><br>

            
            <div class="col-">
              <label class="form-label">Nome</label><br>
              <input type="text" class="form-control" name="nome" value="<?php echo !empty($data->nome) ? $data->nome : "" ?>"/><br>
            </div>
           
            <div class="col-">
             <label class="form-label">Capacidade de Pessoas</label><br>
             <input type="num" class="form-control" name="qtd_pessoas" value="<?php echo !empty($data->qtd_pessoas) ? $data->qtd_pessoas : "" ?>"/><br>
            </div>

            <div class="col-">
             <label class="form-label">Tamanho Imóvel (m³)</label><br>
             <input type="text" class="form-control" name="tam_imovel" value="<?php echo !empty($data->tam_imovel) ? $data->tam_imovel : "" ?>"/><br>
            </div>

            <div class="col-">
             <label class="form-label">Quantidade de Quartos/Suítes</label><br>
             <input type="text" class="form-control" name="qtd_quartos" value="<?php echo !empty($data->qtd_quartos) ? $data->qtd_quartos : "" ?>"/><br>
            </div>

            <div class="col-">
             <label class="form-label">Quantidade de Lavabos</label><br>
             <input type="text"  class="form-control" name="qtd_lavabos" value="<?php echo !empty($data->qtd_lavabos) ? $data->qtd_lavabos : "" ?>"/><br>
            </div>

            <div class="col-">
             <label class="form-label">Quantidade de Banheiros</label><br>
             <input type="text"  class="form-control" name="qtd_banheiros" value="<?php echo !empty($data->qtd_banheiros) ? $data->qtd_banheiros : "" ?>"/><br>
            </div>


            <div class="col-">
             <label class="form-label">Descrição do Imóvel </label><br>
             <input type="text" class="form-control" name="descricao_imovel" value="<?php echo !empty($data->descricao_imovel) ? $data->descricao_imovel : "" ?>"/><br>
            </div>

            <a href="./VendasForm.php" class="btn btn-dark"><i class="fa-solid fa-arrow-left"></i> Voltar</a>
            <a href="./ImoveisList.php" class="btn btn-grey"></i> Visualizar Imóveis</a>
            <button class="btn btn-danger" type="submit"><i class="fa-solid fa-save"></i> Salvar</button>
           
            

        </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>