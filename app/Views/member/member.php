<?= view("layout/head") ?>

<?= view('layout/nav') ?>



<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">

                <div class="card-title">
                    <h3 style="margin-left: 3px;">Members</h3>
                </div>
                <a style="margin-left: 1px;" href="/member/tambah"><button class="btn" title="Add new"><i class="mdi mdi-plus"></i></button></a>            
             
                    <br>
                    <div class="bootstrap-data-table-panel ">
                    <div class="table-responsive">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                <th width="10px" style="color: white;">No</th>
                                <th width="1000px" style="color: white;">Name</th>
                                <th width="1000px" style="color: white;">Username</th>
                                <th width="1000px" style="color: white;">Nomor Telepon</th>
                                <th width="1000px" style="color: white;">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 0;
                                $no++;
                                ?>

                                <?php foreach ($data as $member) { ?>
                                <tr>
                                <td width="10px" style="color: white;"><?= $no ?></td>
                                <td style="color: white;"><?= $member->nama_member ?></td>
                                <td style="color: white;"><?= $member->username ?></td>
                                <td style="color: white;"><?= $member->no_telp ?></td>

                                    
                                    <td>
                                       <a href="<?= base_url("/member/edit/".$member->user_id) ?>"><button class="btn " title="Detail"><i class="mdi mdi-details"></i></button></a>

                                       <a href="<?= base_url("/member/hapus/".$member->user_id) ?>"><button class="btn " title="Delete"><i class="mdi mdi-minus-circle-outline"></i></button></a>

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