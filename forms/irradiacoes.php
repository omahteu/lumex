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
                <h3 class="fw-bold mb-3">Irradiações</h3>
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
                    <a href="#">Irradiações</a>
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
                          <div class="col-md6 col-3">
                            <div class="form-group">
                              <select name="" id="" class="form-control">
                                <option value="" hidden>Cidade</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md6 col-3">
                            <div class="form-group">
                              <input type="text" class="form-control" id="email2" placeholder="Irradiação"/>
                              <small id="emailHelp2" class="form-text text-muted">Somente números</small>
                            </div>
                          </div>
                          <div class="col-md6 col-6">
                            <div class="form-group">
                                <input type="file" class="form-control" name="" id="">
                            </div>
                          </div>
                        </div>


                      </form>














                      <!-- <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input
                              type="email"
                              class="form-control"
                              id="email2"
                              placeholder="Enter Email"
                            />
                            <small id="emailHelp2" class="form-text text-muted"
                              >We'll never share your email with anyone
                              else.</small
                            >
                          </div>
                          <div class="form-group">
                            <label for="password">Password</label>
                            <input
                              type="password"
                              class="form-control"
                              id="password"
                              placeholder="Password"
                            />
                          </div>
                          <div class="form-group form-inline">
                            <label
                              for="inlineinput"
                              class="col-md-3 col-form-label"
                              >Inline Input</label
                            >
                            <div class="col-md-9 p-0">
                              <input
                                type="text"
                                class="form-control input-full"
                                id="inlineinput"
                                placeholder="Enter Input"
                              />
                            </div>
                          </div>
                          <div class="form-group has-success">
                            <label for="successInput">Success Input</label>
                            <input
                              type="text"
                              id="successInput"
                              value="Success"
                              class="form-control"
                            />
                          </div>
                          <div class="form-group has-error has-feedback">
                            <label for="errorInput">Error Input</label>
                            <input
                              type="text"
                              id="errorInput"
                              value="Error"
                              class="form-control"
                            />
                            <small id="emailHelp" class="form-text text-muted"
                              >Please provide a valid informations.</small
                            >
                          </div>
                          <div class="form-group">
                            <label for="disableinput">Disable Input</label>
                            <input
                              type="text"
                              class="form-control"
                              id="disableinput"
                              placeholder="Enter Input"
                              disabled
                            />
                          </div>
                          <div class="form-group">
                            <label>Gender</label><br />
                            <div class="d-flex">
                              <div class="form-check">
                                <input
                                  class="form-check-input"
                                  type="radio"
                                  name="flexRadioDefault"
                                  id="flexRadioDefault1"
                                />
                                <label
                                  class="form-check-label"
                                  for="flexRadioDefault1"
                                >
                                  Male
                                </label>
                              </div>
                              <div class="form-check">
                                <input
                                  class="form-check-input"
                                  type="radio"
                                  name="flexRadioDefault"
                                  id="flexRadioDefault2"
                                  checked
                                />
                                <label
                                  class="form-check-label"
                                  for="flexRadioDefault2"
                                >
                                  Female
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label"> Static </label>
                            <p class="form-control-static">hello@example.com</p>
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlSelect1"
                              >Example select</label
                            >
                            <select
                              class="form-select"
                              id="exampleFormControlSelect1"
                            >
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlSelect2"
                              >Example multiple select</label
                            >
                            <select
                              multiple
                              class="form-control"
                              id="exampleFormControlSelect2"
                            >
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlFile1"
                              >Example file input</label
                            >
                            <input
                              type="file"
                              class="form-control-file"
                              id="exampleFormControlFile1"
                            />
                          </div>
                          <div class="form-group">
                            <label for="comment">Comment</label>
                            <textarea class="form-control" id="comment" rows="5">
                            </textarea>
                          </div>
                          <div class="form-check">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              value=""
                              id="flexCheckDefault"
                            />
                            <label
                              class="form-check-label"
                              for="flexCheckDefault"
                            >
                              Agree with terms and conditions
                            </label>
                          </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                          <div class="form-group">
                            <div class="input-group mb-3">
                              <span class="input-group-text" id="basic-addon1"
                                >@</span
                              >
                              <input
                                type="text"
                                class="form-control"
                                placeholder="Username"
                                aria-label="Username"
                                aria-describedby="basic-addon1"
                              />
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group mb-3">
                              <input
                                type="text"
                                class="form-control"
                                placeholder="Recipient's username"
                                aria-label="Recipient's username"
                                aria-describedby="basic-addon2"
                              />
                              <span class="input-group-text" id="basic-addon2"
                                >@example.com</span
                              >
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="basic-url">Your vanity URL</label>
                            <div class="input-group mb-3">
                              <span class="input-group-text" id="basic-addon3"
                                >https://example.com/users/</span
                              >
                              <input
                                type="text"
                                class="form-control"
                                id="basic-url"
                                aria-describedby="basic-addon3"
                              />
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group mb-3">
                              <span class="input-group-text">$</span>
                              <input
                                type="text"
                                class="form-control"
                                aria-label="Amount (to the nearest dollar)"
                              />
                              <span class="input-group-text">.00</span>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group">
                              <span class="input-group-text">With textarea</span>
                              <textarea
                                class="form-control"
                                aria-label="With textarea"
                              ></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group">
                              <button
                                class="btn btn-black btn-border"
                                type="button"
                              >
                                Button
                              </button>
                              <input
                                type="text"
                                class="form-control"
                                placeholder=""
                                aria-label=""
                                aria-describedby="basic-addon1"
                              />
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group">
                              <input
                                type="text"
                                class="form-control"
                                aria-label="Text input with dropdown button"
                              />
                              <div class="input-group-append">
                                <button
                                  class="btn btn-primary btn-border dropdown-toggle"
                                  type="button"
                                  data-bs-toggle="dropdown"
                                  aria-haspopup="true"
                                  aria-expanded="false"
                                >
                                  Dropdown
                                </button>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item" href="#">Action</a>
                                  <a class="dropdown-item" href="#"
                                    >Another action</a
                                  >
                                  <a class="dropdown-item" href="#"
                                    >Something else here</a
                                  >
                                  <div
                                    role="separator"
                                    class="dropdown-divider"
                                  ></div>
                                  <a class="dropdown-item" href="#"
                                    >Separated link</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-icon">
                              <input
                                type="text"
                                class="form-control"
                                placeholder="Search for..."
                              />
                              <span class="input-icon-addon">
                                <i class="fa fa-search"></i>
                              </span>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-icon">
                              <span class="input-icon-addon">
                                <i class="fa fa-user"></i>
                              </span>
                              <input
                                type="text"
                                class="form-control"
                                placeholder="Username"
                              />
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="form-label">Image Check</label>
                            <div class="row">
                              <div class="col-6 col-sm-4">
                                <label class="imagecheck mb-4">
                                  <input
                                    name="imagecheck"
                                    type="checkbox"
                                    value="1"
                                    class="imagecheck-input"
                                  />
                                  <figure class="imagecheck-figure">
                                    <img
                                      src="../assets/img/examples/product1.jpg"
                                      alt="title"
                                      class="imagecheck-image"
                                    />
                                  </figure>
                                </label>
                              </div>
                              <div class="col-6 col-sm-4">
                                <label class="imagecheck mb-4">
                                  <input
                                    name="imagecheck"
                                    type="checkbox"
                                    value="2"
                                    class="imagecheck-input"
                                    checked=""
                                  />
                                  <figure class="imagecheck-figure">
                                    <img
                                      src="../assets/img/examples/product4.jpg"
                                      alt="title"
                                      class="imagecheck-image"
                                    />
                                  </figure>
                                </label>
                              </div>
                              <div class="col-6 col-sm-4">
                                <label class="imagecheck mb-4">
                                  <input
                                    name="imagecheck"
                                    type="checkbox"
                                    value="3"
                                    class="imagecheck-input"
                                  />
                                  <figure class="imagecheck-figure">
                                    <img
                                      src="../assets/img/examples/product3.jpg"
                                      alt="title"
                                      class="imagecheck-image"
                                    />
                                  </figure>
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="form-label">Color Input</label>
                            <div class="row gutters-xs">
                              <div class="col-auto">
                                <label class="colorinput">
                                  <input
                                    name="color"
                                    type="checkbox"
                                    value="dark"
                                    class="colorinput-input"
                                  />
                                  <span class="colorinput-color bg-black"></span>
                                </label>
                              </div>
                              <div class="col-auto">
                                <label class="colorinput">
                                  <input
                                    name="color"
                                    type="checkbox"
                                    value="primary"
                                    class="colorinput-input"
                                  />
                                  <span
                                    class="colorinput-color bg-primary"
                                  ></span>
                                </label>
                              </div>
                              <div class="col-auto">
                                <label class="colorinput">
                                  <input
                                    name="color"
                                    type="checkbox"
                                    value="secondary"
                                    class="colorinput-input"
                                  />
                                  <span
                                    class="colorinput-color bg-secondary"
                                  ></span>
                                </label>
                              </div>
                              <div class="col-auto">
                                <label class="colorinput">
                                  <input
                                    name="color"
                                    type="checkbox"
                                    value="info"
                                    class="colorinput-input"
                                  />
                                  <span class="colorinput-color bg-info"></span>
                                </label>
                              </div>
                              <div class="col-auto">
                                <label class="colorinput">
                                  <input
                                    name="color"
                                    type="checkbox"
                                    value="success"
                                    class="colorinput-input"
                                  />
                                  <span
                                    class="colorinput-color bg-success"
                                  ></span>
                                </label>
                              </div>
                              <div class="col-auto">
                                <label class="colorinput">
                                  <input
                                    name="color"
                                    type="checkbox"
                                    value="danger"
                                    class="colorinput-input"
                                  />
                                  <span class="colorinput-color bg-danger"></span>
                                </label>
                              </div>
                              <div class="col-auto">
                                <label class="colorinput">
                                  <input
                                    name="color"
                                    type="checkbox"
                                    value="warning"
                                    class="colorinput-input"
                                  />
                                  <span
                                    class="colorinput-color bg-warning"
                                  ></span>
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="form-label">Size</label>
                            <div class="selectgroup w-100">
                              <label class="selectgroup-item">
                                <input
                                  type="radio"
                                  name="value"
                                  value="50"
                                  class="selectgroup-input"
                                  checked=""
                                />
                                <span class="selectgroup-button">S</span>
                              </label>
                              <label class="selectgroup-item">
                                <input
                                  type="radio"
                                  name="value"
                                  value="100"
                                  class="selectgroup-input"
                                />
                                <span class="selectgroup-button">M</span>
                              </label>
                              <label class="selectgroup-item">
                                <input
                                  type="radio"
                                  name="value"
                                  value="150"
                                  class="selectgroup-input"
                                />
                                <span class="selectgroup-button">L</span>
                              </label>
                              <label class="selectgroup-item">
                                <input
                                  type="radio"
                                  name="value"
                                  value="200"
                                  class="selectgroup-input"
                                />
                                <span class="selectgroup-button">XL</span>
                              </label>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="form-label">Icons input</label>
                            <div class="selectgroup w-100">
                              <label class="selectgroup-item">
                                <input
                                  type="radio"
                                  name="transportation"
                                  value="2"
                                  class="selectgroup-input"
                                />
                                <span
                                  class="selectgroup-button selectgroup-button-icon"
                                  ><i class="icon-screen-smartphone"></i
                                ></span>
                              </label>
                              <label class="selectgroup-item">
                                <input
                                  type="radio"
                                  name="transportation"
                                  value="1"
                                  class="selectgroup-input"
                                  checked=""
                                />
                                <span
                                  class="selectgroup-button selectgroup-button-icon"
                                  ><i class="icon-screen-tablet"></i
                                ></span>
                              </label>
                              <label class="selectgroup-item">
                                <input
                                  type="radio"
                                  name="transportation"
                                  value="6"
                                  class="selectgroup-input"
                                />
                                <span
                                  class="selectgroup-button selectgroup-button-icon"
                                  ><i class="icon-screen-desktop"></i
                                ></span>
                              </label>
                              <label class="selectgroup-item">
                                <input
                                  type="radio"
                                  name="transportation"
                                  value="6"
                                  class="selectgroup-input"
                                />
                                <span
                                  class="selectgroup-button selectgroup-button-icon"
                                  ><i class="fa fa-times"></i
                                ></span>
                              </label>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="form-label d-block">Icon input</label>
                            <div
                              class="selectgroup selectgroup-secondary selectgroup-pills"
                            >
                              <label class="selectgroup-item">
                                <input
                                  type="radio"
                                  name="icon-input"
                                  value="1"
                                  class="selectgroup-input"
                                  checked=""
                                />
                                <span
                                  class="selectgroup-button selectgroup-button-icon"
                                  ><i class="fa fa-sun"></i
                                ></span>
                              </label>
                              <label class="selectgroup-item">
                                <input
                                  type="radio"
                                  name="icon-input"
                                  value="2"
                                  class="selectgroup-input"
                                />
                                <span
                                  class="selectgroup-button selectgroup-button-icon"
                                  ><i class="fa fa-moon"></i
                                ></span>
                              </label>
                              <label class="selectgroup-item">
                                <input
                                  type="radio"
                                  name="icon-input"
                                  value="3"
                                  class="selectgroup-input"
                                />
                                <span
                                  class="selectgroup-button selectgroup-button-icon"
                                  ><i class="fa fa-tint"></i
                                ></span>
                              </label>
                              <label class="selectgroup-item">
                                <input
                                  type="radio"
                                  name="icon-input"
                                  value="4"
                                  class="selectgroup-input"
                                />
                                <span
                                  class="selectgroup-button selectgroup-button-icon"
                                  ><i class="fa fa-cloud"></i
                                ></span>
                              </label>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="form-label">Your skills</label>
                            <div class="selectgroup selectgroup-pills">
                              <label class="selectgroup-item">
                                <input
                                  type="checkbox"
                                  name="value"
                                  value="HTML"
                                  class="selectgroup-input"
                                  checked=""
                                />
                                <span class="selectgroup-button">HTML</span>
                              </label>
                              <label class="selectgroup-item">
                                <input
                                  type="checkbox"
                                  name="value"
                                  value="CSS"
                                  class="selectgroup-input"
                                />
                                <span class="selectgroup-button">CSS</span>
                              </label>
                              <label class="selectgroup-item">
                                <input
                                  type="checkbox"
                                  name="value"
                                  value="PHP"
                                  class="selectgroup-input"
                                />
                                <span class="selectgroup-button">PHP</span>
                              </label>
                              <label class="selectgroup-item">
                                <input
                                  type="checkbox"
                                  name="value"
                                  value="JavaScript"
                                  class="selectgroup-input"
                                />
                                <span class="selectgroup-button">JavaScript</span>
                              </label>
                              <label class="selectgroup-item">
                                <input
                                  type="checkbox"
                                  name="value"
                                  value="Ruby"
                                  class="selectgroup-input"
                                />
                                <span class="selectgroup-button">Ruby</span>
                              </label>
                              <label class="selectgroup-item">
                                <input
                                  type="checkbox"
                                  name="value"
                                  value="Ruby"
                                  class="selectgroup-input"
                                />
                                <span class="selectgroup-button">Ruby</span>
                              </label>
                              <label class="selectgroup-item">
                                <input
                                  type="checkbox"
                                  name="value"
                                  value="C++"
                                  class="selectgroup-input"
                                />
                                <span class="selectgroup-button">C++</span>
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                          <label class="mb-3"><b>Form Group Default</b></label>
                          <div class="form-group form-group-default">
                            <label>Input</label>
                            <input
                              id="Name"
                              type="text"
                              class="form-control"
                              placeholder="Fill Name"
                            />
                          </div>
                          <div class="form-group form-group-default">
                            <label>Select</label>
                            <select
                              class="form-select"
                              id="formGroupDefaultSelect"
                            >
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                          </div>
                          <label class="mt-3 mb-3"
                            ><b>Form Floating Label</b></label
                          >
                          <div class="form-floating form-floating-custom mb-3">
                            <input
                              type="email"
                              class="form-control"
                              id="floatingInput"
                              placeholder="name@example.com"
                            />
                            <label for="floatingInput">Email address</label>
                          </div>
                          <div class="form-floating form-floating-custom mb-3">
                            <select
                              class="form-select"
                              id="selectFloatingLabel"
                              required
                            >
                              <option selected>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                            <label for="selectFloatingLabel">Select</label>
                          </div>
  
                          <div class="form-group">
                            <label for="largeInput">Large Input</label>
                            <input
                              type="text"
                              class="form-control form-control-lg"
                              id="largeInput"
                              placeholder="Large Input"
                            />
                          </div>
                          <div class="form-group">
                            <label for="largeInput">Default Input</label>
                            <input
                              type="text"
                              class="form-control form-control"
                              id="defaultInput"
                              placeholder="Default Input"
                            />
                          </div>
                          <div class="form-group">
                            <label for="smallInput">Small Input</label>
                            <input
                              type="text"
                              class="form-control form-control-sm"
                              id="smallInput"
                              placeholder="Small Input"
                            />
                          </div>
                          <div class="form-group">
                            <label for="largeSelect">Large Select</label>
                            <select
                              class="form-select form-control-lg"
                              id="largeSelect"
                            >
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="defaultSelect">Default Select</label>
                            <select
                              class="form-select form-control"
                              id="defaultSelect"
                            >
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="smallSelect">Small Select</label>
                            <select
                              class="form-select form-control-sm"
                              id="smallSelect"
                            >
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                          </div>
                        </div>
                      </div> -->
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
