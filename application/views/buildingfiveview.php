    <div class="ui container">
      <div class="ui segments">
        <div class="ui segment">
          <div class="ui two column doubling grid">
            <div class="column">
              <div class="ui container">
                <table id="table_id" class="ui inverted green table">
                  <thead>
                    <th>Room Number</th>
                    <th>Building</th>
                    <th>Room Type</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Action</th>
                  </thead>
                  <tbody>
                    <?php
                     foreach($datatable as $dt){
                $ri = $dt->rooms_room_id%1000;
                

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
                            '.$dt->building_number.'
                          </div>
                        </div>
                      </td>';
                  echo '<td>
                        <h4 class="ui image header">
                          <div class="content">
                            '.$dt->room_type.'
                          </div>
                        </div>
                      </td>';
                  echo '<td>
                        <h4 class="ui image header">
                          <div class="content">
                            '.$dt->fname.'
                          </div>
                        </div>
                      </td>';
                  echo '<td>
                        <h4 class="ui image header">
                          <div class="content">
                            '.$dt->lname.'
                          </div>
                        </div>
                      </td>';
                $home = base_url();
                echo form_open($home.'edit_tenant');
                echo form_hidden('room_id',$dt->rooms_room_id);
                echo form_hidden('room_id',$dt->tenants_users_user_id);
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
            <div class="column">
              <div class="ui secondary pointing menu">
                <a class="item" href="<?php echo base_url().'buildingone'?>">Building 1</a>
                <a class="item" href="<?php echo base_url().'buildingtwo'?>">Building 2</a>
                <a class="item" href="<?php echo base_url().'buildingthree'?>">Building 3</a>
                <a class="item" href="<?php echo base_url().'buildingfour'?>">Building 4</a>
                <a class="item active" href="<?php echo base_url().'buildingfive'?>">Building 5</a>
              </div>
              <?php
              $edit_tenant = base_url().'addtenant';
                    echo form_open($edit_tenant,'class="ui large form"');
                /*echo form_input('username','','placeholder="Username"');
                echo form_password('password','','placeholder="Password"');*/
                    $buildingnumber = 5;
                    echo form_hidden('building',$buildingnumber);
                  ?>
                  <div class="ui stacked segment">
                    <div class="field">
                          <select class="ui fluid search dropdown" name="type">
                            <option value="1">Student</option>
                            <option value="2">Personel</option>
                          </select>
                    </div>
                    <div class="field">
                      <select name = "room">
                     <?php
                        foreach($rooms as $room){
                          $k = $room->room_id%1000;
                          echo '<option value="'.$room->room_id.'">'.$k.'</option>';
                        }
                      ?>
                      </select>
                    </div>
                    <div class="field">
                      <div class="ui left icon input">
                        <!--<input type="text" name="username" placeholder="E-mail address">-->
                        <?php
                          echo form_input('tenant_id','','placeholder="ID Number"');
                        ?>
                      </div>
                    </div>
                    <div class="field">
                      <div class="ui left icon input">
                        <!--<input type="text" name="username" placeholder="E-mail address">-->
                        <?php
                          echo form_input('fname','','placeholder="First Name"');
                        ?>
                      </div>
                    </div>
                    <div class="field">
                      <div class="ui left icon input">
                        <!--<input type="text" name="username" placeholder="E-mail address">-->
                        <?php
                          echo form_input('mname','','placeholder="Middle Name"');
                        ?>
                      </div>
                    </div>
                    <div class="field">
                      <div class="ui left icon input">
                        <!--<input type="text" name="username" placeholder="E-mail address">-->
                        <?php
                          echo form_input('lname','','placeholder="Last Name"');
                        ?>
                      </div>
                    </div>
                    <div class="field">
                      <div class="ui left icon input">
                        <!--<input type="text" name="username" placeholder="E-mail address">-->
                        <?php
                          echo form_input('email','','placeholder="E-mail"');
                        ?>
                      </div>
                    </div>
                    <label>Birthday</label>
                     <div class="three fields">
                        <div class="field">
                          <select class="ui fluid search dropdown" name="month">
                            <option value="">Month</option>
                            <option value="1">January</option>
                            <option value="2">February</option>
                            <option value="3">March</option>
                            <option value="4">April</option>
                            <option value="5">May</option>
                            <option value="6">June</option>
                            <option value="7">July</option>
                            <option value="8">August</option>
                            <option value="9">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                          </select>
                        </div>
                        <div class="field">
                          <?php
                            $x = 1;
                          ?>
                          <select class="ui fluid search dropdown" name="day">
                            <option value="">Day</option>
                            <?php
                            for($x;$x<32;$x++){
                              echo '<option value="'.$x.'">'.$x.'</option>';
                            }
                            
                            ?>
                          </select>
                        </div>
                        <div class="field">
                          <input type="text" name="year" maxlength="4" placeholder="Year">
                        </div>
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