<div class="table-agile-info">
 <div class="panel panel-default">
  <a href="<?php echo base_url()?>Pemesanan/Input_pemesanan"><button type="button" class="waves-effect waves-light btn white m-b-xs">Tambah</button></a>
    <div class="panel-heading">
     Pesanan
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
            <th>metode bayar</th>
            <th>nama driver</th>
            <th>nama pemesan</th>
            <th>tanggal pesan</th>
            <th>waktu pesan</th>
            <th>alamat</th>
            <th data-breakpoints="xs">Opsi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1;
          foreach ($listpesanan as $data){?>
          <tr>
          <!-- <tr data-expanded="true"> -->
            <td><?php echo $no ?></td>
            <td><?php echo $data->metode_bayar?></td>
            <td><?php echo $data->nama?></td>
            <td><?php echo $data->first_name?></td>
            <td><?php echo $data->tgl_pesan?></td>
            <td><?php echo $data->wkt_pesan?></td>
            <td><?php echo $data->alamat?></td>
          </tr>
          <?php $no++;}?>
          
        </tbody>
      </table>
    </div>
  </div>
</div>