echo '
<div class="row">
    <form class="col s12">
        
      <div class="row">
        <div class="input-field col s12">
           <input placeholder="Insert Username" id="first_name" type="text" name="user_name" class="validate" data-length="30">
          <label for="first_name">Username:</label>
        </div>
      </div>
        
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" name="user_pass" class="validate">
          <label for="password">Password:</label>
        </div>
      </div>
        
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" name="user_pass_check" class="validate">
          <label for="password">Password again:</label>
        </div>
      </div>
        
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" name="user_email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
    
    </form>
</div>';
        



echo '<form method="post" action="">
        Username: <input type="text" name="user_name" />
        Password: <input type="password" name="user_pass">
        Password again: <input type="password" name="user_pass_check">
        E-mail: <input type="email" name="user_email">
        <input type="submit" value="Add category" />
     </form>';

<button class="btn waves-effect waves-light" type="submit" name="action">Submit
        <i class="material-icons right">send</i>
       </button>