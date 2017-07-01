<?php
	/**
	* @title			TSI ANIMATE CHART
	* @copyright   		Copyright (C) 2011-2016 Design Studio WWW, All rights reserved.
	* @license   		GNU General Public License version 3 or later.
	* @author url   	http://www.tsi.info.pl
	* @developers   	Design Studio WWW
	*/

	// No direct access
	defined( '_JEXEC' ) or die( 'Restricted access' );
	
?>
    <style>
		#AnimatedNumber-<?php echo $module->id; ?>{
			width: <?php echo $params->get('Width'); ?>px;
			height: <?php echo $params->get('Width'); ?>px;	
			<?php if($params->get('Border') == 1){ ?>
				border: <?php echo $params->get('BorderWeight'); ?>px <?php echo $params->get('BorderColor'); ?> solid;
			<?php } ?>
		}
		
		#AnimatedNumber-<?php echo $module->id; ?> #Number-<?php echo $module->id; ?>{
			font-size: <?php echo $params->get('NumberSize'); ?>px;
			
			color: <?php echo $params->get('NumberColor'); ?>;
		}
		
		<?php if($params->get('Prefix') == 1){ ?>
		#AnimatedNumber-<?php echo $module->id; ?> .Prefix{
			color:<?php echo $params->get('PrefixColor'); ?>;
			font-size:<?php echo $params->get('PrefixSize'); ?>px;
			
			<?php if($params->get('PrefixStrong') == 1){ ?>
			font-weight: bold;
			<?php } ?>
		}
		<?php } ?>
		
		<?php if($params->get('Sufix') == 1){ ?>
		#AnimatedNumber-<?php echo $module->id; ?> .Sufix{
			color:<?php echo $params->get('SufixColor'); ?>;
			font-size:<?php echo $params->get('SufixSize'); ?>px;
			
			<?php if($params->get('SufixStrong') == 1){ ?>
			font-weight: bold;
			<?php } ?>
		}
		<?php } ?>
		
		<?php if($params->get('NumberLabel') != ''){ ?>
			#AnimatedNumber-<?php echo $module->id; ?> .AnimatedNumber_Label{
				color:<?php echo $params->get('LabelColor'); ?>;
				font-size:<?php echo $params->get('LabelSize'); ?>px;
			}
		<?php } ?>
	</style>
	<div id="AnimatedNumber-<?php echo $module->id; ?>" class="AnimatedNumber">
		<img class="AnimatedNumber_panel" src="modules/mod_tsianimatenumber/assest/img/panel.png" alt="panel"/>		
		
		<div class="AnimatedNumber_Container">
			<?php if($params->get('Prefix') == 1){ ?>
				<span class="Prefix">
					<?php echo $params->get('PrefixValue'); ?>	
				</span>
			<?php } ?>
		
			<span id="Number-<?php echo $module->id; ?>" class="AnimatedNumber_value integers">
				<?php echo $params->get('NumberValue'); ?>
			</span>
		
			<?php if($params->get('Sufix') == 1){ ?>
				<span class="Sufix">
					<?php echo $params->get('SufixValue'); ?>	
				</span>
			<?php } ?>
			
			<?php if($params->get('NumberLabel') != ''){ ?>
				<div class="AnimatedNumber_Label">
					<?php echo $params->get('NumberLabel'); ?>	
				</div>
			<?php } ?>
		</div>	
		
	</div>
	<script type="text/javascript">
		jQuery(document).ready(function(){
			//InitChartNumber(<?php echo $module->id; ?>);
			jQuery('#Number-<?php echo $module->id; ?>').counterUp({
				delay: <?php echo $params->get('Delay'); ?>,
				time: <?php echo $params->get('Time'); ?>
			});
		});
	</script>
	




		   
		   
		   
		   
		   
