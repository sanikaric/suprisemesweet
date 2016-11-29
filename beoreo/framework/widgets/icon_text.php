<?php
class beoreo_Icon_Text_Widget extends WP_Widget {
    function __construct() {
        parent::__construct(
                'icon_text_widget', // Base ID
                __('Icon Text', 'beoreo'), // Name
                array('description' => __('Icon Text Widget', 'beoreo'),) // Args
        );
    }
    function widget($args, $instance) {
        extract($args);
		$column = apply_filters( 'widget_column', $instance['column'], $instance, $this->id_base );
        $cl_class = !empty($instance['cl_class']) ? $instance['cl_class'] : "";
        $icon_fa_cc_ = array();
        $text_fa_cc_ = array();
        for ($i = 1; $i <= 3; $i++) {
            $icon_fa_cc[$i] = !empty($instance['icon_fa_cc_' . $i]) ? esc_attr($instance['icon_fa_cc_' . $i]) : '';
            $text_fa_cc[$i] = !empty($instance['text_fa_cc_' . $i]) ? esc_attr($instance['text_fa_cc_' . $i]) : '';
        }
        
		// no 'class' attribute - add one with the value of width
        if (strpos($before_widget, 'class') === false) {
            $before_widget = str_replace('>', 'class="' . esc_attr($cl_class) . '"', $before_widget);
        }
        // there is 'class' attribute - append width value to it
        else {
            $before_widget = str_replace('class="', 'class="' . esc_attr($cl_class) . ' ', $before_widget);
        }
		
        ob_start();
		
        echo $before_widget;
		if ( $column )
				$getcol = (int) $column;
				$col = 4;
				switch ($getcol) {
					case 1:
						$col = 12;
						break;
					case 2:
						$col = 6;
						break;
					case 3:
						$col = 4;
						break;
					case 4:
						$col = 3;
						break;
					default:
				} 
        ?>
        <div class='icon_text clearfix'> 
            <?php
            for ($i = 1; $i <= 3; $i++) {
                if($icon_fa_cc[$i]):
                ?>
				<div class="col-md-<?php echo $col ?> col-sm-<?php echo $col ?> icocc">
					<div class="icon"><i class="<?php echo esc_attr($icon_fa_cc[$i]); ?>"></i></div>
					<div class="text"><?php echo html_entity_decode($text_fa_cc[$i]); ?></div>
				</div>
			<?php endif; ?>
        <?php } ?>
        </div>
        <?php
        echo $after_widget;
        echo ob_get_clean();
    }

    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        for ($i = 1; $i <= 3; $i++) {
            $instance['icon_fa_cc_' . $i] = $new_instance['icon_fa_cc_' . $i];
            $instance['text_fa_cc_' . $i] = $new_instance['text_fa_cc_' . $i];
        }
        $instance['column'] = $new_instance['column'];
        $instance['cl_class'] = $new_instance['cl_class'];
        return $instance;
    }

    function form($instance) {
        $icon_fa_cc = array();
        $text_fa_cc = array();
        for ($i = 1; $i <= 3; $i++) {
            $icon_fa_cc[$i] = isset($instance['icon_fa_cc_' . $i]) ? esc_attr($instance['icon_fa_cc_' . $i]) : '';
            $text_fa_cc[$i] = isset($instance['text_fa_cc_' . $i]) ? esc_attr($instance['text_fa_cc_' . $i]) : '';
        }
        $column = isset($instance['column']) ? esc_attr($instance['column']) : '';
        $cl_class = isset($instance['cl_class']) ? esc_attr($instance['cl_class']) : '';
		?>
		<p>
            <label for="<?php echo esc_attr($this->get_field_id('column')); ?>"><?php _e('Column:', 'beoreo'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('column')); ?>" name="<?php echo esc_attr($this->get_field_name('column')); ?>" value="<?php echo $column; ?>" />
        </p>
        <?php
        for ($i = 1; $i <= 3; $i++) {
            ?>
            <p>
                <label for="<?php echo esc_url($this->get_field_id('icon_fa_cc_' . $i)); ?>"><?php _e('Icon:', 'beoreo');
            echo $i; ?></label>
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('icon_fa_cc_' . $i)); ?>" name="<?php echo esc_attr($this->get_field_name('icon_fa_cc_' . $i)); ?>" type="text" value="<?php echo esc_attr($icon_fa_cc[$i]); ?>" />
            </p>
            <p>
                <label for="<?php echo esc_url($this->get_field_id('text_fa_cc_' . $i)); ?>"><?php _e('Text:', 'beoreo');
            echo $i; ?></label>
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('text_fa_cc_' . $i)); ?>" name="<?php echo esc_attr($this->get_field_name('text_fa_cc_' . $i)); ?>" type="text" value="<?php echo esc_attr($text_fa_cc[$i]); ?>" />
            </p>
        <?php } ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('cl_class')); ?>"><?php _e('Extra Class:', 'beoreo'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('cl_class')); ?>" name="<?php echo esc_attr($this->get_field_name('cl_class')); ?>" value="<?php echo $cl_class; ?>" />
        </p>
        <?php
    }
}
/**
 * Class beoreo_Social_Widget
 */
function beoreo_register_icon_text_widget() {
    register_widget('beoreo_Icon_Text_Widget');
}
add_action('widgets_init', 'beoreo_register_icon_text_widget');
?>
