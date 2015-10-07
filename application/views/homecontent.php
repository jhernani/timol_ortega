		<div class="ui three column grid">
					<div class="column">
					</div>
					<div class="column">
						<div class="ui message grey">
							<div class="ui divider"></div>
							<div class="content">
								<h2 class="ui green image header">
					      	  		Log-in to your account
					      	  	</h2>
					        </div>	
					        <!--<form class="ui large form" action="login" method="post">-->

					        <?php
					        	echo form_open('login','class="ui large form"');
								/*echo form_input('username','','placeholder="Username"');
								echo form_password('password','','placeholder="Password"');*/
								
					        ?>
						      <div class="ui stacked segment">
						        <div class="field">
						          <div class="ui left icon input">
						            <!--<input type="text" name="username" placeholder="E-mail address">-->
						            <?php
						            	echo form_input('username','','placeholder="Username"');
						            ?>
						          </div>
						        </div>
						        <div class="field">
						          <div class="ui left icon input">
						            <?php
						            	echo form_password('password','','placeholder="Password"');
						            ?>
						          </div>
						        </div>
						        <!--<div class="ui fluid large green submit button">Login</div>-->
						        <?php
						        	echo form_submit('submit','login!','class="ui fluid large green submit button"');
						        ?>
						      </div>

						        <?php
						        	echo form_close();
						        ?>
						    <!--</form>-->
						    <div class="ui message">
						    <?php
						    	  echo validation_errors('<p class="error">');
						    ?>						    
						      New to us? <a href="#">Sign Up</a>
						    </div>		
						</div>
					</div>
					<div class="column">
					</div>
		</div>
	</body>
</html>