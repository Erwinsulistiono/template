<div class="pb-2 mb-3 border-bottom">
    <a onclick="testValidasi()">
        <h2 class="h2">User</h2>
    </a>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th data-field="user_nama">Nama</th>
                    <th data-field="level_nama">Jabatan</th>
                    <th data-field="user_email">Email</th>
                    <th data-field="user_username">Username</th>
                    <th data-field="user_jk">Jenis Kelamin</th>
                    <th data-field="user_phone">Telp</th>
                    <th data-field="user_last_login">Login</th>
                    <th data-action="edit-delete">Login</th>
                </tr>
            </thead>
            <tbody id="target">
            </tbody>
        </table>
    </div>
</div>


<!-- Modal -->
<form role="form" action="<?= base_url() ?>user/simpan_user/" id="form_add_edit" accept-charset='utf-8' method="post">
    <div class="modal fade" id="modal_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Nama</label>
                            <input type="hidden" name="user_id">
                            <input type="text" class="form-control" name="user_nama" placeholder="nama" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Jenis Kelamin</label>
                            <label>Jabatan</label>
                            <select class="form-control" name="user_jk">
                                <option>Select.....</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>E-Mail</label>
                            <input type="email" class="form-control" name="user_email" placeholder="email@example.com" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Telp</label>
                            <input type="text" class="form-control" placeholder="telp" name="user_phone" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Jabatan</label>
                            <select class="form-control" name="user_level">
                                <option disabled>Select.....</option>
                                <?php foreach ($level as $l) : ?>
                                    <option value="<?= $l['level_id'] ?>"><?= $l['level_nama'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Username</label>
                            <input type="text" class="form-control" placeholder="Username" name="user_username" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="********" name="user_password" value="titits" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" placeholder="********" name="user_password2" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>Alamat</label>
                            <textarea name="user_alamat" class="form-control" rows="3">
                            </textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="form-group">
                        <a class="btn btn-outline-primary" data-dismiss="modal">Close</a>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<script>
    // let form = document.getElementById('form_add_edit').querySelector('form')
    // Array.from(form).forEach(el => {

    // })
    // form.
</script>