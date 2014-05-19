<?php

class ThumbnailController extends BaseController {
	public function generate($width, $height, $image){
		$requestPath = explode('/', Request::path());
		$limit = array_search($width.'x'.$height, $requestPath);

		if($limit){
			$requestPath = '/';
			for($i = 1; $i <= $limit; $i++){
				$requestPath .=   Request::segment($i) . '/';
			}
		}

		$outputFile= public_path().$requestPath .'thumbnails/'. $width .'x'.$height .$image;
		if(!file_exists($outputFile)){
			$imagine = new Imagine\Imagick\Imagine();
			$size    = new Imagine\Image\Box($width, $height);
			$mode    = Imagine\Image\ImageInterface::THUMBNAIL_INSET;
			$output = $imagine->open( public_path().$requestPath . $image)->thumbnail($size,$mode)->save($outputFile);
		} else {
			$output = File::get($outputFile);
		}

		$response = Response::make(
		    $output,
	            200
	        );
	           $mime =  new finfo(FILEINFO_MIME);

	          $response->header(
	            'content-type',
		$mime->file($outputFile)

	        );

		return $response;

	}
}
