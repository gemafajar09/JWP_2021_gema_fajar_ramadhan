<div id="form-resgister" class="card mx-auto" style="margin-top:5%">
	<div class="card-body">
		<center>
			<label id="label-login" for="">Register</label>
		</center>
		<hr>
		<form action="<?= base_url('daftar') ?>" method="POST"enctype="multipart/form-data">
			<label for="">Email</label>
			<div class="input-group mb-3">
				<input type="email" placeholder="Example@gmail.com" name="email" id="email" class="form-control">
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
			<label for="">Password</label>
			<div class="input-group mb-3">
				<input type="password" placeholder="Password" name="password" id="password" class="form-control">
				<div class="input-group-append">
					<span class="input-group-text"><i class="fa fa-lock"></i></span>
				</div>
			</div>
			<label for="">Foto</label>
			<div class="input-group mb-3">
				<input type="file" placeholder="foto" name="foto" id="foto" onchange="return tampilfoto()" class="form-control">
				<div class="input-group-append">
					<span class="input-group-text"><i class="fa fa-image"></i></span>
				</div>
			</div>
            <div class="text-center" id="tampilFoto"></div>
			<div align="right">
				<button class="btn btn-primary" type="submit">Register</button>
			</div>
		</form>
		<br>
		<div class="float-left">
            <b>Sudah Punya Akun ?<a href="<?= base_url('/'); ?>">&nbsp;Login</a></b>
		</div>
	</div>
</div>

<script>
    function tampilfoto()
    {
        var fileInput = document.getElementById('foto');
        var filePath = fileInput.value;
        var extensions = /(\.jpg|\.png)$/i;
        var ukuran = fileInput.files[0].size;
        if(ukuran > 500000)
        {
            alert('ukuran terlalu besar. Maksimal 500KB')
            fileInput.value = '';
            document.getElementById('tampilFoto').innerHTML = '';
                return false;
        }else{
            if(!extensions.exec(filePath)){
                alert('Silakan unggah file yang memiliki ekstensi .jpg/.png.');
                fileInput.value = '';
                document.getElementById('tampilFoto').innerHTML = '';
                return false;
            }else{
                //Image preview
                if (fileInput.files && fileInput.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        document.getElementById('tampilFoto').innerHTML = '<img src="'+e.target.result+'" width="30%"/>';
                    };
                    reader.readAsDataURL(fileInput.files[0]);
                }
            }
        }
    }
</script>
