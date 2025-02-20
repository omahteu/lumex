<?php include("./assets/php/partials/sessao.php"); ?>

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
                <img src="#" alt="navbar brand" class="navbar-brand" height="20"/>
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
                      <h4 class="card-title">Produtos</h4>
                      <button class="btn btn-primary btn-round ms-auto" id="btn_novo_produto">
                        <i class="fa fa-plus"></i> Novo produto
                      </button>
                    </div>
                  </div>
                  <div class="card-body">
                    <?php
                      require_once './assets/php/crud.php';
                      $db = new Database();
                      $query = "SELECT * FROM produtos WHERE deleted_at IS NULL";
                      $resultado = json_decode($db->executeQuery($query), true);
                    ?>
                    <div class="table-responsive">
                      <table id="add-row" class="display table table-striped table-hover">
                        <thead>
                          <tr>
                            <th>Nome</th>
                            <th>NCM</th>
                            <th>Descrição</th>
                            <th>Fornecedor</th>
                            <th style="width: 10%">Ações</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php if (!empty($resultado)) : ?>
                            <?php foreach ($resultado as $produto) : ?>
                              <tr>
                                <td><?= htmlspecialchars($produto['nome']) ?></td>
                                <td><?= htmlspecialchars($produto['ncm']) ?></td>
                                <td><?= htmlspecialchars($produto['descricao']) ?></td>
                                <td><?= htmlspecialchars($produto['fornecedor']) ?></td>
                                <td>
                                  <div class="form-button-action">
                                    <a href="produtos.php?id=<?= $produto['id'] ?>" class="btn btn-link btn-primary btn-lg" title="Editar">
                                      <i class="fa fa-edit"></i>
                                    </a>
                                    <button type="button" data-bs-toggle="tooltip" title="Remover" class="btn btn-link btn-danger">
                                      <i class="fa fa-times"></i>
                                    </button>
                                  </div>
                                </td>
                              </tr>
                            <?php endforeach; ?>
                          <?php else : ?>
                            <tr>
                              <td colspan="5" class="text-center">Nenhum produto encontrado.</td>
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

    <?php include('./assets/php/partials/footer.php'); ?>

    <script>
      $(document).ready(function() {
        $(document).on("click", "#btn_novo_produto", function() {
          window.location.href = "./produtos.php"
        })
      })
    </script>

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".btn-remover").forEach(button => {
          button.addEventListener("click", function () {
            let clienteId = this.getAttribute("data-id");

            if (confirm("Tem certeza que deseja remover este cliente?")) {
              fetch("./assets/php/produtos/delete.php", {
                method: "POST",
                headers: { "Content-Type": "application/x-www-form-urlencoded" },
                body: new URLSearchParams({ id: clienteId })
              })
              .then(response => {
                if (response.ok) { // Confirma que a requisição deu certo
                  location.reload(); // Atualiza a página para exibir a mensagem da session
                } else {
                  alert("Erro ao processar a requisição.");
                }
              })
              .catch(error => console.error("Erro:", error));
            }
          });
        });
      });
    </script>

    <?php include("./assets/php/partials/notificacoes.php"); ?>
  </body>
</html>
