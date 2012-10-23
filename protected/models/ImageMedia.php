<?php
class ImageMedia extends Media
{
	public static function model($classname=__CLASS__)
	{
		return parent::model($className);
	}
	public function defaultScope()
	{
		return array(
			'condition'=>"type='image'",
		);
	}
	public function behaviors(){
		return array(
		'CTimestampBehavior' => array(
				'class' => 'zii.behaviors.CTimestampBehavior',
				'createAttribute' => 'created_at',
				'updateAttribute' => 'modified_at',
				'setUpdateOnCreate'=>true,
			),
			'imageMediaBehavior' => array(
				'class' => 'ImageARBehavior',
				'attribute' => 'mediaFile', // this must exist
				'extension' => 'png, gif, jpg', // possible extensions, comma separated
				//'prefix' => 'img_',
				'relativeWebRootFolder' => 'media/images', // this folder must exist
				//'useImageMagick' => '/usr/bin', # I want to use imagemagick instead of GD, and
				'formats' => array(
					// create a thumbnail grayscale format
					'thumb' => array(
						'suffix' => '_thumb',
						'process' => array('resize' => array(60, 60), 'grayscale' => true),
					),
					// create a large one (in fact, no resize is applied)
					'large' => array(
						'suffix' => '_large',
					),
					// and override the default :
					'normal' => array(
						'process' => array('resize' => array(200, 200)),
					),
				),
			),
		);
	}
}

?>
