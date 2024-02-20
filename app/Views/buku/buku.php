<?= view("layout/head") ?>

<?= view('layout/nav') ?>

<head>
    <title> : Buku</title>
</head>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">

                <div class="card-title">
                    <h3 style="margin-left: 3px;">Buku</h3>
                </div>
                <?php  if(session()->get('level')== 1 ||session()->get('level')== 2){ ?>
                <a style="margin-left: 5px;" href="/buku/tambah"><button class="btn" title="Add new"><i class="mdi mdi-plus"></i></button></a>     
                <?php  }else{}?>       
         
                    <br>
                    <div class="bootstrap-data-table-panel ">
                    <div class="table-responsive">
                    <?php  if(session()->get('level')== 1 ||session()->get('level')== 2){ ?>
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <?php  }else{?>
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <?php } ?>
                            <thead>
                                <tr>
                                <th width="10px" style="color: white;">No</th>
                                    <th width="1000px" style="color: white;">Judul</th>
                                    <th width="1000px" style="color: white;">Kode</th>
                                    <th width="1000px" style="color: white;">Lokasi</th>
                                    <th width="1000px" style="color: white;">Kategori</th>
                                    <th width="1000px" style="color: white;">Status</th>
                                    <th width="1000px" style="color: white;">Tanggal Dimasukan</th>
                                    <th width="1000px" style="color: white;">Pendata</th>
                                    <th width="1000px" style="color: white;">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 0;
                                $no++;
                                ?>

                                <?php foreach ($data as $key => $buku) { ?>
                                <tr>
                        <td width="10px" style="color: white;"><?= $no ?></td>
                        <td style="color: white;"><?= $buku->nama_buku ?></td>
                        <td style="color: white;"><?= $buku->kode_buku ?></td>
                        <td style="color: white;"><?= $buku->lokasi ?></td>
                        <td style="color: white;"><?= $buku->kategori ?></td>

                                    <?php if (!empty($pinjam[$buku->id_buku])) { ?>
                                        <td style="background-color: red; color: white;">Dipinjam</td>
                                    <?php } else { ?>
                                        <td style="background-color: green; color: white;">Masih Ada</td>
                                    <?php } ?>

                                    <td style="color: white;"><?= $buku->tanggal_buku ?></td>
                                        <td style="color: white;"><?= $buku->nama_karyawan ?></td>

                                    
                                    <td>

                                    <?php  if(session()->get('level')== 3){ 
                                        if(empty($favorit[$buku->id_buku]->idfavorit)) {
                                        ?>
                                        <a href="<?= base_url("/buku/tambah_favorit/".$buku->id_buku) ?>"><button class="btn" title="Favorite"><i class="mdi mdi-book"></i></button></a>
<?php  }else{?>
    <a href="<?= base_url("/buku/hapus_favorit/".$favorit[$buku->id_buku]->idfavorit) ?>"><button class="btn " title="Unfavorite"><i class="mdi mdi-library-books"></i></button></a>

    <?php }} ?>
    <a href="<?= base_url("/buku/ulasan/".$buku->id_buku) ?>"><button class="btn btn-gray" title="Ulasan"><i class="ti-comments"></i></button></a>

                                        <?php  if(session()->get('level')== 1 ||session()->get('level')== 2){ ?>
                                       <a href="<?= base_url("/buku/edit/".$buku->id_buku) ?>"><button class="btn " title="Detail"><i class="mdi mdi-details"></i></button></a>

                                       <a href="<?= base_url("/buku/hapus/".$buku->id_buku) ?>"><button class="btn " title="Delete"><i class="mdi mdi-minus-circle-outline"></i></button></a>

                                       <?php  }else{}?>
                                   </td>
                               </tr>
                               <?php
                               $no++;
                                }
                               ?>
                           </tbody>
                       </table>
                   </div>
                    </div>
               </div>
           </div>
       </div>
   </div>
</div>


<?= view('layout/foot') ?>