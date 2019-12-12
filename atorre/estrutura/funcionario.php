<html>
<head>  
  <title>Dashboard</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="../css/formato.css"/>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>


    <!-- Navbar sair -->
    <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="navbar-form form-inline my-2 my-lg-0" action="logout.php" method="POST" enctype="multipart/form-data">
            <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Sair</button>
            </form>
          </div>
        </nav>
    <div class="container-fluid">
   
        
<!-- Cada card sera uma tabela  -->
<!-- Area de Atracao  -->
  <div class="container">
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="../img/adm.png" alt="Card image cap">
      <h5 class="card-title">Area de Atracao</h5>
          <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Tipo</th>
                  <th scope="col">Localização</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row"><?php include "exibir/exibir_area_atracao.php" ;while($aux = mysqli_fetch_assoc($sql)) 
                  { echo $aux["are_codigo"]."<br />"; } ?></th>
                  <td><?php include "exibir/exibir_area_atracao.php" ;while($aux = mysqli_fetch_assoc($sql)) 
                  { echo $aux["are_tipo"]."<br />"; } ?></td>
                  <td><?php include "exibir/exibir_area_atracao.php" ;while($aux = mysqli_fetch_assoc($sql)) 
                  { echo $aux["are_localizacao"]."<br />"; } ?></td>
                </tr>
              </tbody>
        </table>
              <script type="text/javascript" src="../js/bootstrap.min.js"></script>
              <script type="text/javascript" src="../js/jquery.js"></script>
    </div>
  </div>
<!-- Atracao  -->
<div class="container">
  <div class="card" style="width: 45rem;">
      <img class="card-img-top" src="../img/adm.png" alt="Card image cap" style="width: 18rem;">
      <h5 class="card-title">Atracao</h5>
          <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Empresa</th>
                  <th scope="col">Tipo</th>
                  <th scope="col">Convidado</th>
                  <th scope="col">Hora_inicio</th>
                  <th scope="col">Hora_fim</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row"><?php include "exibir/exibir_atracao.php" ;while($aux = mysqli_fetch_assoc($sql)) 
                  { echo $aux["atr_codigo"]."<br />"; } ?></th>
                  <td><?php include "exibir/exibir_atracao.php" ;while($aux = mysqli_fetch_assoc($sql)) 
                  { echo $aux["atr_nome"]."<br />"; } ?></td>
                  <td><?php include "exibir/exibir_atracao.php" ;while($aux = mysqli_fetch_assoc($sql)) 
                  { echo $aux["atr_empresa"]."<br />"; } ?></td>
                  <td><?php include "exibir/exibir_atracao.php" ;while($aux = mysqli_fetch_assoc($sql)) 
                  { echo $aux["atr_tipo"]."<br />"; } ?></td>
                  <td><?php include "exibir/exibir_atracao.php" ;while($aux = mysqli_fetch_assoc($sql)) 
                  { echo $aux["atr_convidado"]."<br />"; } ?></td>
                  <td><?php include "exibir/exibir_atracao.php" ;while($aux = mysqli_fetch_assoc($sql)) 
                  { echo $aux["atr_hora_inicio"]."<br />"; } ?></td>
                  <td><?php include "exibir/exibir_atracao.php" ;while($aux = mysqli_fetch_assoc($sql)) 
                  { echo $aux["atr_hora_fim"]."<br />"; } ?></td>
                </tr>
              </tbody>
        </table>
    </div>
</div>

