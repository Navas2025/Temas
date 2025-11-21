<?php

/**
 * Action hook to output additional Effects tabs 
 *
 * @since 2.2
 */

do_action("oxygen_vsb_effects_tabs_before");

?>

<div class='oxygen-sidebar-advanced-subtab'
	ng-click="switchTab('effects', 'opacity')"
	ng-hide="hasOpenTabs('effects')"
	ng-class="{'oxy-styles-present' : iframeScope.isTabHasOptions('effects','opacity')}">
		<img src='<?php echo CT_FW_URI; ?>/toolbar/UI/oxygen-icons/advanced/opacity.svg' />
		<span><?php oxygen_translate_echo("Opacity","oxygen"); ?></span>
		<img src='<?php echo CT_FW_URI; ?>/toolbar/UI/oxygen-icons/advanced/open-section.svg' />
</div>

<div class='oxygen-sidebar-advanced-subtab'
	ng-click="switchTab('effects', 'transition')"
	ng-hide="hasOpenTabs('effects')"
	ng-class="{'oxy-styles-present' : iframeScope.isTabHasOptions('effects','transition')}">
		<img src='<?php echo CT_FW_URI; ?>/toolbar/UI/oxygen-icons/advanced/transition.svg' />
		<span><?php oxygen_translate_echo("Transition","oxygen"); ?></span>
		<img src='<?php echo CT_FW_URI; ?>/toolbar/UI/oxygen-icons/advanced/open-section.svg' />
</div>

<div class='oxygen-sidebar-advanced-subtab'
	ng-click="switchTab('effects', 'box-shadow')"
	ng-hide="hasOpenTabs('effects')"
	ng-class="{'oxy-styles-present' : iframeScope.isTabHasOptions('effects','box-shadow')}">
		<img src='<?php echo CT_FW_URI; ?>/toolbar/UI/oxygen-icons/advanced/box-shadow.svg' />
		<span><?php oxygen_translate_echo("Box Shadow","oxygen"); ?></span>
		<img src='<?php echo CT_FW_URI; ?>/toolbar/UI/oxygen-icons/advanced/open-section.svg' />
</div>

<div class='oxygen-sidebar-advanced-subtab'
	ng-click="switchTab('effects', 'text-shadow')"
	ng-hide="hasOpenTabs('effects')"
	ng-class="{'oxy-styles-present' : iframeScope.isTabHasOptions('effects','text-shadow')}">
		<img src='<?php echo CT_FW_URI; ?>/toolbar/UI/oxygen-icons/advanced/text-shadow.svg' />
		<span><?php oxygen_translate_echo("Text Shadow","oxygen"); ?></span>
		<img src='<?php echo CT_FW_URI; ?>/toolbar/UI/oxygen-icons/advanced/open-section.svg' />
</div>

<div class='oxygen-sidebar-advanced-subtab'
	ng-click="switchTab('effects', 'css-filter')"
	ng-hide="hasOpenTabs('effects')"
	ng-class="{'oxy-styles-present' : iframeScope.isTabHasOptions('effects','css-filter')}">
		<img src='<?php echo CT_FW_URI; ?>/toolbar/UI/oxygen-icons/advanced/filters.svg' />
		<span><?php oxygen_translate_echo("Filter","oxygen"); ?></span>
		<img src='<?php echo CT_FW_URI; ?>/toolbar/UI/oxygen-icons/advanced/open-section.svg' />
</div>

<div class='oxygen-sidebar-advanced-subtab'
	ng-click="switchTab('effects', 'transform')"
	ng-hide="hasOpenTabs('effects')"
	ng-class="{'oxy-styles-present' : iframeScope.isTabHasOptions('effects','transform')}">
		<img src='<?php echo CT_FW_URI; ?>/toolbar/UI/oxygen-icons/advanced/transform.svg' />
		<span><?php oxygen_translate_echo("Transform","oxygen"); ?></span>
		<img src='<?php echo CT_FW_URI; ?>/toolbar/UI/oxygen-icons/advanced/open-section.svg' />
</div>

<?php

/**
 * Action hook to output additional Effects tabs 
 *
 * @since 2.2
 */

do_action("oxygen_vsb_effects_tabs_after");

?>

