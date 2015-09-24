$(document).ready(function(){
	
	$('#timepicker').datetimepicker({
		datepicker:false,
		format:'H:i',
		step:30
	});
	
	$('#timepicker2').datetimepicker({
		datepicker:false,
		format:'H:i',
		step:30
	});

	$('#datepicker').datetimepicker({
		timepicker:false,
		format:'Y/m/d',
		
	});
	
	$('#datepicker2').datetimepicker({
		timepicker:false,
		format:'Y/m/d',
	});
	

	
	$("#dateday").change(function(){
		var x = document.getElementById("mySelect").value;
		if(x === 'input')
		{
	    	document.getElementById("demo").innerHTML = ('<input type="text" name="date[]" class="form-control" id="datepicker" placeholder="Enter date here...">');
		}else if(x === 'checkbox'){
			document.getElementById("demo").innerHTML = ('<div class="btn-group" data-toggle="buttons" id="day"><label class="btn btn-info"><input name="date[]" type="checkbox" value="monday" id="day">Monday</input></label><label class="btn btn-info"><input name="date[]" type="checkbox" value="tuesday" id="day"> Tuesday</input></label><label class="btn btn-info"><input name="date[]" type="checkbox" value="wednesday" id="day"> Wednesday</input></label><label class="btn btn-info"><input name="date[]" type="checkbox" value="thursday" id="day"> Thursday</input></label><label class="btn btn-info"><input name="date[]" type="checkbox" value="friday" id="day"> Friday</input></label><label class="btn btn-info"><input name="date[]" type="checkbox" value="saturday" id="day"> Saturday</input></label><label class="btn btn-info"><input name="date[]" type="checkbox" value="sunday" id="day"> Sunday</input></label>');
		}
		else if (x === 'none'){
			document.getElementById("demo").innerHTML = '';
		}
	});

	
	
	
});