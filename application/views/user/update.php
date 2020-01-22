<div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Ubah User
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-cog" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <div class=" form">
                                    <?php echo form_open('User/Update', array('class' => 'cmxform form-horizontal', ));
                                    echo form_hidden('id', $this->uri->segment(3));?>
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">Nama User</label>
                                        <div class="col-lg-6">
                                            
                                            <input id="nama" value="<?php echo @$listuser['nama']?>" name="nama" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">Username</label>
                                        <div class="col-lg-6">
                                            
                                            <input id="plat_nomor" value="<?php echo @$listuser['username']?>" name="username" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">Telepon (Telepon Aktif)</label>
                                        <div class="col-lg-6">
                                            
                                            <input id="telepon" value="<?php echo @$listuser['telepon']?>" name="telepon" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">Email</label>
                                        <div class="col-lg-6">
                                            
                                            <input id="alamat" value="<?php echo @$listuser['email']?>" name="email" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">Level</label>
                                        <div class="col-lg-6">
                                            
                                            <input id="alamat" value="<?php echo @$listuser['level']?>" name="level" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class=" col-lg-6">
                                    <div class="col-lg-6">
                                    <button type="button" class="waves-effect waves-light btn white m-b-xs">KEMBALI</button>

                                    <button type="submit" class="waves-effect waves-light btn blue m-b-xs text-right">SIMPAN</button>
                                </div>
                                </div>
                                <?php echo form_close();?>
                            </div>

                        </div>
                    </section>
                </div>
            </div>