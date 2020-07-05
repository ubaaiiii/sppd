<!-- Add rows table -->
<section id="add-row">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <button id="add-data-pegawai" class="btn btn-primary mb-2" data-toggle="modal" data-backdrop="false" data-target="#backdrop">
                          <i class="feather icon-user-plus"></i>&nbsp; Tambah Anggota
                        </button>
                        <div class="table-responsive">
                            <table class="table" id="tabel-data-pegawai">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>NIP</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Jabatan</th>
                                        <th>Status</th>
                                        <th>No. Telpon</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Add rows table -->

<script>
  $(document).ready(function(){
    $('#judul-halaman').text('Tabel Data Pegawai');


    var tPegawai = $('#tabel-data-pegawai').DataTable({
        ajax:{
            url: base_url() + "data/pegawai",
            type:"POST",
            dataSrc: ""
        },
        columns:[
        {data:"nip"},
        {data:"nip"},
        {data:"nama"},
        {data:"jk"},
        {data:"jab"},
        {data:"status"},
        {data:"telp"},
        {data:"id_jenis_kegiatan",
         render: function(data,type,row){
           var actions = '<button type="button" id="edit" data-id="'+data+'" class="btn btn-icon rounded-circle btn-outline-warning mr-1 waves-effect waves-light" data-toggle="tooltip" data-placement="bottom" data-original-title="Ubah"><i class="feather icon-edit"></i></button>';
           actions = actions.concat('<button type="button" id="delete" data-id="'+data+'" class="btn btn-icon rounded-circle btn-outline-danger mr-1 waves-effect waves-light" data-toggle="tooltip" data-placement="bottom" data-original-title="Hapus"><i class="feather icon-trash"></i></button>');
           return actions;
         }},
      ],
      fnDrawCallback: function (oSettings) {
        $('#tabel-data-pegawai tbody tr button').each(function () {
          $(this).tooltip({
              html: true
          });
        })
      },
      columnDefs: [ {
        "searchable": false,
        "orderable": false,
        "targets": [0,7]
      } ],
      order: [ 2, 'asc' ],
    });

    tPegawai.on( 'order.dt search.dt', function () {
      tPegawai.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
        cell.innerHTML = i+1;
      });
    }).draw();
  });
</script>