<!-- Calendario -->
<div class="container">
  <div class="card" style="width: 35rem;">
      <img class="card-img-top" src="../img/adm.png" alt="Card image cap" style="width: 18rem;">
      <h5 class="card-title">Calendario</h5>
          <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Data inicio</th>
                  <th scope="col">Data fim</th>
                  <th scope="col">Hora abertura</th>
                  <th scope="col">Hora fechamentp</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row"><?php include "exibir/exibir_calendario.php" ;while($aux = mysqli_fetch_assoc($sql)) 
                  { echo $aux["cld_codigo"]."<br />"; } ?></th>
                  <td><?php include "exibir/exibir_calendario.php" ;while($aux = mysqli_fetch_assoc($sql)) 
                  { echo $aux["cld_data_inicio"]."<br />"; } ?></td>
                  <td><?php include "exibir/exibir_calendario.php" ;while($aux = mysqli_fetch_assoc($sql)) 
                  { echo $aux["cld_data_fim"]."<br />"; } ?></td>
                  <td><?php include "exibir/exibir_calendario.php" ;while($aux = mysqli_fetch_assoc($sql)) 
                  { echo $aux["cld_hora_abertura"]."<br />"; } ?></td>
                  <td><?php include "exibir/exibir_calendario.php" ;while($aux = mysqli_fetch_assoc($sql)) 
                  { echo $aux["cld_hora_fechamento"]."<br />"; } ?></td>
                </tr>
              </tbody>
        </table>
  </div>
</div>

<!-- Estande -->
<div class="container">
  <div class="card" style="width: 35rem;">
      <img class="card-img-top" src="../img/adm.png" alt="Card image cap" style="width: 18rem;">
      <h5 class="card-title">Estande</h5>
          <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Tipo</th>
                  <th scope="col">Valor</th>
                  <th scope="col"> Codigo Funcionario</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row"><?php include "exibir/exibir_estandes.php" ;while($aux = mysqli_fetch_assoc($sql)) 
                  { echo $aux["est_codigo"]."<br />"; } ?></th>
                  <td><?php include "exibir/exibir_estandes.php" ;while($aux = mysqli_fetch_assoc($sql)) 
                  { echo $aux["est_nome"]."<br />"; } ?></td>
                  <td><?php include "exibir/exibir_estandes.php" ;while($aux = mysqli_fetch_assoc($sql)) 
                  { echo $aux["est_tipo"]."<br />"; } ?></td>
                  <td><?php include "exibir/exibir_estandes.php" ;while($aux = mysqli_fetch_assoc($sql)) 
                  { echo $aux["est_valor"]."<br />"; } ?></td>
                  <td><?php include "exibir/exibir_estandes.php" ;while($aux = mysqli_fetch_assoc($sql)) 
                  { echo $aux["fun_codigo"]."<br />"; } ?></td>
                </tr>
              </tbody>
        </table>
    </div>
</div>

<!-- Evento -->
<div class="container">
  <div class="card" style="width: 35rem;">
      <img class="card-img-top" src="../img/adm.png" alt="Card image cap" style="width: 18rem;">
      <h5 class="card-title">Evento</h5>
          <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">#calendario codigo</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Endereco</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row"><?php include "exibir/exibir_eventos.php" ;while($aux = mysqli_fetch_assoc($sql)) 
                  { echo $aux["evt_codigo"]."<br />"; } ?></th>
                  <td><?php include "exibir/exibir_eventos.php" ;while($aux = mysqli_fetch_assoc($sql)) 
                  { echo $aux["cld_codigo"]."<br />"; } ?></td>
                  <td><?php include "exibir/exibir_eventos.php" ;while($aux = mysqli_fetch_assoc($sql)) 
                  { echo $aux["evt_nome"]."<br />"; } ?></td>
                  <td><?php include "exibir/exibir_eventos.php" ;while($aux = mysqli_fetch_assoc($sql)) 
                  { echo $aux["evt_endereco"]."<br />"; } ?></td>
                </tr>
                </tr>
              </tbody>
        </table>
    </div>
</div>

