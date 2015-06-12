<?php
/**
 * Example of Db\Relations
 *
 * @category Application
 *
 * @author   Anton Shevchuk
 * @created  14.11.13 10:45
 */
namespace Application;

use Bluz\Db\Relations;
use Bluz\Proxy\Db;
use Bluz\Proxy\Layout;

return
/**
 * @return bool
 */
function () use ($view) {
    /**
     * @var Bootstrap $this
     * @var \Bluz\View\View $view
     */
    Layout::breadCrumbs(
        [
            $view->ahref('Test', ['test', 'index']),
            'DB Relations',
        ]
    );

    /* @var Users\Row */
    $user = Users\Table::findRow(1);

    $roles = $user->getRelations('Roles');

    echo "<h2>User roles</h2>";
    var_dump($roles);

    echo "<h2>User with all relations</h2>";
    var_dump($user);

    return false;
};
