<?php
/**
 * Tabs with Tables Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.


$title = $args == 'section' ? get_field('tabs_table_title') : get_field('title');
$subtitle = $args == 'section' ? get_field('tabs_table_subtitle') : get_field('subtitle');
$tabs = $args == 'section' ? get_field('tabs_table_tabs') : get_field('tabs');
$cards = $args == 'section' ? get_field('tabs_table_cards') : get_field('cards');
$text = $args == 'section' ? get_field('tabs_table_text') : get_field('text');

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
  $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}
// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'tabs-table';
if (!empty($block['className'])) {
  $class_name .= ' ' . $block['className'];
}
?>

<div <?php echo esc_attr($anchor); ?> class="<?php echo esc_attr($class_name); ?>">
  <div class="tabs-table__container">
    <?php if (!empty($title)): ?>
      <h2 class="tabs-table-title section-title"><?= $title ?></h2>
    <?php endif; ?>
    <?php if (!empty($subtitle)): ?>
      <div class="tabs-table-subtitle"><?= $subtitle ?></div>
    <?php endif; ?>
    <div class="tabs-table-scroll">
      <p>Możesz przeglądać</p>
      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
        <path fill-rule="evenodd" clip-rule="evenodd"
              d="M13.4199 5.04932C11.8748 5.21855 10.2088 5.90289 8.98094 6.87269L8.64032 7.14171L8.61584 6.78192C8.58755 6.36518 8.48343 6.15385 8.22274 5.98385C7.99014 5.83217 7.58965 5.83837 7.36087 5.99718C7.26946 6.06063 7.15083 6.18645 7.09731 6.27679L7 6.44098V8.01107V9.58115L7.09731 9.74535C7.15083 9.83568 7.26946 9.9615 7.36087 10.025L7.52712 10.1404H9.0299H10.5327L10.6989 10.025C10.9558 9.84665 11.0598 9.63725 11.0598 9.29841C11.0598 9.06367 11.0411 8.98603 10.9498 8.84128C10.7707 8.5575 10.5968 8.47211 10.1404 8.44394L9.74754 8.41972L10.0141 8.22055C11.3327 7.23531 12.8244 6.72058 14.3609 6.72058C16.5946 6.72058 18.878 7.89475 20.1947 9.72035C20.4285 10.0446 20.5944 10.1404 20.9222 10.1404C21.1315 10.1404 21.2225 10.1184 21.3453 10.0383C21.6514 9.83865 21.8017 9.43399 21.7068 9.0644C21.62 8.72642 20.7445 7.71064 19.9996 7.08368C18.1653 5.53983 15.7524 4.79381 13.4199 5.04932ZM10.0634 11.9236C9.24339 12.1569 8.64094 12.7501 8.35979 13.6013C8.25723 13.9117 8.2382 14.0356 8.23725 14.399C8.23594 14.8947 8.30479 15.1894 8.52858 15.6464C8.65919 15.9132 8.86234 16.1441 10.3078 17.6688L11.9395 19.3901L11.7459 19.497C11.4707 19.649 11.0375 20.1142 10.8613 20.4471C10.5595 21.0173 10.4737 21.7189 10.6282 22.3528C10.7742 22.9515 10.8954 23.132 11.7968 24.0922C12.9385 25.3087 13.5519 25.8119 14.4315 26.2538C15.4865 26.7839 16.4163 27 17.6416 27C18.4655 27 18.8063 26.9572 19.5224 26.7637C22.0906 26.0697 24.1477 23.8917 24.7943 21.1819C24.9598 20.4884 25 20.117 25 19.2813C25 17.996 24.794 17.0207 24.2886 15.914C23.8245 14.8976 22.9874 13.8089 22.2863 13.3098C21.0772 12.4493 19.5355 12.3144 18.2321 12.9551C17.6687 13.232 17.4122 13.4499 16.3485 14.5556L15.322 15.6226L13.8265 14.052C12.9533 13.1348 12.2198 12.4012 12.0636 12.2886C11.5017 11.8836 10.711 11.7394 10.0634 11.9236ZM10.9893 13.6263C11.0935 13.6716 11.7267 14.3041 12.9872 15.6221C14.0021 16.6833 14.8916 17.5827 14.9638 17.6206C15.1302 17.7082 15.4669 17.7094 15.6637 17.6231C15.7639 17.5792 16.2759 17.0769 17.1694 16.146C18.1267 15.1486 18.5893 14.6968 18.7488 14.6035C19.524 14.1505 20.5494 14.1778 21.274 14.6708C21.4076 14.7617 21.6679 15.0038 21.8525 15.2089C22.567 16.0026 23.0224 16.9282 23.2658 18.0819C23.4015 18.7252 23.4015 19.8374 23.2658 20.4806C22.9952 21.7629 22.4767 22.7367 21.5875 23.6319C20.7863 24.4386 19.9201 24.9174 18.7849 25.1809C18.1717 25.3232 17.1114 25.3232 16.4982 25.1809C15.7063 24.997 15.1003 24.7306 14.443 24.2772C14.0052 23.9753 12.3812 22.3187 12.2652 22.0558C12.0802 21.6363 12.2899 21.0782 12.6925 20.9186C12.8761 20.8459 13.1991 20.8637 13.3681 20.9559C13.4518 21.0015 13.8063 21.3416 14.1559 21.7117C14.5055 22.0818 14.8652 22.4246 14.9552 22.4736C15.4793 22.7592 16.1243 22.3538 16.1243 21.7388C16.1243 21.6159 16.0958 21.4434 16.0611 21.3554C16.017 21.2438 15.0815 20.2328 12.9681 18.0123C10.2195 15.1245 9.93396 14.8115 9.89086 14.6395C9.71982 13.9562 10.3694 13.3571 10.9893 13.6263Z"
              fill="#898989"/>
      </svg>
    </div>
    <div class="tabs-table-header">
      <?php if ($tabs): ?>
        <?php foreach ($tabs as $tab): ?>
          <div class="tabs-table-header-item"><p><?= $tab['title'] ?></p></div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
    <div class="tabs-table-content">
      <?php if ($tabs): ?>
        <?php foreach ($tabs as $tab):
          $cards = $tab['cards'];
          ?>
          <div class="tabs-table-content-wrapper">
            <?php if ($cards): ?>
              <ol class="tabs-table-content-list">
                <?php foreach ($cards as $card): ?>
                  <li class="tabs-table-content-item">
                    <h3 class="tabs-table-content-item-title"><?= $card['title'] ?></h3>
                    <div class="tabs-table-content-item-text"><?= $card['text'] ?></div>
                  </li>
                <?php endforeach; ?>
              </ol>
            <?php endif; ?>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
    <?php if (!empty($text)): ?>
      <div class="tabs-table-text"><?= $text ?></div>
    <?php endif; ?>
  </div>
</div>


