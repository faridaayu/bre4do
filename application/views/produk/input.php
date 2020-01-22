<div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Tambah Produk
                           
                        </header>
                        <div class="panel-body">
                            <div class=" form">
                                    <?php echo form_open_multipart('Produk/Insert', array('class' => 'cmxform form-horizontal', ));?>
                                    <?php echo @$error;?>
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">Name Produk</label>
                                        <div class="col-lg-6">
                                            
                                            <input id="nama" name="nama" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">Harga</label>
                                        <div class="col-lg-6">
                                            
                                            <input id="harga_produk" name="harga_produk" type="number" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">Gambar</label>
                                        <div class="col-lg-6">
                                            
                                            <input id="gambar" name="gambar" type="File" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">Stok</label>
                                        <div class="col-lg-6">
                                            
                                            <input id="stok" name="stok" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">Jenis Produk</label>
                                        <div class="col-lg-6">
                                        <select name="jenis_produk" class="form-control">
                                        <!-- <option>Pilih Barang</option> -->
                                        <?php foreach ($jenis_produk as $jenis) { ?>
                                        <option> </option>}
                                        option
                                        <option 
                                        value="<?php echo $jenis->id_jenis_produk?>"><?php echo $jenis->jenis_produk?></option>
                                        <?php }?>
                                        </select>
                                       </div>
                                    </div>
                                    
                                    <div class=" col-lg-6">
                                    <div class="col-lg-6">
                                    <a href="<?php echo base_url()?>Produk/List_produk"><button type="button" class="waves-effect waves-light btn white m-b-xs">KEMBALI</button></a>

                                    <button type="submit" class="waves-effect waves-light btn blue m-b-xs text-right">SIMPAN</button>
                                </div>
                                </div>
                                <?php echo form_close();?>
                            </div>

                        </div>
                    </section>
                </div>
            </div>