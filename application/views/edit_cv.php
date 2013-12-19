<div class="container">
    <h5>Edit your CV</h5>
    <style>
        .title-cv{
            width: 100%;
            min-height: 150px;
        }
        .title-cv h1, .title-cv h2{ line-height: 20px; font-weight: bold;}
        
        h3.cv-title{ border-bottom: 2px #003399 solid; text-transform: uppercase; font-weight: bold;}
        
        .content-experience{ margin-bottom: 35px;}
        ul.experience{ list-style: none; margin-bottom: 25px;}
        ul.education{ list-style: none; margin-bottom: 25px;}
        
        .editable, textarea{
	background-color: #ffffd3;
        }

        textarea{
                width: 95%;
             
        }

        img.progress{
                vertical-align: middle;
                padding: 0 10px;
        }
        
    </style>
    
    <script>
    jQuery(document).ready(function() {
    jQuery('.edit').editable('user/updtitle/<?php  echo $person->id; ?>', { 
         type      : 'textarea',
         cancel    : 'Cancel',
         submit    : 'OK',
         indicator : '<img src="img/indicator.gif">',
         tooltip   : 'Click to edit...'
        });
     });
    </script>
    
    
    
  
    <div class="row title-cv">
	
	
	
        
       <h1 class="edit"><?php  echo $person->lastname; ?></h1>
        
       <h3 class="edit"><?php  echo $person->role; ?></h3>
       
      
    
    <div class="row">
        <div class="col-md-3">
            <h3 class="cv-title">Summary</h3>
            <div class="content-summary edit"><?php  echo $person->sumary; ?>
            </div>
            
        </div>
        <div class="col-md-9">
            <h3 class="cv-title">Experience</h3>
            <div class="content-experience">
                
                <ul class="experience">
                    <li>
                        <h3 class="edit">Frontend developer Vidamo Handels GmbH</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                        </p>
                    </li>
                    <li>
                        <h3>Frontend developer Vidamo Handels GmbH</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                        </p>
                    </li>
                    <li>
                        <h3>Frontend developer Vidamo Handels GmbH</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                        </p>
                    </li>
                    
                </ul>
                
                
            </div>
            
            <h3 class="cv-title">Education</h3>
            <div class="content-experience">
                <ul class="experience">
                    <li>
                        <h3>Frontend developer Vidamo Handels GmbH</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                        </p>
                    </li>
                    <li>
                        <h3>Frontend developer Vidamo Handels GmbH</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                        </p>
                    </li>
                    <li>
                        <h3>Frontend developer Vidamo Handels GmbH</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                        </p>
                    </li>  
                </ul>
                
                
            </div>
            
            
            
            
        </div>
        
    </div>

     

</div>
