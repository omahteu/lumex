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
            <a href="../index.html" class="logo">
              <img
                src="#"
                alt="Logo lumex"
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
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
            <ul class="nav nav-secondary">
              <li class="nav-item active">
                <a href="../index.html" class="collapsed">
                  <i class="fas fa-home"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./nova_proposta.html">
                  <i class="fas fa-plus"></i>
                  <p>Nova Proposta</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../tables/propostas.html">
                  <i class="fas fa-file"></i>
                  <p>Propostas</p>
                </a>
              </li>
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#submenu">
                  <i class="fas fa-bars"></i>
                  <p>Dados</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="submenu">
                  <ul class="nav nav-collapse" id="submenu-list"></ul>
                </div>
              </li>
              <li class="nav-item">
                <a href="../tables/empresa.html">
                  <i class="fas fa-file"></i>
                  <p>Minha empresa</p>
                </a>
              </li>
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
              <a href="../index.html" class="logo">
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
                <h3 class="fw-bold mb-3">Clientes</h3>
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
                    <a href="#">Clientes</a>
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
        
                        <div class="row">
                          <div class="col-md6 col-6">
                            <div class="form-group">
                              <input
                                type="text"
                                class="form-control"
                                id="email2"
                                placeholder="Nome do cliente"
                              />
                              <small id="emailHelp2" class="form-text text-muted"
                                >Nome completo.</small
                              >
                            </div>
                          </div>
                          <div class="col-md6 col-3">
                            <div class="form-group">
                              <input
                                type="text"
                                class="form-control"
                                id="email2"
                                placeholder="CPF do Cliente"
                              />
                              <small id="emailHelp2" class="form-text text-muted"
                                >Somente números</small
                              >
                            </div>
                          </div>
                          <div class="col-md6 col-3">
                            <div class="form-group">
                              <input
                                type="text"
                                class="form-control"
                                id="email2"
                                placeholder="Unidade Consumidora"
                              />
                              <small id="emailHelp2" class="form-text text-muted"
                                >Somente números</small
                              >
                            </div>
                          </div>
                          <div class="col-md6 col-2">
                            <div class="form-group">
                              <select class="form-control" name="" id="">
                                <option value="">Rua</option>
                                <option value="">Avenida</option>
                                <option value="">Alameda</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md6 col-8">
                            <div class="form-group">
                              <input
                                type="text"
                                class="form-control"
                                id="email2"
                                placeholder="Logradouro"
                              />
                            </div>
                          </div>
                          <div class="col-md6 col-2">
                            <div class="form-group">
                              <input
                                type="text"
                                class="form-control"
                                id="email2"
                                placeholder="Número"
                              />
                              <small id="emailHelp2" class="form-text text-muted"
                                >Somente números</small
                              >
                            </div>
                          </div>
                          <div class="col-md6 col-3">
                            <div class="form-group">
                              <input
                                type="text"
                                class="form-control"
                                id="email2"
                                placeholder="Complemento"
                              />
                            </div>
                          </div>
                          <div class="col-md6 col-3">
                            <div class="form-group">
                              <input
                                type="text"
                                class="form-control"
                                id="email2"
                                placeholder="CEP"
                              />
                            </div>
                          </div>
                          <div class="col-md6 col-3">
                            <div class="form-group">
                              <input
                                type="text"
                                class="form-control"
                                id="email2"
                                placeholder="Bairro"
                              />
                            </div>
                          </div>
                          <div class="col-md6 col-3">
                            <div class="form-group">
                              <input
                                type="text"
                                class="form-control"
                                id="email2"
                                placeholder="Cidade"
                              />
                            </div>
                          </div>
                          <div class="col-md6 col-3">
                            <div class="form-group">
                              <input
                                type="text"
                                class="form-control"
                                id="email2"
                                placeholder="Estado"
                              />
                            </div>
                          </div>
                          <div class="col-md6 col-3">
                            <div class="form-group">
                              <input
                                type="text"
                                class="form-control"
                                id="email2"
                                placeholder="Descrição Unidade Consumidora"
                              />
                            </div>
                          </div>
                          


                          <div class="col-md6 col-2">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"/>
                            <label class="form-check-label" for="flexRadioDefault1">Monofásico</label>
                          </div>
                          <div class="col-md6 col-2">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"/>
                            <label class="form-check-label" for="flexRadioDefault2">Bifásico</label>
                          </div>
                          <div class="col-md6 col-2">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"/>
                            <label class="form-check-label" for="flexRadioDefault2">Trifásico</label>
                          </div>
                        </div>

                        <hr>

                        <h2>Consumo do cliente</h2>
                        <div class="row">
                          <div class="col-md6 col-2">
                            <div class="form-group">
                              <input type="text" class="form-control" id="email2" placeholder="1° Mês"/>
                              <small id="emailHelp2" class="form-text text-muted">Somente números</small>
                            </div>
                          </div>
                          <div class="col-md6 col-2">
                            <div class="form-group">
                              <input type="text" class="form-control" id="email2" placeholder="2° Mês"/>
                              <small id="emailHelp2" class="form-text text-muted">Somente números</small>
                            </div>
                          </div>
                          <div class="col-md6 col-2">
                            <div class="form-group">
                              <input type="text" class="form-control" id="email2" placeholder="3° Mês"/>
                              <small id="emailHelp2" class="form-text text-muted">Somente números</small>
                            </div>
                          </div>
                          <div class="col-md6 col-2">
                            <div class="form-group">
                              <input
                                type="text"
                                class="form-control"
                                id="email2"
                                placeholder="4° Mês"
                              />
                              <small id="emailHelp2" class="form-text text-muted">Somente números</small>
                            </div>
                          </div>
                          <div class="col-md6 col-2">
                            <div class="form-group">
                              <input
                                type="text"
                                class="form-control"
                                id="email2"
                                placeholder="5° Mês"
                              />
                              <small id="emailHelp2" class="form-text text-muted">Somente números</small>
                            </div>
                          </div>
                          <div class="col-md6 col-2">
                            <div class="form-group">
                              <input
                                type="text"
                                class="form-control"
                                id="email2"
                                placeholder="6° Mês"
                              />
                              <small id="emailHelp2" class="form-text text-muted">Somente números</small>
                            </div>
                          </div>
                          <div class="col-md6 col-2">
                            <div class="form-group">
                              <input
                                type="text"
                                class="form-control"
                                id="email2"
                                placeholder="7° Mês"
                              />
                              <small id="emailHelp2" class="form-text text-muted">Somente números</small>
                            </div>
                          </div>
                          <div class="col-md6 col-2">
                            <div class="form-group">
                              <input
                                type="text"
                                class="form-control"
                                id="email2"
                                placeholder="8° Mês"
                              />
                              <small id="emailHelp2" class="form-text text-muted">Somente números</small>
                            </div>
                          </div>
                          <div class="col-md6 col-2">
                            <div class="form-group">
                              <input
                                type="text"
                                class="form-control"
                                id="email2"
                                placeholder="9° Mês"
                              />
                              <small id="emailHelp2" class="form-text text-muted">Somente números</small>
                            </div>
                          </div>
                          <div class="col-md6 col-2">
                            <div class="form-group">
                              <input
                                type="text"
                                class="form-control"
                                id="email2"
                                placeholder="10° Mês"
                              />
                              <small id="emailHelp2" class="form-text text-muted">Somente números</small>
                            </div>
                          </div>
                          <div class="col-md6 col-2">
                            <div class="form-group">
                              <input
                                type="text"
                                class="form-control"
                                id="email2"
                                placeholder="11° Mês"
                              />
                              <small id="emailHelp2" class="form-text text-muted">Somente números</small>
                            </div>
                          </div>
                          <div class="col-md6 col-2">
                            <div class="form-group">
                              <input
                                type="text"
                                class="form-control"
                                id="email2"
                                placeholder="12° Mês"
                              />
                              <small id="emailHelp2" class="form-text text-muted">Somente números</small>
                            </div>
                          </div>
                        </div>

                        <hr>


                      </form>
                    </div>
                    <div class="card-action">
                      <button class="btn btn-success">Salvar</button>
                      <button class="btn btn-danger">Limpar</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
         </div>

        <footer class="footer">
          <!-- <div class="container-fluid d-flex justify-content-between">
            <div class="copyright">
              2024, made with <i class="fa fa-heart heart text-danger"></i> by
              <a href="http://www.themekita.com">ThemeKita</a>
            </div>
            <div>
              Distributed by
              <a target="_blank" href="https://themewagon.com/">ThemeWagon</a>.
            </div>
          </div> -->
        </footer>
      </div>

      <!-- Custom template | don't include it in your project! -->
      <div class="custom-template">
        <div class="title">Settings</div>
        <div class="custom-content">
          <div class="switcher">
            <div class="switch-block">
              <h4>Logo Header</h4>
              <div class="btnSwitch">
                <button
                  type="button"
                  class="selected changeLogoHeaderColor"
                  data-color="dark"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="blue"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="purple"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="light-blue"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="green"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="orange"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="red"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="white"
                ></button>
                <br />
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="dark2"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="blue2"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="purple2"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="light-blue2"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="green2"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="orange2"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="red2"
                ></button>
              </div>
            </div>
            <div class="switch-block">
              <h4>Navbar Header</h4>
              <div class="btnSwitch">
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="dark"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="blue"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="purple"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="light-blue"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="green"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="orange"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="red"
                ></button>
                <button
                  type="button"
                  class="selected changeTopBarColor"
                  data-color="white"
                ></button>
                <br />
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="dark2"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="blue2"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="purple2"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="light-blue2"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="green2"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="orange2"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="red2"
                ></button>
              </div>
            </div>
            <div class="switch-block">
              <h4>Sidebar</h4>
              <div class="btnSwitch">
                <button
                  type="button"
                  class="changeSideBarColor"
                  data-color="white"
                ></button>
                <button
                  type="button"
                  class="selected changeSideBarColor"
                  data-color="dark"
                ></button>
                <button
                  type="button"
                  class="changeSideBarColor"
                  data-color="dark2"
                ></button>
              </div>
            </div>
          </div>
        </div>
        <div class="custom-toggle">
          <i class="icon-settings"></i>
        </div>
      </div>
      <!-- End Custom template -->
    </div>
    <!--   Core JS Files   -->
    <script src="../assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- Chart JS -->
    <script src="../assets/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="../assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="../assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="../assets/js/plugin/datatables/datatables.min.js"></script>

    <!-- Bootstrap Notify -->
    <script src="../assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

    <!-- jQuery Vector Maps -->
    <script src="../assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
    <script src="../assets/js/plugin/jsvectormap/world.js"></script>

    <!-- Sweet Alert -->
    <script src="../assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Kaiadmin JS -->
    <script src="../assets/js/kaiadmin.min.js"></script>

    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src="../assets/js/setting-demo.js"></script>
    <script src="../assets/js/demo.js"></script>
    <script>
      $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#177dff",
        fillColor: "rgba(23, 125, 255, 0.14)",
      });

      $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#f3545d",
        fillColor: "rgba(243, 84, 93, .14)",
      });

      $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#ffa534",
        fillColor: "rgba(255, 165, 52, .14)",
      });
    </script>

    <script type="module" src="../assets/js/abstracoes/menu.js"></script>
  </body>
</html>
