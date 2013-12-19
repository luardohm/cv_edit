/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


$(function() {
        
  $(".editable_select").editable("<?php print $url ?>save.php", { 
    indicator : '<img src="img/indicator.gif">',
    data   : "{'Lorem ipsum':'Lorem ipsum','Ipsum dolor':'Ipsum dolor','Dolor sit':'Dolor sit'}",
    type   : "select",
    submit : "OK",
    style  : "inherit",
    submitdata : function() {
      return {id : 2};
    }
  });
  $(".editable_select_json").editable("<?php print $url ?>save.php", { 
    indicator : '<img src="img/indicator.gif">',
    loadurl : "<?php print $url ?>json.php",
    type   : "select",
    submit : "OK",
    style  : "inherit"
  });
  $(".editable_textarea").editable("<?php print $url ?>save.php", { 
      indicator : "<img src='img/indicator.gif'>",
      type   : 'textarea',
      submitdata: { _method: "put" },
      select : true,
      submit : 'OK',
      cancel : 'cancel',
      cssclass : "editable"
  });
  $(".editable_textile").editable("<?php print $url ?>save.php?renderer=textile", { 
      indicator : "<img src='img/indicator.gif'>",
      loadurl   : "<?php print $url ?>load.php",
      type      : "textarea",
      submit    : "OK",
      cancel    : "Cancel",
      tooltip   : "Click to edit..."
  });
  
  $(".click").editable("<?php print $url ?>echo.php", { 
      indicator : "<img src='img/indicator.gif'>",
      tooltip   : "Click to edit...",
      style  : "inherit"
  });
  $(".dblclick").editable("<?php print $url ?>echo.php", { 
      indicator : "<img src='img/indicator.gif'>",
      tooltip   : "Doubleclick to edit...",
      event     : "dblclick",
      style  : "inherit"
  });
  $(".mouseover").editable("<?php print $url ?>echo.php", { 
      indicator : "<img src='img/indicator.gif'>",
      tooltip   : "Move mouseover to edit...",
      event     : "mouseover",
      style  : "inherit"
  });
  
  /* Should not cause error. */
  $("#nosuch").editable("<?php print $url ?>echo.php", { 
      indicator : "<img src='img/indicator.gif'>",
      type   : 'textarea',
      submit : 'OK'
  });

});
