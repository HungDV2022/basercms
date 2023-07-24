<?php
/**
 * baserCMS :  Based Website Development Project <https://basercms.net>
 * Copyright (c) NPO baser foundation <https://baserfoundation.org/>
 *
 * @copyright     Copyright (c) NPO baser foundation
 * @link          https://basercms.net baserCMS Project
 * @since         5.0.0
 * @license       https://basercms.net/license/index.html MIT License
 */

namespace BcThemeConfig\Test\TestCase\Service;

use BaserCore\Test\Factory\SiteFactory;
use BaserCore\TestSuite\BcTestCase;
use BaserCore\Utility\BcContainerTrait;
use BcThemeConfig\Service\ThemeConfigsService;
use BcThemeConfig\Service\ThemeConfigsServiceInterface;
use BcThemeConfig\Test\Scenario\ThemeConfigsScenario;
use CakephpFixtureFactories\Scenario\ScenarioAwareTrait;
use Cake\Filesystem\File;

/**
 * ThemeConfigsServiceTest
 */
class ThemeConfigsServiceTest extends BcTestCase
{
    /**
     * Trait
     */
    use ScenarioAwareTrait;
    use BcContainerTrait;

    /**
     * Test subject
     *
     * @var ThemeConfigsService
     */
    public $ThemeConfigsService;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.BaserCore.Factory/Sites',
        'plugin.BaserCore.Factory/SiteConfigs',
        'plugin.BcThemeConfig.Factory/ThemeConfigs',
    ];

    /**
     * set up
     */
    public function setUp(): void
    {
        parent::setUp();
        $this->ThemeConfigsService = $this->getService(ThemeConfigsServiceInterface::class);
    }

    /**
     * tear down
     */
    public function tearDown(): void
    {
        unset($this->ThemeConfigsService);
        parent::tearDown();
    }

    /**
     * Test __construct
     */
    public function test__construct()
    {
        // テーブルがセットされている事を確認
        $this->assertEquals('theme_configs', $this->ThemeConfigsService->ThemeConfigs->getTable());
    }

    /**
     * test get
     */
    public function test_get()
    {
        //データを生成
        $this->loadFixtureScenario(ThemeConfigsScenario::class);
        //テスト対象メソッドをコール
        $rs = $this->ThemeConfigsService->get();
        //戻る値を確認
        $this->assertEquals('001800', $rs->color_main);
        $this->assertEquals('001800', $rs->color_sub);
        $this->assertEquals('2B7BB9', $rs->color_link);
        $this->assertEquals('2B7BB9', $rs->color_hover);
    }

    /**
     * test clearCache
     */
    public function test_clearCache()
    {
        //データを生成
        $this->loadFixtureScenario(ThemeConfigsScenario::class);
        //$entityが値を設定する
        $this->ThemeConfigsService->get();
        //テストメソッドをコール前に$entityの値があるか確認
        $this->assertNotNull($this->getPrivateProperty($this->ThemeConfigsService, 'entity'));
        //テストメソッドをコール
        $this->ThemeConfigsService->clearCache();
        //戻る値を確認
        $this->assertNull($this->getPrivateProperty($this->ThemeConfigsService, 'entity'));
    }

    /**
     * test update
     */
    public function test_update()
    {
        //データを生成
        $this->getRequest()->getAttribute('currentSite');
        SiteFactory::make(['id' => 1, 'status' => true, 'theme' => 'BcThemeSample'])->persist();
        //テストメソッドをコール
        $rs = $this->ThemeConfigsService->update(['logo_alt' => 'baserCMS']);
        //戻る値を確認
        $this->assertEquals('baserCMS', $rs['logo_alt']);
    }

    /**
     * test saveImage
     */
    public function test_saveImage()
    {
        $this->markTestIncomplete('このテストは、まだ実装されていません。');
    }

    /**
     * test deleteImage
     */
    public function test_deleteImage()
    {
        $this->markTestIncomplete('このテストは、まだ実装されていません。');
    }

    /**
     * test updateColorConfig
     */
    public function test_updateColorConfig()
    {
        $this->markTestIncomplete('このテストは、まだ実装されていません。');
    }

}
