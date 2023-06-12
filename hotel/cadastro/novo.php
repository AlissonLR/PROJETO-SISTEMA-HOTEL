<h1>novo hospede</h1>

<a href='?page=listar'>HOME</a>

<form action="?page=salvar" method="POST">

<label for="">acao</label>
<input type="hidden" name="acao" value="cadastrar">

<div class="mb-3">
<label for="" class="">Nome</label>
<input type="text" class ="form-control"name="nome">
</div>

<div class="mb-3">
<label for="">cpf</label>
<input type="text"class ="form-control" name="cpf"placeholder="000.000.000-00">
</div>

<div class="mb-3">
<label for="">Numero</label>
<input type="text" class ="form-control"name="numero">
</div>

<div class="mb-3">
<label for="">Email</label>
<input type="E-mail" class ="form-control"name="email"
placeholder="exemplo@gmail.com">
</div>

<div class="mb-3">
<label for="">Usuario</label>
<input type="text" class ="form-control"name="usuario">
</div>

<div class="mb-3">
<label for="">senha</label>
<input type="text" class ="form-control" name="senha">
</div>

<div class="mb-3">
<button class ="btn btn-primary" >Cadastrar</button>
</div>
</form>