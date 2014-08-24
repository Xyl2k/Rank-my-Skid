<?php
	
	require('config.php');
	
	if (isset($_GET['user']) && !empty($_GET['user']) && is_string($_GET['user']))
	{
		$user = mysql_real_escape_string($_GET['user']);
		
		
		$sql = mysql_query("SELECT COUNT(*) AS total FROM datas WHERE Nick = '".$user."' ORDER BY rate DESC LIMIT 10");
		$total = mysql_fetch_assoc($sql);
		$total = $total['total'];
			
		$number_page = ceil($total / 10);
		
		if (isset($_GET['n']) && !empty($_GET['n']))
		{
			if (is_numeric($_GET['n']) && !is_float($_GET['n']))
			{
				if ($_GET['n'] < 1)
					$n = 1;
				else
					$n = $_GET['n'];
			}
			else
				$n = 1;
		}
		else
			$n = 1;
	
		$first = ($n - 1) * 10;
		
		$sql = mysql_query("SELECT id, Nick, Board, Link, Rate FROM datas WHERE Nick = '".$user."' ORDER BY rate DESC LIMIT ".$first.", 10");
		
		if (!mysql_num_rows($sql))
		{
			?>
			<p class="error_not_found">Aucun élement ne correspond à votre recherche.</p>
			
			<?php
			return;
		}
		echo '<div id="d_user"></div>';
	}
	
	else if (isset($_GET['search']) && !empty($_GET['search']) && is_string($_GET['search']))
	{
		$search = str_replace(array('%', '_', '-', '"', '\'', '\\', '//', "\t", ' '), '', $search);
		$search = mysql_real_escape_string($_GET['search']);
		
		$sql = mysql_query("SELECT COUNT(*) AS total FROM datas WHERE Nick LIKE '%".$search."%' OR
							Board LIKE '%".$search."%' OR Link LIKE '%".$search."%' ORDER BY rate DESC LIMIT 10");
							
		$total = mysql_fetch_assoc($sql);
		$total = $total['total'];
			
		$number_page = ceil($total / 10);
		
		if (isset($_GET['n']) && !empty($_GET['n']))
		{
			if (is_numeric($_GET['n']) && !is_float($_GET['n']))
			{
				if ($_GET['n'] < 1)
					$n = 1;
				else
					$n = $_GET['n'];
			}
			else
				$n = 1;
		}
		else
			$n = 1;
	
		$first = ($n - 1) * 10;
		$sql = mysql_query("SELECT id, Nick, Board, Link, Rate FROM datas WHERE Nick LIKE '%".$search."%' OR
							Board LIKE '%".$search."%' OR Link LIKE '%".$search."%' ORDER BY rate DESC LIMIT ".$first.", 10");
		
		if (!mysql_num_rows($sql))
		{
			?>
			<p class="error_not_found">Aucun élement ne correspond à votre recherche.</p>
			
			<?php
			return;
		}
		echo '<div id="d_search"></div>';
		
	}
	else
	{
		$sql = mysql_query("SELECT COUNT(*) AS total FROM datas");
		$total = mysql_fetch_assoc($sql);
		$total = $total['total'];
			
		$number_page = ceil($total / 10);
		
		if (isset($_GET['n']) && !empty($_GET['n']))
		{
			if (is_numeric($_GET['n']) && !is_float($_GET['n']))
			{
				if ($_GET['n'] < 1)
					$n = 1;
				else
					$n = $_GET['n'];
			}
			else
				$n = 1;
		}
		else
			$n = 1;
	
		$first = ($n - 1) * 10;
		
		$sql = mysql_query("SELECT id, Nick, Board, Link, Rate FROM datas ORDER BY rate DESC LIMIT ".$first.", 10");
	}
	?>
	
	<table class="tab_list">
				
					<tr>
						<td width="250"><strong>NICK</strong></td>
						<td width="250"><strong>BOARD</strong></td>
						<td width="250"><strong>LINK</strong></td>
						<td width="250"><strong>RATE</strong></td>
					</tr>
					<?php
						while($datas = mysql_fetch_array($sql))
						{
							
							?>
							<tr>
								<td width="250"><a id="user" href="#" title="<?php echo htmlentities($datas['Nick']);?>" onclick="search_from_user(this.title); return false;"><?php echo htmlentities($datas['Nick']);?></a></td>
								<td width="250"><?php echo htmlentities($datas['Board']);?></td>
								<td width="250"><a href="images/gkhXp.png" rel="lightbox"><?php echo htmlentities($datas['Link']);?></td>
								<td width="250"><img style="margin-right: 11px;" src="images/thumbs-up2.gif"></img>
												<img style="margin-right: 11px;" src="images/thumbs-down1.gif"></img>
												<span style="font-size:14px;"><?php echo rand(60,99);?> %</span>
								</td>
							</tr>
							<?php
						}
					?>
				
			</table>
		
		<?php
		
			for ($i = 0; $i < $number_page; $i++)
			{
				?>
				<a <?php if ($n == ($i+1)) echo 'style="color: red;"';?> href="#" onclick="refresh_by_pagination(this.title); return false;" title="<?php echo ($i + 1);?>"><?php echo ($i + 1);?></a>
				<?php
			}
			
		?>
		
