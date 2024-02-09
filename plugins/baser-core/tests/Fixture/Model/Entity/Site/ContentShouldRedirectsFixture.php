<?php
declare(strict_types=1);

namespace BaserCore\Test\Fixture\Model\Entity\Site;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ContentsFixture
 */
class ContentShouldRedirectsFixture extends TestFixture
{
    /**
     * Import
     *
     * @var array
     */
    public $import = ['table' => 'contents'];

    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'name' => '',
                'plugin' => 'BaserCore',
                'type' => 'ContentFolder',
                'entity_id' => 1,
                'url' => '/',
                'site_id' => 1,
                'alias_id' => null,
                'main_site_content_id' => null,
                'parent_id' => 0,
                'lft' => 1,
                'rght' => 12,
                'level' => 0,
                'title' => 'baserCMSサンプル',
                'description' => '',
                'eyecatch' => '',
                'author_id' => 1,
                'layout_template' => 'default',
                'status' => true,
                'publish_begin' => null,
                'publish_end' => null,
                'self_status' => true,
                'self_publish_begin' => '2019-06-11 12:27:01',
                'self_publish_end' => null,
                'exclude_search' => false,
                'created_date' => null,
                'modified_date' => '2019-06-11 12:27:01',
                'site_root' => true,
                'deleted_date' => null,
                'exclude_menu' => false,
                'blank_link' => false,
                'created' => '2016-07-29 18:02:53',
                'modified' => '2020-09-14 21:10:41',
            ],
            [
                'id' => 2,
                'name' => 'index',
                'plugin' => 'BaserCore',
                'type' => 'Page',
                'entity_id' => 2,
                'url' => '/index',
                'site_id' => 1,
                'alias_id' => null,
                'main_site_content_id' => null,
                'parent_id' => 1,
                'lft' => 2,
                'rght' => 3,
                'level' => 1,
                'title' => 'トップページ',
                'description' => '',
                'eyecatch' => '',
                'author_id' => 1,
                'layout_template' => '',
                'status' => true,
                'publish_begin' => null,
                'publish_end' => null,
                'self_status' => true,
                'self_publish_begin' => null,
                'self_publish_end' => null,
                'exclude_search' => false,
                'created_date' => '2016-07-29 18:13:03',
                'modified_date' => '2020-09-14 20:13:10',
                'site_root' => false,
                'deleted_date' => null,
                'exclude_menu' => false,
                'blank_link' => false,
                'created' => '2016-07-29 18:13:03',
                'modified' => '2020-09-14 20:13:25',
            ],
            [
                'id' => 3,
                'name' => 'news',
                'plugin' => 'BcBlog',
                'type' => 'BlogContent',
                'entity_id' => 21,
                'url' => '/news/index',
                'site_id' => 1,
                'alias_id' => null,
                'main_site_content_id' => null,
                'parent_id' => 1,
                'lft' => 4,
                'rght' => 5,
                'level' => 1,
                'title' => 'NEWS(※関連Fixture未完了)',
                'description' => '',
                'eyecatch' => '',
                'author_id' => 1,
                'layout_template' => '',
                'status' => true,
                'publish_begin' => null,
                'publish_end' => null,
                'self_status' => true,
                'self_publish_begin' => null,
                'self_publish_end' => null,
                'exclude_search' => false,
                'created_date' => '2016-07-31 15:01:41',
                'modified_date' => '2020-09-14 19:27:41',
                'site_root' => false,
                'deleted_date' => null,
                'exclude_menu' => false,
                'blank_link' => false,
                'created' => '2016-07-31 15:01:41',
                'modified' => '2020-09-14 19:27:57',
            ],
            [
                'id' => 4,
                'plugin' => 'BaserCore',
                'name' => 'サイトID2のフォルダ',
                'type' => "ContentFolder",
                'url' => '/s/',
                'entity_id' => 17,
                'deleted_date' => null,
                'parent_id' => 1,
                'lft' => 6,
                'rght' => 11,
                'level' => 1,
                'title' => 'サイトID2のフォルダ',
                'description' => '',
                'site_id' => 2,
                'alias_id' => null,
                'main_site_content_id' => 1,
                'eyecatch' => '',
                'author_id' => 1,
                'layout_template' => '',
                'status' => true,
                'publish_begin' => null,
                'publish_end' => null,
                'self_status' => true,
                'self_publish_begin' => null,
                'self_publish_end' => null,
                'exclude_search' => false,
                'created_date' => '2016-07-31 16:47:04',
                'modified_date' => null,
                'site_root' => true,
                'exclude_menu' => false,
                'blank_link' => false,
                'created' => '2016-07-31 16:47:04',
                'modified' => '2016-08-12 00:59:06',
            ],
           [
                'id' => 5,
                'name' => 'index',
                'plugin' => 'BaserCore',
                'type' => 'Page',
                'entity_id' => 2,
                'url' => '/s/index',
                'site_id' => 2,
                'alias_id' => null,
                'main_site_content_id' => null,
                'parent_id' => 4,
                'lft' => 7,
                'rght' => 8,
                'level' => 2,
                'title' => 'トップページ',
                'description' => '',
                'eyecatch' => '',
                'author_id' => 1,
                'layout_template' => '',
                'status' => true,
                'publish_begin' => null,
                'publish_end' => null,
                'self_status' => true,
                'self_publish_begin' => null,
                'self_publish_end' => null,
                'exclude_search' => false,
                'created_date' => '2016-07-29 18:13:03',
                'modified_date' => '2020-09-14 20:13:10',
                'site_root' => false,
                'deleted_date' => null,
                'exclude_menu' => false,
                'blank_link' => false,
                'created' => '2016-07-29 18:13:03',
                'modified' => '2020-09-14 20:13:25',
            ],
            [
                'id' => 6,
                'name' => 'news',
                'plugin' => 'BcBlog',
                'type' => 'BlogContent',
                'entity_id' => 21,
                'url' => '/s/news/index',
                'site_id' => 2,
                'alias_id' => null,
                'main_site_content_id' => null,
                'parent_id' => 4,
                'lft' => 9,
                'rght' => 10,
                'level' => 2,
                'title' => 'NEWS',
                'description' => '',
                'eyecatch' => '',
                'author_id' => 1,
                'layout_template' => '',
                'status' => true,
                'publish_begin' => null,
                'publish_end' => null,
                'self_status' => true,
                'self_publish_begin' => null,
                'self_publish_end' => null,
                'exclude_search' => false,
                'created_date' => '2016-07-31 15:01:41',
                'modified_date' => '2020-09-14 19:27:41',
                'site_root' => false,
                'deleted_date' => null,
                'exclude_menu' => false,
                'blank_link' => false,
                'created' => '2016-07-31 15:01:41',
                'modified' => '2020-09-14 19:27:57',
            ],
        ];
        parent::init();
    }
}