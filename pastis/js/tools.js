
//--------------CREATE DIV
//   Thx to http://bit.ly/aRPR09

jQuery.create = function() {
    if (arguments.length == 0) return [];
    var args = arguments[0] || {}, elem = null, elements = null;
    var siblings = null;

    // In case someone passes in a null object,
    // assume that they want an empty string.
    if (args == null) args = "";
    if (args.constructor == String) {
        if (arguments.length > 1) {
            var attributes = arguments[1];
                if (attributes.constructor == String) {
                            elem = document.createTextNode(args);
                            elements = [];
                            elements.push(elem);
                            siblings =
        jQuery.create.apply(null, Array.prototype.slice.call(arguments, 1));
                            elements = elements.concat(siblings);
                            return elements;

                    } else {
                            elem = document.createElement(args);

                            // Set element attributes.
                            var attributes = arguments[1];
                            for (var attr in attributes)
                                jQuery(elem).attr(attr, attributes[attr]);

                            // Add children of this element.
                            var children = arguments[2];
                            children = jQuery.create.apply(null, children);
                            jQuery(elem).append(children);

                            // If there are more siblings, render those too.
                            if (arguments.length > 3) {
                                    siblings =
        jQuery.create.apply(null, Array.prototype.slice.call(arguments, 3));
                                    return [elem].concat(siblings);
                            }
                            return elem;
                    }
            } else return document.createTextNode(args);
      } else {
              elements = [];
              elements.push(args);
              siblings =
        jQuery.create.apply(null, (Array.prototype.slice.call(arguments, 1)));
              elements = elements.concat(siblings);
              return elements;
      }
};


//--------------FRAMIT



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

    $('#open').attr('checked', false); 

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
            $('#board').addClass('edition');
        } else {     
            $("#form").fadeOut("fast");
            $('#board').removeClass('edition');
        }
      });
   
    });
