<div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Tambah Metode Bayar
                            
                        </header>
                        <div class="panel-body">
                            <div class=" form">
                                    <?php echo form_open('Metode_bayar/Insert', array('class' => 'cmxform form-horizontal', ));?>
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">Nama Metode bayar</label>
                                        <div class="col-lg-6">
                                            
                                            <input id="nama" name="metode_bayar" type="text" class="form-control">
                                        </div>
                                    </div>
                                    
                                    <div class=" col-lg-6">
                                    <div class="col-lg-6">
                                    <a href="<?php echo base_url()?>Metode_bayar/List_metode_bayar"><button type="button" class="waves-effect waves-light btn white m-b-xs">KEMBALI</button></a>
                                    <button type="submit" class="waves-effect waves-light btn blue m-b-xs text-right">SIMPAN</button>
                                </div>
                                </div>
                                <?php echo form_close();?>
                            </div>

                        </div>
                    </section>
                </div>
            </div>