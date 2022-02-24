<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<?php

$dbHost = '';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'formulario_evelly';

$conexao = new mysqli($dbHost,$dbUsername, $dbPassword, $dbName);

/*if ($conexao->connect_errno)
{
   echo "Erro";
}
else{
    echo "Conexão efetuada com sucesso";
}*/
?>

<style>
     body{
         font-family: Arial, Helvetica, sans-serif;
         background-image: linear-gradient(to right,rgb(89, 0, 172), rgb(187, 28, 219));
     }
     .box{
         position: absolute;
         top: 50%;
         left: 50%;
         transform: translate(-50%,-50%);
         background-color: rgb(70, 1, 126);
         padding: 15px;
         border-radius: 15px;
         width: 20%;
         color: rgba(255, 255, 255, 0.856);
     }
     fieldset{
         border: 3px, solid, rgb(201, 204, 36);
     }
    legend{
        border: 1px, solid, yellow;
        padding: 10px;
        text-align: center;
        background-color: rgb(248, 95, 6);
        border-radius: 10px;
    }

   .inputBox{
       position: relative;
   }
   .inputUser{
       background: none;
       border: none;
       border-bottom: 1px solid white;
       outline: none;
       color: azure;
       font-size: 15px;
       width: 100%;
       letter-spacing: 2px;
   }
   #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
        }
</style>
<body>
    
   <div class = "box">
   
      <form action="formulario.php" method= "POST">
        <fieldset>
            <legend><b>Formulario de Clientes</b></legend>
            <br>
            <div class="inputBox">
                <input type="text" name="nome" id="nome" class="inputUser" required/>
                <label for="nome" class="labelInput">Nome Completo</label>
                <br>
                <br>
                <input type="e-mail" name="e-mail" id="e-mail" class="inputUser" required/>
            
                <label for="e-mail" class="labelInput">E-mail</label>
                <br>
                <br>
                <input type="telefone" name="telefone" id="telefone" class="inputUser" required/>
                <label for="telefone"class="labelInput">Telefone</label> 

            </div>
            <br>
               <p>Sexo:</p>
               <input type="radio" name="sexo" value="femenino" required/>
               <label for="sexo" class="labelInput">Femenino</label>
               <br>
               <input type="radio" name="sexo" value="masculino" required/>
               <label for="sexo" class="labelInput">Masculino</label>
               <br>
               <div class="inputBox">
                <br>
                <label for="data_nascimento" class="labelInput"><b>Data de Nascimento:</b</label>
                <input type="date" name="data_nascimento" id="data_nascimento"  required/>
                <br>
               </div>
               <div class="inputBox">
                <br>
                <input type="text" name="cidade" id="cidade" class="inputUser" required/>
                <label for="cidade" class="labelInput">Cidade</label>
                <br>
                <br>
                <input type="text" name="estado" id="estado" class="inputUser" required/>
                <label for="estado"class="labelInput">Estado</label>
                <br>
                <br>
                <input type="text" name="endereco" id="endereco" class="inputUser" required/>
                <label for="endereco" class="labelInput">Endereço</label>
                <br>
               </div>
               <br>
               <input type="submit" name="submit" id="submit"/>
        </fieldset>
      </form>

   </div>

</body>
</html>