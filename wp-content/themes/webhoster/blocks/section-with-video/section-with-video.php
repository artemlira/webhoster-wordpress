<?php
/**
 * Block with video template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.
//$quote = !empty(get_field('quote')) ? get_field('quote') : 'Your quote here...';
$title = get_field('title');
$text = get_field('text');
$poster = get_field('poster');
$video = get_field('video');
$formatVideo = get_field('format_video');
$buttonText = get_field('button_text');
$buttonLink = get_field('button_link');
// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
  $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}
// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'section-with-video';
if (!empty($block['className'])) {
  $class_name .= ' ' . $block['className'];
}
?>

<div <?php echo esc_attr($anchor); ?> class="<?php echo esc_attr($class_name); ?>">
  <div class="section-with-video__container">
    <?php if (!empty($title)): ?>
      <h2 class="section-with-video-title section-title"><?= $title ?></h2>
    <?php endif; ?>
    <?php if (!empty($text)): ?>
      <div class="section-with-video-text"><?= $text ?></div>
    <?php endif; ?>
    <?php if (!empty($video)): ?>
      <div class="section-with-video-content-wrapper">
        <div class="video-control" id="video-play"></div>
        <div class="video-control" id="video-over"></div>
        <video
            class="section-with-video-content" <?php if (!empty($poster)): ?> poster="<?= $poster['url'] ?>"<?php endif; ?>
            preload="auto">
          <?php if ($formatVideo == "ogg"): ?>
            <source
                src="<?= $video ?>"
                type='video/ogg; codecs="theora, vorbis"'
            />
          <?php endif; ?>
          <?php if ($formatVideo == "mp4"): ?>
            <source
                src="<?= $video ?>"
                type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'
            />
          <?php endif; ?>
          <?php if ($formatVideo == "webm"): ?>
            <source
                src="<?= $video ?>"
                type='video/webm; codecs="vp8, vorbis"'
            />
          <?php endif; ?>
        </video>
      </div>
    <?php endif; ?>
    <?php if (!empty($buttonText) || !empty($buttonLink)): ?>
      <a class="section-with-video-button" href="<?= $buttonLink ?>"><?= $buttonText ?></a>
    <?php endif; ?>
  </div>
</div>
