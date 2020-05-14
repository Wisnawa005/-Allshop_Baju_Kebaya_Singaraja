<div class="content">
    <!-- Table header styling -->
    <div class="panel panel-flat">
        <div class="panel-heading">
        <center><h3 class="panel-title"><b>Daftar Barang</b></h3><br></center>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
            <a href="<?=site_url('shop/input_barang')?>"><button type="button" class="btn bg-blue-800 btn-labeled btn-rounded" style="float:left"><b><i class="icon-add"></i></b>Input Data Barang</button></a><br>
        </div>

        <div class="table-responsive">
            <table class="table">
                <thead >
                    <tr class="bg-blue">
                        <th class="text-center">Nama Barang</th> 
                        <th class="text-center">Harga</th>
                        <th class="text-center">Stok</th>
                        <th class="text-center">Satuan</th>
                        <th class="text-center">Keterangan</th>
                        <th class="text-center">Gambar</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($wst as $val){ ?>
                <tr>
                    <td><?= $val['nama_barang']; ?></td>
                    <td><?= $val['harga_jual']; ?></td>
                    <td><?= $val['stok']; ?></td>
                    <td><?= $val['satuan']; ?></td>
                    <td><?= $val['deskripsi']; ?></td>
                    <td><figure img src="<?=base_url("upload/foto/".$val['foto'])?>" class="gal"><img src="<?= base_url("upload/foto/".$val['foto']) ?>" alt="" width="50px" class="img-rounded img-preview" ></figure></td>
                    <td class="text-center">
                        <ul class="icons-list">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-menu9"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="<?=site_url('shop/update_input_barang/'.md5($val['id_barang']))?>"><i class="icon-pencil7"> Edit </i></a></li>
                                    <li><a href="<?php echo site_url() . 'shop/delbarang/' . $val['id_barang']; ?>"><i class="icon-trash"> Delete</i></a></li>
                                </ul>
                            </li>
                        </ul>
                    </td>
                    
                </tr>
                <?php } ?>

                
                </tbody>
                
            </table>
        </div>
    <!-- /table header styling -->
	</div>
<div>