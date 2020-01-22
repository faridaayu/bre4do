<div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Ubah Metode bayar
                            
                        </header>
                        <div class="panel-body">
                            <div class=" form">
                                    <?php echo form_open('Metode_bayar/Update', array('class' => 'cmxform form-horizontal', ));
                                    echo form_hidden('id', $this->uri->segment(3));?>
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">Name Metode Bayar</label>
                                        <div class="col-lg-6">
                                            
                                            <input id="nama" value="<?php echo @$listmetode_bayar['metode_bayar']?>" name="metode_bayar" type="text" class="form-control">
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