<?php include("./assets/php/partials/sessao.php"); ?>

<?php
  require_once './assets/php/crud.php';

  $db = new Database();
  $produtos = null;

  if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $query = "SELECT * FROM produtos WHERE id = $id";
    $resultado = json_decode($db->executeQuery($query), true);
    if (!empty($resultado)) {
      $produtos = $resultado[0];
    }
  }
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
                  <a href="./produtos.php">Produtos</a>
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
                    <form action="./assets/php/produtos/create.php" method="post">
                      <div class="row">
                        <div class="col-md-6 col-6">
                          <div class="form-group">
                            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome do produto" value="<?= htmlspecialchars($produtos['nome'] ?? '') ?>"/>
                            <small id="nome_help" class="form-text text-muted">Nome do produto</small>
                          </div>
                        </div>
                        <div class="col-md-6 col-6">
                          <div class="form-group">
                            <input type="text" class="form-control" name="ncm" id="ncm" placeholder="NCM do produto" value="<?= htmlspecialchars($produtos['ncm'] ?? '') ?>"/>
                            <small id="ncm_help" class="form-text text-muted">Somente números</small>
                          </div>
                        </div>
                        <div class="col-md-6 col-6">
                          <div class="form-group">
                            <input type="text" class="form-control" name="descricao" id="descricao" placeholder="Descrição do produto" value="<?= htmlspecialchars($produtos['descricao'] ?? '') ?>"/>
                            <small id="descricao_help" class="form-text text-muted">Descrição do produto</small>
                          </div>
                        </div>
                        <div class="col-md-6 col-6">
                          <div class="form-group">
                            <input type="text" class="form-control" name="fornecedor" id="fornecedor" placeholder="Fornecedor" value="<?= htmlspecialchars($produtos['fornecedor'] ?? '') ?>"/>
                            <small id="fornecedor_help" class="form-text text-muted">Fornecedor do produto</small>
                          </div>
                        </div>
                        <input type="hidden" name="id" value="<?= $produtos['id'] ?? '' ?>">
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
    <?php include('./assets/php/partials/footer.php') ?>
  </body>
</html>

<?php include("./assets/php/partials/notificacoes.php"); ?>
