<div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Tambah Jenis Produk
                            
                        </header>
                        <div class="panel-body">
                            <div class=" form">
                                    <?php echo form_open('Jenis_produk/Insert', array('class' => 'cmxform form-horizontal', ));?>
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">Name Jenis Produk</label>
                                        <div class="col-lg-6">
                                            
                                            <input id="nama" name="jenis_produk" type="text" class="form-control">
                                        </div>
                                    </div>
                                    
                                    <div class=" col-lg-6">
                                    <div class="col-lg-6">
                                     <a href="<?php echo base_url()?>Jenis_produk/List_jenis_produk"><button type="button" class="waves-effect waves-light btn white m-b-xs">KEMBALI</button></a>

                                    <button type="submit" class="waves-effect waves-light btn blue m-b-xs text-right">SIMPAN</button>
                                </div>
                                </div>
                                <?php echo form_close();?>
                            </div>

                        </div>
                    </section>
                </div>
            </div>