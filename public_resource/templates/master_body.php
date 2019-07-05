<main class="container clear">
  <div class="content">
    <h1>Data Produk</h1>
    <table id="idtbl">
      <thead>
        <tr>
            <th>ID Produk</th>
            <th>Nama Produk</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
  </div>
  <div class="clear"></div>
</main>
<script type="text/javascript">
$(document).ready( function () {
    
    $('#idtbl').DataTable( {
        ajax: {
          url: 'models/master.php',
          dataSrc: ''
        },
        columns: [
            { data: 'id_produk' },
            { data: 'nama_produk' }
        ]
    } );
} );
</script>
