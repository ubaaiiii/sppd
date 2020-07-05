<!-- Add rows table -->
<section id="add-row">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <button id="add-data-pegawai" class="btn btn-primary mb-2" data-toggle="modal" data-backdrop="false" data-target="#backdrop">
                          <i class="feather icon-user-plus"></i>&nbsp; Tambah Pegawai
                        </button>
                        <div class="table-responsive">
                            <table class="table" id="tabel-data-pegawai">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>NIP</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Jabatan</th>
                                        <th>No. Telpon</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Add rows table -->

<!-- Modal -->
<div class="modal fade text-left" id="backdrop" tabindex="-1" role="dialog" aria-labelledby="label-modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary white">
                <h4 class="modal-title" id="label-modal">Tambah Pegawai</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="form">
              <div class="modal-body"><br>
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-label-group">
                                    <input type="number" id="nip" class="form-control" maxlength="12" placeholder="Nomor Induk Pegawai" name="nip">
                                    <label for="nip">NIP :</label>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-label-group">
                                    <input type="text" id="nama" class="form-control" placeholder="Nama Lengkap" name="nama">
                                    <label for="nama">Nama :</label>
                                </div>
                            </div>
                            <div class="col-md-6 col-12" style="position:relative;top:-15px;">
                              <label for="vueradio">Jenis Kelamin :</label>
                                <div class="vs-radio-con">
                                    <input type="radio" name="vueradio">
                                    <span class="vs-radio">
                                        <span class="vs-radio--border"></span>
                                        <span class="vs-radio--circle"></span>
                                    </span>
                                    <span class="">Laki-Laki</span>
                                </div>
                                <div class="vs-radio-con">
                                    <input type="radio" name="vueradio" value="false">
                                    <span class="vs-radio">
                                        <span class="vs-radio--border"></span>
                                        <span class="vs-radio--circle"></span>
                                    </span>
                                    <span class="">perempuan</span>
                                </div>
                            </div>
                            <div class="col-md-6 col-12" style="position:relative;top:-15px;">
                                <label for="jab">Jabatan :</label>
                                <select class="select2 form-control" name="jab" id="jab">
                                  <?php
                                    foreach($sejabatan as $sj){
                                      echo "<option value='{$sj->msid}'>{$sj->msdesc}</option>";
                                    }
                                  ?>
                                </select>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-label-group">
                                    <input type="text" id="tmp_lhr" class="form-control" placeholder="Tempat Lahir" name="tmp_lhr">
                                    <label for="tmp_lhr">Tempat Lahir :</label>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-label-group">
                                    <input type="date" id="tgl_lhr" class="form-control" name="tgl_lhr" placeholder="Tanggal Lahir">
                                    <label for="tgl_lhr">Tanggal Lahir :</label>
                                </div>
                            </div>
                            <div class="col-md-6 col-12" style="position:relative;top:-15px;">
                                <label for="gol_darah">Golongan Darah :</label>
                                <select class="select2 form-control" name="gol_darah" id="gol_darah">
                                  <?php
                                    foreach($segolongan as $sg){
                                      echo "<option value='{$sg->msid}'>{$sg->msdesc}</option>";
                                    }
                                  ?>
                                </select>
                            </div>
                            <div class="col-md-6 col-12" style="position:relative;top:-15px;">
                                <label for="agama">Agama :</label>
                                <select class="select2 form-control" name="agama" id="agama">
                                  <?php
                                    foreach($seagama as $sa){
                                      echo "<option value='{$sa->msid}'>{$sa->msdesc}</option>";
                                    }
                                  ?>
                                </select>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-label-group">
                                    <input type="number" id="telp" class="form-control" name="telp" placeholder="Nomor Telepon">
                                    <label for="telp">No. Telepon :</label>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <fieldset class="form-label-group">
                                    <textarea class="form-control" id="alamat" rows="3" name="alamat" placeholder="Alamat"></textarea>
                                    <label for="alamat">Alamat</label>
                                </fieldset>
                            </div>
                        </div>
                    </div>
              </div>
              <div class="modal-footer">
                <button type="submit" id="btn-submit" class="btn btn-primary">Simpan</button>
                <button type="reset" id="btn-reset" class="btn btn-warning">Reset</button>
                <button hidden type="button" id="btn-cancel" data-dismiss="modal" class="btn btn-warning">Cancel</button>
              </div>
            </form>
        </div>
    </div>
</div>
<!--/ Modal -->
<script src="<?= base_url(); ?>/app-assets/js/process/data_pegawai.js"></script>
