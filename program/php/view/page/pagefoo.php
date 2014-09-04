<div data-role='page'>
	<div data-role='header'>
		<h3></h3>
		<div data-role='navbar'>
			<ul>
				<li><a href=''  data-icon=''></a></li>
				<li><a href='' data-ajax='false' data-icon=''></a></li>
			</ul>
		</div>
	</div>
	<div data-role='main' class='ui-content'>
		<div class='ui-field-contain'>
		<?php
		$attr = array( 'data-ajax' => 'false', 'method' => 'POST', 'id' => 'addmemform');
		echo form_open('/create/addmem',$attr);
		?>
			<table id=''>
				<tr>
					<td  id='errinfo' class='errmsg'>
						<?php 
							if ($errmsg) {
								echo $errmsg;
							}
						?>
					</td>
				</tr>
				<tr>
					<td><input type='submit' class='ui-btn' value='Submit'/></td>
				</tr>
			</table>
		</form>
		</div>
	</div>
	<div data-role='footer'>
		<h3></h3>
	</div>
</div>
