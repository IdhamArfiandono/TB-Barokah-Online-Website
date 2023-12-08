<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Data Barang -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"
                                style="font-size:20px">
                                Data Barang</div>
                        </div>
                        <div class="col-auto">
                            <a href="<?=base_url('admin/data_barang')?>">
                                <i class="fa fa-edit fa-2x text-gray-300">
                            </a></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Invoice -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1" style="font-size:20px">
                                Invoice</div>
                        </div>
                        <div class="col-auto">
                            <a href="<?=base_url('admin/invoice')?>"><i
                                    class="fas fa-fw fa-money-bill fa-2x text-gray-300"></a></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->