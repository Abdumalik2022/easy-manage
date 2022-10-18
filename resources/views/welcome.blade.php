<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">
   <title>EasyManage</title>
   <link href="{{ asset('backend/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
   <link href="{{ asset('backend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link href="{{ asset('backend/css/ruang-admin.min.css') }}" rel="stylesheet">
   <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
</head>


<body id="page-top">
<div id="app">
   <div id="wrapper">
      <!-- Sidebar -->
      <nav id="sidebar"
           style="display: none"
           v-show="$route.path === '/' || $route.path === '/register' || $route.path === '/forget' ? false : true">
         <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
            <router-link class="sidebar-brand d-flex align-items-center justify-content-center" to="/home">
               <div class="sidebar-brand-icon">
                  <img src="{{ asset('backend/img/logo/logo2.png') }}">
               </div>
               <div class="sidebar-brand-text mx-3">EasyManage</div>
            </router-link>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
               <router-link class="nav-link" to="/home">
                  <i class="fas fa-fw fa-tachometer-alt"></i>
                  <span>Dashboard</span></router-link>
            </li>
            <li class="nav-item active">
               <router-link class="nav-link" to="/pos">
                  <i class="fas fa-fw fa-tachometer-alt"></i>
                  <span>POS</span></router-link>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
               Features
            </div>


            <li class="nav-item">
               <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
                  aria-expanded="true" aria-controls="collapseBootstrap">
                  <i class="far fa-fw fa-window-maximize"></i>
                  <span>Employee</span>
               </a>
               <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap"
                    data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                     <router-link class="collapse-item" to="/create-employee">Add Employee</router-link>
                     <router-link class="collapse-item" to="/employee">All Employee</router-link>
                  </div>
               </div>
            </li>


            <li class="nav-item">
               <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap1"
                  aria-expanded="true"
                  aria-controls="collapseBootstrap1">
                  <i class="fab fa-fw fa-wpforms"></i>
                  <span>Suppliers</span>
               </a>
               <div id="collapseBootstrap1" class="collapse" aria-labelledby="headingForm"
                    data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                     <router-link class="collapse-item" to="/create-supplier">Add Suppliers</router-link>
                     <router-link class="collapse-item" to="/supplier">All Suppliers</router-link>
                  </div>
               </div>
            </li>


            <li class="nav-item">
               <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable1"
                  aria-expanded="true"
                  aria-controls="collapseTable1">
                  <i class="fas fa-fw fa-table"></i>
                  <span>Categories</span>
               </a>
               <div id="collapseTable1" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                     <router-link class="collapse-item" to="/create-category">Add Category</router-link>
                     <router-link class="collapse-item" to="/category">All Categories</router-link>
                  </div>
               </div>
            </li>


            <li class="nav-item">
               <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable"
                  aria-expanded="true"
                  aria-controls="collapseTable">
                  <i class="fas fa-fw fa-table"></i>
                  <span>Products</span>
               </a>
               <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                     <router-link class="collapse-item" to="/create-product">Add Product</router-link>
                     <router-link class="collapse-item" to="/product">All Products</router-link>
                  </div>
               </div>
            </li>


            <li class="nav-item">
               <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable2"
                  aria-expanded="true"
                  aria-controls="collapseTable2">
                  <i class="fas fa-fw fa-table"></i>
                  <span>Expenses</span>
               </a>
               <div id="collapseTable2" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                     <router-link class="collapse-item" to="/create-expense">Add Expense</router-link>
                     <router-link class="collapse-item" to="/expense">All Expenses</router-link>
                  </div>
               </div>
            </li>


            <li class="nav-item">
               <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable5"
                  aria-expanded="true"
                  aria-controls="collapseTable1">
                  <i class="fas fa-fw fa-table"></i>
                  <span>Salary</span>
               </a>
               <div id="collapseTable5" class="collapse" aria-labelledby="headingTable5"
                    data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                     <router-link class="collapse-item" to="/given-salary">Pay Salary</router-link>
                     <router-link class="collapse-item" to="/salary">All Salaries</router-link>
                  </div>
               </div>
            </li>


            <li class="nav-item">
               <router-link class="nav-link" to="/stock">
                  <i class="far fa-fw fa-window-maximize"></i>
                  <span>Stock</span>
               </router-link>
            </li>


            <li class="nav-item">
               <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable6"
                  aria-expanded="true"
                  aria-controls="collapseTable6">
                  <i class="fas fa-fw fa-table"></i>
                  <span>Customers</span>
               </a>
               <div id="collapseTable6" class="collapse" aria-labelledby="headingTable6"
                    data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                     <router-link class="collapse-item" to="/create-customer">Add Customer</router-link>
                     <router-link class="collapse-item" to="/customer">All Customers</router-link>
                  </div>
               </div>
            </li>


            <li class="nav-item">
               <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable7"
                  aria-expanded="true"
                  aria-controls="collapseTable7">
                  <i class="fas fa-fw fa-table"></i>
                  <span>Orders</span>
               </a>
               <div id="collapseTable7" class="collapse" aria-labelledby="headingTable7"
                    data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                     <router-link class="collapse-item" to="/order">Today's Order</router-link>
                     <router-link class="collapse-item" to="/search">Search</router-link>
                  </div>
               </div>
            </li>

            <hr class="sidebar-divider">
         </ul>
      </nav>
      <!-- Sidebar -->

      <div id="content-wrapper" class="d-flex flex-column">
         <div id="content">


            <!-- TopBar -->
            <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top"
                 v-show="$route.path === '/' || $route.path === '/register' || $route.path === '/forget' ? false : true"
                 style="display: none" id="topbar"
            >
               <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3 bg-light">
                  <i class="fa fa-bars"></i>
               </button>
               <ul class="navbar-nav ml-auto">

                  <div class="topbar-divider d-none d-sm-block"></div>
                  <li class="nav-item dropdown no-arrow">
                     <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <img class="img-profile rounded-circle" src="{{ asset('backend/img/boy.png') }}"
                             style="max-width: 60px">
                        <router-link to="/logout" class="ml-2 d-none d-lg-inline text-white small">Logout</router-link>
                     </a>
                     <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                          aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">
                           <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                           Profile
                        </a>
                        <a class="dropdown-item" href="#">
                           <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                           Settings
                        </a>
                        <a class="dropdown-item" href="#">
                           <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                           Activity Log
                        </a>
                        <div class="dropdown-divider"></div>
                        <router-link class="dropdown-item" to="/logout" data-toggle="modal"
                                     data-target="#logoutModal">
                           <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                           Logout
                        </router-link>
                     </div>
                  </li>
               </ul>
            </nav
            >
            <!-- Topbar -->

            <!-- Container Fluid-->
            <div class="container-fluid" id="container-wrapper">
               <router-view></router-view>
            </div>
            <!---Container Fluid-->
         </div>

         <!-- Footer -->
         <footer class="sticky-footer bg-white">
            <div class="container my-auto">
               <div class="copyright text-center my-auto">
            <span>copyright &copy;  -
              <b><a href="google.com" target="_blank"> developed by Abdulmalikk</a></b>
            </span>
               </div>
            </div>
         </footer>
         <!-- Footer -->
      </div>
   </div>

</div>


<!-- Scroll to top -->
<a class="scroll-to-top rounded" href="#page-top">
   <i class="fas fa-angle-up"></i>
</a>

<script src="{{ asset('backend/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
<script src="{{ asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('backend/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('backend/js/ruang-admin.min.js') }}"></script>
<script src="{{ asset('backend/vendor/chart.js/Chart.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
<script src="{{ asset('backend/js/demo/chart-area-demo.js') }}"></script>

<script>
   let token = localStorage.getItem('token')
   if (token) {
      $("#sidebar").css("display", "")
      $("#topbar").css("display", "")
   }

</script>


</body>

</html>
