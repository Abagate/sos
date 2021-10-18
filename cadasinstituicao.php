<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/estilo2.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    <title>SOS Patinhas</title>
  </head>
  <body>
    
    <div class="content">

      <div class="geral">
      <div id="topo">
          
          <div id="logo">
              <img src="img/logo_sos.png" width="150" height="105"/>
          </div>
  
          <div id="menu">
              <a href="index.html">HOME</a>
              <a href="cadastro.html">CADASTRO</a>
              <a href="login.html">LOGIN</a></li>
          </div>
      
      </div>

      <!--CORPO-->
      <!--CODIGO MORTO-->
      <div class="login-page">
        <div class="form">
          <form class="register-form">
            <input type="text" placeholder="Nome"/>
            <input type="password" placeholder="Telefone"/>
            <input type="text" placeholder="CNPJ"/>
            <label for="exampleDataList" class="form-label"></label>
              <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Escolha um Estado">
              <datalist id="datalistOptions">
                <option value="AC">
                <option value="AL">
                <option value="AP">
                <option value="AM">
                <option value="BA">
                <option value="CE">
                <option value="DF">
                <option value="ES">
                <option value="GO">
                <option value="MA">
                <option value="MT">
                <option value="MS">
                <option value="MG">
                <option value="PA">
                <option value="PB">
                <option value="PR">
                <option value="PE">
                <option value="PI">
                <option value="RJ">
                <option value="RN">
                <option value="RS">
                <option value="RO">
                <option value="RR">
                <option value="RR">
                <option value="SC">
                <option value="SP">
                <option value="SE">
                <option value="TO">
              </datalist>
              <label for="exampleDataList" class="form-label"></label>
              <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Escolha uma Cidade">
              <datalist id="datalistOptions">
                <option value="Nilópolis">
                <option value="Nova Iguaçu">
                <option value="Santos">
                <option value="Uberlandia">
                <option value="Açailandia">
                <option value="São Vincente">
                <option value="Pindamonhangaba">
                <option value="Paciência">
                <option value="Praia Grande">
                <option value="Bandeira do Sul">
                <option value="Boqueirão">
                <option value="Colorado do Oeste">
              </datalist>
            <input type="text" placeholder="Rua"/>
            <input type="text" placeholder="Email"/>
            <input type="password" id= "senha" placeholder="Senha"/>
            <input type="file" id="arquivo"/>
            <button>cadastrar</button>
            <p class="message">Já cadastrado?<a href="#"> Entre aqui!</a></p>
          </form>

          <!--FIM DO CODIGO MORTO-->
        
          <form class="login-form">
            <a href= "cadastro.html"><i class="bi bi-arrow-left-square-fill" style="position:absolute; left: 12px; top: 2px; font-size: 3rem; color: #804d00;" ></a></i>
            <input type="text" placeholder="Nome"/>
            <input type="password" placeholder="Telefone"/>
            <input type="text" placeholder="CNPJ"/>
            <label for="exampleDataList" class="form-label"></label>
              <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Escolha um Estado">
              <datalist id="datalistOptions">
                <option value="AC">
                <option value="AL">
                <option value="AP">
                <option value="AM">
                <option value="BA">
                <option value="CE">
                <option value="DF">
                <option value="ES">
                <option value="GO">
                <option value="MA">
                <option value="MT">
                <option value="MS">
                <option value="MG">
                <option value="PA">
                <option value="PB">
                <option value="PR">
                <option value="PE">
                <option value="PI">
                <option value="RJ">
                <option value="RN">
                <option value="RS">
                <option value="RO">
                <option value="RR">
                <option value="RR">
                <option value="SC">
                <option value="SP">
                <option value="SE">
                <option value="TO">
              </datalist>
              <label for="exampleDataList" class="form-label"></label>
              <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Escolha uma Cidade">
              <datalist id="datalistOptions">
                <option value="Nilópolis">
                <option value="Nova Iguaçu">
                <option value="Santos">
                <option value="Uberlandia">
                <option value="Açailandia">
                <option value="São Vincente">
                <option value="Pindamonhangaba">
                <option value="Paciência">
                <option value="Praia Grande">
                <option value="Bandeira do Sul">
                <option value="Boqueirão">
                <option value="Colorado do Oeste">
              </datalist>

            <input type="text" placeholder="Rua"/>
            <input type="text" placeholder="Email"/>
            <input type="password" id= "senha" placeholder="Senha"/>
            <input type="file" id="arquivo"/>
            <button>cadastrar</button>
            <p class="message">Já é cadastrado? <a href="instituicao.php"> Entre aqui!</a></p>
          </form>
        </div>
      </div>

      <!--PHP-->

      <?php 
 
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $cnpj = $_POST['cnpj'];
        $rua = $_POST['rua'];
        $estado = $_POST['estado'];
        $cidade = $_POST['cidade'];
        $email = $_POST['email'];
        $img = $_POST['imagem'];
        $senha = MD5($_POST['senha']);
        $connect = mysql_connect('localhost','root','');
        $db = mysql_select_db('sospatinhas');
        $query_select = "SELECT email FROM instituicao WHERE email = '$email'";
        $select = mysql_query($query_select,$connect);
        $array = mysql_fetch_array($select);
        $logarray = $array['login'];
        
          if($email == "" || $email == null){
            echo"<script language='javascript' type='text/javascript'>alert('O campo email deve ser preenchido');window.location.href='cadastro.html';</script>";
        
            }else{
              if($logarray == $email){
        
                echo"<script language='javascript' type='text/javascript'>alert('Esse email já existe');window.location.href='cadastro.html';</script>";
                die();
        
              }else{
                $query = "INSERT INTO instituicao (email,senha) VALUES ('$email','$senha')";
                $insert = mysql_query($query,$connect);
                
                if($insert){
                  echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='login.html'</script>";
                }else{
                  echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.html'</script>";
                }
              }
            }
      ?>

      <!--RODAPÉ-->

      <footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h2 class="logo"><img src="img/logo_sos.png" width="150" height="105"></h2>
                </div>
                <div class="col-sm-2">
                    <h5>Quer um amigo?</h5>
                    <ul>
                        <li><a href="#">Por que adotar?</a></li>
                        <li><a href="#">Procure seu amigo</a></li>
                        <li><a href="#">Adoção responsável</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Insituições</h5>
                    <ul>
                        <li><a href="#">Associações</a></li>
                        <li><a href="#">Quero ajudar</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Quem somos?</h5>
                    <ul>
                        <li><a href="#">Sobre nós</a></li>
                        <li><a href="#">Fale conosco</a></li>
                        <li><a href="#">Perguntas frequentes</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <div class="social-networks">
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.instagram.com/sos_patinhas_ofc/" class="instagram"><i class="fa fa-instagram"></i></a>
                    </div>
                    <a href="#">
                        <button type="button" class="btn btn-default">Contato</button>
                    </a>
                </div>
            </div>
        </div>
    </footer>

        <script>
               
          </script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!--Java sem ser do Bootstrap!-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>