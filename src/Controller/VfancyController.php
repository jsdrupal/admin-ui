<?php
namespace Drupal\admin_ui\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;

/**
 * Returns the contents of index.html as generated by Parcel.
 */
class VfancyController extends ControllerBase {

    /**
     * Returns the contents of dist/index.html.
     */
    public function content() {
        $build = [
            '#markup' => $this->t('Hello World!'),
        ];
        $file = file_get_contents(__DIR__ .'/../../dist/index.html');
        $file = str_replace('MODULE_LOCATION', base_path() . drupal_get_path('module', 'admin_ui'), $file);
        return new Response($file, 200);
        return $build;
    }
}