<h1>Adicione o seu item</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="adicionar">
    <div class="mb-3">
        <label>Nome do Produto</label>
        <input type="text" name="nome" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Adicionar</button>
    </div> 
</form>
<a class="btn btn-warning" href="?page=listar">Ir para a lista</a>
