<?= view("layout/head") ?>

<?= view('layout/nav') ?>


<div class="row">
 <div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Setting Profile</h4>


                
                        <div class="card-body">
                            <div class="basic-form">
                                <form  id="form_input" action="/home/aksi_ganti_profil" method="POST"
                                enctype="multipart/form-data">                        
                                
                                <div class="form-group">
                                    <label>Foto profil</label> <br>
                                  <input class="form-control" type="file" id="foto" name="foto">
                              </div>

                              <div class="form-group">
                                <label>Username</label>
                                <input type="text" id="username" value="<?= $data->username?>" name="username" class="form-control" placeholder="Username">
                            </div>
                            

                            <button title="Submit" class="btn" type="submit" id="submitBtn"><i class="mdi mdi-plus"></i></button>
                        </form><br>
                        <h5 style="color: white;"><a href="/home/ganti_pass" style="color: white; text-decoration: none;">Want to change your password?</a></h5>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script type="text/javascript">
    document.getElementById("submitBtn").addEventListener("click", function(event){
        event.preventDefault();
        this.disabled = true;
        document.getElementById("form_input").submit(); })
    </script>
<?= view('layout/foot') ?>