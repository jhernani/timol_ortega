    
    <div class="ui container">
      <div class="ui segments">
        <div class="ui segment">
          <div class="ui one column doubling grid">
            <div class="column">
              <div class="ui secondary pointing menu">
                <a class="item" href="<?php echo base_url().'view_rooms'?>">View Rooms</a>
                <a class="active item" href="<?php echo base_url().'add_rooms'?>">Add Rooms</a>
              </div>
              <?php
              $createroom = base_url().'createroom';
					        	echo form_open($createroom,'class="ui large form"');
								/*echo form_input('username','','placeholder="Username"');
								echo form_password('password','','placeholder="Password"');*/
								
					        ?>
						      <div class="ui stacked segment">
						        <div class="field">
						          <div class="ui left icon input">
						            <!--<input type="text" name="username" placeholder="E-mail address">-->
						            <?php
						            	echo form_input('room_number','','placeholder="Room Number"');
						            ?>
						          </div>
						        </div>
						        <div class="field">
						        	<?php
						        		$occupants = array(
						        				'' => 'Maximum Number of Occupants',
						        				'1' => '1',
						        				'2' => '2',
						        				'3' => '3',
						        				'4' => '4',
						        				'5' => '5',
						        				'6' => '6'
						        			);
						        		echo form_dropdown('occupants',$occupants,'');
						        	?>
						        </div>
						        <div class="field">
						        	<?php
						        		$building = array(
						        				'' => 'Building',
						        				'1' => 'Building 1',
						        				'2' => 'Building 2',
						        				'3' => 'Building 3',
						        				'4' => 'Building 4',
						        				'5' => 'Building 5'
						        			);
						        		echo form_dropdown('building',$building,'');
						        	?>
						        </div>
						        <div class="field">
						        	<?php
						        		$room_type = array(
						        				'' => 'Room Type',
						        				'Aircon' => 'Aircon',
						        				'Non-Aircon' => 'Non-Aircon'
						        			);
						        		echo form_dropdown('room_type',$room_type,'');
						        	?>
						        </div>
						        <div class="field">
						        	<?php
						        		$gender = array(
						        				'' => 'Gender Preference',
						        				'Male' => 'Male',
						        				'Female' => 'Female'
						        			);
						        		echo form_dropdown('gender_preference',$gender,'');
						        	?>
						        </div>
						        <!--<div class="ui fluid large green submit button">Login</div>-->
						        <?php
						        	echo form_submit('submit','Add Room','class="ui fluid large green submit button"');
						        ?>
						      </div>
						        <div class="ui message">
							    <?php
							    	  echo validation_errors('<p class="error">');
							    ?>
							    </div>	

						        <?php
						        	echo form_close();
						        ?>
            </div>      
          </div>
        </div>        
      </div>
    </div>
</body>
</html>