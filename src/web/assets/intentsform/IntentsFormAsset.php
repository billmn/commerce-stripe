<?php
/**
 * @link https://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license MIT
 */

namespace craft\commerce\stripe\web\assets\intentsform;

use craft\web\AssetBundle;

/**
 * Asset bundle for the Payment Form
 */
class IntentsFormAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = __DIR__;

        $this->css = [
            'css/paymentForm.css',
        ];

        $this->js = [
            'js/paymentForm.js',
        ];

        parent::init();
    }
}