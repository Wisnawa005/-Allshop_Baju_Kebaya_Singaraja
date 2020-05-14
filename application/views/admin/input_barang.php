<div class="panel panel-flat" style="margin:0px 10px 0px 10px">
    <div class="panel-body">
        <form class="form-horizontal" action="<?= site_url('shop/save_barang'); ?>" method="POST" style="margin: 15px;" enctype="multipart/form-data">
            <h2 class="text-bold" ><center>Input Data Barang</center></h2><hr>
            <input type="hidden" value="<?=(isset($id_barang['id_barang']))?md5($id_barang['id_barang']):'';?>" name="id_barang"></input>
            <fieldset class="content-group">
            
                <div class="form-group">
                    <label class="control-label col-lg-2">Nama Barang </label>
                    <div class="col-lg-10">
                        <input type="text" name="nama_barang" class="form-control" required="required" placeholder="Masukkan Nama Barang..."
                        value="<?=(isset($id_barang['nama_barang']))?$id_barang['nama_barang']:'';?>">
                        <?php echo form_error('nama_barang');?>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-lg-2">Harga </label>
                    <div class="col-lg-10">
                        <input type="text" name="harga_jual" class="form-control" required="required" placeholder="Masukkan Harga Jual..."
                        value="<?=(isset($id_barang['harga_jual']))?$id_barang['harga_jual']:'';?>">
                        <?php echo form_error('harga_jual');?>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Stok </label>
                    <div class="col-lg-10">
                        <input type="number" name="stok" class="form-control" required="required" placeholder="Masukkan Stok..."
                        value="<?=(isset($id_barang['stok']))?$id_barang['stok']:'';?>">
                        <?php echo form_error('stok');?>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Satuan </label>
                    <div class="col-lg-10">
                        <input type="text" name="satuan" class="form-control" required="required" placeholder="Masukkan Satuan..."
                        value="<?=(isset($id_barang['satuan']))?$id_barang['satuan']:'';?>">
                        <?php echo form_error('satuan');?>
                    </div>
                </div>

                <div class="form-group">
                <label class="control-label col-md-2">Keterangan</label>
                <div class="col-md-10">
                    <textarea type="text" name="deskripsi" class="ckeditor" id="ckeditor">
                    <?=(isset($id_barang['deskripsi']))?$id_barang['deskripsi']:'';?></textarea>
                    <?php echo form_error('deskripsi');?>
                </div>
                </div><br>

                <div class="form-group">
                <label class="control-label col-lg-2">Gambar</label>
                <div class="col-lg-10">
                    <input type="file" name="userfile" class="file-styled" required="required">
                </div>
                </div>
                
                <div class="text-right">
					<button type="submit" name="Daftar" value="Simpan" class="btn bg-teal-400">Submit form <i class="icon-arrow-right14 position-right"></i></button>
			    </div><br>
                        
        </form>
    </div>
</div>