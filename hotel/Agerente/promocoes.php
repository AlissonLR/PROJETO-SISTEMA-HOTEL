<h1>AREA DE PROMOÇÕES</h1>



<form action="./Agerente/Vprom.php" method="POST">
<h5>estrutura ou serviço que tera seu desconto atualizado:</h5>
<br>
<h5>estruturas</h5>
<input type="radio" name="es" value="quarto" />quarto
<br>
<input type="radio" name="es" value="salao" />salao
<br>
<input type="radio" name="es" value="" />nenhuma
<br>
<br>
<h5>serviços</h5>
<input type="radio" name="se" value="serviço de quarto" />serviço de quarto
<br>
<input type="radio" name="se" value="" />nenhum
<br>
<br>
<h5>valor do desconto de 0 a 100:</h5>
<label for="">valor do desconto:</label>
<input type="number" name="promocao">

<br>
<br>
<button>atualizar</button>
</form>