<div class="container">
	<table class='table table-md table-hover table-bordered '>
		<thead class="thead-light">
			<tr>
				<th>#</th>
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
</div>	

	<nav aria-label="Page navigation">
	  <ul class="pagination justify-content-center">
	    <li class="page-item">
		<?php if($paginaAtual > 1): ?>
			<a class="page-link" href="<?=BASE_URL;?>?p=<?=($paginaAtual-1)?>">Voltar</a>
		<?php endif; ?>	    	
	      
	    </li>
			<?php for($q=1; $q <= $paginas; $q++): ?> 
				<?php if($paginaAtual == $q): ?>
					<li class="page-item active"><a class="page-link" aria-current="page" href="<?=BASE_URL;?>?p=<?=$q?>"><?=$q;?></a></li>
				<?php else: ?>
					<li class="page-item"><a class="page-link" href="<?=BASE_URL;?>?p=<?=$q?>"><?=$q;?></a></li>
				<?php endif; ?>
			<?php endfor; ?>	    
	    <li class="page-item">
			<?php if($paginaAtual != $paginas): ?>
			<a class="page-link" href="<?=BASE_URL;?>?p=<?=($paginaAtual+1)?>">Avançar</a>
			<?php endif; ?>	    	
	      
	    </li>
	  </ul>
	</nav>	
