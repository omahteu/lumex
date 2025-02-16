<!DOCTYPE html>
<html lang="pt-br">
  <?php include "./assets/php/partials/header.php"; ?>
  <body>
    <div class="wrapper">
      <!-- Sidebar -->
      <div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <?php include './assets/php/partials/logo.php'?>
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
              </button>
            </div>
            <button class="topbar-toggler more">
              <i class="gg-more-vertical-alt"></i>
            </button>
          </div>
          <!-- End Logo Header -->
        </div>
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
            <ul class="nav nav-secondary">
              <?php include './assets/php/partials/menu.php'?>
            </ul>
          </div>
        </div>
      </div>
      <!-- End Sidebar -->

      <div class="main-panel">
        <div class="main-header">
          <div class="main-header-logo">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="dark">
              <?php include './assets/php/partials/logo.php'?>
              <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                  <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                  <i class="gg-menu-left"></i>
                </button>
              </div>
              <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
              </button>
            </div>
            <!-- End Logo Header -->
          </div>
        </div>

        <div class="container">
            <div class="page-inner">
              <div class="page-header">
                <h3 class="fw-bold mb-3">Nova proposta</h3>
                <ul class="breadcrumbs mb-3">
                  <li class="nav-home">
                    <a href="#">
                      <i class="icon-home"></i>
                    </a>
                  </li>
                  <li class="separator">
                    <i class="icon-arrow-right"></i>
                  </li>
                  <li class="nav-item">
                    <a href="#">Nova proposta</a>
                  </li>
                  <li class="separator">
                    <i class="icon-arrow-right"></i>
                  </li>
                  <li class="nav-item">
                    <a href="#">Financeiro</a>
                  </li>
                </ul>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header">
                      <div class="card-title">Preencha o formulário abaixo</div>
                    </div>
                    <div class="card-body">
                      <form action="" method="post">
                        <h2>Financeiro</h2>
                        <div class="row">
                          <div class="col-md-4 col-4">
                            <div class="form-group">
                              <input type="text" class="form-control" name="valorkit" id="valorkit" placeholder="Valor do kit">
                              <small id="valorkit_help" class="form-text text-muted">Apenas números</small>
                            </div>
                          </div>
                          <div class="col-md-4 col-4">
                            <div class="form-group">
                              <input type="text" class="form-control" name="margem" id="margem" placeholder="Margem de lucro">
                              <small id="margem_help" class="form-text text-muted">Valor em %</small>
                            </div>
                          </div>
                          <div class="col-md-4 col-4">
                            <div class="form-group">
                              <input type="text" class="form-control" name="total_proposta" id="total_proposta" value="R$ 0.00" disabled>
                              <small id="margem_help" class="form-text text-muted">Total da Proposta</small>
                            </div>
                          </div>
                        </div>

                        <br>

                        <div class="table-responsive">
                          <table class="table table-head-bg-success">
                            <thead>
                              <tr>
                                <th>Cliente</th>
                                <th>Irradiação</th>
                                <th>Quantidade de dias</th>
                                <th>Eficiencia</th>
                                <th>Potência do Kit</th>
                                <th>Painel</th>
                                <th>Potência do Painel</th>
                                <th>Quantidade de Paineis</th>
                                <th>Estrutura</th>
                              </tr>
                            </thead>
                            <tbody id="resumo_proposta"></tbody>
                          </table>
                        </div>

                        <hr>

                        <div class="card-action">
                          <button class="btn btn-success">Gerar proposta</button>
                          <button class="btn btn-danger">Limpar</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
         </div>
      </div>
    </div>
    <?php include './assets/php/partials/footer.php'?>
  </body>
</html>

<!-- Preenchendo a tabela com o resumo da proposta -->
<script>
  $(document).ready(function() {
    if (sessionStorage.getItem("formData")) {
      let formData = JSON.parse(sessionStorage.getItem("formData"));
      let tbody = document.getElementById("resumo_proposta");
      tbody.innerHTML = "";
      let newRow = `
        <tr>
          <td>${formData.cliente || ''}</td>
          <td>${formData.irradiacao || ''}</td>
          <td>${formData.quantidade_dias || ''}</td>
          <td>${formData.eficiencia || ''}%</td>
          <td>${formData.potencia_kit || ''}</td>
          <td>${formData.painel || ''}</td>
          <td>${formData.potencia_painel || ''}</td>
          <td>${formData.quantidade_painel || ''}</td>
          <td>${formData.estrutura || ''}</td>
        </tr>
      `;
      tbody.innerHTML += newRow;
    }
  });
</script>

<!-- Cálculo do valor da proposta -->
<script>
  $(document).ready(function() {
    function atualizarTotal() {
      let valorkit = parseFloat($("#valorkit").val().replace(/[^0-9.]/g, "")) || 0;
      let margem = parseFloat($("#margem").val().replace(/[^0-9.]/g, "")) || 0;
      let total = valorkit + (valorkit * (margem / 100));
      $("#total_proposta").val(`R$ ${total.toFixed(2)}`);
    }
    $("#valorkit, #margem").on("input", function() {
      this.value = this.value.replace(/[^0-9.]/g, "");
      atualizarTotal();
    });
  });
</script>
