@extends('layouts.main')

@section('title','Homepage ')

@section('headerContent')
        <div id="headercontent" class="container">
          <h1>Save the Smart Way</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

          <a href=""><h5>Learn More</h5></a>
                    
          <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#signup"><h5>Create an Account</h5></button>
             
        </div>
@endsection

@section('content')
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
            <div class="row">

              <div class="col-lg-4">
                <div class="card">
                  <div class="card-header">
                    <h5>Data Visualization</h5>
                  </div>
                  <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted">Visualize your data</h6>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. .</p>
                  </div>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="card">
                  <div class="card-header">
                    <h5>Lock Savings</h5>
                  </div>
                  <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted">Tame your spending character </h6>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. .</p>
                  </div>
                </div>
                
              </div>

              <div class="col-lg-4">
                <div class="card">
                  <div class="card-header">
                    <h5>Data Analysis</h5>
                  </div>
                  <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted">Make informed money decisions</h6>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. .</p>
                   </div>
                </div>
              </div>
            </div>
          </div> 
        </section>

        <section id="signin">
          <div class="container">
            <div class="row">

              <div class="col-md-5 col-sm-12 offset-md-1">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Sign In</h5>
                    <form class="container">
                      <div class="form-group">
                        <input type="text" class="form-control"  name="username" id="username" placeholder="Enter Username">
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control"  name="password" id="username" placeholder="Enter Password">
                      </div>
                      <button type="submit" class="btn btn-primary">Sign in</button>
                    </form>
                  </div>
                </div>
              </div>

              <div class="col-md-5 col-sm-12 offset-md-1" style="padding-top: 30px;">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Don't have an account?</h5>
                    <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#signup">Create an Account</button>
                  </div>
                </div>
              </div>
            </div>
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
@endsection   
