<h4>Editar Categoria</h4>

<form action="" method="post">
    <label for="name">Nome</label>
    <input value="<?php echo $data['name'] ?>" id="name" name="name" type="text" class="form-control">

    <label for="description">Descrição</label>
    <textarea id="description" name="description" type="text" class="form-control"><?php echo $data['description'] ?></textarea>
    
    <button class="btn btn-primary">Atualizar</button>
</form>