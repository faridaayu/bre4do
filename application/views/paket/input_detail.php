<div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Tambah Paket
                            
                        </header>
                        <div class="panel-body">
                            <div class=" form">
                                    <?php echo form_open('detail_paket/Insert', array('class' => 'cmxform form-horizontal', ));?>
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">Nama Paket</label>
                                        <div class="col-lg-6">
                                            
                                           <select name="nama_paket" class="form-control">
                                        <!-- <option>Pilih Barang</option> -->
                                        <?php foreach ($list_paket as $paket) { ?>
                                        <option 
                                        value="<?php echo $paket->id_paket?>"><?php echo $paket->nama_paket?></option>
                                        <?php }?>
                                        </select>

                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">Nama Produk</label>
                                        <div class="col-lg-6">
                                            <select name="nama_produk" class="form-control">
                                        <!-- <option>Pilih Barang</option> -->
                                        <?php foreach ($list_produk as $produk) { ?>
                                        <option 
                                        value="<?php echo $produk->id_produk?>"><?php echo $produk->nama_produk?></option>
                                        <?php }?>
                                        </select>
                                            
                                        </div>
                                    </div>
                                    
                                    <div class=" col-lg-6">
                                    <div class="col-lg-6">
                                   <a href="<?php echo base_url()?>Paket/List_paket"><button type="button" class="waves-effect waves-light btn white m-b-xs">KEMBALI</button></a>


                                    <button type="submit" class="waves-effect waves-light btn blue m-b-xs text-right">SIMPAN</button>
                                </div>
                                </div>
                                <?php echo form_close();?>
                            </div>

                        </div>
                    </section>
                </div>
            </div>