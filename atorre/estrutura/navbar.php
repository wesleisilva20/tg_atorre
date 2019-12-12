<div  id="fundo">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/formato.css"/>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top">
    <a class="navbar-brand" href="index.php">ATorre</a>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSite">
			<ul class="navbar-nav">
      <!-- aqui dentro fica no container -->
      <form class="navbar-form form-inline my-2 my-lg-0" action="estrutura/logar.php" method="POST" enctype="multipart/form-data">
          <input class="form-control mr-sm-2" type="text" name="cpf_logar" placeholder="Seu CPF" aria-label="text">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Entrar</button>
        </form>
        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Cadastrar</button>
			</ul>
	</div>


     <div class="collapse navbar-collapse"> 
            <ul class="navbar-nav mr-auto">
            
            <!-- formulario em modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Formulário de cadastro</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                  <div class="modal-body">
                    <form action="estrutura/cadastrar.php" method="POST" enctype="multipart/form-data" >
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nome completo:</label>
                        <input type="text" name="nome" class="form-control" id="form_nome">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">RG completo:</label>
                        <input type="text" name="rg" class="form-control" id="form_rg">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">CPF completo:</label>
                        <input type="text" name="cpf" class="form-control" id="form_cpf">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Endereço:</label>
                        <input type="text" name="end" class="form-control" id="form_end">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nível:</label>
                        <input type="text" name="nivel" class="form-control" id="form_mivel">
                      </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Cadastrar</button>
                            </div>
                    </form>
                    </div>
                  </div>
                </div>
              </div>
              </ul>
        



      </div> 
    </nav>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
</div>