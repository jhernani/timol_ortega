
    <div class="ui container">
      <div class="ui segments">
        <div class="ui segment">
          <div class="ui one column doubling grid">
            <div class="column">
              <div class="ui secondary pointing menu">
                <a class="active item" href="<?php echo base_url().'view_rooms'?>">View Rooms</a>
                <a class="item" href="<?php echo base_url().'add_rooms'?>">Add Rooms</a>
              </div>
              <div class="ui container">
				  <table id="table_id" class="ui inverted green table">
				    <thead>
				      <th>Room Number</th>
				      <th>Building</th>
				      <th>Room Type</th>
				      <th>Maximum # of Occupants</th>
				      <th>Current # of Occupants</th>
				      <th>Gender Preference</th>
				      <th>Action</th>
				    </thead>
				    <tbody>
				    	<?php
						  foreach($rooms as $room){
						  	$ri = $room->room_id%1000;
						  	

						  	echo '<tr>';
						  		echo '<td>
							          <h4 class="ui image header">
							            <div class="content">
							              '.$ri.'
							            </div>
							          </div>
							        </td>';
							    echo '<td>
							          <h4 class="ui image header">
							            <div class="content">
							              '.$room->building_number.'
							            </div>
							          </div>
							        </td>';
							    echo '<td>
							          <h4 class="ui image header">
							            <div class="content">
							              '.$room->room_type.'
							            </div>
							          </div>
							        </td>';
							    echo '<td>
							          <h4 class="ui image header">
							            <div class="content">
							              '.$room->maximum_occupants.'
							            </div>
							          </div>
							        </td>';
							    echo '<td>
							          <h4 class="ui image header">
							            <div class="content">
							              '.$room->current_number_of_occupants.'
							            </div>
							          </div>
							        </td>';
							    echo '<td>
							          <h4 class="ui image header">
							            <div class="content">
							              '.$room->gender_preference.'
							            </div>
							          </div>
							        </td>';
						    $home = base_url();
						    echo form_open($home.'edit_room');
						    echo form_hidden('room_id',$room->room_id);
						    echo '<td>';
						    echo form_submit('submit','Edit','class="ui primary button"');
						    /*echo form_submit('submit','Disable','onclick="return verify()"','class="ui primary button"').*/
						    echo 
						    '<button class="ui primary button" name="submit" value="Disable" onclick="return verify()">
							  	Disable
							 </button></td></tr>'.form_close();
						  }
						?> 		      
				    </tbody>
				  </table>
				</div>
            </div>      
          </div>
        </div>        
      </div>	      	
    </div>
</body>
</html>