<?php 
        require_once('conexao.php');
        
        if(isset($_POST['enviar'])){
          $erros = array();
          $cod = $_POST['cod'];
          $nome = $_POST['nome'];
          $entrada = $_POST['ent'];
          $saida = $_POST['said'];

          if(empty($cod) or empty($nome) or empty($entrada) or empty($saida)){
              $erros[] = "Preencha os dados";
          }else{
            $sql = "INSERT INTO produtos (codigo,nome,entrada,saida) VALUES ('$cod','$nome','$entrada','$saida')";
            $sql_result = mysqli_query($con,$sql);

            if($sql_result){
              echo "<script>alert('Cadastrado com sucesso!');location.href='index.php';</script>";
            }else{
              echo "Erro ao cadastrar produto! Tente novamente";
            }

          }

          if(!empty($erros)){
            foreach($erros as $erro){
              echo $erro;
            }
          }

        }
    
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar conta</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Script -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="icon" type="imagem/png" href="img/logo.png" />
    <!-- Font awesome-->
    <script src="https://kit.fontawesome.com/b8ba5b8e96.js" crossorigin="anonymous"></script>

    <style>
        td{
            border:1px solid silver;
            text-align:center;
        }
        .row{
            border:1px solid silver;
        }
        .col-3{
            background:#ccc;
            height:98vh;
        }
        .col-3 a{
            text-decoration:none;
            color:white;
            margin-top:20px;
        }
        .col-3 h2{
            margin-top:10px;   
        }
        .col-9{
            background: linear-gradient(0deg, rgba(253,255,253,0.9752275910364145) 0%, rgba(7,24,252,0.14889705882352944) 100%);
            height:98vh;
            padding:40px;
        }
        form{
          padding:15px;
          width:80%;
        }
    </style>
</head>
<body>
      <div class="container pt-1">
        <div class="row">
          <div class="col-3 pt-2">
          <div class="container-fluid pt-5">
          <h2>Cadastrar</h2>
            <hr>
            <button type="submit" class="btn btn-primary"> <a href="index.php">Lista de Produtos</a> </button>
          </div>  
          </div>
            <div class="col-9">
                  <form action="<?php echo $_SERVER['PHP_SELF'] ;?>" method="post">
                    <div class="form-group">
                      <label for="cod">Código</label>
                      <input class="form-control" type="number" name="cod">
                    </div>
                    <div class="form-group">
                      <label for="nome">Nome</label>
                      <input class="form-control" type="text" name="nome">
                    </div>
                    <div class="form-group">
                      <label for="entrada">Entrada</label>
                      <input class="form-control" type="number" name="ent">
                    </div>
                    <div class="form-group">
                      <label for="saida">Saída</label>
                      <input class="form-control" type="number" name="said">
                    </div>
                    <button type="submit" class="btn btn-primary" name="enviar"> Cadastrar </button>
                  </form>
            </div>
        </div>
      </div>
</body>
</html>