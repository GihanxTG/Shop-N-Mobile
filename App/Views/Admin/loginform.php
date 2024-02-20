<?php require_once "header.php"; ?>


<div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">ADMIN LOGIN</h5>
              <div class="card">
                <div class="card-body">
                  <form method="post" action="<?=BASEPATH?>admin/login">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email</label>
                      <input type="text" name="email" class="form-control" id="exampleInputEmail1" >
                      
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword">
                      
                    </div>
                    
                    <button type="submit" name="btnLogin" class="btn btn-primary">Login</button>
                    <?php
                      if(isset($_SESSION['loidnadmin'])) echo $_SESSION['loidnadmin'];
                    ?>
                  </form>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>


<?php require_once "footer.php"; ?>