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
                <h3 class="fw-bold mb-3">Empresa</h3>
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
                    <a href="#">Empresa</a>
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
                      <?php
                      require_once './assets/php/crud.php';

                      // Criar instância da classe Database
                      $db = new Database();

                      // Recuperar os dados da empresa com id = 1
                      $empresaJson = $db->getEmpresaById(1);
                      $empresa = json_decode($empresaJson, true);
                      $estadoSelecionado = $empresa[0]['estado'];
                      $cidadeSelecionada = $empresa[0]['cidade'];
                      ?>
                      <form action="./assets/php/empresa/create.php" method="post">
                        <div class="row">
                          <div class="col-md-9 col-9">
                            <div class="form-group">
                              <input type="text" class="form-control" name="razao_social" id="razao_social" value="<?= $empresa[0]['razao_social'] ?? '' ?>" placeholder="Razão Social"/>
                              <small id="razao_social_help" class="form-text text-muted">Razão Social</small>
                            </div>
                          </div>
                          <div class="col-md-3 col-3">
                            <div class="form-group">
                              <input type="text" class="form-control" id="cnpj" name="cnpj" value="<?= $empresa[0]['cnpj'] ?? '' ?>" placeholder="CNPJ"/>
                              <small id="cnpj_help" class="form-text text-muted">Somente números</small>
                            </div>
                          </div>
                          <div class="col-md-2 col-2">
                            <div class="form-group">
                              <select class="form-control" name="tipo_logradouro" id="tipo_logradouro">
                                <option value="1" <?= ($empresa[0]['tipo_logradouro'] ?? '') == 1 ? 'selected' : '' ?>>Rua</option>
                                <option value="2" <?= ($empresa[0]['tipo_logradouro'] ?? '') == 2 ? 'selected' : '' ?>>Avenida</option>
                                <option value="3" <?= ($empresa[0]['tipo_logradouro'] ?? '') == 3 ? 'selected' : '' ?>>Alameda</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-5 col-5">
                            <div class="form-group">
                              <input
                                type="text"
                                class="form-control"
                                id="logradouro" name="logradouro" value="<?= $empresa[0]['logradouro'] ?? '' ?>"
                                placeholder="Logradouro"
                              />
                            </div>
                          </div>
                          <div class="col-md-2 col-2">
                            <div class="form-group">
                              <input
                                type="text"
                                class="form-control"
                                id="numero" name="numero" value="<?= $empresa[0]['numero'] ?? '' ?>"
                                placeholder="Número"
                              />
                              <small id="numero_help" class="form-text text-muted"
                                >Somente números</small
                              >
                            </div>
                          </div>
                          <div class="col-md-3 col-3">
                            <div class="form-group">
                              <input
                                type="text"
                                class="form-control"
                                id="complemento" name="complemento" value="<?= $empresa[0]['complemento'] ?? '' ?>"
                                placeholder="Complemento"
                              />
                            </div>
                          </div>
                          <div class="col-md-3 col-3">
                            <div class="form-group">
                              <input
                                type="text"
                                class="form-control"
                                id="cep" name="cep" value="<?= $empresa[0]['cep'] ?? '' ?>"
                                placeholder="CEP"
                              />
                            </div>
                          </div>
                          <div class="col-md-3 col-3">
                            <div class="form-group">
                              <select class="form-control" name="estado" id="estado">
                                <option value="" hidden>Estado</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-3 col-3">
                            <div class="form-group">
                              <select class="form-control" name="cidade" id="cidade">
                                <option value="" hidden>Cidade</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-3 col-3">
                            <div class="form-group">
                              <input
                                type="text"
                                class="form-control"
                                id="bairro" name="bairro" value="<?= $empresa[0]['bairro'] ?? '' ?>"
                                placeholder="Bairro"
                              />
                            </div>
                          </div>
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  $(document).ready(function () {
    // Lista de estados
    let estados = {
        "AC": "Acre",
        "AL": "Alagoas",
        "AP": "Amapá",
        "AM": "Amazonas",
        "BA": "Bahia",
        "CE": "Ceará",
        "DF": "Distrito Federal",
        "ES": "Espírito Santo",
        "GO": "Goiás",
        "MA": "Maranhão",
        "MT": "Mato Grosso",
        "MS": "Mato Grosso do Sul",
        "MG": "Minas Gerais",
        "PA": "Pará",
        "PB": "Paraíba",
        "PR": "Paraná",
        "PE": "Pernambuco",
        "PI": "Piauí",
        "RJ": "Rio de Janeiro",
        "RN": "Rio Grande do Norte",
        "RS": "Rio Grande do Sul",
        "RO": "Rondônia",
        "RR": "Roraima",
        "SC": "Santa Catarina",
        "SP": "São Paulo",
        "SE": "Sergipe",
        "TO": "Tocantins"
    };

    // Preencher o select de estados
    $.each(estados, function (sigla, nome) {
        $("#estado").append(new Option(nome, sigla));
    });

    // Preencher o estado automaticamente
    const estadoSelecionado = "<?= $estadoSelecionado ?>"; // Pegando valor do PHP
    const cidadeSelecionada = "<?= $cidadeSelecionada ?>"; // Pegando valor do PHP

    $("#estado").val(estadoSelecionado).trigger('change'); // Setar estado

    // Evento de mudança do estado
    $("#estado").on("change", function () {
      let estadoSelecionado = $(this).val();
      $("#cidade").empty().append(new Option("Carregando...", "", true, true));

      if (estadoSelecionado) {
        $.getJSON(`https://servicodados.ibge.gov.br/api/v1/localidades/estados/${estadoSelecionado}/municipios`, function (data) {
          $("#cidade").empty().append(new Option("Cidade", "", true, true)); // Resetar as opções de cidade

          $.each(data, function (index, cidade) {
            $("#cidade").append(new Option(cidade.nome, cidade.nome));
          });

          // Selecionar a cidade automaticamente após preencher as cidades
          if (cidadeSelecionada) {
            $("#cidade").val(cidadeSelecionada);
          }
        });
      } else {
        $("#cidade").empty().append(new Option("Cidade", "", true, true));
      }
    });

    // Disparar a mudança de estado manualmente para carregar as cidades ao carregar a página
    if (estadoSelecionado) {
      $("#estado").trigger('change');
    }
  });
</script>
