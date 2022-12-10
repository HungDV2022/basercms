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

/**
 * index
 *
 * @var \BaserCore\View\BcAdminAppView $this
 * @var \BcUploader\Model\Entity\UploaderConfig $uploaderConfigs
 * @checked
 * @noTodo
 * @unitTest
 */
echo $this->BcBaser->i18nScript([
  'uploaderCancel' => __d('baser', 'キャンセル'),
  'uploaderSave' => __d('baser', '保存'),
  'uploaderEdit' => __d('baser', '編集'),
  'uploaderDelete' => __d('baser', '削除'),
  'uploaderAlertMessage1' => __d('baser', '更新に失敗しました。入力内容を見直してください。'),
  'uploaderAlertMessage2' => __d('baser', 'アップロードに失敗しました。ファイルサイズが大きいか、許可されていない形式です。'),
  'uploaderAlertMessage3' => __d('baser', 'このファイルの編集・削除はできません。'),
  'uploaderAlertMessage4' => __d('baser', 'サーバーでの処理に失敗しました。'),
  'uploaderConfirmMessage1' => __d('baser', '本当に削除してもよろしいですか？')
], ['block' => false]);
$this->BcBaser->js(['admin/uploader_files/uploader_list.bundle']);
if (!isset($listId)) $listId = '';
?>


<?php $this->BcBaser->link('ListUrl', [
  'action' => 'ajax_list',
  $listId,
  'num' => $this->getRequest()->getQuery('num')
], ['id' => 'ListUrl' . $listId, 'style' => 'display:none']) ?>


<!-- JS用設定値 -->
<div style="display:none">
  <div id="ListId"><?php echo $listId ?></div>
  <div id="UploaderImageSettings"><?php if (isset($imageSettings)) : ?><?php echo $this->Js->object($imageSettings) ?><?php endif ?></div>
  <div id="LoginUserId"><?php echo \BaserCore\Utility\BcUtil::loginUser()->id ?></div>
  <div id="LoginUserGroupId"><?php echo \BaserCore\Utility\BcUtil::loginUser()->user_groups[0]->id ?></div>
  <div id="AdminPrefix" style="display:none;"><?php echo \BaserCore\Utility\BcUtil::getAdminPrefix() ?></div>
  <div id="UsePermission"><?php echo $uploaderConfigs->use_permission ?></div>
</div>


<!-- ファイルリスト -->
<div id="FileList<?php echo $listId ?>" class="file-list"></div>

<!-- list-num -->
<?php // TODO ucmitz 未実装 ?>
<?php //if (empty($this->params['isAjax'])): ?>
<!--  --><?php //$this->BcBaser->element('list_num') ?>
<?php //endif ?>

<!-- 編集ダイアログ -->
<div id="EditDialog" title="<?php echo __d('baser', 'ファイル情報編集') ?>">
  <?php // TODO ucmitz 未実装 ?>
  <!--  --><?php //$this->BcBaser->element('UploaderFiles/form', ['listId', $listId, 'popup' => true]) ?>
</div>
