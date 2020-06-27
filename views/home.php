<div class="container">
	<table border="0">
	<thead>
	<tr>
		<th>ID</th>
		<th>ITEM</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($lista as $item):?>
	<tr>
		<td><?=$item->id;?></td>
		<td><?=$item->title;?></td>
	</tr>
	<?php endforeach; ?>
	</tbody>
	</table>

	<?php if($paginaAtual > 1): ?>
	<a href="<?=BASE_URL;?>?p=1">Início</a>
	<a href="<?=BASE_URL;?>?p=<?=($paginaAtual-1)?>">&lt;</a>
	<?php endif; ?>

	<?php for($q=1; $q <= $paginas; $q++): ?>
		<?php if($paginaAtual == $q): ?>
			<a href="<?=BASE_URL;?>?p=<?=$q?>"><span class='active'><?=$q;?></span></a>
		<?php else: ?>
			<a href="<?=BASE_URL;?>?p=<?=$q?>"><?=$q;?></a>
		<?php endif; ?>
	<?php endfor; ?>


	<?php if($paginaAtual != $paginas): ?>
	<a href="<?=BASE_URL;?>?p=<?=($paginaAtual+1)?>">&gt;</a>	
	<a href="<?=BASE_URL;?>?p=<?=$paginas;?>">Última</a>
	<?php endif; ?>
</div>	