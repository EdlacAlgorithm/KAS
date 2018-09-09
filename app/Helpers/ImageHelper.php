<?php
namespace App\Helpers;

use Intervention\Image\Facades\Image;

Class ImageHelper
{
	public $filePath = 'assets/images/product/';

    public $transparent = true;

    // public function __construct(Image $imageInstance)
    // {
    //     $this->imageInstance = $imageInstance;
    // }

	public function uploadImage($file,$name,$imageSizes)
    {       
        $hardPath =  str_slug($name, '-').'-'.md5(time());
        
        $img = Image::make($file);

        foreach($imageSizes as $imageSize)
        {
            $img->fit($imageSize[0],$imageSize[1]);

            //$img = $this->transparent?$img->opacity(0):$img;

            $img->save($this->filePath.$imageSize[2].$hardPath.'.jpg');
        }

        return $hardPath;
    }

    public function removeImage($name,$imageSizes)
    {   
        if($name != 'default_user')
        {    
            foreach($imageSizes as $imageSize)
            {
                \File::delete(public_path() .'/'.$this->filePath.$imageSize.$name.'.jpg');
            }
        }

        return $this;
    }

    public function setPath($path)
    {
        $this->filePath = $path;

        return $this;
    }

    public function uploadImageWith($image,$name,$path,$imageSizes=null)
    {
        $imageSizes = is_null($imageSizes)?[
            [268,249,'list_'],[266,381,'detail_'],[85,84,'similar_']
        ]:$imageSizes;

		$this->setPath('assets/images/'.$path.'/');

        return $this->uploadImage($image,$name,$imageSizes);
    }

    public function removeImageWith($name,$path,$imageSizes = null)
	{
		$imageSizes = is_null($imageSizes)?['list_','similar_','detail_']:$imageSizes;

		$this->setPath('assets/images/'.$path.'/');

		return $this->removeImage($name,$imageSizes);
	}
}