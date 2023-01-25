<!-- Navbar -->
<nav  class="navbar navbar-expand-lg position-fixed w-100" style="z-index:11111">
    <div class="container-fluid">
      <div class="d-flex align-items-center w-100 justify-content-between">
      <div class="input-group" style="width:20%">
            <div class="form-outline">
            <form action="<?php BURL ?>/task/search" method="POST">
              <input style="background-color:white;" name="search_for" type="search" id="form1" placeholder="Search" class="form-control" />
              <!-- <label class="form-label" for="form1">Search</label> -->
            </div>
            <button type="submit" name="search" class="btn btn-primary">
              <i class="fas fa-search"></i>
            </button>
            </form> 
          </div>
        <div class="dropdown">
          <a
            class="dropdown-toggle d-flex align-items-center hidden-arrow"
            href="#"
            role="button"
            data-mdb-toggle="dropdown"
            aria-expanded="false"
          >
          <i style="font-size:30px; color:white" class="fas fa-sign-out-alt"></i>
          </a>
          <ul
            class="dropdown-menu dropdown-menu-end"
            aria-labelledby="navbarDropdownMenuAvatar"
          >
            <li>
              <a class="dropdown-item" href="<?php BURL ?>/user/logout">Logout</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->



