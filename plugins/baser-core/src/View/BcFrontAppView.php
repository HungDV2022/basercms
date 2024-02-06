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

namespace BaserCore\View;

use BaserCore\Utility\BcFolder;
use BaserCore\Utility\BcUtil;
use BaserCore\View\Helper\BcTextHelper;
use BcWidgetArea\View\Helper\BcWidgetAreaHelper;
use Cake\Core\Configure;
use BaserCore\Annotation\UnitTest;
use BaserCore\Annotation\NoTodo;
use BaserCore\Annotation\Checked;
use BaserCore\Annotation\Note;
use Cake\Core\Plugin;
use Cake\Utility\Inflector;

/**
 * BcFrontAppView
 * @uses BcFrontAppView
 * @property BcTextHelper $BcText
 * @property BcWidgetAreaHelper $BcWidgetArea
 */
class BcFrontAppView extends AppView
{

    /**
     * initialize
     * @checked
     * @unitTest
     * @noTodo
     */
    public function initialize(): void
    {
        parent::initialize();
        if (!empty($this->getRequest()->getAttribute('currentSite')->device)) {
            $agentHelper = Configure::read('BcAgent.' . $this->getRequest()->getAttribute('currentSite')->device . '.helper');
            if ($agentHelper) $this->addHelper($agentHelper);
        }
        $this->addHelper('BaserCore.BcText');
        if (BcUtil::isInstalled()) {
            $this->setThemeHelpers();
        }
    }

    /**
     * テーマ用のヘルパーをセットする
     *
     * @return void
     * @checked
     * @noTodo
     */
    protected function setThemeHelpers(): void
    {
        $theme = BcUtil::getCurrentTheme();
        if(!$theme) return;
        $themeHelpersPath = Plugin::path($theme) . 'src' . DS . 'View' . DS . 'Helper';
        $Folder = new BcFolder($themeHelpersPath);
        $files = $Folder->getFiles();
        if (empty($files)) return;

        foreach($files[1] as $file) {
            try {
                $this->addHelper(Inflector::camelize($theme, '-') . '.' . basename($file, 'Helper.php'));
            } catch (\Exception) {
                // ヘルパーが読み込めない場合は無視する
            }
        }
    }

}
