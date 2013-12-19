 <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>Navbar example </h1>
        <p>This example is a quick exercise to illustrate how the default, static and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
        <p>To see the difference between static and fixed top navbars, just scroll.</p>
        <p>
          <a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">View navbar docs &raquo;</a>
        </p>
      </div>
      
      
      
      
      <div class="row">
          <div class="container">
              
    
              <div class="signup_wrap">
                <div class="signin_form">
                 <?php echo form_open("user/login"); ?>
                  <label for="email">Email:</label>
                  <input type="text" id="email" name="email" value="" />
                  <label for="password">Password:</label>
                  <input type="password" id="pass" name="pass" value="" />
                  <input type="submit" class="" value="Sign in" />
                 <?php echo form_close(); ?>
                </div><!--<div class="signin_form">-->
                </div><!--<div class="signup_wrap">-->

    <div class="row">
          <?php echo form_open('user/registration'); ?>
        
        <?php $classes = array(
                'size'        => '50',
                'class'       => 'form-control',
                'placeholder' => 'Enter Your Companies Name'
                
                );
        
        ?>
        <div class="col-xs-12 col-sm-12 col-md-4 well well-sm">
            
            <?php echo validation_errors('<p class="error">'); ?>
                 <?php echo form_open("user/registration"); ?>
            <p></p>
            <legend><a href="http://www.jquery2dotnet.com"><i class="glyphicon glyphicon-globe"></i></a> Sign up!</legend>
            <form action="#" method="post" class="form" role="form">
            <div class="row">
                <div class="col-xs-6 col-md-6">
                    
                     <?php echo form_input('firstname',  "firstname", "class='form-control'")  ?>
                </div>
                <div class="col-xs-6 col-md-6">
                    
                    <?php echo form_input('lastname','lastname', "class='form-control'");  ?>
                </div>
            </div>
            
             <?php echo form_input('youremail','Email', "class='form-control'");  ?>
           
            
           
             <?php echo form_password('password','Password', "class='form-control'");  ?>
           
            
            <label class="radio-inline">
                
               
                <?php echo form_radio('sex', 'male' ); ?>
                Male
            </label>
            <label class="radio-inline">
                <?php echo form_radio('sex', 'female' ); ?>
                Female
            </label>
            <br />
            <br />
            
            <?php echo form_submit('submit', ' Sign up!', "class='btn btn-primary'"); ?>
            
            </form>
        </div>
    </div>
              
               <?php echo form_close(); ?>
          
      </div>

    </div>