<!doctype html>
<html lang="en">
  <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

      <!-- Google icons -->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

      <title>Smart Save</title>
  </head>


  <body>
      <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light container">
          <a class="navbar-brand" href="#">
            <img src="/assets/brand/bootstrap-solid.svg" width="30" height="30" alt="SmartSave">
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto container justify-content-end">
              <li class="nav-item active">
                <a class="nav-link" href="#about">About <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#features">Features</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="#">Contacts</a>
              </li> 
            </ul>
          </div>
        </nav>

        <div class="container">
          <div class="row">
            <div class="col-6">
              <h1>Save the Smart Way</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

             <a href=""><h5>Learn More</h5></a>
            </div>

            <div class="col-6">
              <h2 class="container">Sign In</h2>

              <div class="jumbotron">
                <form class="container">
                  <div class="form-group">
                    <input type="text" class="form-control"  name="username" id="username" placeholder="Enter Username">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control"  name="password" id="username" placeholder="Enter Password">
                  </div>
                  <button type="submit" class="btn btn-primary ">Submit</button>
                </form>
              </div>

              <div class="container">
                <h3>Don't have an account? 
                 <span><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#signup">Create Account</button></span>  
                </h3>
              </div>
            </div>
          </div>
        </div>
      </header>



      <div class="content">

        <section id="about">
          <div class="jumbotron jumbotron-fluid"> 
            <div class="container">
              <h1 class="display-4">About</h1>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            </div>
          </div>
        </section>

        <section id="howitworks" class="container">
          <div class="row">
            <div class="col-4 col-sm-4">
              <i class="material-icons">event</i>
            </div>
            <div class="col-8 col-sm-8">
              <h4>Lorem</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>

          <div class="row">
            <div class="col-8 col-sm-8">
              <h4>Lorem</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>

            <div class="col-4 col-sm-4">
              <i class="material-icons">timeline</i>
            </div>
          </div> 
        </section>

        <section id="features" class="container-fluid">
          <div class="container">
            <div class="card-deck">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Data Visualization</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Visualize your data</h6>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. .</p>
                </div>
              </div>

              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Lock Savings</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Tame your spending character </h6>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. .</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Data Analysis</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Make informed money decisions</h6>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. .</p>
                </div>
              </div>
            </div>
          </div> 
        </section>

        <section class="container-fluid">
          <div class="container d-flex justify-content-center">
            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#signup"><h5>Create an Account</h5></button>
          </div>
        </section>
        
      </div>

      <!-- Sign Up modal -->
      <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="signup" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="signupModalTitle">Sign Up</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <div class="row">
                    <div class="col-6">
                      <input type="text" class="form-control" id="fname" aria-describedby="fname" placeholder="First Name">
                    </div>
                    <div class="col-6">
                      <input type="text" class="form-control" id="lname" aria-describedby="lname" placeholder="Last Name">
                    </div>
                  </div> 
                </div>

                <div class="form-group row justify-content-between">
                  <label for="dobLabel" class="col-sm-2 col-form-label">DateOfBirth</label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" id="dob" placeholder="Date">
                  </div>
                </div>

                <div class="form-group">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="male" id="gender" value="male">
                    <label class="form-check-label" for="female">Male</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="male" id="gender" value="female">
                    <label class="form-check-label" for="female">Female</label>
                  </div> 
                </div>

                <div class="form-group">
                  <label for="newUsernameLabel">Enter Username</label>
                  <input type="text" class="form-control" id="newUsername"  placeholder="Username">
                </div>
                <div class="form-group">
                  <label for="newPasswordLabel">Enter Password</label>
                  <input type="password" class="form-control" id="newPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" id="newPassword2" placeholder="Re-enter Password">
                </div>

              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </div>
      </div>

      
      <footer class="container-fluid text-center">
        <a href="#myPage" title="To Top">
          <span class="glyphicon glyphicon-chevron-up"></span>
        </a>
        <p>Smart Save<a href="https://www.w3schools.com" title="Visit w3schools">www.w3schools.com</a></p>
      </footer>




      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

  </body>
</html>