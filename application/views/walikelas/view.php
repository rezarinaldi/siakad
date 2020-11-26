<section class="content">
    <div class="row">

        <div class="col-xs-12">
            <div class="box box-info">
                <div class="box-header  with-border">
                    <table class="table table-bordered">
                        <tr>
                            <td width="200">Tahun Akademik</td>
                            <td> : <?php echo get_tahun_akademik('tahun_akademik'); ?></td>
                        </tr>
                        <tr>
                            <td>Semester</td>
                            <td> : <?php echo get_tahun_akademik('semester'); ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-xs-12">

            <div class="box box-primary">
                <div class="box-header  with-border">
                    <h3 class="box-title">Data Table Walikelas</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">

                    <table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>KELAS</th>
                                <th>NAMA JURUSAN</th>
                                <th>TINGKATAN</th>
                                <th>NAMA WALIKELAS</th>
                            </tr>
                        </thead>
                    </table>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>

<!-- punya lama -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.0/jquery.dataTables.js"></script> -->
<!-- <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.js"></script> -->

<!-- baru tapi cdn -->
<!-- <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css"> -->

<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

<script type="text/javascript">
    function updateWalikelas(idwalikelas) {
        var id_guru = $("#guru" + idwalikelas).val();
        $.ajax({
            type: 'GET',
            url: '<?php echo base_url() ?>walikelas/update_walikelas',
            data: 'id_walikelas=' + idwalikelas + '&id_guru=' + id_guru,
            success: function(html) {}
        })
    }
</script>

<script>
    $(document).ready(function() {
        var t = $('#mytable').DataTable({
            "ajax": '<?php echo site_url('walikelas/data'); ?>',
            "order": [
                [1, 'asc']
            ],
            "columns": [{
                    "data": null,
                    "width": "50px",
                    "class": "text-center",
                    "orderable": false,
                },
                {
                    "data": "nama_kelas",
                    "width": "150px",
                },
                {
                    "data": "nama_jurusan",
                    "width": "100px;",
                    "class": "text-center",
                },
                {
                    "data": "nama_tingkatan",
                    "class": "text-center",
                },
                {
                    "data": "nama_guru",
                },
            ]
        });

        t.on('order.dt search.dt', function() {
            t.column(0, {
                search: 'applied',
                order: 'applied'
            }).nodes().each(function(cell, i) {
                cell.innerHTML = i + 1;
            });
        }).draw();
    });
</script>