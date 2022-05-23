<div class="container pt-5">
    <h3><?= $title ?></h3>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <?php
                    //create form
                    $attributes = array('id' => 'FrmAddDosen', 'method' => "post", "autocomplete" => "off");
                    echo form_open('', $attributes);
                    ?>
                    <div class="form-group row">
                        <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Nama" name="Nama" value=" <?= set_value('Nama'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('Nama') ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Nidn" class="col-sm-2 col-form-label">NIDN</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Nidn" name="Nidn" value=" <?= set_value('Nidn'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('Nidn') ?>
                            </small>
                        </div>
                    </div>

                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                            <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="JenisKelamin" name="JenisKelamin" value="Laki-laki" <?php if (set_value('JenisKelamin') == "Laki-laki") : echo "checked";
                                                                                                                                            endif; ?>>
                                    <label class="form-check-label" for="JenisKelamin">
                                        Laki-laki
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="JenisKelamin2" name="JenisKelamin" value="Perempuan" <?php if (set_value('JenisKelamin') == "Perempuan") : echo "checked";
                                                                                                                                            endif; ?>>
                                    <label class="form-check-label" for="JenisKelamin2">
                                        Perempuan
                                    </label>
                                </div>
                                <small class="text-danger">
                                    <?php echo form_error('JenisKelamin') ?>
                                </small>
                            </div>
                        </div>
                    </fieldset>

                    <div class="form-group row">
                        <label for="Agama" class="col-sm-2 col-form-label">Agama</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="Agama" name="Agama">
                                <option value="Islam" selected disabled>Pilih</option>
                                <option value="Islam" <?php if (set_value('Agama') == "Islam") : echo "selected";
                                                        endif; ?>>Islam</option>
                                <option value="Protestan" <?php if (set_value('Agama') == "Protestan") : echo "selected";
                                                            endif; ?>>Protestan</option>
                                <option value="Katolik" <?php if (set_value('Agama') == "Katolik") : echo "selected";
                                                        endif; ?>>Katolik</option>
                                <option value="Hindu" <?php if (set_value('Agama') == "Hindu") : echo "selected";
                                                        endif; ?>>Hindu</option>
                                <option value="Buddha" <?php if (set_value('Agama') == "Buddha") : echo "selected";
                                                        endif; ?>>Buddha</option>
                                <option value="Khonghucu" <?php if (set_value('Agama') == "Khonghucu") : echo "selected";
                                                            endif; ?>>Khonghucu</option>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('Agama') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="NoHp" class="col-sm-2 col-form-label">No Hp</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="NoHp" name="NoHp" value="<?= set_value('NoHp'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('NoHp') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="Email" name="Email" value="<?= set_value('Email'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('Email') ?>
                            </small>
                        </div>
                    </div>

                <div class="form-group row">
                        <label for="JabatanFungsional" class="col-sm-2 col-form-label">Jabatan Fungsional</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="JabatanFungsional" name="JabatanFungsional">
                                <option value="Lektor" selected disabled>Pilih</option>
                                <option value="Lektor" <?php if (set_value('JabatanFungsional') == "Lektor") : echo "selected";
                                                        endif; ?>>Lektor</option>
                                <option value="Asisten Ahli" <?php if (set_value('JabatanFungsional') == "Asisten Ahli") : echo "selected";
                                                            endif; ?>>Asisten Ahli</option>
                                <option value="Tenaga Pengajar" <?php if (set_value('JabatanFungsional') == "Tenaga Pengajar") : echo "selected";
                                                        endif; ?>>Tenaga Pengajar</option>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('JabatanFungsional') ?>
                            </small>
                        </div>
                    </div>


                     <div class="form-group row">
                        <label for="PendidikanTerakhir" class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="Email" name="PendidikanTerakhir" value="<?= set_value('PendidikanTerakhir'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('PendidikanTerakhir') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10 offset-md-2">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a class="btn btn-secondary" href="javascript:history.back()">Kembali</a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>