{strip}

<span id='cur-time'>{$smarty.now|date_format} <span id="clock"></span> <small>GMT</small></span>

<script type="text/javascript">
	function upd_tz()
	{
		var d=new Date();
		document.cookie='tz='+escape(d.getTimezoneOffset())+"; path=/";
		return true;
	}
	{if !_uid() and !isset($smarty.cookies.active)}
		upd_tz();
	{/if}

	obj_clock=document.getElementById("clock");
	time_h={$clock_H};
	time_m={$clock_M};
	time_s={$clock_S};

	function dig2(d)
	{
		return ((d<10)?"0":"")+d;
	}
	function wr_clock()
	{
		obj_clock.innerHTML=dig2(time_h)+':'+dig2(time_m)+':'+dig2(time_s);
		time_s++;
		if (time_s>=60)
		{
			time_s=0;
			time_m++;
			if (time_m>=60)
			{
				time_m=0;
				time_h++;
				if (time_h>=24)
				{
					time_h=0;
				}
			}
		}
	}
	wr_clock();
	setInterval("wr_clock();",1000);
</script>
{/strip}