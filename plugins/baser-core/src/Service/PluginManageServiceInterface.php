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

namespace BaserCore\Service;

use Cake\Datasource\EntityInterface;
use Exception;

/**
 * Interface PluginManageServiceInterface
 * @package BaserCore\Service
 */
interface PluginManageServiceInterface
{

    /**
     * プラグインを取得する
     * @param int $id
     * @return EntityInterface
     */
    public function get($id): EntityInterface;

    /**
     * ユーザー一覧を取得
     * @param string $sortMode
     * @return array $plugins
     */
    public function getIndex(string $sortMode): array;

    /**
     * プラグインを無効にする
     * @param string $name
     */
    public function detach(string $name): bool;

    /**
     * プラグイン名からプラグインエンティティを取得
     * @param string $name
     * @return array|EntityInterface|null
     */
    public function getByName(string $name);

    /**
     * データベースをリセットする
     * @param string $name
     * @param array $options
     * @throws Exception
     */
    public function resetDb(string $name, $options = []):void;

    /**
     * プラグインを削除する
     * @param string $name
     * @param array $options
     */
    public function uninstall(string $name, array $options = []): void;

    /**
     * 優先度を変更する
     * @param int $id
     * @param int $offset
     * @param array $conditions
     * @return bool
     */
    public function changePriority(int $id, int $offset, array $conditions = []): bool;

}
