<?= view("layout/head") ?>

<?= view('layout/nav') ?>

<head>
    <title> : Peminjaman Buku</title>
</head>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">

                <div class="card-title">
                    <h3 style="margin-left: 3px;">Peminjaman</h3>
                </div>
                <?php  if(session()->get('level')== 1 ||session()->get('level')== 2){ ?>
                <a style="margin-left: 5px;" href="/peminjaman/tambah"><button class="btn " title="Add new"><i class="mdi mdi-plus"></i></button></a>     
                <?php  }else{}?>       
            
                    <br>
                    <div class="bootstrap-data-table-panel ">
                    <div class="table-responsive">
                         <?php  if(session()->get('level')== 1 ||session()->get('level')== 2){ ?>
                        <table id="bootstrap-data-table-export" class="table  table-bordered">
                            <?php  }else{?>
                                <table id="bootstrap-data-table" class="table  table-bordered">
                                <?php } ?>
                            <thead>
                                <tr>
                                <th width="10px" style="color: white;">No</th>
<th width="1000px" style="color: white;">Judul</th>
<th width="1000px" style="color: white;">Kode</th>
<th width="1000px" style="color: white;">Nama Peminjam</th>
<th width="1000px" style="color: white;">Nomor Peminjam</th>
<th width="1000px" style="color: white;">Status</th>
<th width="1000px" style="color: white;">Tanggal Dipinjam</th>
<th width="1000px" style="color: white;">Tanggal Dikembalikan</th>
<th width="1000px" style="color: white;">Pendata saat Dipinjam</th>
<th width="1000px" style="color: white;">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 0;
                                $no++;
                                ?>

                                <?php foreach ($data as $key => $pinjam) { ?>
                                <tr>
                                <td width="10px" style="color: white;"><?= $no ?></td>
<td style="color: white;"><?= $pinjam->nama_buku ?></td>
<td style="color: white;"><?= $pinjam->kode_buku ?></td>
<td style="color: white;"><?= $pinjam->nama_member ?></td>
<td style="color: white;"><?= $pinjam->no_telp ?></td>


                                    <?php if ($pinjam->status == 0) { ?>
                                        <td style="color: white; background-color: red ;">Dipinjam</td>
                                    <?php } else { ?>
                                        <td style="color: white; background-color: green ;">Sudah Dikembalikan</td>
                                    <?php } ?>


                                    <td style="color: white;"><?= $pinjam->tgl_pinjam ?></td>

                                    <?php if ($pinjam->tgl_kembali == "0000-00-00") { ?>
                                        <td style="color: white; background-color: red ;">Dipinjam</td>
                                    <?php } else { ?>
                                        <td style="color: white;"><?= $pinjam->tgl_kembali ?></td>

                                    <?php } ?>
                                    <td style="color: white;"><?= $pinjam->nama_karyawan ?></td>

                                    
                                    <td>

                                        <?php  if(session()->get('level')== 1 ||session()->get('level')== 2){ ?>

                                            <?php if ($pinjam->status == 0) { ?>
                                            <a href="<?= base_url("/peminjaman/pengembalian/".$pinjam->id_pinjam) ?>"><button class="btn " title="Pengembalian"><i class="mdi mdi-details"></i></button></a>
                                            <?php } ?>

                                       <a href="<?= base_url("/peminjaman/hapus/".$pinjam->id_pinjam) ?>"><button class="btn " title="Delete"><i class="mdi mdi-minus-circle-outline"></i></button></a>

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