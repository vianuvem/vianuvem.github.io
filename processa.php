<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Confirmação - Iscrição</title>
</head>
    <body>




        <?php
		$email = $_POST['email'];
		$empresa = $_POST['empresa'];
		$nome = $_POST['nome'];
		$sobrenome = $_POST['sobrenome'];
		$cargo = $_POST['cargo'];
		$telefone = $_POST['telefone'];
		$comoConheceu = $_POST['comoConheceu'];
		$associacao = $_POST['associacao'];
        $faixaIdade = $_POST['radio-stacked'];
        $dia5 = $_POST['dia5'];
		$dia6 = $_POST['dia6'];
		
        require 'vendor/autoload.php';



        $from = new SendGrid\Email(null, "pedidosmr@gmail.com");
        $subject = "Mensagem de contato";
        $to = new SendGrid\Email(null, "pedidosmr@gmail.com");
        $cadastro = new SendGrid\Content("text/html", "
        Nome: $nome  $sobrenome<br> 
        Empresa: $empresa <br>  
        Cargo: $cargo<br> 
        Telefone: $telefone <br>  
        Email: $email <br> 
        Como nos conheceu ? $comoConheceu          $associacao <br> 
        Faixa Idade : $faixaIdade <br> 
        Dia: $dia5         $dia6  ");
        $mail = new SendGrid\Mail($from, $subject, $to, $cadastro);
    


        
        //Necessário inserir a chave
        $apiKey = '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';
        $sg = new \SendGrid($apiKey);

        $response = $sg->client->mail()->send()->post($mail);
		
        ?>

  
<div id="header"></div>
<div class="overlay"></div>
  	<div class="popup">
	  <div class="wrapper">
      
      <div class="container">
          <div class="row">
              <h1  class="reserva">Efetuando sua reserva</h1>
            <img id="espere" src="https://komodotec.com/wp-content/uploads/2018/06/loading.gif">
          </div>
      </div>
   
  
	  </div>
  </div>
  <div id="footer"></div>


    <!-- Java Script -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous">
    </script>


<script>
 
$(document).ready(function() {
    $("#header").load("header.html");
    $("#footer").load("footer.html");
    $(".overlay").show();
    $(".popup").show();
    setTimeout(function(){
        $('.reserva').text('Reserva feita com Sucesso');
        $("#espere").attr("src", "");
        setTimeout(function(){
        location.href = "index.html"
},2000);
       
},2000);
});

</script>


    </body>
</html>
