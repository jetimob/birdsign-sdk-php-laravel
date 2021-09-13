<?php

namespace Jetimob\BirdSign\Api\Themes;

use Jetimob\BirdSign\Api\BirdSignResponse;
use Jetimob\BirdSign\Entity\Theme;

/**
 * @link https://app.swaggerhub.com/apis-docs/birdsign/BirdSign/1.0.6#/Themes
 */
class ThemeResponse extends BirdSignResponse
{
    protected Theme $data;

    /**
     * @return Theme
     */
    public function getTheme(): Theme
    {
        return $this->data;
    }
}
