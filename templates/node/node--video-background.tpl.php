<section class="video" style="background-image: url(<?php if (render($content['field_video_image'])) { echo file_create_url($node->field_video_image['und'][0]['uri']); } ?>);">
	<div class="container">
		<div class="row center">
			<div class="col-md-12">

				<?php print render($content['body']); ?>

			</div>
		</div>
	</div>
	<video autoplay loop poster="<?php if (render($content['field_video_image'])) { echo file_create_url($node->field_video_image['und'][0]['uri']); } ?>"  data-plugin-options='{"features": []}'>
		<source src="<?php if (render($content['field_mp4_video'])) { echo file_create_url($node->field_mp4_video['und'][0]['uri']); } ?>"  type='video/mp4;  codecs="avc1.42E01E, mp4a.40.2"'>
		<source src="<?php if (render($content['field_ogg_video'])) { echo file_create_url($node->field_ogg_video['und'][0]['uri']); } ?>"  type='video/ogg;  codecs="theora, vorbis"'>
	</video>
</section>