<div id="content">
	<div class="clear"></div>
	<div class="inner-content">
		<?php 
		if (!empty($error)) {
			echo $error;
		}?>

		<?php
			
			foreach($document_data as $document) {
				?>
				<div><a href="<?=$document['doc_uri'];?>" ><?=$document['doc_name'];?></a></div>
			<?php
			}
			?>
		
	</div>
</div>