<?= view("layout/head") ?>

<div class="main-panel">
  <div class="content-wrapper">

    <div class="card col-lg-4 mx-auto">
      <div class="card-body px-5 py-5">
        <h3 class="card-title text-left mb-3">Login</h3>
                        <?php if(!empty($error)) { 
                        implode('', $errors->all('<div style="color: red;">:message</div>')); 
                        } ?>
                        <form action="/home/aksi_register" method="POST">
                            <div class="form-group">
                                <label>Username :</label>
                                <input type="text" id="username" name="username" class="form-control" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label>Password :</label>
                                <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                            </div>

                            <div class="form-group">
                                <label>Nama :</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Username">
                            </div>

                            <div class="form-group">
                                <label>Nomor Telepon :</label>
                                <input type="text" id="notelp" name="notelp" class="form-control" placeholder="Username">
                            </div>

                            

                            
                           
                          <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Login</button>
                      </form>
                      <h5><a href="/home">Already Sign Account!</a></h5>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

<?= view('layout/foot') ?>