<div class="oxygen-sidebar-flex-panel" ng-if="isShowTab('effects', 'opacity')">
	
	<div class="oxygen-sidebar-breadcrumb oxygen-sidebar-subtub-breadcrumb" >
		<div class="oxygen-sidebar-breadcrumb-icon" ng-click="$parent.$parent.switchTab('advanced', 'effects');$parent.$parent.closeTabs(['effects']);">
			<img src="<?php echo CT_FW_URI; ?>/toolbar/UI/oxygen-icons/advanced/chevron-left.svg">
		</div>
		<div class="oxygen-sidebar-breadcrumb-all-styles" ng-click="$parent.$parent.switchTab('advanced', 'effects');$parent.$parent.closeTabs(['effects']);"><?php oxygen_translate_echo("Effects","oxygen"); ?></div>
		<div class="oxygen-sidebar-breadcrumb-separator">/</div>
		<div class="oxygen-sidebar-breadcrumb-current"><?php oxygen_translate_echo("Opacity","oxygen"); ?></div>
	</div>

	<div class='oxygen-control-row'>
		<?php $this->slider_measure_box_with_wrapper('opacity', oxygen_translate('Opacity','oxygen'), "", 0, 1, true, 0.1); ?>
	</div>

	<?php $blend_modes = ['normal', 'multiply', 'screen', 'overlay', 'darken', 'lighten', 'color-dodge', 'color-burn', 'hard-light', 'soft-light', 'difference', 'exclusion', 'hue', 'saturation', 'color', 'luminosity']; ?>
	<div class='oxygen-control-row'>
		<div class='oxygen-control-wrapper'>
			<div class="oxy-style-indicator"
				ng-class="{'oxygen-has-class-value':iframeScope.classHasOption('mix-blend-mode')&&!IDHasOption('mix-blend-mode'),'oxygen-has-id-value':iframeScope.IDHasOption('mix-blend-mode')}">
			</div>
			<label class='oxygen-control-label'><?php oxygen_translate_echo("Mix Blend Mode","oxygen"); ?></label>
			<div class='oxygen-control'>
				<div class="oxygen-select oxygen-select-box-wrapper">
					<div class="oxygen-select-box"
						ng-class="{'oxygen-option-default':iframeScope.isInherited(iframeScope.component.active.id, 'mix-blend-mode')}">
						<div class="oxygen-select-box-current">{{$parent.iframeScope.getOption('mix-blend-mode')}}</div>
						<div class="oxygen-select-box-dropdown"></div>
					</div>
					<div class="oxygen-select-box-options">
						<div class="oxygen-select-box-option" 
							ng-click="$parent.iframeScope.setOptionModel('mix-blend-mode','')">&nbsp;</div>
						<?php foreach ($blend_modes as $mode) { ?>
						<div class="oxygen-select-box-option" 
							ng-click="$parent.iframeScope.setOptionModel('mix-blend-mode','<?php echo $mode; ?>')"><?php echo $mode; ?></div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>

</div><!-- ng-if="isShowTab('effects', 'opacity')" -->


<div class="oxygen-sidebar-flex-panel" ng-if="isShowTab('effects', 'transition')">
	
	<div class="oxygen-sidebar-breadcrumb oxygen-sidebar-subtub-breadcrumb" >
		<div class="oxygen-sidebar-breadcrumb-icon" ng-click="$parent.$parent.switchTab('advanced', 'effects');$parent.$parent.closeTabs(['effects']);">
			<img src="<?php echo CT_FW_URI; ?>/toolbar/UI/oxygen-icons/advanced/chevron-left.svg">
		</div>
		<div class="oxygen-sidebar-breadcrumb-all-styles" ng-click="$parent.$parent.switchTab('advanced', 'effects');$parent.$parent.closeTabs(['effects']);"><?php oxygen_translate_echo("Effects","oxygen"); ?></div>
		<div class="oxygen-sidebar-breadcrumb-separator">/</div>
		<div class="oxygen-sidebar-breadcrumb-current"><?php oxygen_translate_echo("Transition","oxygen"); ?></div>
	</div>

	<div class='oxygen-control-row'>
		<?php $this->slider_measure_box_with_wrapper('transition-duration',oxygen_translate('Transition Duration','oxygen'), 'sec', 0, 1, true, 0.1); ?>
	</div>
	<div class='oxygen-control-row'>
		<?php $this->simple_input_with_wrapper('transition-timing-function',oxygen_translate('Timing Function','oxygen')); ?>
	</div>
	<div class='oxygen-control-row'>
		<?php $this->simple_input_with_wrapper('transition-property',oxygen_translate('CSS Property','oxygen')); ?>
	</div>
	<div class='oxygen-control-row'>
		<?php $this->slider_measure_box_with_wrapper('transition-delay',oxygen_translate('Delay','oxygen'), 'sec', 0, 1, true, 0.1); ?>
	</div>

</div><!-- ng-if="isShowTab('effects', 'transition')" -->


<div class="oxygen-sidebar-flex-panel" ng-if="isShowTab('effects', 'box-shadow')">
	
	<div class="oxygen-sidebar-breadcrumb oxygen-sidebar-subtub-breadcrumb" >
		<div class="oxygen-sidebar-breadcrumb-icon" ng-click="$parent.$parent.switchTab('advanced', 'effects');$parent.$parent.closeTabs(['effects']);">
			<img src="<?php echo CT_FW_URI; ?>/toolbar/UI/oxygen-icons/advanced/chevron-left.svg">
		</div>
		<div class="oxygen-sidebar-breadcrumb-all-styles" ng-click="$parent.$parent.switchTab('advanced', 'effects');$parent.$parent.closeTabs(['effects']);"><?php oxygen_translate_echo("Effects","oxygen"); ?></div>
		<div class="oxygen-sidebar-breadcrumb-separator">/</div>
		<div class="oxygen-sidebar-breadcrumb-current"><?php oxygen_translate_echo("Box Shadow","oxygen"); ?></div>
	</div>

	<?php $this->box_shadow(); ?>

</div><!-- ng-if="isShowTab('effects', 'box-shadow')" -->


<div class="oxygen-sidebar-flex-panel" ng-if="isShowTab('effects', 'text-shadow')">
	
	<div class="oxygen-sidebar-breadcrumb oxygen-sidebar-subtub-breadcrumb" >
		<div class="oxygen-sidebar-breadcrumb-icon" ng-click="$parent.$parent.switchTab('advanced', 'effects');$parent.$parent.closeTabs(['effects']);">
			<img src="<?php echo CT_FW_URI; ?>/toolbar/UI/oxygen-icons/advanced/chevron-left.svg">
		</div>
		<div class="oxygen-sidebar-breadcrumb-all-styles" ng-click="$parent.$parent.switchTab('advanced', 'effects');$parent.$parent.closeTabs(['effects']);"><?php oxygen_translate_echo("Effects","oxygen"); ?></div>
		<div class="oxygen-sidebar-breadcrumb-separator">/</div>
		<div class="oxygen-sidebar-breadcrumb-current"><?php oxygen_translate_echo("Text Shadow","oxygen"); ?></div>
	</div>
	
	<div class="oxygen-control-row">
        <?php $this->colorpicker_with_wrapper("text-shadow-color", oxygen_translate("Color", "oxygen") ); ?>
    </div>
	<div class='oxygen-control-row'>
		<?php $this->slider_measure_box_with_wrapper('text-shadow-horizontal-offset',oxygen_translate('Horizontal Offset','oxygen'), 'px'); ?>
	</div>
	<div class='oxygen-control-row'>
		<?php $this->slider_measure_box_with_wrapper('text-shadow-vertical-offset',oxygen_translate('Vertical Offset','oxygen'), 'px'); ?>
	</div>
	<div class='oxygen-control-row'>
		<?php $this->slider_measure_box_with_wrapper('text-shadow-blur',oxygen_translate('Blur','oxygen'), 'px'); ?>
	</div>

</div><!-- ng-if="isShowTab('effects', 'text-shadow')" -->


<div class="oxygen-sidebar-flex-panel" ng-if="isShowTab('effects', 'css-filter')">
	
	<div class="oxygen-sidebar-breadcrumb oxygen-sidebar-subtub-breadcrumb" >
		<div class="oxygen-sidebar-breadcrumb-icon" ng-click="$parent.$parent.switchTab('advanced', 'effects');$parent.$parent.closeTabs(['effects']);">
			<img src="<?php echo CT_FW_URI; ?>/toolbar/UI/oxygen-icons/advanced/chevron-left.svg">
		</div>
		<div class="oxygen-sidebar-breadcrumb-all-styles" ng-click="$parent.$parent.switchTab('advanced', 'effects');$parent.$parent.closeTabs(['effects']);"><?php oxygen_translate_echo("Effects","oxygen"); ?></div>
		<div class="oxygen-sidebar-breadcrumb-separator">/</div>
		<div class="oxygen-sidebar-breadcrumb-current"><?php oxygen_translate_echo("Filter","oxygen"); ?></div>
	</div>
	
	<div class='oxygen-control-row'>
		<div class='oxygen-control-wrapper' id='oxygen-typography-font-family'>
			<div class="oxy-style-indicator"
				ng-class="{'oxygen-has-class-value':iframeScope.classHasOption('filter')&&!IDHasOption('filter'),'oxygen-has-id-value':iframeScope.IDHasOption('filter')}">
			</div>
			<label class='oxygen-control-label'><?php oxygen_translate_echo("Filter","oxygen"); ?></label>
			<div class='oxygen-control'>
				<div class="oxygen-select oxygen-select-box-wrapper">
					<div class="oxygen-select-box">
						<div class="oxygen-select-box-current">{{$parent.iframeScope.getOption('filter')}}</div>
						<div class="oxygen-select-box-dropdown"></div>
					</div>
					<div class="oxygen-select-box-options">
						<div class="oxygen-select-box-option" 
							ng-click="$parent.iframeScope.setOptionModel('filter','')">&nbsp;</div>
						<div class="oxygen-select-box-option" 
							ng-click="$parent.iframeScope.setOptionModel('filter','blur')">blur()</div>
						<div class="oxygen-select-box-option" 
							ng-click="$parent.iframeScope.setOptionModel('filter','brightness')">brightness()</div>
						<div class="oxygen-select-box-option" 
							ng-click="$parent.iframeScope.setOptionModel('filter','contrast')">contrast()</div>
						<div class="oxygen-select-box-option" 
							ng-click="$parent.iframeScope.setOptionModel('filter','grayscale')">grayscale()</div>
						<div class="oxygen-select-box-option" 
							ng-click="$parent.iframeScope.setOptionModel('filter','hue-rotate')">hue-rotate()</div>
						<div class="oxygen-select-box-option" 
							ng-click="$parent.iframeScope.setOptionModel('filter','invert')">invert()</div>
						<div class="oxygen-select-box-option" 
							ng-click="$parent.iframeScope.setOptionModel('filter','saturate')">saturate()</div>
						<div class="oxygen-select-box-option" 
							ng-click="$parent.iframeScope.setOptionModel('filter','sepia')">sepia()</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class='oxygen-control-row' ng-show='$parent.iframeScope.getOption("filter")=="blur"'>
		<?php $this->slider_measure_box_with_wrapper('filter-amount-blur',oxygen_translate('Filter Amount','oxygen'), 'px', 0, 100); ?>
	</div>
	<div class='oxygen-control-row' ng-show='$parent.iframeScope.getOption("filter")=="brightness"'>
		<?php $this->slider_measure_box_with_wrapper('filter-amount-brightness',oxygen_translate('Filter Amount','oxygen'), '%', 0, 200); ?>
	</div>
	<div class='oxygen-control-row' ng-show='$parent.iframeScope.getOption("filter")=="contrast"'>
		<?php $this->slider_measure_box_with_wrapper('filter-amount-contrast',oxygen_translate('Filter Amount','oxygen'), '%', 0, 200); ?>
	</div>
	<div class='oxygen-control-row' ng-show='$parent.iframeScope.getOption("filter")=="grayscale"'>
		<?php $this->slider_measure_box_with_wrapper('filter-amount-grayscale',oxygen_translate('Filter Amount','oxygen'), '%', 0, 100); ?>
	</div>
	<div class='oxygen-control-row' ng-show='$parent.iframeScope.getOption("filter")=="hue-rotate"'>
		<?php $this->slider_measure_box_with_wrapper('filter-amount-hue-rotate',oxygen_translate('Filter Amount','oxygen'), 'deg', 0, 360); ?>
	</div>
	<div class='oxygen-control-row' ng-show='$parent.iframeScope.getOption("filter")=="invert"'>
		<?php $this->slider_measure_box_with_wrapper('filter-amount-invert',oxygen_translate('Filter Amount','oxygen'), '%', 0, 100); ?>
	</div>
	<div class='oxygen-control-row' ng-show='$parent.iframeScope.getOption("filter")=="saturate"'>
		<?php $this->slider_measure_box_with_wrapper('filter-amount-saturate',oxygen_translate('Filter Amount','oxygen'), '%', 0, 200); ?>
	</div>
	<div class='oxygen-control-row' ng-show='$parent.iframeScope.getOption("filter")=="sepia"'>
		<?php $this->slider_measure_box_with_wrapper('filter-amount-sepia',oxygen_translate('Filter Amount','oxygen'), '%', 0, 100); ?>
	</div>

</div><!-- ng-if="isShowTab('effects', 'filter')" -->


<div class="oxygen-sidebar-flex-panel" ng-if="isShowTab('effects', 'transform')">
	
	<div class="oxygen-sidebar-breadcrumb oxygen-sidebar-subtub-breadcrumb" >
		<div class="oxygen-sidebar-breadcrumb-icon" ng-click="$parent.$parent.switchTab('advanced', 'effects');$parent.$parent.closeTabs(['effects']);">
			<img src="<?php echo CT_FW_URI; ?>/toolbar/UI/oxygen-icons/advanced/chevron-left.svg">
		</div>
		<div class="oxygen-sidebar-breadcrumb-all-styles" ng-click="$parent.$parent.switchTab('advanced', 'effects');$parent.$parent.closeTabs(['effects']);"><?php oxygen_translate_echo("Effects","oxygen"); ?></div>
		<div class="oxygen-sidebar-breadcrumb-separator">/</div>
		<div class="oxygen-sidebar-breadcrumb-current"><?php oxygen_translate_echo("Transform","oxygen"); ?></div>
	</div>

	<?php include_once('transform.view.php'); ?>

</div><!-- ng-if="isShowTab('effects', 'transform')" -->

<?php

/**
 * Action hook to output additional Effects Settings 
 *
 * @since 2.2
 */

do_action("oxygen_vsb_effects_tab_content");