<!-- funcionario  -->
<div class="container">
  <div class="card" style="width: 40rem;">
      <img class="card-img-top" src="../img/adm.png" alt="Card image cap" style="width: 18rem;">
      <h5 class="card-title">Funcionários</h5>
          <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nome</th>
                  <th scope="col">RG</th>
                  <th scope="col">CPF</th>
                  <th scope="col">Endereço</th>
                  <th scope="col">Nível</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row"><?php include "exibir/exibir_funcionario.php" ;while($aux = mysqli_fetch_assoc($sql)) 
                  { echo $aux["fun_codigo"]."<br />"; } ?></th>
                  <td><?php include "exibir/exibir_funcionario.php" ;while($aux = mysqli_fetch_assoc($sql)) 
                  { echo $aux["fun_nome"]."<br />"; } ?></td>
                  <td><?php include "exibir/exibir_funcionario.php" ;while($aux = mysqli_fetch_assoc($sql)) 
                  { echo $aux["fun_rg"]."<br />"; } ?></td>
                  <td><?php include "exibir/exibir_funcionario.php" ;while($aux = mysqli_fetch_assoc($sql)) 
                  { echo $aux["fun_cpf"]."<br />"; } ?></td>
                  <td><?php include "exibir/exibir_funcionario.php" ;while($aux = mysqli_fetch_assoc($sql)) 
                  { echo $aux["fun_endereco"]."<br />"; } ?></td>
                  <td><?php include "exibir/exibir_funcionario.php" ;while($aux = mysqli_fetch_assoc($sql)) 
                  { echo $aux["fun_nivel"]."<br />"; } ?></td>
                </tr>
              </tbody>
        </table>
            <div class="card-body"> 
                    
            </div>
                </div>
              </div>
              <script type="text/javascript" src="../js/bootstrap.min.js"></script>
              <script type="text/javascript" src="../js/jquery.js"></script>
              </div>
            </div>
          </div>
          </div>

<!-- Parceiros -->
<div class="container">
  <div class="card" style="width: 35rem;">
      <img class="card-img-top" src="../img/adm.png" alt="Card image cap" style="width: 18rem;">
      <h5 class="card-title">Parceiros</h5>
          <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Empresa</th>
                  <th scope="col">Cnpj</th>
                  <th scope="col">Contribuicao</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row"><?php include "exibir/exibir_parceiros.php" ;while($aux = mysqli_fetch_assoc($sql)) 
                  { echo $aux["pcr_codigo"]."<br />"; } ?></th>
                  <td><?php include "exibir/exibir_parceiros.php" ;while($aux = mysqli_fetch_assoc($sql)) 
                  { echo $aux["pcr_nome"]."<br />"; } ?></td>
                  <td><?php include "exibir/exibir_parceiros.php" ;while($aux = mysqli_fetch_assoc($sql)) 
                  { echo $aux["pcr_empresa"]."<br />"; } ?></td>
                  <td><?php include "exibir/exibir_parceiros.php" ;while($aux = mysqli_fetch_assoc($sql)) 
                  { echo $aux["pcr_cnpj"]."<br />"; } ?></td>
                  <td><?php include "exibir/exibir_parceiros.php" ;while($aux = mysqli_fetch_assoc($sql)) 
                  { echo $aux["pcr_contribuicao"]."<br />"; } ?></td>
                </tr>
              </tbody>
        </table>
    </div>
</div>

 <!-- Participantes -->
<div class="container">
  <div class="card" style="width: 48rem;">
      <img class="card-img-top" src="../img/adm.png" alt="Card image cap" style="width: 18rem;">
      <h5 class="card-title">Participantes</h5>
          <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Rg</th>
                  <th scope="col">Cpf</th>
                  <th scope="col">Cidade</th>
                  <th scope="col">Telefone</th>
                  <th scope="col">Email</th>
                  <th scope="col">#Codigo Evento</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row"><?php include "exibir/exibir_participantes.php" ;while($aux = mysqli_fetch_assoc($sql)) 
                  { echo $aux["par_codigo"]."<br />"; } ?></th>
                  <td><?php include "exibir/exibir_participantes.php" ;while($aux = mysqli_fetch_assoc($sql)) 
                  { echo $aux["par_nome"]."<br />"; } ?></td>
                  <td><?php include "exibir/exibir_participantes.php" ;while($aux = mysqli_fetch_assoc($sql)) 
                  { echo $aux["par_rg"]."<br />"; } ?></td>
                  <td><?php include "exibir/exibir_participantes.php" ;while($aux = mysqli_fetch_assoc($sql)) 
                  { echo $aux["par_cpf"]."<br />"; } ?></td>
                  <td><?php include "exibir/exibir_participantes.php" ;while($aux = mysqli_fetch_assoc($sql)) 
                  { echo $aux["par_cidade"]."<br />"; } ?></td>
                  <td><?php include "exibir/exibir_participantes.php" ;while($aux = mysqli_fetch_assoc($sql)) 
                  { echo $aux["par_telefone"]."<br />"; } ?></td>
                  <td><?php include "exibir/exibir_participantes.php" ;while($aux = mysqli_fetch_assoc($sql)) 
                  { echo $aux["par_email"]."<br />"; } ?></td>
                  <td><?php include "exibir/exibir_participantes.php" ;while($aux = mysqli_fetch_assoc($sql)) 
                  { echo $aux["evt_codigo"]."<br />"; } ?></td>
                </tr>
              </tbody>
        </table>
    </div>
