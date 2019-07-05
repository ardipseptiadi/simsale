<main class="container clear">
  <div class="content">
    <h1>Data Produk</h1>

    <div id="alertProduk">
    </div>
    <a class="btn btn-primary" data-toggle="modal" data-target="#modalTambahProduk" href="">Tambah</a>

    <table id="idtbl">
      <thead>
        <tr>
            <th>ID Produk</th>
            <th>Nama Produk</th>
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
<div class="modal fade" id="modalTambahProduk" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tambah Produk</h4>
      </div>
      <div class="modal-body">
        <form id="form-tambah-produk" class="form-inline">
          <div class="form-group">
            <label for="idProdukTambah">ID Produk</label>
            <input type="text" readonly name="id-produk-tambah" class="form-control" id="idProdukTambah" placeholder="contoh: SP001...">
          </div>
          <div class="form-group">
            <label for="namaProdukTambah">Nama Produk</label>
            <input type="text" name="nama-produk-tambah" class="form-control" id="namaProdukTambah" placeholder="contoh: Sale Pisang...">
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
<div class="modal fade" id="modalUbahProduk" tabindex="-1" role="dialog" aria-labelledby="modalUbahProdukLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Ubah Produk</h4>
      </div>
      <div class="modal-body">
        <form id="form-ubah-produk" class="form-inline">
          <div class="form-group">
            <label for="idProdukTambah">ID Produk</label>
            <input type="text" readonly name="id-produk-ubah" class="form-control" id="idProdukUbah">
          </div>
          <div class="form-group">
            <label for="namaProdukTambah">Nama Produk</label>
            <input type="text" name="nama-produk-ubah" class="form-control" id="namaProdukUbah">
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
<div class="modal fade bs-example-modal-sm" id="modalDeleteProduk" tabindex="-1" role="dialog" aria-labelledby="modalDeleteProdukLabel">
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

    var tableProduk = $('#idtbl').DataTable( {
        ajax: {
          url: 'models/master.php?list=produk',
          dataSrc: ''
        },
        columns: [
            { data: 'id_produk' },
            { data: 'nama_produk' },
            {
              data: null,
              defaultContent:"<a type=\"button\" class=\"btn btn-primary btn-sm ubah-produk\"> <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></a> <a type=\"button\" class=\"btn btn-primary btn-sm hapus-produk\"> <span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></a>",
              searchable:false,
              sortable:false
            }
        ]
    } );

    $('#idtbl tbody').on( 'click', 'a.ubah-produk', function () {
        var data = tableProduk.row( $(this).parents('tr')[0] ).data();
        $('#modalUbahProduk').modal('show');
        $('#modalUbahProduk').find('#idProdukUbah').val(data.id_produk);
        $('#modalUbahProduk').find('#namaProdukUbah').val(data.nama_produk);
    } );


    $('#idtbl tbody').on( 'click', 'a.hapus-produk', function () {
        var data = tableProduk.row( $(this).parents('tr')[0] ).data();
        $('#modalDeleteProduk').modal('show');
        $('#modalDeleteProduk').find('#btnDelete').data('idprod',data.id_produk);
    } );

    $('#modalDeleteProduk').on('hide.bs.modal',function(){
      $('#btnDelete').attr('data',null);
    });
    $('#btnDelete').on('click',function(){
      $.ajax({
        method:'POST',
        url:'crud/produk/hapus.php',
        data:{id:$(this).data('idprod')},
        success:function(data){
          $('#modalDeleteProduk').modal('hide');
          tableProduk.ajax.reload();
        }
      });
    });

    $('#modalTambahProduk').on('show.bs.modal',function(e){
      $('#idProdukTambah').val('');
      $('#namaProdukTambah').val('');
      $.ajax({
        method:'GET',
        url:'crud/produk/last-id.php',
        success:function(data){
          // con
          $('#idProdukTambah').val(data);
        }
      });
    });

    $('#modalTambahProduk').on('shown.bs.modal',function(e){
      $('#namaProdukTambah').focus();
    });

    $('#btnSimpanTambah').on('click',function(){
      $.ajax({
        method:'POST',
        url:'crud/produk/tambah.php',
        data:$('#form-tambah-produk').serialize(),
        success:function(data){
          $('#modalTambahProduk').modal('toggle');
          tableProduk.ajax.reload();
          var alertType='';
          switch (data.status) {
            case 200:
              alertType = 'success';
              alertMessage = 'Data Produk telah ditambahkan';
              break;
            case 500:
              alertType = 'danger';
              alertMessage = 'Terjadi Kesalahan';
              break;
            default:
              alertType = 'warning';
              alertMessage = 'Hasil Tidak Diketahui';
          }
          $('#alertProduk').empty();
          var alert = '';
          alert += '<div class="alert alert-'+alertType+'" role="alert">';
          alert += '<strong>'+data.message+'!</strong> ';
          alert += alertMessage;
          alert += '</div>';
          $('#alertProduk').append(alert);
          window.scrollTo({ top: 0, behavior: 'smooth' });
        }
      });
    });

    $('#btnSimpanUbah').on('click',function(){

        $.ajax({
          method:'POST',
          url:'crud/produk/ubah.php',
          data:$('#form-ubah-produk').serialize(),
          success:function(data){
            $('#modalUbahProduk').modal('toggle');
            tableProduk.ajax.reload();
            var alertType='';
            switch (data.status) {
              case 200:
                alertType = 'success';
                alertMessage = 'Data Produk telah diubah';
                break;
              case 500:
                alertType = 'danger';
                alertMessage = 'Terjadi Kesalahan';
                break;
              default:
                alertType = 'warning';
                alertMessage = 'Hasil Tidak Diketahui';
            }
            $('#alertProduk').empty();
            var alert = '';
            alert += '<div class="alert alert-'+alertType+'" role="alert">';
            alert += '<strong>'+data.message+'!</strong> ';
            alert += alertMessage;
            alert += '</div>';
            $('#alertProduk').append(alert);
            window.scrollTo({ top: 0, behavior: 'smooth' });
          }
        });
    });
} );
</script>
