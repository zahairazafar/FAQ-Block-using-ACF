
/*  This code displays FAQs, looping through them to show the title and content of each one. If no FAQs exist, it prints "No FAQs Found.  */
<?php 
// Testimonial Block Template - Template Name

// Check if rows exists.
if( have_rows('faq_field_list') ):
// Loop through rows.
while( have_rows('faq_field_list') ) : the_row();
// Load sub field value.
$title_1 = get_sub_field('faq_title'); // This is the field name of ACF field in the repeater block to get the FAQ Question
$content_1 = get_sub_field('faq_content'); // This is the field name of ACF field in the repeater block to get the FAQ Answer
?>
<div class="faq-section" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
	<h2 class="faq-header mb-0" itemprop="name">
		<a class="collapsed" data-sptoggle="spcollapse" data-sptarget="#collapse38660" href="javascript:void(0)" aria-expanded="false">
			<i class="ea-expand-icon fa fa-plus"></i>
			<strong><?php echo $title_1 ?></strong></a></h2>
	<div class="faq-contentbox" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
		<div class="faq-answer" data-read-aloud-multi-block="true">
			<div itemprop="text" >
				<?php echo $content_1 ?>
			</div>
		</div>
	</div>
</div>
<?php
	// End loop.
	endwhile;
			else :
			// No value.
			echo 'No FAQ Found';
			endif;
?>
