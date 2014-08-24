<?php

/**
 * UserAvatarManager.php
 *
 * LICENSE: This source file is part of PARSIAN Web Application and is subject to
 * copyright regulations. Unauthorized use or publication of this file
 * in any format is subject to legal persecution.
 * @author     Saarang Soltani <saarangmrs@gmail.com>
 * Created at : 8/24/14 20:17 PM
 */

namespace SaarangSlt\Services\UserAvatarManager;


use Intervention\Image\Facades\Image;

class UserAvatarManager
{


    protected $avatarsBasePath;

    public function __construct()
    {
        $this->avatarsBasePath = public_path() . \Config::get('parsian.avatarsBasePath');
    }


    public function updateAvatar($userID, $imageFile)
    {

        if ($this->avatarExists($userID)) {
            $this->removeAvatar($userID);
        }

        $this->storeAvatarImage($imageFile, $userID . '_small.jpg', 88);
        $this->storeAvatarImage($imageFile, $userID . '_normal.jpg', 115);
        $this->storeAvatarImage($imageFile, $userID . '_large.jpg', 300);


    }


    public function removeAvatar($userID)
    {

        if (file_exists($path = $this->avatarsBasePath . $userID . '_small.jpg')) {
            unlink($path);
        }
        if (file_exists($path = $this->avatarsBasePath . $userID . '_normal.jpg')) {
            unlink($path);
        }
        if (file_exists($path = $this->avatarsBasePath . $userID . '_large.jpg')) {
            unlink($path);
        }

    }

    private function avatarExists($userID)
    {

    }

    private function storeAvatarImage($imageFile, $filename, $width)
    {
        Image::make($imageFile)
            ->fit($width)
            ->save($this->avatarsBasePath . $filename, 100);

    }
} 