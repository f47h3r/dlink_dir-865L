<form id="mainform" onsubmit="return false;">
<div class="orangebox">
	<h1><?echo i18n("Internet Sessions");?></h1>
	<p>
		<?echo i18n("This page displays Source and Destination sessions passing through the device.");?>
	</p>
	<p><input type="button" value="<?echo i18n("Refresh");?>" onClick="PAGE.OnClickRefresh();" /></p>
</div>
<!--<div class="blackbox">
	<h2><?echo i18n("NAPT Sessions");?></h2>
	<div class="textinput">
		<span class="name"><?echo i18n("TCP Sessions");?></span>
		<span class="delimiter">:</span>
		<span class="value" id="tcp_sess"></span>
	</div>
	<div class="textinput">
		<span class="name"><?echo i18n("UDP Sessions");?></span>
		<span class="delimiter">:</span>
		<span class="value" id="udp_sess"></span>
	</div>
	<div class="textinput">
		<span class="name"><?echo i18n("Total");?></span>
		<span class="delimiter">:</span>
		<span class="value" id="all_sess"></span>
	</div>
	<div class="gap"></div>
</div>-->
<div class="blackbox">
	<div class="centerline" align="center">
		<div class="textinput">
			<span class="name" id="loading"></span>
		</div>				
		<div id="sess_list"></div>					
	</div>
	<div class="gap"></div>
</div>
<br>
<br> 											
<br>
<br>
<br> 											
<br> 											
<br>
</form>
