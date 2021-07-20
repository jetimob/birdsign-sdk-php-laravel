<?php

namespace Jetimob\BirdSign\Api\Themes;

use Jetimob\BirdSign\Api\BirdSignResponse;
use Jetimob\BirdSign\Entity\Theme;

/**
 * @link https://app.swaggerhub.com/apis-docs/birdsign/BirdSign/1.0.3#/Themes/get_themes
 */
class ThemeListResponse extends BirdSignResponse
{
    /** @var Theme[] */
    protected array $data;

    public function dataItemType(): string
    {
        return Theme::class;
    }

    /**
     * @return Theme[]
     */
    public function getThemes(): array
    {
        return $this->data;
    }
}
