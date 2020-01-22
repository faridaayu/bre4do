<div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Ubah Driver
                            
                        </header>
                        <div class="panel-body">
                            <div class=" form">
                                    <?php echo form_open('Driver/Update', array('class' => 'cmxform form-horizontal', ));
                                    echo form_hidden('id', $this->uri->segment(3));?>
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">Name Driver</label>
                                        <div class="col-lg-6">
                                            
                                            <input id="nama" value="<?php echo @$listdriver['nama']?>" name="nama" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">Plat Nomor</label>
                                        <div class="col-lg-6">
                                            
                                            <input id="plat_nomor" value="<?php echo @$listdriver['plat_nomor']?>" name="plat_nomor" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">Telepon (Telepon Aktif)</label>
                                        <div class="col-lg-6">
                                            
                                            <input id="telepon" value="<?php echo @$listdriver['telepon']?>" name="telepon" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">Alamat</label>
                                        <div class="col-lg-6">
                                            
                                            <input id="alamat" value="<?php echo @$listdriver['alamat']?>" name="alamat" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class=" col-lg-6">
                                    <div class="col-lg-6">
                                   <a href="<?php echo base_url()?>Driver/List_driver"><button type="button" class="waves-effect waves-light btn white m-b-xs">KEMBALI</button></a>

                                    <button type="submit" class="waves-effect waves-light btn blue m-b-xs text-right">SIMPAN</button>
                                </div>
                                </div>
                                <?php echo form_close();?>
                            </div>

                        </div>
                    </section>
                </div>
            </div>