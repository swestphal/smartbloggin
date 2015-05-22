<?php
/*
Plugin Name: Small Bio
Description: Site specific code changes for example.com
*/
/* Start Adding Functions Below this Line */

// Creating the widget
class small_bio_widget extends WP_Widget {

function __construct() {
parent::__construct(
// Base ID of your widget
'small_bio_widget',

// Widget name will appear in UI
__('Small Bio Widget', 'small_bio_widget_domain'),

// Widget description
array( 'description' => __( 'Small Bio Widget', 'small_bio_widget_domain' ), )
);
}

// Creating widget front-end
// This is where the action happens
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
// before and after widget arguments are defined by themes
echo $args['before_widget'];
if ( ! empty( $title ) )
echo $args['before_title'] . $title . $args['after_title'];

// This is where you run the code and display the output
echo __( '', 'small_bio_widget_domain' );?>
    <div id="logo-container">
        <img id="bio-img" src="<?php echo get_bloginfo('template_directory');?>/images/me_round.png" alt="Simone" /></a>
        <div id="bio-text">
        <p style="text-align:justify;">Ich bin Simone und möchte Dir das Erstellen Deines Blogs erleichtern und neue Inspirationen geben.
            </p><p style="text-align:justify;">Du bekommst bei smart bloggin Schritt-für-Schritt Anleitungen, Tips und Hintergrundwissen um Deinen eigenen Blog erfolgreich zu erstellen und zu pflegen.</p>
        </div>
    </div>

        <?php
echo $args['after_widget'];
}

// Widget Backend
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'New title', 'small_bio_widget_domain' );
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<?php
}

// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
return $instance;
}
} // Class small_bio_widget ends here


/* Stop Adding Functions Below this Line */
?>