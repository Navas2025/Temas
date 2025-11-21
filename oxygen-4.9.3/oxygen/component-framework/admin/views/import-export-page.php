<div class="wrap">

	<h2 class="import-export-title"><?php oxygen_translate_echo("Export/Import Oxygen Options", "component-theme"); ?></h2>

	<?php if ( isset($import_errors) && $import_errors ) : ?>
		
		<div id="message" class="error notice below-h2">
		<?php foreach ( $import_errors as $error ) : ?>
			
			<p><?php echo sanitize_text_field( $error ); ?></p>
		
		<?php endforeach; ?>
		</div>
	
	<?php endif; ?>

	<?php if ( isset($import_success) && $import_success ) : ?>
		
		<div id="message" class="updated notice below-h2">
		<?php foreach ( $import_success as $notice ) : ?>
			
			<p><?php echo sanitize_text_field( $notice ); ?></p>
		
		<?php endforeach; ?>
		</div>
	
	<?php endif; ?>
	
	<div class="import-export-section">

		<h3><?php oxygen_translate_echo("Export", "component-theme"); ?> Global Settings</h3>
		<p class="description"><?php oxygen_translate_echo("Copy the code below to export your global settings to another install.", "component-theme"); ?></p>

		<textarea cols="80" rows="10"><?php echo $export_json; ?></textarea>

	</div>

	<div class="import-export-section">

		<h3><?php oxygen_translate_echo("Import", "component-theme"); ?> Global Settings</h3>
		<p class="description"><?php oxygen_translate_echo("Paste code from another install below and click Submit to import the global settings.", "component-theme"); ?></p>
		
		<form action="" method="post">
			<?php wp_nonce_field('oxygen-import-json'); ?>
			<textarea cols="80" rows="10" name="ct_import_json"><?php echo isset($import_json)?$import_json:''; ?></textarea><br/>
			<label>
				<input class="import-export-checkbox" type="checkbox" name="oxy_replace_global_colors" value="yes"><?php oxygen_translate_echo("Import Global Colors","oxygen"); ?> <b><?php oxygen_translate_echo("(Warning: This will overwrite all Global Colors on the site.)","oxygen"); ?></b>
			</label>
			<p>
				<input type="submit" class="import-export-button" value="<?php oxygen_translate_echo("Import Global Settings", "component-theme"); ?>" name="submit">
			</p>
		</form>

	</div>
</div>