<?php
require_once 'headerDP.php';

?>

<script>getDpProfile()</script>
<h1 style="color: #A30000;"><b> Perfil Pessoal</b></h1>
<p><span id='normal'>Nome:</span> <span id='nameProfile'></p><img src="../imagens/perfil.jpeg" alt="Erro" class="merp" width="125px" height="100px">
<p><span id='normal'>Data de Nascimento: </span> <span id='dataProfile'></span></p>
<p><span id='normal'>Sexo: </span>  <span id='genderProfile'></span> </p>
<p><span id='normal'>NIF: </span>  <span id='nifProfile'></span></p>
<p><span id='normal'>Morada:</span>  <span id='adressProfile'></span></p>
<p><span id='normal'>Email: </span>  <span id='emailProfile'></span></p>
<p><span id='normal'>Nº Telefone: </span>  <span id='numberProfile'></span></p>
<p><span id='normal'>NºCC: </span>  <span id='ccProfile'></span></p>
<p><span id='normal'>Estado Civil: </span>  <span id='maritalStateProfile'></span></p>
<p><span id='normal'>Nacionalidade:</span>  <span id='nationalityProfile'></span></p>
<p><span id='normal'>Grupo Sanguineo: </span>  <span id='bloodGroupProfile'></span></p>
<input type="hidden" id='idDPProfile' value="<?=$_SESSION['idHealthProfessional']?>"/>
</div>
</div>
<?php
require_once '../footer.php';