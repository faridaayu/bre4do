<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     User
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
            <th>Username</th>
            <th>Telepon</th>
            <th>Email</th>
            <th>Level</th>
            <th data-breakpoints="xs">Opsi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1;
          foreach ($listuser as $data){?>
          <tr>
          <!-- <tr data-expanded="true"> -->
            <td><?php echo $no ?></td>
            <td><?php echo $data->nama?></td>
            <td><?php echo $data->username ?></td>
            <td><?php echo $data->telepon?></td>
            <td><?php echo $data->email?></td>
            <td><?php echo $data->level?></td>
            
            <td>
              <a href="<?php echo base_url()?>User/edit/<?php echo $data->id_user?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
              <a href="<?php echo base_url()?>User/Delete/<?php echo $data->id_user?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
            </td>
          </tr>
          <?php $no++;}?>
          
        </tbody>
      </table>
    </div>
  </div>
</div>