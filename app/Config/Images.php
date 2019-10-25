<?php

namespace Config;

class Images extends \BasicApp\System\Config\App\BaseImages
{
	/**
	 * Default handler used if no other handler is specified.
	 *
	 * @var string
	 */
	public $defaultHandler = 'gd';

	/**
	 * The path to the image library.
	 * Required for ImageMagick, GraphicsMagick, or NetPBM.
	 *
	 * @var string
	 */
	public $libraryPath = '/usr/local/bin/convert';

	/**
	 * The available handler classes.
	 *
	 * @var array
	 */
	public $handlers = [
		'gd'      => \CodeIgniter\Images\Handlers\GDHandler::class,
		'imagick' => \CodeIgniter\Images\Handlers\ImageMagickHandler::class,
	];
}
