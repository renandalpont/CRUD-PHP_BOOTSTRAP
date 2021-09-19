<?php 
  require_once('functions.php'); 
  add();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Novo Cliente</h2>

<form action="add.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="nome">Nome </label>
      <input type="text" class="form-control" name="pet['nome']">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Idade</label>
      <input type="text" class="form-control" name="pet['idade']">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Responsavel</label>
      <input type="text" class="form-control" name="pet['responsavel']">
    </div>
  </div>
  
  <div class="row">
    <div class="form-group col-md-8">
      <label for="campo1">Endereço</label>
      <input type="text" class="form-control" name="pet['endereco']">
    </div>

    <div class="form-group col-md-4">
      <label for="campo2">Telefone</label>
      <input type="number" class="form-control" name="pet['contato']">
    </div>
  </div>

  <div class="row">
    <div class="form-group col-md-12">
      <label for="campo2">Observacao</label>
      <textarea class="form-control" row="3" name="pet['obs']"></textarea>
    </div>
  </div>
    <!-- <div class="form-group col-md-2">
      <label for="campo3">CEP</label>
      <input type="textarea" row="3" class="form-control" name="pet['obs']">
    </div> -->
    
    <!-- <div class="form-group col-md-2">
      <label for="campo3">Data de Cadastro</label>
      <input type="text" class="form-control" name="customer['created']" disabled>
    </div>
  </div> 

  
  <div class="row">
    <div class="form-group col-md-3">
      <label for="campo1">Município</label>
      <input type="text" class="form-control" name="customer['city']">
    </div>
    
    <div class="form-group col-md-2">
      <label for="campo2">Telefone</label>
      <input type="text" class="form-control" name="customer['phone']">
    </div>
    
    <div class="form-group col-md-2">
      <label for="campo3">Celular</label>
      <input type="text" class="form-control" name="customer['mobile']">
    </div>
    
    <div class="form-group col-md-1">
      <label for="campo3">UF</label>
      <input type="text" class="form-control" name="customer['state']">
    </div>
    
    <div class="form-group col-md-2">
      <label for="campo3">Inscrição Estadual</label>
      <input type="text" class="form-control" name="customer['ie']">
    </div>
    
    <div class="form-group col-md-2">
      <label for="campo3">UF</label>
      <input type="text" class="form-control">
    </div>
  </div> -->
  
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>