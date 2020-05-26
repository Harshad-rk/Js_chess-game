<!-- Login------------------------------------------------------------>	
	<div id="infoSQL" ></div>
	<input type="submit" class="btn btn-primary" id="logout_submit"  value="logout" style="display:none">
<!-- Form------------------------------------------------------------>	
<!--<input type="submit" id="registerButton" value="register">
-->
<!-- Form------------------------------------------------------------>	
<!-- Button trigger modal -->
<button  type="button" id="loginmodel" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
 Login
</button>

<!-- Modal -->    
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
		<div type="text" id="logform">
			<label for="username">Username</label>
			<input type="text" id="username" />
			<br/>
			<label for="password">Password</label>
			<input type="password" id="password" />
			<br/>
			<br/>
                </div>	
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" data-dismiss="modal" id="submit" value="login">Login</button>
      </div>
    </div>
  </div>
</div>
<!-- Button trigger modal -->
<button  type="submit" style="display: none;" id="registerButton"class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter1">
  Register
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter1Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Register</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div  method="post">
	<div class="field">
		<label for="regusername">Choose a username</label>
		<input type="text" name="regusername" id="regusername" value="">
	</div>
	<div class="field">
		<label for="regpassword">Choose a password</label>
		<input type="password" name="regpassword" id="regpassword">
	</div>
	<div class="field">
		<label for="regpassword_again">Enter your password again</label>
		<input type="password" name="regpassword_again" id="regpassword_again">
	</div>
	

</div>	
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" type="submit" id="register_submit" class="btn btn-primary" data-dismiss="modal">Register</button>
      </div>
    </div>
  </div>
</div>