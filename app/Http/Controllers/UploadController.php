<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Imageupload;
use Aws\S3\S3Client;
use League\Flysystem\AwsS3v3\AwsS3Adapter;
use League\Flysystem\Filesystem;
use App\Image;

class UploadController extends Controller
{

	public function upload(Request $request)
    {
        $kartinka = Imageupload::upload($request->file('kartinka'));
        $image = new Image;
        $image->original_filename = $kartinka['original_filename'];
        $image->original_filepath = $kartinka['original_filepath'];
        $image->original_filedir = $kartinka['original_filedir'];
        $image->original_extension = $kartinka['original_extension'];
        $image->original_mime = $kartinka['original_mime'];
        $image->original_filesize = $kartinka['original_filesize'];
        $image->original_width = $kartinka['original_width'];
        $image->original_height = $kartinka['original_height'];
        $image->path = $kartinka['path'];
        $image->dir = $kartinka['dir'];
        $image->filename = $kartinka['filename'];
        $image->basename = $kartinka['basename'];
        $image->s3_url = $kartinka['s3_url'];
        $image->save();
        return redirect('/tablica');
    }
}
