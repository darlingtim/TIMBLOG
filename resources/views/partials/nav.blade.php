<nav class="navbar navbar-expand navbar-dark bg-primary">
  <div class="navbar-nav w-100">
    <a class="navbar-brand text-color" href="/">TimBlog Travels</a>
    <a class="nav-item nav-link" href="/hotels">Browse Hotels</a>
    @if(Auth::check())
    <div class="ml-auto">
    <a class="nav-item nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
    Logout
</a>    
<form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>
      
    </div>
    @else
    <div class="ml-auto">
      <a class="btn nav-item nav-link" data-toggle="modal" data-target="#myModal">Login/Signup</a>

      <!-- The Modal -->
      <div class="modal " id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <button type="button" class=" close btn btn-danger" data-dismiss="modal">Close</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <div class="login-form">
                <form action="/examples/actions/confirmation.php" method="post">
                  <h2 class="text-center">Sign in</h2>
                  <div class="text-center social-btn">
                    <a href="{{url('login/facebook')}}" class="btn btn-primary btn-block"><i class="fa fa-facebook"></i> Sign in with <b>Facebook</b></a>
                    <a href="{{url('login/twitter')}}" class="btn btn-info btn-block"><i class="fa fa-twitter"></i> Sign in with <b>Twitter</b></a>
                    <a href="{{url('login/google')}}" class="btn btn-danger btn-block"><i class="fa fa-google"></i> Sign in with <b>Google</b></a>
                  </div>
                  <div class="or-seperator"><i>or</i></div>
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      <input type="text" class="form-control" name="username" placeholder="Username" required="required">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                      <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-success btn-block login-btn">Sign in</button>
                  </div>
                  <div class="clearfix">
                    <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
                    <a href="#" class="pull-right text-success">Forgot Password?</a>
                  </div>

                </form>

              </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <div class="hint-text small">Don't have an account? <a href="#" class="text-success">Register Now!</a></div>
            </div>

          </div>
        </div>
      </div>
    </div>
    @endif
  </div>
</nav>