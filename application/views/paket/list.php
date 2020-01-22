<div class="table-agile-info">
 <div class="panel panel-default">
  <a href="<?php echo base_url()?>Paket/Input_paket"><button type="button" class="waves-effect waves-light btn white m-b-xs">Tambah</button></a>
    <div class="panel-heading">
     Paket
    </div>
    <div>
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead>
          <tr>
            <th data-breakpoints="xs">No</th>
            <th>Nama Paket</th>
            <th>Harga</th>
            <th data-breakpoints="xs">Opsi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1;
          foreach ($listpaket as $data){?>
          <tr>
          <!-- <tr data-expanded="true"> -->
            <td><?php echo $no ?></td>
            <td><?php echo $data->nama_paket?></td>
            <td><?php echo $data->harga_paket ?></td>
            <td>
              <a href="<?php echo base_url()?>Paket/edit/<?php echo $data->id_paket?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
              <a href="<?php echo base_url()?>Paket/Delete/<?php echo $data->id_paket?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
            </td>
          </tr>
          <?php $no++;}?>
          
        </tbody>
      </table>
    </div>
  </div>
</div>