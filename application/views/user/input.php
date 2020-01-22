<div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Tambah User
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-cog" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <div class=" form">
                                    <?php echo form_open('User/Insert', array('class' => 'cmxform form-horizontal', ));?>
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">Nama User</label>
                                        <div class="col-lg-6">
                                            
                                            <input id="nama" name="nama" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">Username</label>
                                        <div class="col-lg-6">
                                            
                                            <input id="username" name="username" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">Telepon</label>
                                        <div class="col-lg-6">
                                            
                                            <input id="telepon" name="telepon" type="number" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">Email</label>
                                        <div class="col-lg-6">
                                            
                                            <input id="email" name="email" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">Level</label>
                                        <div class="col-lg-6">
                                            
                                            <input id="level" name="level" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class=" col-lg-6">
                                    <div class="col-lg-6">
                                    <button type="button" class="waves-effect waves-light btn white m-b-xs">KEMBALI</>

                                    <button type="submit" class="waves-effect waves-light btn blue m-b-xs text-right">SIMPAN</button>
                                </div>
                                </div>
                                <?php echo form_close();?>
                            </div>

                        </div>
                    </section>
                </div>
            </div>