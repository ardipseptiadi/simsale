<main class="container clear">
  <div class="content">
    <h1>Data Permintaan</h1>

    <div id="alertPermintaan">
    </div>
    <a class="btn btn-primary" data-toggle="modal" data-target="#modalTambahPermintaan" href="">Tambah</a>

    <table id="idtbl">
      <thead>
        <tr>
            <th>No Permintaan</th>
            <th>Tanggal Permintaan</th>
            <th>Tanggal Kirim</th>
            <th>Pelanggan</th>
            <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
  </div>
  <div class="clear"></div>
</main>
<!-- Modal -->
<div class="modal fade" id="modalTambahPermintaan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tambah Permintaan</h4>
      </div>
      <div class="modal-body">
        <form id="form-tambah-permintaan" class="form-inline">
          <div class="form-group">
            <label for="idPermintaanTambah">ID Permintaan</label>
            <input type="text" readonly name="id-Permintaan-tambah" class="form-control" id="idPermintaanTambah" placeholder="contoh: SP001...">
          </div>
          <div class="form-group">
            <label for="namaPermintaanTambah">Nama Permintaan</label>
            <input type="text" name="nama-Permintaan-tambah" class="form-control" id="namaPermintaanTambah" placeholder="contoh: Sale Pisang...">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" id="btnBatalTambah" class="btn btn-danger" data-dismiss="modal">Batal</button>
        <button type="button" id="btnSimpanTambah" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal edit -->
<div class="modal fade" id="modalUbahPermintaan" tabindex="-1" role="dialog" aria-labelledby="modalUbahPermintaanLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Ubah Permintaan</h4>
      </div>
      <div class="modal-body">
        <form id="form-ubah-permintaan" class="form-inline">
          <div class="form-group">
            <label for="idPermintaanTambah">ID Permintaan</label>
            <input type="text" readonly name="id-Permintaan-ubah" class="form-control" id="idPermintaanUbah">
          </div>
          <div class="form-group">
            <label for="namaPermintaanTambah">Nama Permintaan</label>
            <input type="text" name="nama-Permintaan-ubah" class="form-control" id="namaPermintaanUbah">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" id="btnBatalUbah" class="btn btn-danger" data-dismiss="modal">Batal</button>
        <button type="button" id="btnSimpanUbah" class="btn btn-primary">Ubah</button>
      </div>
    </div>
  </div>
</div>
<!-- delete confirmation-->
<div class="modal fade bs-example-modal-sm" id="modalDeletePermintaan" tabindex="-1" role="dialog" aria-labelledby="modalDeletePermintaanLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-body">
        Apakah anda yakin akan menghapus?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
        <button type="button" id="btnDelete" class="btn btn-danger">Ya</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
$(document).ready( function () {

    var tablePermintaan = $('#idtbl').DataTable( {
        ajax: {
          url: 'models/transaksi.php?list=permintaan',
          dataSrc: ''
        },
        columns: [
            { data: 'no_permintaan' },
            { data: 'tgl_permintaan' },
            { data: 'tgl_kirim' },
            { data: 'pelanggan' },
            {
              data: null,
              defaultContent:"<a type=\"button\" class=\"btn btn-primary btn-sm ubah-permintaan\"> <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></a> <a type=\"button\" class=\"btn btn-primary btn-sm hapus-Permintaan\"> <span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></a>",
              searchable:false,
              sortable:false
            }
        ]
    } );

    $('#idtbl tbody').on( 'click', 'a.ubah-permintaan', function () {
        var data = tablePermintaan.row( $(this).parents('tr')[0] ).data();
        $('#modalUbahPermintaan').modal('show');
        $('#modalUbahPermintaan').find('#idPermintaanUbah').val(data.id_Permintaan);
        $('#modalUbahPermintaan').find('#namaPermintaanUbah').val(data.nama_Permintaan);
    } );


    $('#idtbl tbody').on( 'click', 'a.hapus-Permintaan', function () {
        var data = tablePermintaan.row( $(this).parents('tr')[0] ).data();
        $('#modalDeletePermintaan').modal('show');
        $('#modalDeletePermintaan').find('#btnDelete').data('idprod',data.id_Permintaan);
    } );

    $('#modalDeletePermintaan').on('hide.bs.modal',function(){
      $('#btnDelete').attr('data',null);
    });
    $('#btnDelete').on('click',function(){
      $.ajax({
        method:'POST',
        url:'crud/Permintaan/hapus.php',
        data:{id:$(this).data('idprod')},
        success:function(data){
          $('#modalDeletePermintaan').modal('hide');
          tablePermintaan.ajax.reload();
        }
      });
    });

    $('#modalTambahPermintaan').on('show.bs.modal',function(e){
      $('#idPermintaanTambah').val('');
      $('#namaPermintaanTambah').val('');
      $.ajax({
        method:'GET',
        url:'crud/Permintaan/last-id.php',
        success:function(data){
          // con
          $('#idPermintaanTambah').val(data);
        }
      });
    });

    $('#modalTambahPermintaan').on('shown.bs.modal',function(e){
      $('#namaPermintaanTambah').focus();
    });

    $('#btnSimpanTambah').on('click',function(){
      $.ajax({
        method:'POST',
        url:'crud/Permintaan/tambah.php',
        data:$('#form-tambah-permintaan').serialize(),
        success:function(data){
          $('#modalTambahPermintaan').modal('toggle');
          tablePermintaan.ajax.reload();
          var alertType='';
          switch (data.status) {
            case 200:
              alertType = 'success';
              alertMessage = 'Data Permintaan telah ditambahkan';
              break;
            case 500:
              alertType = 'danger';
              alertMessage = 'Terjadi Kesalahan';
              break;
            default:
              alertType = 'warning';
              alertMessage = 'Hasil Tidak Diketahui';
          }
          $('#alertPermintaan').empty();
          var alert = '';
          alert += '<div class="alert alert-'+alertType+'" role="alert">';
          alert += '<strong>'+data.message+'!</strong> ';
          alert += alertMessage;
          alert += '</div>';
          $('#alertPermintaan').append(alert);
          window.scrollTo({ top: 0, behavior: 'smooth' });
        }
      });
    });

    $('#btnSimpanUbah').on('click',function(){

        $.ajax({
          method:'POST',
          url:'crud/Permintaan/ubah.php',
          data:$('#form-ubah-permintaan').serialize(),
          success:function(data){
            $('#modalUbahPermintaan').modal('toggle');
            tablePermintaan.ajax.reload();
            var alertType='';
            switch (data.status) {
              case 200:
                alertType = 'success';
                alertMessage = 'Data Permintaan telah diubah';
                break;
              case 500:
                alertType = 'danger';
                alertMessage = 'Terjadi Kesalahan';
                break;
              default:
                alertType = 'warning';
                alertMessage = 'Hasil Tidak Diketahui';
            }
            $('#alertPermintaan').empty();
            var alert = '';
            alert += '<div class="alert alert-'+alertType+'" role="alert">';
            alert += '<strong>'+data.message+'!</strong> ';
            alert += alertMessage;
            alert += '</div>';
            $('#alertPermintaan').append(alert);
            window.scrollTo({ top: 0, behavior: 'smooth' });
          }
        });
    });
} );
</script>
