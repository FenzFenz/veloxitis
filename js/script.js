var prop = {
			maxVal  : 180, // Max value of the meter
			divFact : 10,  // Division value of the meter
			dangerLevel : 120, // more than this leval, color will be red
			initDeg : -45, // reading begins angle
			maxDeg  : 270, // total angle of the meter reading
			edgeRadius  : 150, // radius of the meter circle
			speedNobeH  : 4,   // speed nobe height
			speedoNobeW : 95,  // speed nobe width
			speedoNobeL : 13,  // speed nobe left position
			indicatorRadius : 125, // radius of indicators position
			indicatorNumbRadius : 90,  // radius of numbers position
			speedPositionTxtWH  : 80,  // speedo-meter current value cont
			nobW: 20,  // indicator nob width
			nobH: 4,   // indicator nob height
			numbW   : 30,  // indicator number width
			numbH   : 16,  // indicator number height
			midNobW : 10,  // indicator mid nob width
			midNobH : 3,   // indicator mid nob height
			noOfSmallDiv: 2,   // no of small div between main div
			eventListenerType   : 'change',// no of small div between main div
		};
jQuery(document).ready(function(){
	$("#tachimetro").myfunc(prop);
	$.ajax({
	    url:"jsonspeed.php",  
	    success:function(data) {
	    	/*Cicliamo l'array di data e chiamiamo thespeed*/
	    	$.each(data, function(i, item) {
	    		thespeed(data[0].speed);
	    	});
	    }
	});
	setTimeout(function(){
		thespeed(0);
	}, 3000);
	jQuery(".speedNobe").append("<div>aaaaaaaaaaaaaaaaaaa</div>");
});

function thespeed(theSpeed){   
	noOfDev = prop.maxVal/prop.divFact;
    var speed = theSpeed;
    if(speed > prop.maxVal){
      speed = prop.maxVal;
    }
    if(speed < 0 || isNaN(speed)){
      speed = 0;
    }
    speedInDeg = (prop.maxDeg/prop.maxVal)*speed + prop.initDeg;
    
    jQuery(document).find(".speedNobe").css({
      "-webkit-transform" :'rotate('+speedInDeg+'deg)',
      "-webkit-transform" :'rotate('+speedInDeg+'deg)',
      "-moz-transform"    :'rotate('+speedInDeg+'deg)',
      "-o-transform"      :'rotate('+speedInDeg+'deg)'
    });
    jQuery(document).find(".speedPosition").html(speed);
    
    jQuery(document).find(".envelope .nob,.envelope .numb").removeClass("bright");
    for(var i=0; i<=noOfDev; i++){
      if(speed >= i*prop.divFact){
    	  jQuery(document).find(".envelope .nob").eq(i).addClass("bright");
    	  jQuery(document).find(".envelope .numb").eq(i).addClass("bright");
      }else{
        break;
      }
    }
}