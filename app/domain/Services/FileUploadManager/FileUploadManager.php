<?php namespace SaarangSlt\Services\FileUploadManager;

/**
 * FileUploadManager.php
 *
 * LICENSE: This source file is part of PARSIAN Web Application and is subject to
 * copyright regulations. Unauthorized use or publication of this file
 * in any format is subject to legal persecution.
 * @author     Saarang Soltani <saarangmrs@gmail.com>
 * Created at : 9/15/14 22:17 PM
 */
use Symfony\Component\HttpFoundation\File\UploadedFile;

class FileUploadManager
{

    protected $storage_path;
    protected $files;
    protected $echo_results;
    protected $results = array();

    /**
     * @param $storage_path|Location where uploaded files should be stored at
     * @param UploadedFile|array $files|File or array of uploaded files to be processed
     */
    public function __construct($storage_path, $files)
    {
        $this->storage_path = $storage_path;
        $this->files = $files;

    }


    /**
     * Stores each uploaded file to specified folder
     * @return array
     * @throws \Exception
     */
    public function process()
    {
        if (is_array($this->files)) {
            foreach ($this->files as $file) {
                $this->handle($file);
            }
        } else {
            $this->handle($this->$files);
        }

        return ['files' => $this->results];
    }

    /**
     * handles an individual file
     * @param UploadedFile $file
     * @throws \Exception
     */
    private function handle($file)
    {

        $destinationPath = $this->storage_path;
        $filename = uniqid();
        $originalFileName = $file->getClientOriginalName();
        $filename .= '.' . $file->getClientOriginalExtension();

        $upload_success = $file->move($destinationPath, $filename);

        if ($upload_success) {
            $result = array(
                'name' => $filename,
                'mime' => $file->getClientMimeType(),
                'size' => $file->getClientSize(),
                'originalFileName' => $originalFileName
            );
            array_push($this->results, $result);
        } else {
            throw new \Exception('Error while processing file upload');
        }
    }
}