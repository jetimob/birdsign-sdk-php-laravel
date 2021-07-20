<?php

namespace Jetimob\BirdSign\Tests\Feature;

use Jetimob\BirdSign\Api\Themes\DTO\ThemeDTO;
use Jetimob\BirdSign\Api\Themes\ThemesApi;
use Jetimob\BirdSign\Entity\Theme;
use Jetimob\BirdSign\Facades\BirdSign;
use Jetimob\BirdSign\Tests\AbstractTestCase;

class ThemesApiTest extends AbstractTestCase
{
    protected ThemesApi $api;
    protected static ?int $themeId = null;

    protected function setUp(): void
    {
        parent::setUp();
        $this->api = BirdSign::themes();
    }

    public static function tearDownAfterClass(): void
    {
        parent::tearDownAfterClass();

        if (is_null(self::$themeId)) {
            return;
        }

        BirdSign::themes()->delete(self::$themeId);
    }

    public function testCreate(): void
    {
        $name = 'theme_test';
        $color = 'FF00FF';

        $response = $this->api->create(ThemeDTO::new($name, 'FF00FF'));
        $theme = $response->getTheme();

        $this->assertSame($name, $theme->getName());
        $this->assertSame($color, $theme->getColor());
        self::$themeId = $theme->getId();
    }

    /**
     * @depends testCreate
     */
    public function testList(): void
    {
        $response = $this->api->list();
        $themes = $response->getThemes();
        $this->assertNotEmpty($themes);
        $theme = $themes[0];
        $this->assertInstanceOf(Theme::class, $theme);
    }

    /**
     * @depends testCreate
     */
    public function testFind(): void
    {
        $response = $this->api->find(self::$themeId);
        $theme = $response->getTheme();
        $this->assertSame(self::$themeId, $theme->getId());
    }

    /**
     * @depends testCreate
     */
    public function testUpdate(): void
    {
        $name = 'updated_theme_name';

        $response = $this->api->update(self::$themeId, (new ThemeDTO())->setName($name));
        $theme = $response->getTheme();

        $this->assertSame($name, $theme->getName());
        $this->assertSame(self::$themeId, $theme->getId());
    }

    /**
     * @depends testCreate
     */
    public function testDelete(): void
    {
        $response = $this->api->delete(self::$themeId);
        $this->assertSame(204, $response->getStatusCode());
        self::$themeId = null;
    }
}
