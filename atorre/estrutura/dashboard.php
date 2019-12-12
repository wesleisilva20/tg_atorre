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

        <br> 
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
            <div class="card-body"> 
              <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modal_area" data-whatever="@mdo">Inserir</button>
              <!-- formulario em modal -->
              <div class="modal fade" id="modal_area" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Formulário Area de Atração</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                          <div class="modal-body">
                            <form action="cadastro/cad_area_atracao.php" method="POST" enctype="multipart/form-data" >
                                <div class="form-group">
                                  <label for="recipient-name" class="col-form-label">Tipo da area:</label>
                                  <input type="text" name="tipo" class="form-control" id="form_tipo">
                                </div>
                                <div class="form-group">
                                  <label for="recipient-name" class="col-form-label">Localização:</label>
                                  <input type="text" name="localizacao" class="form-control" id="form_localizacao">
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Sair</button>
                                  <button type="submit" class="btn btn-primary">Cadastrar</button>
                                </div>
                            </form>
                           </div>
                    </div>
                  </div>
                  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
                  <script type="text/javascript" src="../js/jquery.js"></script>
                </div>
              </div>
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
        <div class="card-body">
        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modal_atracao" data-whatever="@mdo">Inserir</button>
        <!-- formulario em modal -->
<div class="modal fade" id="modal_atracao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Formulário Atração</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="cadastro/cad_atracao.php" method="POST" enctype="multipart/form-data" >
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nome da Atração:</label>
                        <input type="text" name="nome_atracao" class="form-control" id="form_nome">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Empresa:</label>
                        <input type="text" name="empresa_atracao" class="form-control" id="form_empresa">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Tipo de atração:</label>
                        <input type="text" name="tipo_atracao" class="form-control" id="form_tipo">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Convidado:</label>
                        <input type="text" name="convidado_atracao" class="form-control" id="form_convidado">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Hora do inicio:</label>
                        <input type="time" name="inicio_atracao" class="form-control" id="form_inicio">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Hora do fim:</label>
                        <input type="time" name="fim_atracao" class="form-control" id="form_fim">
                      </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Sair</button>
                              <button type="button" class="btn btn-primary">Cadastrar</button>
                            </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
      </div>
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
        <div class="card-body">
        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modal_calendario" data-whatever="@mdo">Inserir</button>
        <!-- formulario em modal -->
<div class="modal fade" id="modal_calendario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Formulário calendário</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="cadastro/cad_calendario.php" method="POST" enctype="multipart/form-data" >
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Data de inicio:</label>
                        <input type="date" name="data_inicio" class="form-control" id="form_inicio">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Data final:</label>
                        <input type="date" name="data_final" class="form-control" id="form_final">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Hora de abertura:</label>
                        <input type="time" name="hora_abertura" class="form-control" id="form_abertura">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Hora de fechamento:</label>
                        <input type="time" name="hora_fechamento" class="form-control" id="form_fechamento">
                      </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Sair</button>
                              <button type="button" class="btn btn-primary">Cadastrar</button>
                            </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
      </div>
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
        <div class="card-body">
        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modal_estande" data-whatever="@mdo">Inserir</button>
        <!-- formulario em modal -->
<div class="modal fade" id="modal_estande" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Formulário Estande:</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="cadastro/cad_estande.php" method="POST" enctype="multipart/form-data" >
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nome do estande:</label>
                        <input type="text" name="nome_estande" class="form-control" id="form_nome">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Tipo de estande:</label>
                        <input type="text" name="tipo_estande" class="form-control" id="form_tipo">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Valor:</label>
                        <input type="text" name="valor_estande" class="form-control" id="form_valor">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Código do Funcionario:</label>
                        <input type="text" name="funcionario_codigo" class="form-control" id="form_funcionario">
                      </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Sair</button>
                              <button type="button" class="btn btn-primary">Cadastrar</button>
                            </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
      </div>
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
        <div class="card-body">
        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modal_eventos" data-whatever="@mdo">Inserir</button>
        <!-- formulario em modal -->
<div class="modal fade" id="modal_eventos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Formulário Eventos:</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="cadastro/cad_eventos.php" method="POST" enctype="multipart/form-data" >
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Código do calendário:</label>
                        <input type="text" name="cod_calend" class="form-control" id="form_cod_calend">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nome do evento:</label>
                        <input type="text" name="evento" class="form-control" id="form_evento">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Endereço do evento:</label>
                        <input type="text" name="end_evento" class="form-control" id="form_end_evento">
                      </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Sair</button>
                              <button type="button" class="btn btn-primary">Cadastrar</button>
                            </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
      </div>
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
        <div class="card-body">
        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modal_parceiro" data-whatever="@mdo">Inserir</button>
        <!-- formulario em modal -->
