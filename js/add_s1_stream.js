$(document).ready(function() {
var max_fields = 7; //maximum input boxes allowed
var wrapper = $(".sen_one"); //Fields wrapper
var add_button = $(".add_sen_one"); //Add button ID
var y = 1; //initlal text box count
$(add_button).click(function(e){ //on add input button click
e.preventDefault();
if(y < max_fields){ //max input box allowed
y++; //text box increment
$(wrapper).append('<div>Stream '+ y + ' <input type="text" name="s1streams[]" placeholder="eg A" Title="eg \'A\' represents \'S1A\' and so on"/><a href="#" class="remove_field">Remove</a></div><br/>'); //add input box
}
} );
$(wrapper).on("click",".remove_field", function(e){ //user click on remove text
e.preventDefault(); $(this).parent('div').remove(); y--;
} )
} );