<div class="table-agile-info">
 <div class="panel panel-default">
   <a href="<?php echo base_url()?>Driver/Input_driver"><button type="button" class="waves-effect waves-light btn white m-b-xs">Tambah</button></a>
    <div class="panel-heading">
     Driver
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
            <th>Nama</th>
            <th>Plat Nomor</th>
            <th>Telepon</th>
            <th>Alamat</th>
            <th data-breakpoints="xs">Opsi</th>
          </tr>
        </thead>ss
        <tbody>
          <?php $no = 1;
          foreach ($listdriver as $data){?>
          <tr>
          <!-- <tr data-expanded="true"> -->
            <td><?php echo $no ?></td>
            <td><?php echo $data->nama?></td>
            <td><?php echo $data->plat_nomor ?></td>
            <td><?php echo $data->telepon?></td>
            <td><?php echo $data->alamat?></td>
            <td>
              <a href="<?php echo base_url()?>Driver/edit/<?php echo $data->id_Driver?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
              <a href="<?php echo base_url()?>Driver/Delete/<?php echo $data->id_Driver?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
            </td>
          </tr>
          <?php $no++;}?>

        </tbody>
      </table>
    </div>
  </div>
</div>
