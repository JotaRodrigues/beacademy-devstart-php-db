<h3>Cadastrar novo Produto</h3>

<form action="" method="post">
    <label for="category">Categoria</label>
    <select name="category" id="category" class="form-select">
        <option selected> -- Selecione -- </option>
        <?php
            while ($category = $data->fetch(\PDO::FETCH_ASSOC)){
                extract($category);
                echo "<option value='{$id}'>{$name}</option>";
            }    ?>
    </select>

    <label for="name">Nome</label>
    <input for="name" name="name" type="text" class="form-control mb-3">
    
    <label for="description">Descrição</label>
    <input for="description" name="description" type="text" class="form-control mb-3">
    
    <label for="value">Preço</label>
    <input for="value" name="value" type="text" class="form-control mb-3">
    
    <label for="quantity">Quantidade</label>
    <input for="quantity" name="quantity" type="text" class="form-control mb-3">
    
    <label for="photo">Foto</label>
    <input for="photo" name="photo" type="text" class="form-control mb-3">

    <button class="btn btn-primary mt-3">Cadastrar</button>
</form>