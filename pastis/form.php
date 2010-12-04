
<form action="<? $PHP_SELF; ?>" id="form" method="get">
		
	<h2>Placement</h2>
	<ul class="placement">
		<li><input type="radio" name="place" value="1"
		<?php if (isset($_GET['place'])){ if($_GET['place']==1){ ?>checked="checked"<?php }} ?> /> Layers</li>
		<li><input type="radio" name="place" value="2"
		<?php if (isset($_GET['place'])){ if($_GET['place']==2){ ?>checked="checked"<?php }} ?> /> Columns </li>
		<li><input type="radio" name="place" value="3"
		<?php if (isset($_GET['place'])){ if($_GET['place']==3){ ?>checked="checked"<?php }} ?> /> Rows </li>

</form> 