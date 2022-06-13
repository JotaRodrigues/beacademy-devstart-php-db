<h2 style="text-align:center;">Lista de Categorias</h2>

<div class="text-end mt-5">
    <a href="/categorias/novo" class="btn btn-outline-primary">Nova Categoria</a>
</div>

<table class="table table-hover table-striped mt-3">
    <thead class="table-dark">
        <tr>
            <th>#ID</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th style="text-align:center;">Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while($category = $data->fetch(\PDO::FETCH_ASSOC)){
            extract($category);

            echo '<tr>';
                echo "<td>{$id}</td>";
                echo "<td>{$name}</td>";
                echo "<td>{$description}</td>";
                echo "<td style='text-align:center;'>
                <a href='/categorias/editar?id={$id}' class='btn btn-warning btn-sm'>Editar</a>
                <a href='/categorias/excluir?id={$id}' class='btn btn-danger btn-sm'>Excluir</a>
                </td>";
            echo '</tr>';
        }
        ?>
    </tbody>
</table>