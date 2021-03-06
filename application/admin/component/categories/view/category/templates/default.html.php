<?
/**
 * Nooku Platform - http://www.nooku.org/platform
 *
 * @copyright	Copyright (C) 2011 - 2014 Johan Janssens and Timble CVBA. (http://www.timble.net)
 * @license		GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link		https://github.com/nooku/nooku-platform for the canonical source repository
 */
?>

<?= helper('behavior.validator') ?>

<ktml:script src="assets://js/koowa.js" />
<ktml:style src="assets://css/koowa.css" />

<ktml:module position="actionbar">
    <ktml:toolbar type="actionbar">
</ktml:module>

<form action="" method="post" class="-koowa-form" id="category-form">
    <div class="main">
		<div class="title">
			<input class="required" type="text" name="title" maxlength="255" value="<?= $category->title; ?>" placeholder="<?= translate( 'Title' ); ?>" />
		    <div class="slug">
		        <span class="add-on"><?= translate('Slug'); ?></span>
		        <input type="text" name="slug" maxlength="255" value="<?= $category->slug ?>" />
		    </div>
		</div>
        <?= object('com:ckeditor.controller.editor')->render(array('name' => 'description', 'text' => $category->description, 'toolbar' => 'basic')) ?>
	</div>

    <div class="sidebar">
	    <?= import('default_sidebar.html'); ?>
    </div>
</form>