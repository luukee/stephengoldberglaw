<?php
// This file is used to render the output for our block
// functions.php : hfm_acf_init_blocks
// https://www.advancedcustomfields.com/blog/build-business-listing-acf-blocks-query-loop-block-theme/
$align     = isset( $block['align_text'] ) ? $block['align_text'] : 'left';
$textcolor = isset( $block['textColor'] ) ? $block['textColor'] : 'inherit';

if ( substr( $textcolor, 0, 1 ) !== '#' && substr( $textcolor, 0, 4 ) !== 'rgb(' ) {
    $textcolor = 'var(--wp--preset--color--' . $textcolor . ')';
}
?>
<?php $artillery_link = get_field( 'artillery_link', get_the_ID() ); ?>
<?php if ( ! empty( $artillery_link ) ) { ?>
    <p class="artillery-link" style="color: <?php echo $textcolor; ?>; text-align: <?php echo $align; ?>">
        <a href="<?php echo $artillery_link; ?>" target="_blank">View article on Artillery Magazine</a>
    </p>
<?php } ?>