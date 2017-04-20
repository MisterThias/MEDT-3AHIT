$("#addrowbtn").click(function(){
	$("#myTable").find("#myTBody").append( "<tr><td>Fritz</td><td>50000000$</td></tr>" );
});
$("#delrowbtn").click(function(){
		
$("#myTable").find("#myTBody tr:last").remove();
});