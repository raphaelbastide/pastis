// GET URL - not working yet
$(document).ready(function() {
    var pathname = window.location.pathname;
});


// GET FRAME WIDTH
	$(document).ready(function() {
		
		var theFrame = $(".frame", parent.document.body);
//		theFrame.width($(document).height());
		theFrame.height($(document).height());
		//autogrow
		$('textarea.css').autogrow();

	});

// AUTO REFRESH
function reloadIt(frameName) {
	frm=document.getElementsByName(frameName)[0];
	//frm.src=frm.src;
	setTimeout("reloadIt()",2000 );
	}

// TOGGLE MENU
    $(document).ready(function(){
        {
	 		  if ($("#open").is(":checked"))
	        {
	            $("#form").fadeIn("fast");
	        } else {     
	            $("#form").fadeOut("fast");
	        }

        }
		$("#open").click(function(){
        if ($("#open").is(":checked"))
        {
            $("#form").fadeIn("fast");
        } else {     
            $("#form").fadeOut("fast");
        }
      });
   
    });
