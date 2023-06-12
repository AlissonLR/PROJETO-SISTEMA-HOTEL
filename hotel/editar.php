<h2> ÀREA DE EDITAR</h2>

<form action="?page=salvar" method="POST">

<input type="radio" name="funcionario" value="hospede" />hospede 
<br>
<input type="radio" name="funcionario" value="gerente" />gerente
<br>
<input type="radio" name="funcionario" value="recepcionista" />recepcionista
<br>



<div>
    <input type="hidden" name="acao"value="editar">
<label for="">NOME</label>
<br>
<input type="text" name="nome">
<br>

<label for="">SOBRENOME</label>
<br>
<input type="text" name="sobrenome">
<br>
<label for="">CPF</label>
<br>
<input type="text" name="cpf">
<br>
<label for="">USUARIO</label>
<br>
<input type="text" name="usuario">
<br>
<label for="">SENHA</label>
<br>
<input type="text" name="senha">
<br>
<label for="">EMAIL</label>
<br>
<input type="text" name="email">
<br>
<label for="">NUMERO</label>
<br>
<input type="text" name="numero">
<br>
</div>

<button>enviar</button>

</form>
