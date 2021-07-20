<?php

namespace Jetimob\BirdSign\Api\Themes;

use GuzzleHttp\Psr7\Response;
use GuzzleHttp\RequestOptions;
use Jetimob\BirdSign\Api\AbstractApi;
use Jetimob\BirdSign\Api\Themes\DTO\ThemeDTO;

/**
 * @link https://app.swaggerhub.com/apis-docs/birdsign/BirdSign/1.0.3#/Themes
 */
class ThemesApi extends AbstractApi
{
    /**
     * @link https://app.swaggerhub.com/apis-docs/birdsign/BirdSign/1.0.3#/Themes/get_themes
     * @return ThemeListResponse
     */
    public function list(): ThemeListResponse
    {
        return $this->mappedGet('themes', ThemeListResponse::class);
    }

    /**
     * @param ThemeDTO $theme
     *
     * @return ThemeResponse
     * @link https://app.swaggerhub.com/apis-docs/birdsign/BirdSign/1.0.3#/Themes/delete_theme__ThemeId_
     */
    public function create(ThemeDTO $theme): ThemeResponse
    {
        return $this->mappedPost('themes', ThemeResponse::class, [
            RequestOptions::FORM_PARAMS => $theme->toArray(),
        ]);
    }

    /**
     * @param int $themeId
     *
     * @return ThemeResponse
     * @link https://app.swaggerhub.com/apis-docs/birdsign/BirdSign/1.0.3#/Themes/get_theme__ThemeId_
     */
    public function find(int $themeId): ThemeResponse
    {
        return $this->mappedGet('themes/' . $themeId, ThemeResponse::class);
    }

    /**
     * @param int $themeId
     *
     * @return Response
     * @link https://app.swaggerhub.com/apis-docs/birdsign/BirdSign/1.0.3#/Themes/delete_theme__ThemeId_
     */
    public function delete(int $themeId): Response
    {
        return $this->request('delete', 'themes/' . $themeId);
    }

    /**
     * @param int      $themeId
     * @param ThemeDTO $theme
     *
     * @return ThemeResponse
     * @link https://app.swaggerhub.com/apis-docs/birdsign/BirdSign/1.0.3#/Themes/put_theme__ThemeId_
     */
    public function update(int $themeId, ThemeDTO $theme): ThemeResponse
    {
        return $this->mappedPut('themes/' . $themeId, ThemeResponse::class, [
            RequestOptions::FORM_PARAMS => $theme->toArray(),
        ]);
    }
}
