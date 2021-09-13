<div class="card card-default" style="margin-top:5%">
    <div class="card-header bg-primary text-white">
        <div class="float-left">
            Data User
        </div>
        <div class="float-right">
            <a href="<?= base_url('logout'); ?>" class="btn btn-danger btn-sm">LogOut</a>
        </div>
    </div>
    <div class="card-body">
        <label for="">Email</label>
        <input type="text" readonly value="<?= $this->session->userdata('email') ?>" class="form-control">
        <label for="">Nama</label>
        <input type="text" readonly value="<?= $this->session->userdata('nama') ?>" class="form-control">
        <label for="">Password</label>
        <input type="text" readonly value="<?= $this->session->userdata('password') ?>" class="form-control">
        <br>
        <label for="">Foto</label>
        <div class="text-center">
            <img src="<?= base_url('assets/upload/'.$this->session->userdata('foto')) ?>" width="130px" height="">
        </div>
    </div>
</div>