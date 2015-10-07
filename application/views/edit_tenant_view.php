    
    <div class="ui container">
      <div class="ui segments">
        <div class="ui segment">
          <div class="ui one column doubling grid">
            <div class="column">
              <?php
              foreach($tenant_info as $ti){

              }
              $edit_tenant = base_url().'edit_tenant_info';
                    echo form_open($edit_tenant,'class="ui large form"');
                /*echo form_input('username','','placeholder="Username"');
                echo form_password('password','','placeholder="Password"');*/
                    $buildingnumber = 1;
                    echo form_hidden('tenant_user_id',$ti->tenants_users_user_id);
                    echo form_hidden('bday',$ti->bday);
                
                  ?>
                  <div class="ui stacked segment">
                    <div class="field">
                      <select name = "room">
                     <?php
                        foreach($rooms as $room){
                          echo '<option value="'.$room->room_id.'">'.$room->room_id.'</option>';
                        }
                      ?>
                      </select>
                    </div>
                    <div class="field">
                      <div class="ui left icon input">
                        <!--<input type="text" name="username" placeholder="E-mail address">-->
                        <?php
                          echo form_input('fname',$ti->fname,'placeholder="First Name"');
                        ?>
                      </div>
                    </div>
                    <div class="field">
                      <div class="ui left icon input">
                        <!--<input type="text" name="username" placeholder="E-mail address">-->
                        <?php
                          echo form_input('mname',$ti->mname,'placeholder="Middle Name"');
                        ?>
                      </div>
                    </div>
                    <div class="field">
                      <div class="ui left icon input">
                        <!--<input type="text" name="username" placeholder="E-mail address">-->
                        <?php
                          echo form_input('lname',$ti->lname,'placeholder="Last Name"');
                        ?>
                      </div>
                    </div>
                    <div class="field">
                      <div class="ui left icon input">
                        <!--<input type="text" name="username" placeholder="E-mail address">-->
                        <?php
                          echo form_input('email',$ti->email,'placeholder="E-mail"');
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
                      echo form_submit('submit','Edit Tenant Info','class="ui fluid large green submit button"');
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