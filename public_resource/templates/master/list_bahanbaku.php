<main class="container clear">
  <div class="content">
    <h1>Data Bahan Baku</h1>
    <table id="idtbl">
      <thead>
        <tr>
            <th>ID Bahan Baku</th>
            <th>Nama Bahan Baku</th>
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
          url: 'models/master.php?list=bahan-baku',
          dataSrc: ''
        },
        columns: [
            { data: 'id_bahanbaku' },
            { data: 'nama_bahanbaku' }
        ]
    } );
} );
</script>
