<?php
/**
 * Nooku Framework - http://www.nooku.org
 *
 * @copyright	Copyright (C) 2011 - 2013 Johan Janssens and Timble CVBA. (http://www.timble.net)
 * @license		GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link		git://git.assembla.com/nooku-framework.git for the canonical source repository
 */

use Nooku\Library;

/**
 * Article Html View
 *
 * @author  Arunas Mazeika <http://nooku.assembla.com/profile/arunasmazeika>
 * @package Component\Articles
 */
class ArticlesViewArticleHtml extends ArticlesViewHtml
{
    public function render()
    {
        //Get the parameters
        $params = $this->getObject('application')->getParams();

        //Get the article
        $article = $this->getModel()->fetch();

        //Get the parameters of the active menu item
        if($page = $this->getObject('application.pages')->getActive())
        {
            $menu_params = new JParameter($page->params);
            if(!$menu_params->get('page_title')) {
                $params->set('page_title',	$article->title);
            }
        }
        else $params->set('page_title',	$article->title);

        //Set the breadcrumbs
        $pathway = $this->getObject('application')->getPathway();

        if($page->getLink()->query['view'] == 'categories')
        {
            $category = $article->getCategory();

            $pathway->addItem($category->title, $this->getTemplate()->getHelper('route')->category(array('row' => $category)));
            $pathway->addItem($article->title, '');
        }

        if($page->getLink()->query['view'] == 'articles') {
            $pathway->addItem($article->title, '');
        }

        $this->params = $params;
        return parent::render();
    }
}