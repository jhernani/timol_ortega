    
    <div class="ui container">
      <div class="ui segments">
        <div class="ui segment">
          <div class="ui one column doubling grid">
            <div class="column">
              <div class="ui secondary pointing menu">
              </div>
              <?php
              $loop = 1;
              $edit_room = base_url().'edit_room_info';
					        	echo form_open($edit_room,'class="ui large form"');
								/*echo form_input('username','','placeholder="Username"');
								echo form_password('password','','placeholder="Password"');*/
								
					        ?>
						      <div class="ui stacked segment">
						        <div class="field">
						          <div class="ui left icon input">
						            <!--<input type="text" name="username" placeholder="E-mail address">-->
						            <?php
						            if (is_array($rooms) || is_object($rooms)){

						            	foreach($rooms as $room){
						            		$mo_value = $room->maximum_occupants;
						            		$fr = $room->room_id%1000;
						            		echo form_hidden('room_id',$room->room_id);
						            		/*echo form_input('room_number',$room->room_id,'placeholder="Room Number"');*/
						            	            	
						            ?>
						            <input type="text" value="<?php echo $fr;?>" placeholder="Room Number" name="room_number"/>
						          </div>
						        </div>
						        <div class="field">
						        	
						        		<?php
						        		/*	echo '<select>';
						        			
						        			for($loop; $loop < 7; $loop++){
						        				if($loop != $mo_value){
						        					echo '<option value="'.$loop.'"">'.$loop.'</option>';
						        					
						        				}else{
						        					echo '<option value="'.$loop.'"" selected>'.$loop.'</option>';						        					
						        				}
						        			}
						        			echo '</select>';*/
						        		?>
						        	
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
						        		echo form_dropdown('occupants',$occupants,$room->maximum_occupants);
						        	?>
						        </div>
						        <div class="field">
						        	<?php
						        	switch ($room->building_number) {
										case "Building 1":
											$buildingn = 1;
											break;
										case "Building 2":
											$buildingn = 2;
											break;
										case "Building 3":
											$buildingn = 3;
											break;
										case "Building 4":
											$buildingn = 4;
											break;
										case "Building 5":
											$buildingn = 5;
											break;
										
										default:
											break;
									}
						        		$building = array(
						        				'' => 'Building',
						        				'1' => 'Building 1',
						        				'2' => 'Building 2',
						        				'3' => 'Building 3',
						        				'4' => 'Building 4',
						        				'5' => 'Building 5'
						        			);
						        		echo form_dropdown('building',$building,$buildingn);
						        	?>
						        </div>
						        <div class="field">
						        	<?php
						        		$room_type = array(
						        				'' => 'Room Type',
						        				'Aircon' => 'Aircon',
						        				'Non-Aircon' => 'Non-Aircon'
						        			);
						        		echo form_dropdown('room_type',$room_type,$room->room_type);
						        	?>
						        </div>
						        <div class="field">
						        	<?php
						        		$gender = array(
						        				'' => 'Gender Preference',
						        				'Male' => 'Male',
						        				'Female' => 'Female'
						        			);
						        		echo form_dropdown('gender_preference',$gender,$room->gender_preference);
						        	?>
						        </div>
						        <!--<div class="ui fluid large green submit button">Login</div>-->
						        <?php
						        	echo form_submit('submit','Edit Room Info','class="ui fluid large green submit button"');
						        ?>
						      </div>
						        <div class="ui message">
							    <?php
							    	  echo validation_errors('<p class="error">');
							    ?>
							    </div>	

						        <?php
						        	echo form_close();
						        	}
						        }
						        ?>
            </div>      
          </div>
        </div>        
      </div>
    </div>
</body>
</html>