</div>
    <!-- pesan -->
    <?php if($this->session->flashdata('pesan') == TRUE): ?>
        <script>
            alert('<?= $this->session->flashdata('pesan') ?>')
        </script>
    <?php endif ?>
    <!-- tutup pesan -->
    <!-- script -->
    <script src="<?= base_url('assets/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/bootstrap/bootstrap.min.js') ?>"></script>
</body>
</html>