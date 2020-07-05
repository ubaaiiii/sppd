<form id="form-submit">
    <div class="modal-body"><br>
      <input hidden type="text" class="form-control" name="kode-awal" id="kode-awal">
      <input hidden type="text" class="form-control" name="tipe" value="save" id="tipe">
      <fieldset class="form-label-group">
          <input type="text" required class="form-control text-uppercase" name="id-anggota" id="id-anggota" maxlength="10" placeholder="ID Anggota">
          <label for="kode-kegiatan">ID Anggota :</label>
      </fieldset>
      <fieldset class="form-label-group">
          <input type="text" required class="form-control text-capitalize" name="jenis-kegiatan" id="jenis-kegiatan" maxlength="25" placeholder="Jenis Kegiatan">
          <label for="jenis-kegiatan">Jenis Kegiatan :</label>
      </fieldset>
    </div>
    <div class="modal-footer">
      <button type="submit" id="btn-submit" class="btn btn-primary">Simpan</button>
      <button type="reset" id="btn-reset" class="btn btn-warning">Reset</button>
      <button hidden type="button" id="btn-cancel" data-dismiss="modal" class="btn btn-warning">Cancel</button>
    </div>
</form>
