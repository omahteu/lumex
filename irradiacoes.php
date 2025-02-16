<?php include("./assets/php/partials/sessao.php"); ?>

<?php
  require_once './assets/php/crud.php';

  $db = new Database();
  $irradiacoes = null;

  if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $query = "SELECT * FROM irradiacoes WHERE id = $id";
    $resultado = json_decode($db->executeQuery($query), true);
    if (!empty($resultado)) {
      $irradiacoes = $resultado[0];
    }
  }
?>

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
              <a href="../index.php" class="logo">
                <img
                  src="#"
                  alt="navbar brand"
                  class="navbar-brand"
                  height="20"
                />
              </a>
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
          <!-- Navbar Header -->

          <!-- End Navbar -->
        </div>

        <div class="container">
            <div class="page-inner">
              <div class="page-header">
                <ul class="breadcrumbs mb-3">
                  <li class="nav-home">
                    <a href="./index.php">
                      <i class="icon-home"></i>
                    </a>
                  </li>
                  <li class="separator">
                    <i class="icon-arrow-right"></i>
                  </li>
                  <li class="nav-item">
                    <a href="./irradiacoes.php">Irradiações</a>
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
                      <form action="./assets/php/irradiacoes/create.php" method="post">
                        <div class="row">
                          <div class="col-md-6 col-3">
                            <div class="form-group">
                                <select name="estado" id="estado" class="form-control">
                                  <option value="" hidden>Estado</option>
                                </select>
                            </div>
                          </div>
                          <div class="col-md-6 col-3">
                            <div class="form-group">
                              <select name="cidade" id="cidade" class="form-control">
                                  <option value="" hidden>Cidade</option>
                                  <option value="<?= isset($irradiacoes['cidade']) ? $irradiacoes['cidade'] : '' ?>" selected>
                                    <?= isset($irradiacoes['cidade']) ? $irradiacoes['cidade'] : 'Selecione a cidade' ?>
                                  </option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-6 col-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="irradiacao" id="irradiacao" placeholder="Irradiação" value="<?= isset($irradiacoes['irradiacao']) ? htmlspecialchars($irradiacoes['irradiacao']) : '' ?>"/>
                              <small id="irradiacao_help" class="form-text text-muted">Somente números</small>
                            </div>
                          </div>
                          <div class="col-md-6 col-6">
                            <div class="form-group">
                              <input type="file" class="form-control" name="arquivo" id="arquivo" accept=".xlsx">
                            </div>
                          </div>
                          <input type="hidden" name="id" value="<?= $irradiacoes['id'] ?? '' ?>">
                        </div>
                        <div class="card-action">
                          <button class="btn btn-success">Salvar</button>
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

<script>
  $(document).ready(function () {
    carregarEstados();
    preencherCamposEdicao();
    
    $("#estado").on("change", function () {
      carregarCidades($(this).val());
    });
  });

  function carregarEstados() {
    let estados = {
      "AC": "Acre", "AL": "Alagoas", "AP": "Amapá", "AM": "Amazonas",
      "BA": "Bahia", "CE": "Ceará", "DF": "Distrito Federal", "ES": "Espírito Santo",
      "GO": "Goiás", "MA": "Maranhão", "MT": "Mato Grosso", "MS": "Mato Grosso do Sul",
      "MG": "Minas Gerais", "PA": "Pará", "PB": "Paraíba", "PR": "Paraná",
      "PE": "Pernambuco", "PI": "Piauí", "RJ": "Rio de Janeiro", "RN": "Rio Grande do Norte",
      "RS": "Rio Grande do Sul", "RO": "Rondônia", "RR": "Roraima", "SC": "Santa Catarina",
      "SP": "São Paulo", "SE": "Sergipe", "TO": "Tocantins"
    };

    let selectEstado = $("#estado");
    selectEstado.append(new Option("Estado", "", true, true));
    $.each(estados, function (sigla, nome) {
      selectEstado.append(new Option(nome, sigla));
    });
  }

  function carregarCidades(estadoSelecionado) {
    let selectCidade = $("#cidade");
    selectCidade.empty().append(new Option("Carregando...", "", true, true));

    if (estadoSelecionado) {
      $.getJSON(`https://servicodados.ibge.gov.br/api/v1/localidades/estados/${estadoSelecionado}/municipios`, function (data) {
        selectCidade.empty().append(new Option("Cidade", "", true, true));
        $.each(data, function (index, cidade) {
          selectCidade.append(new Option(cidade.nome, cidade.nome));
        });
      });
    } else {
      selectCidade.empty().append(new Option("Cidade", "", true, true));
    }
  }

  function preencherCamposEdicao() {
    <?php if (isset($irradiacoes)): ?>
      $("#estado").val("<?= $irradiacoes['estado'] ?? '' ?>").trigger("change");
      
      setTimeout(() => {
        $("#cidade").val("<?= $irradiacoes['cidade'] ?? '' ?>");
      }, 1000); // Pequeno delay para garantir que as cidades sejam carregadas antes de selecionar

      $("#irradiacao").val("<?= htmlspecialchars($irradiacoes['irradiacao'] ?? '') ?>");
    <?php endif; ?>
  }
</script>

<?php include("./assets/php/partials/notificacoes.php"); ?>