<div class="modal fade" id="modal_parceiro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Formulário Parceiros:</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="cadastro/cad_parceiros.php" method="POST" enctype="multipart/form-data" >
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nome do parceiro:</label>
                        <input type="text" name="nome_parceiro" class="form-control" id="form_nome_parceiro">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Empresa Parceira:</label>
                        <input type="text" name="empresa_parceiro" class="form-control" id="form_empresa">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Cnpj parceiro:</label>
                        <input type="text" name="cnpj_parceiro" class="form-control" id="form_cnpj">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Contribuição:</label>
                        <input type="text" name="contribuicao_parceiro" class="form-control" id="form_contribuicao">
                      </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Sair</button>
                              <button type="button" class="btn btn-primary">Cadastrar</button>
                            </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
      </div>
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
        <div class="card-body">
        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modal_participante" data-whatever="@mdo">Inserir</button>
        <!-- formulario em modal -->
<div class="modal fade" id="modal_participante" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Formulário Participante:</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="cadastro/cad_participantes.php" method="POST" enctype="multipart/form-data" >
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nome do participante:</label>
                        <input type="text" name="nome_participante" class="form-control" id="form_nome">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">RG completo:</label>
                        <input type="text" name="rg_participante" class="form-control" id="form_rg">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">CPF completo:</label>
                        <input type="text" name="cpf_participante" class="form-control" id="form_cpf">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Cidade:</label>
                        <input type="text" name="cidade_participante" class="form-control" id="form_cidade">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Telefone do participante:</label>
                        <input type="text" name="telefone_participante" class="form-control" id="form_tel">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">E-mail do participante:</label>
                        <input type="text" name="email_participante" class="form-control" id="form_tel">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Código do evento:</label>
                        <input type="text" name="cod_evento" class="form-control" id="form_cod_evento">
                      </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Sair</button>
                              <button type="button" class="btn btn-primary">Cadastrar</button>
                            </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
      </div>
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
        <div class="card-body">
        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modal_patrocinador" data-whatever="@mdo">Inserir</button>
        <!-- formulario em modal -->
<div class="modal fade" id="modal_patrocinador" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Formulário Patrocinador:</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="cadastro/cad_patrocinadores.php" method="POST" enctype="multipart/form-data" >
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nome patrocinador:</label>
                        <input type="text" name="nome_patrocinador" class="form-control" id="form_nome">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Empresa:</label>
                        <input type="text" name="empresa_patrocinador" class="form-control" id="form_empresa">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Marca patrocinador:</label>
                        <input type="text" name="marca_patrocinador" class="form-control" id="form_marca">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Cnpj patrocinador:</label>
                        <input type="text" name="cnpj_patrocinador" class="form-control" id="form_cnpj">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nivel patrocinador:</label>
                        <input type="text" name="nivel_patrocinador" class="form-control" id="form_nivel">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Codigo do evento:</label>
                        <input type="text" name="cod_eventp" class="form-control" id="form_cnpj">
                      </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Sair</button>
                              <button type="button" class="btn btn-primary">Cadastrar</button>
                            </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
      </div>
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
        <div class="card-body">
        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modal_setor" data-whatever="@mdo">Inserir</button>
        <!-- formulario em modal -->
<div class="modal fade" id="modal_setor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Formulário Setor:</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="cadastro/cad_setor.php" method="POST" enctype="multipart/form-data" >
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Código evento:</label>
                        <input type="text" name="cod_evento" class="form-control" id="form_evento">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Código Funcionário:</label>
                        <input type="text" name="cod_func" class="form-control" id="form_func">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Código parceiros:</label>
                        <input type="text" name="cod_parceiros" class="form-control" id="form_parceiros">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Código da area de atração:</label>
                        <input type="text" name="cod_area" class="form-control" id="form_atracao">
                      </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Sair</button>
                              <button type="button" class="btn btn-primary">Cadastrar</button>
                            </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
      </div>
    </div>
</div>

<!-- div fechando os card -->        
</div>

<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/jquery.js"></script>

</body>
</html>