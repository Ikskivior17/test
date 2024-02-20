<?= view("layout/head") ?>

<?= view('layout/nav') ?>

<div class="row">
 <div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">

                <div class="col-lg-12">
                    <button class="btn " title="Back" onclick="history.back()"><i class="mdi mdi-plus"></i></button>
                    <div class="card">
                        <div class="card-title">
                            <h3>Form Tambah Member</h3>
                        </div>
                        
                       


                        <?php if(!empty($error)) { 
                        implode('', $errors->all('<div style="color: red;">:message</div>')); 
                        } ?>

                            
                            <div class="basic-form">
                                <form action="/member/aksi_tambah" id="form_input" method="POST">
                                    
                                    <div class="form-group">
                                        <label for="name">Nama Member:</label><br>
                                        <input class="form-control" type="text" id="name" name="name" placeholder="Name" value="<?=old('name')?>" required>
                                    </div><br>

                                    <div class="form-group">
                                        <label for="username">Username Member:</label><br>
                                        <input class="form-control" type="text" id="username" name="username" placeholder="Username" value="<?=old('username')?>" required>
                                    </div><br>

                                    <div class="form-group">
                                        <label for="notelp">Nomor Telepon Member:</label><br>
                                        <input class="form-control" type="text" id="notelp" name="notelp" placeholder="Nomor telepon" value="<?=old('notelp')?>"  required >
                                    </div>

                                    <button title="Submit" class="btn" type="submit" id="submitBtn"><i class="mdi mdi-content-save"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
               
<script type="text/javascript">
    document.getElementById("submitBtn").addEventListener("click", function(event){
        event.preventDefault();
        this.disabled = true;
        document.getElementById("form_input").submit();})
    </script>
    <?= view('layout/foot') ?>