<aside id="asideMenu" class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo caminhoURL?>" class="brand-link">
      <img src="<?php echo caminhoURL?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SYSTEN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo caminhoURL?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION["nome_usuario"]?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="<?php echo caminhoURL?>" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Pagina inicial
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo caminhoURL?>ordem_os" class="nav-link">
              <i class="nav-icon bi bi-cash-coin text-success  mr-1 "></i>
              <p>
                  ordens serviço
                <span class="right badge badge-danger">15</span>
              </p>
            </a>
          </li>
          <li class="nav-header">configurações</li>
          <li class="nav-item">
            <a href="<?php echo caminhoURL?>cliente" class="nav-link">
              <i class="nav-icon bi bi-people"></i>
              <p>
                 Clientes
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo caminhoURL?>Servicos" class="nav-link">
              <i class="nav-icon bi bi-tools"></i>
              <p>
                 serviços
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>