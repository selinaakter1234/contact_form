<?php
require_once('header.php');
?>

<div class="container">
  <div class="row">
    <div class="col-lg-6 m-auto">
      <div class="card mt-3">
        <div class="card-header bg-success text-white text-center">
          <b>Registration page</b>
        </div>
        <div class="card-body">


          <form action="register_post.php" method="POST">

            <div class="row">
              <div class="col">
                <label for="inputname">First name</label>
                <input type="text" class="form-control" id="inputname" placeholder="First name" name="first_name">
              </div>
              <div class="col">
                <label for="inputname2">Last name</label>
                <input type="text" class="form-control" id="inputname2" placeholder="Last name" name="last_name">
              </div>
            </div>

            <div class="row">
              <div class="col">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">

              </div>
              <div class="col">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password">
              </div>
            </div>


            <div>
              <label for="inputAddress">present address</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="enter your present address" name="present_address">
            </div>
            <div>
              <label for="inputAddress2">permanent address </label>
              <input type="text" class="form-control" id="inputAddress2" placeholder="Enter your permanent address" name="permanent_address">
            </div>


            <div class="row">
              <div class="col">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" id="inputCity" name="city">
              </div>

              <div class="col">
                <label for="inputState">State</label>
                <select id="inputState" class="form-control" name="state">
                  <option selected>Choose </option>
                  <option>Choose 1</option>
                  <option>Choose 2</option>
                  <option>Choose 4</option>
                  <option>Choose 5</option>
                </select>
              </div>
              <div class="col">
                <label for="inputZip">Zip</label>
                <input type="text" class="form-control" id="inputZip" name="zip">
              </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Sign in</button>
          </form>
        </div>
      </div>

    </div>
  </div>

  <div>
  </div>

  <?php
  require_once('footer.php');
  ?>