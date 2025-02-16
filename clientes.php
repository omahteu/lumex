<?php
session_start();
$message = $_SESSION['message'] ?? null;
unset($_SESSION['message']); // Remove a mensagem para não exibir novamente ao recarregar a página
?>

<!DOCTYPE html>
<html lang="pt-br">
  <?php include("./assets/php/partials/header.php"); ?>
  <body>
    <div class="wrapper">
      <!-- Sidebar -->
      <div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <?php include('./assets/php/partials/logo.php') ?>
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
              <?php include('./assets/php/partials/menu.php') ?>
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
              <a href="./index.php" class="logo">
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
                    <a href="./clientes.php">Clientes</a>
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
                      <form action="./assets/php/clientes/create.php" method="post">
                        <div class="row">
                          <div class="col-md-6 col-6">
                            <div class="form-group">
                              <input type="text" class="form-control" id="nome_cliente" name="nome_cliente" placeholder="Nome do cliente" />
                              <small id="nome_cliente_help" class="form-text text-muted">Nome completo.</small>
                            </div>
                          </div>
                          <div class="col-md-3 col-3">
                            <div class="form-group">
                              <input type="text" class="form-control" id="cpf_cliente" name="cpf_cliente" placeholder="CPF do Cliente" />
                              <small id="cpf_cliente_help" class="form-text text-muted">Somente números</small>
                            </div>
                          </div>
                          <div class="col-md-3 col-3">
                            <div class="form-group">
                              <input type="text" class="form-control" id="unidade_consumidora" name="unidade_consumidora" placeholder="Unidade Consumidora" />
                              <small id="unidade_consumidora_help" class="form-text text-muted">Somente números</small>
                            </div>
                          </div>
                          <div class="col-md-2 col-2">
                            <div class="form-group">
                              <select class="form-control" name="tipo_logradouro" id="tipo_logradouro">
                                <option value="1">Rua</option>
                                <option value="2">Avenida</option>
                                <option value="3">Alameda</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-8 col-8">
                            <div class="form-group">
                              <input type="text" class="form-control" id="logradouro" name="logradouro" placeholder="Logradouro" />
                            </div>
                          </div>
                          <div class="col-md-2 col-2">
                            <div class="form-group">
                              <input type="text" class="form-control" id="numero" name="numero" placeholder="Número" />
                              <small id="numero_help" class="form-text text-muted">Somente números</small>
                            </div>
                          </div>
                          <div class="col-md-3 col-3">
                            <div class="form-group">
                              <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Complemento" />
                            </div>
                          </div>
                          <div class="col-md-3 col-3">
                            <div class="form-group">
                              <input type="text" class="form-control" id="cep" name="cep" placeholder="CEP" />
                            </div>
                          </div>
                          <div class="col-md-3 col-3">
                            <div class="form-group">
                              <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro" />
                            </div>
                          </div>
                          <div class="col-md-3 col-3">
                            <div class="form-group">
                              <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade" />
                            </div>
                          </div>
                          <div class="col-md-3 col-3">
                            <div class="form-group">
                              <input type="text" class="form-control" id="estado" name="estado" placeholder="Estado" />
                            </div>
                          </div>
                          <div class="col-md-3 col-3">
                            <div class="form-group">
                              <input type="text" class="form-control" id="descricao_unidade_consumidora" name="descricao_unidade_consumidora" placeholder="Descrição Unidade Consumidora" />
                            </div>
                          </div>
                          <div class="col-md-2 col-2">
                            <div class="form-group">
                              <select class="form-control" name="distribuidora" id="distribuidora">
                                <option value="" hidden>Distribuidora</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-1 col-1">
                            <input class="form-check-input" type="radio" name="tipo_fase" id="monofasico" value="1" />
                            <label class="form-check-label" for="monofasico">Monofásico</label>
                          </div>
                          <div class="col-md-1 col-1">
                            <input class="form-check-input" type="radio" name="tipo_fase" id="bifasico" value="2" />
                            <label class="form-check-label" for="bifasico">Bifásico</label>
                          </div>
                          <div class="col-md-1 col-1">
                            <input class="form-check-input" type="radio" name="tipo_fase" id="trifasico" value="3" />
                            <label class="form-check-label" for="trifasico">Trifásico</label>
                          </div>
                        </div>

                        <hr>

                        <h2>Consumo do cliente</h2>
                        <div class="row">
                          <div class="col-md6 col-2">
                            <div class="form-group">
                              <input type="text" class="form-control" id="mes_1" name="mes_1" placeholder="1° Mês" />
                              <small id="mes_1_help" class="form-text text-muted">Somente números</small>
                            </div>
                          </div>
                          <div class="col-md6 col-2">
                            <div class="form-group">
                              <input type="text" class="form-control" id="mes_2" name="mes_2" placeholder="2° Mês" />
                              <small id="mes_2_help" class="form-text text-muted">Somente números</small>
                            </div>
                          </div>
                          <div class="col-md6 col-2">
                            <div class="form-group">
                              <input type="text" class="form-control" id="mes_3" name="mes_3" placeholder="3° Mês" />
                              <small id="mes_3_help" class="form-text text-muted">Somente números</small>
                            </div>
                          </div>
                          <div class="col-md6 col-2">
                            <div class="form-group">
                              <input type="text" class="form-control" id="mes_4" name="mes_4" placeholder="4° Mês" />
                              <small id="mes_4_help" class="form-text text-muted">Somente números</small>
                            </div>
                          </div>
                          <div class="col-md6 col-2">
                            <div class="form-group">
                              <input type="text" class="form-control" id="mes_5" name="mes_5" placeholder="5° Mês" />
                              <small id="mes_5_help" class="form-text text-muted">Somente números</small>
                            </div>
                          </div>
                          <div class="col-md6 col-2">
                            <div class="form-group">
                              <input type="text" class="form-control" id="mes_6" name="mes_6" placeholder="6° Mês" />
                              <small id="mes_6_help" class="form-text text-muted">Somente números</small>
                            </div>
                          </div>
                          <div class="col-md6 col-2">
                            <div class="form-group">
                              <input type="text" class="form-control" id="mes_7" name="mes_7" placeholder="7° Mês" />
                              <small id="mes_7_help" class="form-text text-muted">Somente números</small>
                            </div>
                          </div>
                          <div class="col-md6 col-2">
                            <div class="form-group">
                              <input type="text" class="form-control" id="mes_8" name="mes_8" placeholder="8° Mês" />
                              <small id="mes_8_help" class="form-text text-muted">Somente números</small>
                            </div>
                          </div>
                          <div class="col-md6 col-2">
                            <div class="form-group">
                              <input type="text" class="form-control" id="mes_9" name="mes_9" placeholder="9° Mês" />
                              <small id="mes_9_help" class="form-text text-muted">Somente números</small>
                            </div>
                          </div>
                          <div class="col-md6 col-2">
                            <div class="form-group">
                              <input type="text" class="form-control" id="mes_10" name="mes_10" placeholder="10° Mês" />
                              <small id="mes_10_help" class="form-text text-muted">Somente números</small>
                            </div>
                          </div>
                          <div class="col-md6 col-2">
                            <div class="form-group">
                              <input type="text" class="form-control" id="mes_11" name="mes_11" placeholder="11° Mês" />
                              <small id="mes_11_help" class="form-text text-muted">Somente números</small>
                            </div>
                          </div>
                          <div class="col-md6 col-2">
                            <div class="form-group">
                              <input type="text" class="form-control" id="mes_12" name="mes_12" placeholder="12° Mês" />
                              <small id="mes_12_help" class="form-text text-muted">Somente números</small>
                            </div>
                          </div>
                        </div>
                        
                        <div class="">
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
    <?php include('./assets/php/partials/footer.php'); ?>
  </body>
