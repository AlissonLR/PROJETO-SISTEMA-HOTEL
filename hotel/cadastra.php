
<?php 


echo"
<h2> ÀREA DE CADASTRO</h2>

<form action='?page=salvar' method='POST'>

<input type='radio' name='funcionario' value='hospede' />hospede 
<br>
<input type='radio' name='funcionario' value='gerente' />gerente
<br>
<input type='radio' name='funcionario' value='recepcionista' />recepcionista
<br>



<div>
    <input type='hidden' name='acao'value='cadastrar'>
<label >NOME</label>
<br>
<input type='text' name='nome'>
<br>

<label >SOBRENOME</label>
<br>
<input type='text' name='sobrenome'>
<br>
<label >CPF</label>
<br>
<input type='text' name='cpf'>
<br>
<label >USUARIO</label>
<br>
<input type='text' name='usuario'>
<br>
<label >SENHA</label>
<br>
<input type='text' name='senha'>
<br>



<input type='hidden' name='supervisor' value='{$_SESSION['nome']}'>

</div>

<button>enviar</button>

</form>";
?>