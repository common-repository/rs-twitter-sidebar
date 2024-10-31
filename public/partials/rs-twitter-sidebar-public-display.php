<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://www.xtendify.com/en/user/2-rosinghal
 * @since      1.0.0
 *
 * @package    Rs_Twitter_Sidebar
 * @subpackage Rs_Twitter_Sidebar/public/partials
 */
?>

<?php
$options = get_option($this->plugin_name);
$social_sidebar_twitter = $options['twitter_widget_id'];
$social_sidebar_widget_alignment = $options['widget_alignment'];
$social_sidebar_icon_alignment = $options['icon_alignment'];
?>
<?php if($social_sidebar_twitter) { ?>
<div class="ss-wrapper first-wrapper first-wrapper-<?php echo $social_sidebar_icon_alignment.'-'.$social_sidebar_widget_alignment; ?>">
	<div class="ss-icon twitter-icon first-icon-<?php echo $social_sidebar_icon_alignment.'-'.$social_sidebar_widget_alignment; ?>"></div>
	<div class="twitter-body">
		<a class="twitter-timeline" href="https://twitter.com" data-widget-id="<?php echo $social_sidebar_twitter; ?>">Tweets</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    </div>
</div>
<?php } ?>