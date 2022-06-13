<h3>Editar Produto</h3>

<?php
    extract($data);
?>

<form action="" method="post">
    <label for="name">Nome</label>
    <input value="<?php echo $product['name']; ?>" for="name" name="name" type="text" class="form-control mb-3">
    
    <label for="description">Descrição</label>
    <textarea for="description" name="description" type="text" class="form-control mb-3"><?php echo $product['description']; ?></textarea>
    
    <label for="value">Preço</label>
    <input  for="value" name="value" value="<?php echo $product['value']; ?>" type="text" class="form-control mb-3">
    
    <label for="quantity">Quantidade</label>
    <input for="quantity" name="quantity" value="<?php echo $product['quantity']; ?>" type="text" class="form-control mb-3">
    
    <label for="photo">Foto</label>
    <input for="photo" name="photo" value="<?php echo $product['photo']; ?>" type="text" class="form-control mb-3">

    <button class="btn btn-primary mt-3">Atualizar</button>
</form>