<?php 
/**
 * @version     $Id$
 * @category	Nooku
 * @package     Nooku_Server
 * @subpackage  Modules
 * @copyright   Copyright (C) 2011 - 2012 Timble CVBA and Contributors. (http://www.timble.net).
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        http://www.nooku.org
 */
defined('KOOWA') or die( 'Restricted access' ); ?>

<h3><?= @text( 'Positions' ); ?></h3>
<div class="scrollable">
<h4><?= @text( 'Site' ); ?></h4>
<ul>
    <li <? if(!$state->position && $state->application == 'site') echo 'class="active"' ?>>
        <a href="<?= @route('position=&application=site') ?>">
            <?= @text('All positions') ?>
        </a>
    </li>
    <? foreach(array_unique(@service('com://admin/extensions.model.modules')->application('site')->getList()->position) as $position) : ?>
    <li <? if($state->position == $position && $state->application == 'site') echo 'class="active"' ?>>
        <a href="<?= @route('position='.$position.'&application=site') ?>">
            <?= $position; ?>
        </a>
    </li>
    <? endforeach ?>
</ul>
<h4><?= @text( 'Administrator' ); ?></h4>
<ul>
    <li <? if(!$state->position && $state->application == 'administrator') echo 'class="active"' ?>>
        <a href="<?= @route('position=&application=administrator') ?>">
            <?= @text('All positions') ?>
        </a>
    </li>
    <? foreach(array_unique(@service('com://admin/extensions.model.modules')->application('administrator')->getList()->position) as $position) : ?>
    <li <? if($state->position == $position && $state->application == 'administrator') echo 'class="active"' ?>>
        <a href="<?= @route('position='.$position.'&application=administrator') ?>">
            <?= $position; ?>
        </a>
    </li>
    <? endforeach ?>
</ul>
</div>