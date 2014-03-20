var brate=50;
var grate=50;
var orate=50;

$(document).ready(function(){
		$('.slider-handle').draggable({
		containment:'parent',
		axis:'y',
		drag:function(e,ui){
			
			if(!this.par)
			{
				this.par = $(this).parent();
				this.parHeight = this.par.height();
				this.height = $(this).height();
				this.color = $.trim(this.par.attr('class').replace('colorful-slider',''));
			}
			
			document.getElementById("avgc").style.display="block";
			document.getElementById("thanks-layout").style.display="none";
			var ratio = 1-(ui.position.top+this.height)/this.parHeight;
			if(this.color=="blue"){document.getElementById("bluerate").innerHTML=parseInt((ratio*100+6));brate=ratio*100+6;}
			if(this.color=="green"){document.getElementById("greenrate").innerHTML=parseInt((ratio*100+6));grate=ratio*100+6;}
			if(this.color=="orange"){document.getElementById("orangerate").innerHTML=parseInt((ratio*100+6));orate=ratio*100+6;}
			avgrate=parseInt((brate+grate+orate)/3);
			document.form1.text1.value=avgrate;
			avgrate+=String(" %");
			document.getElementById("avgrate-value").innerHTML=avgrate;
			resizeBar(this.color,ratio);
		}
	});
});

function resizeBar(color,ratio)
{
	$('.cu-mid','.cuboid.'+color).height(200*ratio)
}