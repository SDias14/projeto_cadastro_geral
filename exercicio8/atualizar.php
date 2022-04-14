<?php require_once ('cabecalho.php'); ?>
<a href="principal.php" class="w3-display-topleft">
 <i class="fa fa-arrow-circle-left w3-large w3-teal w3-button w3-
xxlarge"></i>
</a>
<div class="w3-padding w3-content w3-text-grey w3-third w3-margin w3-displaymiddle">
 <h1 class="w3-center w3-teal w3-round-large w3-
margin">Atualizar - ID: <?php echo " ".$_GET['id']?> </h1>
<form action="atualizarAction.php" class="w3-container" method='post'>

 <input name="txtid" class="w3-input w3-grey w3-
border" type="hidden" value="<?php echo $_GET['id']?>">
 <br>
 <label class="w3-text-teal" style="font-weight: bold;">Nome</label>
 <input name="txtnome" class="w3-input w3-light-grey w3-
border" value="<?php echo $_GET['nome']?>">
 <br>
 <label class="w3-text-teal" style="font-weight: bold;">Disciplina</label>
 <input name="txtdisciplina" class="w3-input w3-light-grey w3-
border" value="<?php echo $_GET['disciplina']?>">
 <br>
 <button name="btnAtualizar" class="w3-button w3-teal w3-cell w3-roundlarge w3-right">
 <i class="w3-xxlarge fa fa-refresh"></i> Atualizar
 </button>
 </form>
</div>
</body>
</html>