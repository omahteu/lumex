<!DOCTYPE html>
<html lang="pt-br">
    <?php include('./assets/php/partials/header.php') ?>
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
              <?php include('./assets/php/partials/menu.php'); ?>
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
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="d-flex align-items-center">
                      <h4 class="card-title">Clientes</h4>
                      <button class="btn btn-primary btn-round ms-auto" data-bs-toggle="modal" data-bs-target="#addRowModal">
                          <i class="fa fa-plus"></i>
                          Novo cliente
                      </button>
                    </div>
                  </div>
                  <div class="card-body">
                    <?php
                    require_once './assets/php/crud.php';

                    $db = new Database();

                    // Consulta para buscar todos os clientes
                    $query = "SELECT * FROM clientes";
                    $resultado = json_decode($db->executeQuery($query), true);
                    ?>
                    <div class="table-responsive">
                      <table id="add-row" class="display table table-striped table-hover">
                        <thead>
                          <tr>
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>Unidade Consumidora</th>
                            <th>Tipo Logradouro</th>
                            <th>Logradouro</th>
                            <th>Número</th>
                            <th>Complemento</th>
                            <th>CEP</th>
                            <th>Bairro</th>
                            <th>Cidade</th>
                            <th>Estado</th>
                            <th>Descrição Unidade Consumidora</th>
                            <th>Tipo Fase</th>
                            <th>Mês 1</th>
                            <th>Mês 2</th>
                            <th>Mês 3</th>
                            <th>Mês 4</th>
                            <th>Mês 5</th>
                            <th>Mês 6</th>
                            <th>Mês 7</th>
                            <th>Mês 8</th>
                            <th>Mês 9</th>
                            <th>Mês 10</th>
                            <th>Mês 11</th>
                            <th>Mês 12</th>
                            <th>Distribuidora</th>
                            <th style="width: 10%">Ações</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php if (!empty($resultado)) : ?>
                            <?php foreach ($resultado as $cliente) : ?>
                              <tr>
                                <td><?= htmlspecialchars($cliente['nome']) ?></td>
                                <td><?= htmlspecialchars($cliente['cpf']) ?></td>
                                <td><?= htmlspecialchars($cliente['unidade_consumidora']) ?></td>
                                <td><?= htmlspecialchars($cliente['tipo_logradouro']) ?></td>
                                <td><?= htmlspecialchars($cliente['logradouro']) ?></td>
                                <td><?= htmlspecialchars($cliente['numero']) ?></td>
                                <td><?= htmlspecialchars($cliente['complemento']) ?></td>
                                <td><?= htmlspecialchars($cliente['cep']) ?></td>
                                <td><?= htmlspecialchars($cliente['bairro']) ?></td>
                                <td><?= htmlspecialchars($cliente['cidade']) ?></td>
                                <td><?= htmlspecialchars($cliente['estado']) ?></td>
                                <td><?= htmlspecialchars($cliente['descricao_unidade_consumidora']) ?></td>
                                <td><?= htmlspecialchars($cliente['tipo_fase']) ?></td>
                                <td><?= htmlspecialchars($cliente['mes_1']) ?></td>
                                <td><?= htmlspecialchars($cliente['mes_2']) ?></td>
                                <td><?= htmlspecialchars($cliente['mes_3']) ?></td>
                                <td><?= htmlspecialchars($cliente['mes_4']) ?></td>
                                <td><?= htmlspecialchars($cliente['mes_5']) ?></td>
                                <td><?= htmlspecialchars($cliente['mes_6']) ?></td>
                                <td><?= htmlspecialchars($cliente['mes_7']) ?></td>
                                <td><?= htmlspecialchars($cliente['mes_8']) ?></td>
                                <td><?= htmlspecialchars($cliente['mes_9']) ?></td>
                                <td><?= htmlspecialchars($cliente['mes_10']) ?></td>
                                <td><?= htmlspecialchars($cliente['mes_11']) ?></td>
                                <td><?= htmlspecialchars($cliente['mes_12']) ?></td>
                                <td><?= htmlspecialchars($cliente['distribuidora']) ?></td>
                                <td>
                                  <div class="form-button-action">
                                    <button type="button" data-bs-toggle="tooltip" title="Editar" class="btn btn-link btn-primary btn-lg">
                                      <i class="fa fa-edit"></i>
                                    </button>
                                    <button type="button" data-bs-toggle="tooltip" title="Remover" class="btn btn-link btn-danger">
                                      <i class="fa fa-times"></i>
                                    </button>
                                  </div>
                                </td>
                              </tr>
                            <?php endforeach; ?>
                          <?php else : ?>
                            <tr>
                              <td colspan="27" class="text-center">Nenhum cliente encontrado.</td>
                            </tr>
                          <?php endif; ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--   Core JS Files   -->
    <script src="./assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="./assets/js/core/popper.min.js"></script>
    <script src="./assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="./assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <!-- Datatables -->
    
    <!-- Kaiadmin JS -->
    <script src="./assets/js/kaiadmin.min.js"></script>
    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src="./assets/js/setting-demo2.js"></script>

  </body>
</html>
