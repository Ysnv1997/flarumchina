<?php

/*
 * This file is part of Flarum.
 *
 * (c) Toby Zerner <toby.zerner@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Flarum\Install\Steps;

use Flarum\Foundation\Application;
use Flarum\Install\Step;
use Flarum\Settings\DatabaseSettingsRepository;
use Illuminate\Database\ConnectionInterface;

class WriteSettings implements Step
{
    /**
     * @var ConnectionInterface
     */
    private $database;

    /**
     * @var array
     */
    private $custom;

    public function __construct(ConnectionInterface $database, array $custom)
    {
        $this->database = $database;
        $this->custom = $custom;
    }

    public function getMessage()
    {
        return 'Writing default settings';
    }

    public function run()
    {
        $repo = new DatabaseSettingsRepository($this->database);

        $repo->set('version', Application::VERSION);

        foreach ($this->getSettings() as $key => $value) {
            $repo->set($key, $value);
        }
    }

    private function getSettings()
    {
        return $this->custom + $this->getDefaults();
    }

    private function getDefaults()
    {
        return [
            'allow_post_editing' => 'reply',
            'allow_renaming' => '10',
            'allow_sign_up' => '1',
            'custom_less' => '',
            'default_locale' => 'zh-hans',
            'default_route' => '/all',
            'extensions_enabled' => '[]',
            'forum_title' => '新的Flarum论坛',
            'forum_description' => '',
            'mail_driver' => 'mail',
            'mail_from' => 'noreply@localhost',
            'theme_colored_header' => '0',
            'theme_dark_mode' => '0',
            'theme_primary_color' => '#4D698E',
            'theme_secondary_color' => '#4D698E',
            'welcome_message' => 'Flarum目前处于开发阶段，存在诸多问题，请谨慎使用于生成环境。',
            'welcome_title' => '欢迎使用Flarum，<a href=\"http://bbs.flarumchina.cn/\"></a>',
        ];
    }
}
