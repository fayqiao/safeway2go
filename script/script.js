$( document ).ready(function() {
    $('#datetimepicker1').datetimepicker();
});

function planJourney(){
	$('#planningFrame').hide();
	$('#shortPlanningFrame').slideToggle();
	$('#resultFrame').slideToggle();
}

function route(mapID){
	
	if($('#map_1').is(":visible")){
		$('#map_1').hide();
	}
	
	if($('#route_1').is(":visible")){
		$('#route_1').hide();
		$('#routeDetail_1').hide();
		$('#tips').hide();
		$('#suggestionDetail').hide();
	}
	
	if($('#route_2').is(":visible")){
		$('#route_2').hide();
		$('#routeDetail_2').hide();
		$('#tips').hide();
		$('#suggestionDetail').hide();
	}
	
	if($('#route_3').is(":visible")){
		$('#route_3').hide();
		$('#routeDetail_3').hide();
		$('#tips').hide();
		$('#suggestionDetail').hide();
	}
	
	if(mapID === 1){
		$('#route_1').show();
		$('#routeDetail_1').slideToggle('slow');
		$('#tips').slideToggle('slow');
		$('#suggestionDetail').slideToggle('slow');
	}else if(mapID === 2){
		$('#route_2').show();
		$('#routeDetail_2').slideToggle('slow');
		$('#tips').slideToggle('slow');
		$('#suggestionDetail').slideToggle('slow');
	}else if(mapID === 3){
		$('#route_3').show();
		$('#routeDetail_3').slideToggle('slow');
		$('#tips').slideToggle('slow');
		$('#suggestionDetail').slideToggle('slow');
	}else{
		//do nothing
	}
}