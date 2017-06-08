<?php
	require('config.php');
    include('Pagination.class.php');

	$limit = 10;
	$start = isset($_POST['page']) ? intval($_POST['page']) : 0;

	if (isset($_REQUEST['search']) && !empty($_REQUEST['search']) && is_string($_REQUEST['search'])) {
		$search = $_REQUEST['search'];
		$search = str_replace('%', '', $search);
		$search = $mysql->quote('%' . $search . '%');

		$req = $mysql->query('SELECT COUNT(*) AS total FROM datas WHERE Nick LIKE CONCAT("%", ' . $search . ', "%") OR Link LIKE CONCAT("%", ' . $search . ', "%")');
		$req->execute(array($search, $search));
		$total = $req->fetch(PDO::FETCH_LAZY)->total;

		$req = $mysql->prepare('SELECT *, IF((up+down) = 0, 0, ROUND((up-down) / (up+down) * 100)) as total_percent  FROM datas WHERE Nick LIKE ' . $search . ' OR Link LIKE ' . $search . ' ORDER BY id DESC LIMIT ' . $start . ', ' . $limit);
		$req->execute(array($search, $search));
	}
	else {
		$req   = $mysql->query('SELECT COUNT(*) AS total FROM datas');
		$total = $req->fetch(PDO::FETCH_LAZY)->total;

		$req = $mysql->query('SELECT *, IF((up+down) = 0, 0, ROUND((up-down) / (up+down) * 100)) as total_percent FROM datas ORDER BY id DESC LIMIT ' . $start . ', ' . $limit);
	}

    $pagConfig = array(
		'currentPage' => $start,
        'totalRows'   => $total,
        'perPage'     => $limit,
        'link_func'   => 'paginationData'
    );

    $pagination = new Pagination($pagConfig);
?>
<table class="tab_list">
	<tr>
		<td width="250">
			<strong>NICK</strong>
		</td>
		<td width="250">
			<strong>BOARD</strong>
		</td>
		<td width="250">
			<strong>SCREENSHOT</strong>
		</td>
		<td width="250">
			<strong>RATE/HATE</strong>
		</td>
	</tr>
<?php
	if ($req->rowCount()) {
		foreach ($req->fetchAll() as $row) {
?>
	<tr>
		<td width="250">
			<?php echo(htmlentities($row['Nick'])); ?>
		</td>
		<td width="250">
			<a href="<?php echo($hidereferer . htmlentities($row['Link'])); ?>" title="<?php echo(htmlentities($row['Board'], ENT_QUOTES)); ?>"><?php echo(htmlentities($row['Board'])); ?></a>
		</td>
		<td width="250">
<?php
	if ($row['Screenshot']) {
?>
			<a href="<?php echo(htmlentities($row['Screenshot'], ENT_QUOTES)); ?>" class="highslide" onclick="return hs.expand(this)" onmouseover="getCover(event)" cover="<?php echo(htmlentities($row['Screenshot'], ENT_QUOTES)); ?>" onmouseleave="ungetCover(event)">Click to view</a>
<?php
	}
	else {
?>
			<label style="color: grey;" onmouseover="getCover(event)" cover="" onmouseleave="ungetCover(event)">Unavailable</label>
<?php
	}
?>
		</td>
		<td width="250">
			<a href="javascript:void(0);" onClick="cwRating(<?php echo($row['id']); ?>,1,'up_down_percent<?php echo($row['id']); ?>')">
				<img style="margin-right: 11px;" src="images/thumbs-up2.gif" />
			</a>
			<a href="javascript:void(0);" onClick="cwRating(<?php echo($row['id']); ?>,0,'up_down_percent<?php echo($row['id']); ?>')">
				<img style="margin-right: 11px;" src="images/thumbs-down1.gif" />
			</a>
			<span style="font-size:14px;" id="up_down_percent<?php echo($row['id']); ?>"><?php echo($row['total_percent']); ?> %</span>
		</td>
	</tr>
<?php
		}
	}
	else {
?>
	<tr>
		<td colspan="4">
			<p class="error_not_found">Aucun élement ne correspond à votre recherche.</p>
		</td>
	</tr>
<?php
	}
?>
</table>
<?php
	echo $pagination->createLinks();
