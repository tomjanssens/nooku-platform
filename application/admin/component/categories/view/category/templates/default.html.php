<?
/**
 * Nooku Framework - http://www.nooku.org
 *
 * @copyright	Copyright (C) 2011 - 2013 Johan Janssens and Timble CVBA. (http://www.timble.net)
 * @license		GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link		git://git.assembla.com/nooku-framework.git for the canonical source repository
 */
?>

<?= @helper('behavior.validator') ?>

<!--
<script src="media://js/koowa.js" />
<style src="media://css/koowa.css" />
-->

<ktml:module position="toolbar">
    <?= @helper('toolbar.render', array('toolbar' => $toolbar))?>
</ktml:module>

<form action="" method="post" class="-koowa-form" id="category-form">
    <div class="main">
		<div class="title">
			<input class="required" type="text" name="title" maxlength="255" value="<?= $category->title; ?>" placeholder="<?= @text( 'Title' ); ?>" />
		    <div class="slug">
		        <span class="add-on"><?= @text('Slug'); ?></span>
		        <input type="text" name="slug" maxlength="255" value="<?= $category->slug ?>" />
		    </div>
		</div>

		<div class="scrollable">
			<fieldset>
				<legend><?= @text( 'Details' ); ?></legend>
				<div>
				    <label for=""><?= @text( 'Description' ); ?></label>
				    <div>
				        <textarea rows="9" name="description"><?= $category->description; ?></textarea>
				    </div>
				</div>
			</fieldset>
		</div>
	</div>

    <div class="sidebar">
	    <?= @template('default_sidebar.html'); ?>
    </div>
</form>