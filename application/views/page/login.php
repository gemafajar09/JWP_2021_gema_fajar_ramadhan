<div id="form-login" class="card mx-auto" style="margin-top:10%">
	<div class="card-body">
		<center>
			<label id="label-login" for="">Login</label>
		</center>
		<hr>
		<form action="<?= base_url('login') ?>" method="POST">
			<label for="">Email</label>
			<div class="input-group mb-3">
				<input type="email" placeholder="Email" name="email" id="email" class="form-control">
				<div class="input-group-append">
					<span class="input-group-text"><i class="fa fa-google"></i></span>
				</div>
			</div>
			<label for="">Password</label>
			<div class="input-group mb-3">
				<input type="password" placeholder="Password" name="password" id="password" class="form-control">
				<div class="input-group-append">
					<span class="input-group-text"><i class="fa fa-lock"></i></span>
				</div>
			</div>
			<div class="form-check">
				<input type="checkbox" class="form-check-input" id="exampleCheck2">
				<label class="form-check-label" for="exampleCheck2">Remember me</label>
			</div>
			<div align="right">
				<button class="btn btn-primary" type="submit">Login</button>
			</div>
		</form>
		<br>
		<div class="float-left">
			<a href="<?= base_url('register') ?>"><b>Register</b></a>
		</div>
		<div class="float-right">
			<a href="<?= base_url('forgotpwd') ?>"><b>Forgot password</b></a>
		</div>
	</div>
</div>
