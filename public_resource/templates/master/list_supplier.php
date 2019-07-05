<main class="container clear">
  <div class="content">
    <h1>Data Supplier</h1>
    <table id="idtbl">
      <thead>
        <tr>
            <th>ID Supplier</th>
            <th>Nama Supplier</th>
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
          url: 'models/master.php?list=supplier',
          dataSrc: ''
        },
        columns: [
            { data: 'id_supplier' },
            { data: 'nama_supplier' }
        ]
    } );
} );
</script>
