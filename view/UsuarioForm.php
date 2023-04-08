<?php 

include_once "../controller/UsuarioController.php";
$usuario = new UsuarioController();

  if(!empty($_POST['id'])){
    $usuario->update($_POST);
    header("location: UsuarioForm.php");

  } elseif(!empty($_POST)) {
    $usuario->salvar($_POST);
    header("location: UsuarioForm.php");

  }

  if(!empty($_GET['id'])){
    $data = $usuario->buscar($_GET['id']);
  }

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Página do Usuário</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  <body>

  
    <div class="container">
      <br>

      <h1>Cadastre-se! </h1>
      <br>

        <form action="UsuarioForm.php" method="POST">
            <input type="hidden" name="id" value="<?php echo !empty($data->id) ? $data->id : "" ?>"/>
            <br>

            <div class="col-3">
            <label class="form-label">Nome do Cliente</label><br>
            <input type="text" class="form-control" name="nome" value="<?php echo !empty($data->nome) ? $data->nome : "" ?>"/>
            <br>
            </div>

            <div class="col-3">
            <label class="form-label">Telefone</label><br>
            <input type="text" class="form-control" name="telefone" value="<?php echo !empty($data->telefone) ? $data->telefone: "" ?>"/>
            <br>
            </div>

            <div class="col-3">
            <label class="form-label">CPF</label><br>
            <input type="text" class="form-control" name="cpf" value="<?php echo !empty($data->cpf) ? $data->cpf : "" ?>"/>
            <br>
            </div>



              
        <a href="../index.html" class="btn btn-dark"><i class="fa-solid fa-arrow-left"></i> Navegar</a>
        <a href="UsuarioList.php" class="btn btn-grey"> Listar Clientes</a>

        <button class="btn btn-danger" type="submit">
        <i class="fa-solid fa-save"></i> Salvar
        </button>

        </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>
