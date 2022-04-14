<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
<title>Cadastro - MYSQLI</title>

<style>
    body{
        background-color: #E8E7EC;
    }
</style>



</head>
<body>
<p>
    <a href="principal.php" class="w3-display-topleft">
     <i class="fa fa-arrow-circle-left w3-large w3-teal w3-button w3-
    xxlarge"></i>
    </a>
</p>
<br><br>
<div class="  w3-padding  w3-middle ">
 <h1 class="w3-center w3-teal w3-round-large w3-
margin">Cadastro de Munícipes</h1>
 <form action="cadastroAction.php" class="w3-container" method='post'>
 <label class="w3-text-teal" style="font-weight: bold;">Cad Cras</label>
 <input name="txtcad" class="w3-input w3-grey w3-
border" disabled><br>
 <label class="w3-text-teal" style="font-weight: bold;">Nome</label>
 <input name="txtnome" class="w3-input w3-light-grey w3-
border"><br>
 <label class="w3-text-teal" style="font-weight: bold;">Data de Nascimento</label>
 <input name="txtnascimento" class="w3-input w3-light-grey w3-
border"><br>
<label class="w3-text-teal" style="font-weight: bold;">Nome da Mãe</label>
 <input name="txtmae" class="w3-input w3-light-grey w3-
border"><br>
<label class="w3-text-teal" style="font-weight: bold;">NIS</label>
 <input name="txtnis" class="w3-input w3-light-grey w3-
border"><br>
<label class="w3-text-teal" style="font-weight: bold;">CPF</label>
 <input name="txtcpf" class="w3-input w3-light-grey w3-
border"><br>
 <button name="btnAdicionar" class="w3-button w3-teal w3-cell w3-
round-large w3-right w3-margin-right">
 <i class="w3-xxlarge fa fa-user-plus"></i> Adicionar
 </button>
 </form>
</div>
</body>
</html>