		<?php 
	
		/**
		 * Manage > Settings > Global Styles > Animate On Scroll
		 *
		 */ 
		
		global $oxygen_toolbar;

		?>

		<?php $oxygen_toolbar->settings_breadcrumbs(	
							oxygen_translate('Animate On Scroll','oxygen'),
							oxygen_translate('Global Styles','oxygen'),
							'default-styles'); ?>
			
		<div class='oxygen-control-row'>
			<div class='oxygen-control-wrapper' id='oxygen-typography-font-family'>
				<label class='oxygen-control-label'><?php oxygen_translate_echo("Animation Type","oxygen"); ?></label>
				<div class='oxygen-control'>
					<div class="oxygen-select oxygen-select-box-wrapper">
						<div class="oxygen-select-box">
							<div class="oxygen-select-box-current"
								ng-class="{'oxygen-option-default':!$parent.iframeScope.globalSettings['aos']['type']}">
								{{$parent.iframeScope.globalSettings['aos']['type']}}
							</div>
							<div class="oxygen-select-box-dropdown"></div>
						</div>
						<div class="oxygen-select-box-options">
							<div class="oxygen-select-box-option" 
								ng-click="$parent.iframeScope.globalSettings['aos']['type'] = ''">&nbsp;</div>
							<?php foreach ($this->animations_list as $name => $label) : ?>
							<div class="oxygen-select-box-option" 
								ng-click="$parent.iframeScope.globalSettings['aos']['type']='<?php echo $name; ?>'"><?php echo $label; ?>
							</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class='oxygen-control-row'>
			<?php $oxygen_toolbar->global_slider_measure_box_with_wrapper('global',"['aos']['duration']",oxygen_translate('Animation Duration','oxygen'), 'ms', 50, 3000, null, 50); ?>
		</div>

		<div class='oxygen-control-row'>
			<div class='oxygen-control-wrapper'>
				<label class='oxygen-control-label'><?php oxygen_translate_echo("Animation Anchor","oxygen"); ?></label>
				<div class='oxygen-control'>
					<div class="oxygen-select oxygen-select-box-wrapper">
						<div class="oxygen-select-box"
							ng-class="{'oxygen-option-default':false}">
							<div class="oxygen-select-box-current"
								ng-class="{'oxygen-option-default':!$parent.iframeScope.globalSettings['aos']['anchor-placement']}">
								{{$parent.iframeScope.globalSettings['aos']['anchor-placement']}}
							</div>
							<div class="oxygen-select-box-dropdown"></div>
						</div>
						<div class="oxygen-select-box-options">
							<div class="oxygen-select-box-option" 
								ng-click="$parent.iframeScope.globalSettings['aos']['anchor-placement']=''">&nbsp;</div>
							<?php foreach ($this->anchor_placements as $name => $label) : ?>
							<div class="oxygen-select-box-option" 
								ng-click="$parent.iframeScope.globalSettings['aos']['anchor-placement']='<?php echo $name; ?>'"><?php echo $label; ?>
							</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class='oxygen-control-row'>
			<div class='oxygen-control-wrapper'>
				<label class='oxygen-control-label'><?php oxygen_translate_echo("Animation Easing","oxygen"); ?></label>
				<div class='oxygen-control'>
					<div class="oxygen-select oxygen-select-box-wrapper">
						<div class="oxygen-select-box"
							ng-class="{'oxygen-option-default':false}">
							<div class="oxygen-select-box-current"
								ng-class="{'oxygen-option-default':!$parent.iframeScope.globalSettings['aos']['easing']}">
								{{$parent.iframeScope.globalSettings['aos']['easing']}}
							</div>
							<div class="oxygen-select-box-dropdown"></div>
						</div>
						<div class="oxygen-select-box-options">
							<div class="oxygen-select-box-option" 
								ng-click="$parent.iframeScope.globalSettings['aos']['easing']=''">&nbsp;</div>
							<?php foreach ($this->easing_functions as $name => $label) : ?>
							<div class="oxygen-select-box-option" 
								ng-click="$parent.iframeScope.globalSettings['aos']['easing']='<?php echo $name; ?>'"><?php echo $label; ?>
							</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class='oxygen-control-row'>
			<?php $oxygen_toolbar->global_measure_box_with_wrapper('global', "['aos']['offset']", oxygen_translate('Animation Trigger Offset','oxygen'), 'px'); ?>
		</div>

		<div class='oxygen-control-row'>
			<?php $oxygen_toolbar->global_measure_box_with_wrapper('global', "['aos']['delay']", oxygen_translate('Animation Delay','oxygen'), 'ms'); ?>
		</div>

		<div class='oxygen-control-row'>
	        <div class='oxygen-control-wrapper'>
	            <label class='oxygen-control-label'><?php oxygen_translate_echo("Animate Only Once","oxygen"); ?></label>
	            <div class='oxygen-control'>
	                <div class='oxygen-button-list'>
	                    <?php $oxygen_toolbar->global_button_list_button('global', "['aos']['once']", 'true', oxygen_translate('yes','oxygen')); ?>
	                    <?php $oxygen_toolbar->global_button_list_button('global', "['aos']['once']", 'false', oxygen_translate('no','oxygen')); ?>
	                </div>
	            </div>
	        </div>
	    </div>

		<?php $oxygen_toolbar->global_media_queries_list_with_wrapper('global', "['aos']['disable']", oxygen_translate('Disable On','oxygen'), false, false, false); ?>

		<div class='oxygen-control-row'>
			<div class='oxygen-control-wrapper'>
				<div class='oxygen-control'>
					<label class="oxygen-checkbox">
						<input type="checkbox"
							ng-true-value="'true'" 
							ng-false-value="''"
							ng-model="iframeScope.globalSettings['aos']['refresh_on_page']">
						<div class='oxygen-checkbox-checkbox'
							ng-class="{'oxygen-checkbox-checkbox-active':iframeScope.globalSettings['aos']['refresh_on_page']=='true'}">
							<?php oxygen_translate_echo("Refresh AOS On Page Load","oxygen") ?>
						</div>
					</label>
				</div>
			</div>
		</div>