</div>

<!-- Patrocionadores -->
<div class="container">
  <div class="card" style="width: 45rem;">
      <img class="card-img-top" src="../img/adm.png" alt="Card image cap" style="width: 18rem;">
      <h5 class="card-title">Patrocionadores</h5>
          <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Empresa</th>
                  <th scope="col">Marca</th>
                  <th scope="col">Cnpj</th>
                  <th scope="col">Nivel</th>
                  <th scope="col">#Codigo Evento</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row"><?php include "exibir/exibir_patrocinadores.php" ;while($aux = mysqli_fetch_assoc($sql)) 
                  { echo $aux["pat_codigo"]."<br />"; } ?></th>
                  <td><?php include "exibir/exibir_patrocinadores.php" ;while($aux = mysqli_fetch_assoc($sql)) 
                  { echo $aux["pat_nome"]."<br />"; } ?></td>
                  <td><?php include "exibir/exibir_patrocinadores.php" ;while($aux = mysqli_fetch_assoc($sql)) 
                  { echo $aux["pat_empresa"]."<br />"; } ?></td>
                  <td><?php include "exibir/exibir_patrocinadores.php" ;while($aux = mysqli_fetch_assoc($sql)) 
                  { echo $aux["pat_marca"]."<br />"; } ?></td>
                  <td><?php include "exibir/exibir_patrocinadores.php" ;while($aux = mysqli_fetch_assoc($sql)) 
                  { echo $aux["pat_cnpj"]."<br />"; } ?></td>
                  <td><?php include "exibir/exibir_patrocinadores.php" ;while($aux = mysqli_fetch_assoc($sql)) 
                  { echo $aux["pat_nivel"]."<br />"; } ?></td>
                  <td><?php include "exibir/exibir_patrocinadores.php" ;while($aux = mysqli_fetch_assoc($sql)) 
                  { echo $aux["evt_codigo"]."<br />"; } ?></td>
                </tr>
              </tbody>
        </table>
    </div>
</div>


<!-- Setor -->
<div class="container">
  <div class="card" style="width: 45rem;">
      <img class="card-img-top" src="../img/adm.png" alt="Card image cap" style="width: 18rem;">
      <h5 class="card-title">@Setor</h5>
          <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">#Evento codigo</th>
                  <th scope="col">#Funcionario codigo</th>
                  <th scope="col">#Parceiro codgigo</th>
                  <th scope="col">#Area codigo</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row"><?php include "exibir/exibir_setor.php" ;while($aux = mysqli_fetch_assoc($sql)) 
                  { echo $aux["set_codigo"]."<br />"; } ?></th>
                  <td><?php include "exibir/exibir_setor.php" ;while($aux = mysqli_fetch_assoc($sql)) 
                  { echo $aux["evt_codigo"]."<br />"; } ?></td>
                  <td><?php include "exibir/exibir_setor.php" ;while($aux = mysqli_fetch_assoc($sql)) 
                  { echo $aux["fun_codigo"]."<br />"; } ?></td>
                  <td><?php include "exibir/exibir_setor.php" ;while($aux = mysqli_fetch_assoc($sql)) 
                  { echo $aux["pcr_codigo"]."<br />"; } ?></td>
                  <td><?php include "exibir/exibir_setor.php" ;while($aux = mysqli_fetch_assoc($sql)) 
                  { echo $aux["are_codigo"]."<br />"; } ?></td>
                </tr>
              </tbody>
        </table>
    </div>
</div>

<!-- div fechando os card -->        
</div>

<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/jquery.js"></script>

</body>
</html>