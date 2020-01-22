<div class="table-agile-info">
 <div class="panel panel-default">
  <a href="<?php echo base_url()?>Metode_bayar/Input_metode_bayar"><button type="button" class="waves-effect waves-light btn white m-b-xs">Tambah</button></a>
    <div class="panel-heading">
     Metode Bayar
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
            <th>Nama Metode bayar</th>
            <th data-breakpoints="xs">Opsi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1;
          foreach ($listmetode_bayar as $data){?>
          <tr>
          <!-- <tr data-expanded="true"> -->
            <td><?php echo $no ?></td>
            <td><?php echo $data->metode_bayar?></td>
            <td>
              <a href="<?php echo base_url()?>Metode_bayar/edit/<?php echo $data->id_metode_bayar?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
              <a href="<?php echo base_url()?>Metode_bayar/Delete/<?php echo $data->id_metode_bayar?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
            </td>
          </tr>
          <?php $no++;}?>
          
        </tbody>
      </table>
    </div>
  </div>
</div>