<?php
class FileMedia extends Media
{
	public static function model($classname=__CLASS__)
	{
		return parent::model($className);
	}
	public function defaultScope()
	{
		return array(
			'condition'=>"type='file'",
		);
	}
	public function behaviors(){
		return array(
			'fileMediaBehavior' => array(
				'class' => 'FileARBehavior',
				'attribute' => 'mediaFile', // this must exist
				'extension' => '*',
				'relativeWebRootFolder' => 'media/files', // this folder must exist
			)
		);
	}
}

?>
