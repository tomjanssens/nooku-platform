<?php
/**
 * Nooku Framework - http://www.nooku.org
 *
 * @copyright	Copyright (C) 2011 - 2013 Johan Janssens and Timble CVBA. (http://www.timble.net)
 * @license		GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link		git://git.assembla.com/nooku-framework.git for the canonical source repository
 */

namespace Nooku\Component\Files;

use Nooku\Library;

/**
 * File Database Row
 *
 * @author  Ercan Ozkaya <http://nooku.assembla.com/profile/ercanozkaya>
 * @package Nooku\Component\Files
 */
class DatabaseRowFile extends DatabaseRowNode
{
	public static $image_extensions = array('jpg', 'jpeg', 'gif', 'png', 'tiff', 'tif', 'xbm', 'bmp');

	public function __construct(Library\ObjectConfig $config)
	{
		parent::__construct($config);

		$this->registerCallback(array('after.save'), array($this, 'saveThumbnail'));
		$this->registerCallback(array('after.delete'), array($this, 'deleteThumbnail'));
	}

	public function save()
	{
		$context = $this->getCommandContext();
		$context->result = false;

		$is_new = $this->isNew();

		if ($this->getCommandChain()->run('before.save', $context) !== false)
		{
			$context->result = $this->_adapter->write(!empty($this->contents) ? $this->contents : $this->file);
			$this->getCommandChain()->run('after.save', $context);
        }

		if ($context->result === false) {
			$this->setStatus(Library\Database::STATUS_FAILED);
		} else {
            $this->setStatus($is_new ? Library\Database::STATUS_CREATED : Library\Database::STATUS_UPDATED);
        }

		return $context->result;
	}

	public function get($property)
	{
		if (in_array($property, array('size', 'extension', 'modified_date', 'mimetype')))
        {
			$metadata = $this->_adapter->getMetadata();
			return $metadata && array_key_exists($property, $metadata) ? $metadata[$property] : false;
		}

		if ($property == 'filename') {
			return pathinfo($this->name, PATHINFO_FILENAME);
		}

		if ($property == 'metadata')
		{
			$metadata = $this->_adapter->getMetadata();
			if ($this->isImage() && !empty($metadata))
			{
				$image = array(
					'thumbnail' => $this->thumbnail,
					'width'     => $this->width,
					'height'    => $this->height
				);
				$metadata['image'] = $image;
			}
			return $metadata;
		}

		if (in_array($property, array('width', 'height', 'thumbnail')) && $this->isImage())
        {
			if ($property == 'thumbnail' && !empty($this->_data['thumbnail'])) {
				return $this->_data['thumbnail'];
			}
			
			return $this->getImageSize($property);
		}

		return parent::get($property);
	}	
	
	/**
	 * This method checks for computed properties as well
	 * 
	 * @param string $key
	 */
	public function has($property)
	{
		$result = parent::has($property);
		
		if (!$result) 
		{
			$var = $this->get($property);
			if (!empty($var)) {
				$result = true;
			}
		}
		
		return $result;
		
	}

    public function toArray()
    {
        $data = parent::toArray();

        unset($data['file']);
		unset($data['contents']);

		$data['metadata'] = $this->metadata;

		if ($this->isImage()) {
			$data['type'] = 'image';
		}

        return $data;
    }

	public function isImage()
	{
		return in_array(strtolower($this->extension), self::$image_extensions);
	}

	public function getImageSize($column)
	{
		$size = $this->_adapter->getImageSize();

		if ($size === false) {
			return false;
		}

		list($width, $height) = $size;

		switch ($column)
		{
			case 'width':
				return $width;
			case 'height':
				return $height;
			case 'thumbnail':
				if ($width < 200 && $height < 200) {
					// go down to default case
				}
				else
                {
					$higher = $width > $height ? $width : $height;
					$ratio = 200 / $higher;
					return array_map('round', array('width' => $ratio*$width, 'height' => $ratio*$height));
				}
			default:
				return array('width' => $width, 'height' => $height);
		}
	}

	public function saveThumbnail(Library\CommandContext $context = null)
	{
        $result = null;
		if ($this->isImage() && $this->getContainer()->getParameters()->thumbnails)
		{
			$parameters      = $this->getContainer()->getParameters();
			$thumbnails_size = isset($parameters['thumbnail_size']) ? $parameters['thumbnail_size'] : array();
			$thumb           = $this->getObject('com:files.database.row.thumbnail', array('thumbnail_size' => $thumbnails_size));
			$thumb->source = $this;

			$result = $thumb->save();
		}

		return $result;
	}

	public function deleteThumbnail(Library\CommandContext $context = null)
	{
		$thumb = $this->getObject('com:files.model.thumbnails')
            ->container($this->container)
            ->folder($this->folder)
            ->filename($this->name)
			->getRow();

		$result = $thumb->delete();

		return $result;
	}
}