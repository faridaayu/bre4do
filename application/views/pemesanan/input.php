<div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Tambah Pesanan
                           
                        </header>
                        <div class="panel-body">
                            <div class=" form">
                                    <?php echo form_open_multipart('Pemesanan/Insert', array('class' => 'cmxform form-horizontal', ));?>
                                    <?php echo @$error;?>
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">tanggal Pesanan</label>
                                        <div class="col-lg-6">
                                            
                                            <input id="tgl_pesan" name="tgl_pesan" type="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">waktu pesan</label>
                                        <div class="col-lg-6">
                                            
                                            <input id="wkt_pesan" name="wkt_pesan" type="number" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">metode bayar</label>
                                        <div class="col-lg-6">
                                        <select name="metode_bayar" class="form-control">
                                        <!-- <option>Pilih Barang</option> -->
                                        <?php foreach ($listmetode as $metode) { ?>
                                        <option 
                                        value="<?php echo $metode->id_metode_bayar?>"><?php echo $metode->metode_bayar?></option>
                                        <?php }?>
                                        </select>
                                       </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">Driver</label>
                                        <div class="col-lg-6">
                                        <select name="nama" class="form-control">
                                        <!-- <option>Pilih Barang</option> -->
                                        <?php foreach ($listdriver as $driver) { ?>
                                        <option 
                                        value="<?php echo $driver->id_Driver?>"><?php echo $driver->nama?></option>
                                        <?php }?>
                                        </select>
                                       </div>
                                    </div>
                                   <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">tanggal kirim</label>
                                        <div class="col-lg-6">
                                            
                                            <input id="tgl_kirim" name="tgl_kirim" type="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">status</label>
                                        <div class="col-lg-6">
                                            
                                            <input id="status" name="status" type="text" class="form-control">
                                        </div>
                                    </div>
                                    
                                    <div class=" col-lg-6">
                                    <div class="col-lg-6">
                                    <a href="<?php echo base_url()?>Pemesanan/List_pemesanan"><button type="button" class="waves-effect waves-light btn white m-b-xs">KEMBALI</button></a>


                                    <button type="submit" class="waves-effect waves-light btn blue m-b-xs text-right">SIMPAN</button>
                                </div>
                                </div>
                                <?php echo form_close();?>
                            </div>

                        </div>
                    </section>
                </div>
            </div>