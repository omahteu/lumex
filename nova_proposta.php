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
                        <h2>Cliente</h2>
                        <div class="row">
                          <?php
                              require_once './assets/php/crud.php';
                              $db              = new Database();
                              $queryCliente    = "SELECT id, nome, distribuidora, descricao_unidade_consumidora, (mes_1 + mes_2 + mes_3 + mes_4 + mes_5 + mes_6 + mes_7 + mes_8 + mes_9 + mes_10 + mes_11 + mes_12) / 12 AS media_consumo FROM clientes";
                              $clientes        = json_decode($db->executeQuery($queryCliente), true);
                              $queryIrradiacao = "SELECT id, cidade, irradiacao FROM irradiacoes";
                              $irradiacoes     = json_decode($db->executeQuery($queryIrradiacao), true);
                          ?>
                          <div class="col-md6 col-6">
                            <div class="form-group">
                            <select name="cliente" id="cliente" class="form-control" onchange="preencherTabela()">
                              <option value="" hidden>Cliente</option>
                              <?php
                                  foreach ($clientes as $cliente) {
                                      echo "<option value='" . $cliente['id'] . "' data-nome='" . $cliente['nome'] . "' data-media='" . $cliente['media_consumo'] . "' data-distribuidora='" . $cliente['distribuidora'] . "' data-descricao='" . $cliente['descricao_unidade_consumidora'] . "'>" . $cliente['nome'] . "</option>";
                                  }
                              ?>
                            </select>
                            </div>
                          </div>
                          <div class="col-md6 col-6">
                            <div class="form-group">
                            <select name="irradiacao" id="irradiacao" class="form-control" onchange="preencherIrradiacao()">
                              <option value="" hidden>Irradiação</option>
                              <?php
                                  foreach ($irradiacoes as $irradiacao) {
                                      echo "<option value='" . $irradiacao['id'] . "' data-irradiacao='" . $irradiacao['irradiacao'] . "'>" . $irradiacao['cidade'] . " | " . $irradiacao['irradiacao'] . "</option>";
                                  }
                              ?>
                            </select>
                            </div>
                          </div>
                        </div>

                        <br>

                        <div class="table-responsive">
                          <table class="table table-head-bg-success">
                            <thead>
                              <tr>
                                <th>Cliente</th>
                                <th>Média de consumo</th>
                                <th>Valor do Kwh</th>
                                <th>Distribuidora</th>
                                <th>Descrição unidade consumidora</th>
                                <th>Irradiação</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td id="clienteNome"></td>
                                <td id="mediaConsumo"></td>
                                <td id="valorKwh"></td>
                                <td id="distribuidora"></td>
                                <td id="descricaoUnidade"></td>
                                <td id="virradiacao"></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>

                        <hr>

                        <h2>Cálculo de Kit</h2>
                        <div class="row">
                          <div class="col-md-3 col-3">
                            <div class="form-group">
                              <input type="number" class="form-control" name="quantidade_dias" id="quantidade_dias" value="30" max="31" min="1"/>
                              <small id="quantidade_dias_help" class="form-text text-muted">Quantidade de dias</small>
                            </div>
                          </div>
                          <div class="col-md-3 col-3">
                            <div class="form-group">
                              <input type="number" class="form-control" name="eficiencia" id="eficiencia" min="1" max="100" placeholder="Eficiência do sistema"/>
                              <small id="eficiencia_help" class="form-text text-muted">Eficiência do Sistema (%)</small>
                            </div>
                          </div>
                          <div class="col-md-6 col-6">
                            <div class="form-group">
                              <input type="text" class="form-control" name="potencia_kit" id="potencia_kit" value="0" disabled/>
                              <small id="potencia_kit_help" class="form-text text-muted">Potência do kit (Kwp)</small>
                            </div>
                          </div>
                        </div>

                        <hr>

                        <h2>Cálculo do Painel</h2>
                        <div class="row">
                          <div class="col-md6 col-2">
                            <div class="form-group">
                              <input type="text" class="form-control" name="painel" id="painel" placeholder="Potência">
                              <small id="painel_help2" class="form-text text-muted">(Watts)</small>
                            </div>
                          </div>
                          <div class="col-md6 col-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="potencia_painel" id="potencia_painel" placeholder="Potência do painel" disabled/>
                              <small id="potencia_painel_help2" class="form-text text-muted">(Kwp)</small>
                            </div>
                          </div>
                          <div class="col-md6 col-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="quantidade_painel" id="quantidade_painel" placeholder="Quantidade de painéis" disabled/>
                              <small id="quantidade_painel_help2" class="form-text text-muted"></small>
                            </div>
                          </div>
                          <div class="col-md6 col-3">
                            <div class="form-group">
                              <select class="form-control" name="estrutura" id="estrutura">
                                <option value="" hidden>Tipo de Estrutura</option>
                                <option value="1">Colonial</option>
                                <option value="2">Fribocimento</option>
                                <option value="3">Metálico</option>
                                <option value="4">Solo</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="card-action">
                          <button class="btn btn-success" id="btnSalvar">Salvar</button>
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
  function preencherTabela() {
    const clienteId = document.getElementById('cliente').value;
    const clienteNome = document.querySelector(`#cliente option[value="${clienteId}"]`).getAttribute('data-nome');
    const mediaConsumo = document.querySelector(`#cliente option[value="${clienteId}"]`).getAttribute('data-media');
    const distribuidora = document.querySelector(`#cliente option[value="${clienteId}"]`).getAttribute('data-distribuidora');
    const descricaoUnidade = document.querySelector(`#cliente option[value="${clienteId}"]`).getAttribute('data-descricao');
    document.getElementById('clienteNome').textContent = clienteNome;
    document.getElementById('mediaConsumo').textContent = `${parseFloat(mediaConsumo).toFixed(1)} Kw/h`
    document.getElementById('descricaoUnidade').textContent = descricaoUnidade;
    fetch('../assets/json/tarifas.json')
      .then(response => response.json())
      .then(tarifas => {
        const tarifa = tarifas.find(t => t.id == distribuidora);
        if (tarifa) {
          document.getElementById('valorKwh').textContent = `R$ ${tarifa.tarifa_convencional.toFixed(2)}`;
          document.getElementById('distribuidora').textContent = tarifa.distribuidora
        } else {
          document.getElementById('valorKwh').textContent = 'Não encontrada';
        }
      })
      .catch(error => {
        console.error('Erro ao carregar tarifas:', error);
        document.getElementById('valorKwh').textContent = 'Erro';
      });
  }
