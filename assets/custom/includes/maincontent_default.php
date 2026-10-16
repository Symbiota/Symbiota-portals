        <style>
                #slideshowcontainer{
                        border: 2px solid black;
                        border-radius:10px;
                        padding:10px;
                        margin-left: auto;
                        margin-right: auto;
                }
        </style>

		<h1 class="page-heading"><?php echo $DEFAULT_TITLE; ?> <?php echo $LANG['HOME']; ?></h1>
		<?php
		if($LANG_TAG == 'es'){
			?>
			<div>
				<h1 class="headline">Bienvenidos</h1>
				<p>Este portal de datos se ha establecido para promover la colaboración... Reemplazar con texto introductorio en inglés</p>
			</div>
			<?php
		}
		elseif($LANG_TAG == 'fr'){
			?>
			<div>
				<h1 class="headline">Bienvenue</h1>
				<p>Ce portail de données a été créé pour promouvoir la collaboration... Remplacer par le texte d'introduction en anglais</p>
			</div>
			<?php
		}
		else{
			//Default Language
			?>
			<div>
				<h1>Welcome</h1>
				<p>
					This data portal has been established to promote collaborative... Replace
					with introductory text in English. If the portal is not meant to be
					multilingual, remove the unneeded language sections
				</p>
			</div>
			<?php
		}
		?>