</html>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/izitoast/dist/js/iziToast.min.js"></script>
<script>
  $(document).ready(function() {
    // Ao mudar o valor do input estado
    $('#estado').change(function() {
      // Obtém o valor selecionado do estado
      var estadoSelecionado = $(this).val();

      // Verifica se um estado foi selecionado
      if (!estadoSelecionado) {
        // Exibe o alerta se nenhum estado for selecionado
        alert('É necessário selecionar um estado primeiro.');
        return; // Interrompe a execução se não houver estado selecionado
      }

      // Limpa as opções existentes no select
      $('#distribuidora').empty();

      // Carrega o arquivo JSON
      $.getJSON('./assets/json/tarifas.json', function(data) {
        // Filtra os itens do JSON onde o uf é igual ao estado selecionado
        var itemsFiltrados = data.filter(function(item) {
          return item.uf === estadoSelecionado;
        });

        // Se não houver itens filtrados, exibe uma mensagem
        if (itemsFiltrados.length === 0) {
          alert('Não há distribuidoras disponíveis para o estado selecionado.');
        } else {
          // Para cada item filtrado, cria uma nova opção
          $.each(itemsFiltrados, function(index, item) {
            $('#distribuidora').append(
              $('<option>', {
                value: item.id, // Atribui o id como value
                text: item.distribuidora // Atribui o nome do distribuidor como texto
              })
            );
          });
        }
      });
    });
  });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        <?php if ($message): ?>
            iziToast.<?= $message['type'] ?>({
                title: "<?= ucfirst($message['type']) ?>",
                message: "<?= $message['text'] ?>",
                position: "topRight",
                timeout: 3000, // Fecha automaticamente em 3 segundos
                transitionIn: "fadeInDown",
                transitionOut: "fadeOutUp",
                close: false, // Remove o botão de fechar manualmente
                progressBar: true
            });
        <?php endif; ?>
    });
</script>