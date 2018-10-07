<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url('assets/adminlte/dist/img/user2-160x160.jpg') ?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Nama User</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                    <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MENU UTAMA</li>
            <li>
                <a href="<?php echo site_url('Dashboard1') ?>">
                    <i class="fa fa-dashboard"></i> <span>Dashboard 1</span></i>
                </a>
            </li>
            <li>
                <a href="<?php echo site_url('Dashboard2') ?>">
                    <i class="fa fa-calendar"></i> <span>Dashboard 2</span></i>
                </a>
            </li>
            <li>
                <a href="<?php echo site_url('tampilsatu') ?>">
                    <i class="fa fa-pie-chart"></i> <span>tampilan satu</span></i>
                </a>
            </li>
            <li>
                <a href="<?php echo site_url('tampildua') ?>">
                    <i class="fa fa-envelope"></i> <span>tampilan dua</span></i>
                </a>
            </li>
            <li>
                <a href="<?php echo site_url('tampiltiga') ?>">
                    <i class="fa fa-folder"></i> <span>tampilan tiga</span></i>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">