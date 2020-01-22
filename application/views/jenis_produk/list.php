<div class="table-agile-info">
 <div class="panel panel-default">
  <a href="<?php echo base_url()?>Jenis_produk/Input_jenis_produk"><button type="button" class="waves-effect waves-light btn white m-b-xs">Tambah</button></a>
    <div class="panel-heading">
     Jenis Produk
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
            <th>Nama Jenis Produk</th>
            <th data-breakpoints="xs">Opsi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1;
          foreach ($listjenis_produk as $data){?>
          <tr>
          <!-- <tr data-expanded="true"> -->
            <td><?php echo $no ?></td>
            <td><?php echo $data->jenis_produk?></td>
            <td>
              <a href="<?php echo base_url()?>Jenis_produk/edit/<?php echo $data->id_jenis_produk?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
              <a href="<?php echo base_url()?>Jenis_produk/Delete/<?php echo $data->id_jenis_produk?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
            </td>
          </tr>
          <?php $no++;}?>
          
        </tbody>
      </table>
    </div>
  </div>
</div>