</script>

<script>
  function preencherIrradiacao() {
    const irradiacaoId = document.getElementById('irradiacao').value;
    const irradiacaoValor = document.querySelector(`#irradiacao option[value="${irradiacaoId}"]`).getAttribute('data-irradiacao');
    document.getElementById('virradiacao').textContent = `${irradiacaoValor} Wm`;
  }
</script>

<!-- Cálculo da potência do kit -->
<script>
  $(document).ready(function () {
    function calcularPotenciaKit(valor1, valor2, valor3, porcentagem) {
      let mediaConsumo = parseFloat($('#mediaConsumo').text()) || 0;
      let quantidadeDias = parseFloat($('#quantidade_dias').val()) || 1;
      let virradiacao = parseFloat($('#virradiacao').text()) || 1;
      let eficiencia = parseFloat($('#eficiencia').val()) || 0;
      return (mediaConsumo / quantidadeDias / virradiacao) / (eficiencia / 100);
    }
    $('#eficiencia').on('input', function () {
      let potencia_kit = calcularPotenciaKit()
      $('#potencia_kit').val(potencia_kit.toFixed(2))
    });
    $('#quantidade_dias').on('input', function () {
      if ($('#eficiencia').val()) {
        let potencia_kit = calcularPotenciaKit()
        $('#potencia_kit').val(potencia_kit.toFixed(2))
      }
    });
  });
</script>

<!-- Cálculo da potência do painel -->
<script>
  $(document).ready(function() {
    function calcularPotenciaPainel(potenciaPainel) {
      let potenciaKit = $('#potencia_kit').val()
      let potenciaConvertida = potenciaPainel / 1000;
      $("#potencia_painel").val(potenciaConvertida)
      let quantidadePaineis = Math.ceil(potenciaKit / potenciaConvertida);
      return quantidadePaineis;
    }
    $(document).on("input", "#painel", function() {
      let valor = $(this).val()
      let calculo_potencia_painel = calcularPotenciaPainel(valor)
      $("#quantidade_painel").val(calculo_potencia_painel)
    })
  })
</script>

<!-- Salvar e passar para a parte financeira -->
<script>
  $(document).ready(function() {
    $("#btnSalvar").on("click", function(event) {
      event.preventDefault();
      let form = $(this).closest("form");
      let formData = {};
      form.find("input, select, textarea").each(function() {
        let name = $(this).attr("name");
        let value = $(this).val();
        if (name) {
          formData[name] = value;
        }
      });
      sessionStorage.setItem("formData", JSON.stringify(formData));
      window.location.href = "nova_proposta_financeiro.php";
    });
  });
</script>
