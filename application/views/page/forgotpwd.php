<div id="form-login" class="card mx-auto" style="margin-top:10%">
	<div class="card-body">
		<center>
			<label id="label-login" for="">Forgot Password</label>
		</center>
		<hr>
		<form action="<?= base_url('forgot') ?>" method="POST">
			<label for="">Email</label>
			<div class="input-group mb-3">
				<input type="email" placeholder="Email" name="email" id="email" class="form-control">
				<div class="input-group-append">
					<span class="input-group-text"><i class="fa fa-google"></i></span>
				</div>
			</div>
			<label for="">Nama</label>
			<div class="input-group mb-3">
				<input type="text" placeholder="nama" name="nama" id="nama" class="form-control">
				<div class="input-group-append">
					<span class="input-group-text"><i class="fa fa-user"></i></span>
				</div>
			</div>
			<div align="right">
				<button class="btn btn-primary" type="submit">Send Mail</button>
			</div>
		</form>
		<br>
		<div class="float-left">
            <b>Sudah Punya Akun ?<a href="<?= base_url('/'); ?>">&nbsp;Login</a></b>
		</div>
	</div>
</div>
