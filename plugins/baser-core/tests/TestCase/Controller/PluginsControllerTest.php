<?php
/**
 * baserCMS :  Based Website Development Project <https://basercms.net>
 * Copyright (c) baserCMS User Community <https://basercms.net/community/>
 *
 * @copyright     Copyright (c) baserCMS User Community
 * @link          https://basercms.net baserCMS Project
 * @since         5.0.0
 * @license       http://basercms.net/license/index.html MIT License
 */

namespace BaserCore\Test\TestCase\Controller;

use BaserCore\TestSuite\BcTestCase;
use Cake\Datasource\ConnectionManager;
use Cake\TestSuite\IntegrationTestTrait;

/**
 * Class PluginsControllerTest
 * @package BaserCore\Test\TestCase\Controller
 */
class PluginsControllerTest extends BcTestCase
{
    /**
     * IntegrationTestTrait
     */
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.BaserCore.Users',
        'plugin.BaserCore.UsersUserGroups',
        'plugin.BaserCore.UserGroups',
        'plugin.BaserCore.Plugins'
    ];

    /**
     * Set up
     */
    public function setUp(): void
    {
        parent::setUp();
        $this->loginAdmin();
    }

    /**
     * Tear down
     */
    public function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * プラグインをアップロードしてインストールする
     */
    public function testAdd()
    {
        $this->markTestIncomplete('このテストは、まだ実装されていません。');
    }

    /**
     * プラグインの一覧を表示する
     */
    public function testIndex()
    {
        $this->get('/baser/admin/plugins/index');
        $this->assertResponseOk();
    }

    /**
     * baserマーケットのプラグインデータを取得する
     */
    public function testAjax_get_market_plugins()
    {
        $this->markTestIncomplete('このテストは、まだ実装されていません。');
    }

    /**
     * 並び替えを更新する
     */
    public function testAjax_update_sort()
    {
        $this->markTestIncomplete('このテストは、まだ実装されていません。');
    }

    /**
     * ファイル削除
     */
    public function testAjax_delete_file()
    {
        $this->markTestIncomplete('このテストは、まだ実装されていません。');
    }

    /**
     * プラグインを無効にして有効にする
     *
     * 複数のプラグインのインストールを行うと
     * Migration ファイルの Initial クラスの重複読み込みエラーとなるので
     * 一つのプラグインで行わなければならない
     */
    public function testDetachAndInstall(): void
    {
        $this->enableSecurityToken();
        $this->post('/baser/admin/plugins/detach/BcSample');
        $this->assertFlashMessage('プラグインの無効化に失敗しました。');
        $this->post('/baser/admin/plugins/detach/BcBlog');
        $this->assertFlashMessage('プラグイン「BcBlog」を無効にしました。');

        $this->enableSecurityToken();
        $this->put('/baser/admin/plugins/install/BcBlog', ['connection' => 'test']);
        $this->assertRedirect([
            'plugin' => 'BaserCore',
            'prefix' => 'Admin',
            'controller' => 'plugins',
            'action' => 'index'
        ]);

        // できたテーブルを削除
        $connection = ConnectionManager::get('test');
        $schema = $connection->getDriver()->newTableSchema('bc_blog_phinxlog');
        $sql = $schema->dropSql($connection);
        $connection->execute($sql[0])->closeCursor();
        $schema = $connection->getDriver()->newTableSchema('blog_posts');
        $sql = $schema->dropSql($connection);
        $connection->execute($sql[0])->closeCursor();
    }

    /**
     * アクセス制限設定を追加する
     */
    public function test_addPermission()
    {
        $this->markTestIncomplete('このテストは、まだ実装されていません。');
    }

    /**
     * データベースをリセットする
     */
    public function testReset_db()
    {
        $this->markTestIncomplete('このテストは、まだ実装されていません。');
    }

    /**
     * 削除処理
     */
    public function testDelete()
    {
        $this->markTestIncomplete('このテストは、まだ実装されていません。');
    }

}
