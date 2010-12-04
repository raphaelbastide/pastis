<form action="<? $PHP_SELF; ?>" id="form" method="get">
		
	<h2>Placement</h2>
	<ul class="placement">
		<li><input type="radio" name="place" value="1"
		<?php if (isset($_GET['place'])){ if($_GET['place']==1){ ?>checked="checked"<?php }} ?> /> Layers</li>
		<li><input type="radio" name="place" value="2"
		<?php if (isset($_GET['place'])){ if($_GET['place']==2){ ?>checked="checked"<?php }} ?> /> Columns </li>
		<li><input type="radio" name="place" value="3"
		<?php if (isset($_GET['place'])){ if($_GET['place']==3){ ?>checked="checked"<?php }} ?> /> Rows </li>
	</ul>
		
	<br clear="all"/>
	<h2>Frame 1</h2>
	<span>URL :</span>
	<input id="url" type="text" value="<?php echo $url; ?>" name="url" size="50"/><br/>
	
	<h3>Transform</h3>	
	<ul class="radio">
		<li><input type="radio" name="rotate" value="0"
		<?php if (isset($_GET['rotate'])){ if($_GET['rotate']=='0'){ ?>checked="checked"<?php }} ?>/> 0</li>
		<li><input type="radio" name="rotate" value="90deg"
		<?php if (isset($_GET['rotate'])){ if($_GET['rotate']=='90deg'){ ?>checked="checked"<?php }} ?>/> 90&#xb0;</li>
		<li><input type="radio" name="rotate" value="180deg"
		<?php if (isset($_GET['rotate'])){ if($_GET['rotate']=='180deg'){ ?>checked="checked"<?php }} ?>/> 180&#xb0;</li>
		<li><input type="radio" name="rotate" value="-90deg"
		<?php if (isset($_GET['rotate'])){ if($_GET['rotate']=='-90deg'){ ?>checked="checked"<?php }} ?>/> -90&#xb0;</li>
		<li><input type="checkbox"  name="refresh"
		<?php if (isset($_GET['refresh'])) { ?>checked="checked"<?php } ?>value="1"/> Refresh every 20s</li>
	</ul>
		
		<h3>Custom css</h3>
		<ul>
			<li>
			<textarea name="css" class="css" rows="" cols=""><?php echo $css; ?></textarea>
			</li>
		</ul>

		
		<h2>Frame 2</h2>
		<span>URL :</span>
		<input id="url2" type="text" value="<?php echo $url2; ?>" name="url2" size="50"/>
		<br/>

		<h3>Transform</h3>
		<ul class="radio">
		<li><input type="radio" name="rotate2" value="0"
		<?php if (isset($_GET['rotate2'])){ if($_GET['rotate2']=='0'){ ?>checked="checked"<?php }} ?>/> 0</li>
		<li><input type="radio" name="rotate2" value="90deg"
		<?php if (isset($_GET['rotate2'])){ if($_GET['rotate2']=='90deg'){ ?>checked="checked"<?php }} ?>/> 90&#xb0;</li>
		<li><input type="radio" name="rotate2" value="180deg"
		<?php if (isset($_GET['rotate2'])){ if($_GET['rotate2']=='180deg'){ ?>checked="checked"<?php }} ?>/> 180&#xb0;</li>
		<li><input type="radio" name="rotate2" value="-90deg"
		<?php if (isset($_GET['rotate2'])){ if($_GET['rotate2']=='-90deg'){ ?>checked="checked"<?php }} ?>/> -90&#xb0;</li>
			<li><input type="checkbox"  name="refresh2"<?php if (isset($_GET['refresh2'])) { ?>checked="checked"<?php } ?>value="1"/> Refresh every 20s</li>			
		</ul>

		<h3>Custom css</h3>
		<ul>
			<li>
				<textarea name="css2" class="css" rows="" cols=""><?php echo $css2; ?></textarea>
			</li>
		</ul>
		
		<h2>Generate short url</h2>		
		
		<?php //Generate Short URL bit.ly API
				require_once('lib.php'); 
		?>
		<p>
		<label id="shorturl"><input id="shorturl" type="checkbox" name="shorturl" value="<? echo $shorturl ?>"> 			bit.ly</label>
		</p>
		<?php $shorturl=$_GET['shorturl']; ?>
		<?php if(isset($shorturl)): ?>
		<span>
		<?php $frameitURL="http://" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"]; ?>
		<?php echo '<a href="'.bitly_url($frameitURL).'" title="">'.bitly_url($frameitURL).'</a>'; ?>
		<?php endif; ?>
		</span>
		
		
		<input type="submit" class="send" onclick="submitform()" value="Apply"/>
		
		<div class="clear"></div>

		
		<h2>Last Favs</h2> <span class="sub">(authors on rollover)</span>
		<?php include 'favs.php'; ?>
		
		
		 <p style="text-align:right;">
			<a class="a2a_dd" href="http://www.addtoany.com/share_save">
			<img src="http://static.addtoany.com/buttons/favicon.png" width="12" height="12" border="0" alt="Share/Bookmark"/> Share</a><script type="text/javascript">a2a_linkname="#framit";</script><script type="text/javascript" src="http://static.addtoany.com/menu/page.js"></script> —
		<a href="http://www.raphaelbastide.com/info/" target="_blank" > About</a>
 
</p>
</form> 
