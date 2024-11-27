<?php
/**
 * Wordpress Admin walking Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.

$title = get_field('admin_walking_title');
$subtitle = get_field('admin_walking_subtitle');
$image = get_field('admin_walking_image');
$text = get_field('admin_walking_text');
$poster = get_field('admin_walking_poster');
$video = get_field('admin_walking_video');
$formatVideo = get_field('admin_walking_format_video');

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
  $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}
// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'wordpress-admin-walking';
if (!empty($block['className'])) {
  $class_name .= ' ' . $block['className'];
}
?>

<div <?php echo esc_attr($anchor); ?> class="<?php echo esc_attr($class_name); ?>">
  <div class="wordpress-admin-walking__container">
    <div class="wordpress-admin-walking-content">
      <?php if (!empty($title)): ?>
        <h2 class="wordpress-admin-walking-title section-title">
          <?= $title ?>
          <?php if (!empty($subtitle)): ?>
            <span><?= $subtitle ?></span>
          <?php endif; ?>
        </h2>
      <?php endif; ?>
      <?php if (!empty($text)): ?>
        <div class="wordpress-admin-walking-text"><?= $text ?></div>
      <?php endif; ?>
    </div>
    <div class="wordpress-admin-walking-img-wrapper"
      <?php if (!empty($image)): ?> style="background:url('<?= $image['url'] ?>') center / cover no-repeat;" <?php endif; ?>>
      <?php if (!empty($video)): ?>
        <div class="section-with-video-content-wrapper wordpress-admin-walking-video">
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
    </div>
  </div>
</div>

