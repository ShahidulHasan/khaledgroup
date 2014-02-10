<script type="text/javascript">
$(document).ready(function(){
	$("#hide").hide();
	$("#hideone").hide();
    var div=$("#bodyH");
		div.animate({width:'778px'},"slow");
    
	$("#hide").show(1000);
	$("#hideone").show(2000);
});
</script>

<div id="body">
	<div style="background:url(images/background1.gif) no-repeat; height: 297px; width: 100%;">
		<div id="bodyH" style="padding-top:0px;width:1px;height:100%;background:url(images/homepicone.gif) no-repeat left;">
				<div id="hide" style="width:100%;height:20px;text-align:left;float:left;color:#585858;font-family : Arial, sans-serif;padding-left:20px;padding-top:20px;font-size:20px;">built on a vision</div>
				<div id="hideone" style="width:100%;height:20px;text-align:left;float:left;color:#585858;font-family : Arial, sans-serif;padding-left:20px;font-size:20px;">inspired by innovation</div>
		</div>
		
	</div>
	
</div>
