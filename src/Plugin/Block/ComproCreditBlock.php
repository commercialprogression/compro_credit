<?php
namespace Drupal\compro_credit\Plugin\Block;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Url;
/**
 * Provides a block crediting CP for site design.
 *
 * @Block(
 *   id = "compro_credit_block",
 *   admin_label = @Translation("Compro credit"),
 * )
 */
class ComproCreditBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    // External Uri.
    $url = Url::fromUri('http://www.commercialprogression.com',
      array(
        'attributes' => array(
          'class' => array(
            'compro-credit-link',
          ),
        ),
      )
    );
    $external_link = \Drupal::l(t('Drupal website design'), $url);
    // Render array that returns link and text for block content.
    return array(
      'compro_text' => array(
        '#markup' => $external_link . '<span class="compro-credit-text"> ' . t('by Commercial Progression') . '</span>',
      ),
    );
  }
}
