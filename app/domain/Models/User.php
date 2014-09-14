<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;
use Zizaco\Entrust\HasRole;

class User extends Eloquent implements UserInterface, RemindableInterface
{

    //Use entrust trait
    use HasRole;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    protected $guarded = array();

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('password');

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->password;
    }

    /**
     * Get the token value for the "remember me" session.
     *
     * @return string
     */
    public function getRememberToken()
    {
        return $this->remember_token;
    }

    /**
     * Set the token value for the "remember me" session.
     *
     * @param  string $value
     * @return void
     */
    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    /**
     * Get the column name for the "remember me" token.
     *
     * @return string
     */
    public function getRememberTokenName()
    {
        return 'remember_token';
    }

    /**
     * Get the e-mail address where password reminders are sent.
     *
     * @return string
     */
    public function getReminderEmail()
    {
        return $this->email;
    }


    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }


    public function getAccountStatusAttribute()
    {
        return $this->is_active ? Lang::get('words.active') : Lang::get('words.inactive');
    }

    public function getProfileColorAttribute()
    {
        return Lang::get('words.colors.' . $this->theme_color);
    }


    public function getSmallAvatarAttribute()
    {
        if ($this->has_avatar) {
             return $this->getAvatarBaseFilename() . '_small.jpg';
        }

        return Config::get('parsian.avatarsBasePath') . 'default_small.jpg';
    }

    public function getNormalAvatarAttribute()
    {
        if ($this->has_avatar) {
            return $this->getAvatarBaseFilename() . '_normal.jpg';
        }

        return Config::get('parsian.avatarsBasePath') . 'default_normal.jpg';
    }

    public function getLargeAvatarAttribute()
    {
        if ($this->has_avatar) {
            return $this->getAvatarBaseFilename() . '_large.jpg';
        }

        return Config::get('parsian.avatarsBasePath') . 'default_large.jpg';
    }


    private function getAvatarBaseFilename()
    {
        return Config::get('parsian.avatarsBasePath') . $this->getKey();
    }


    public function todos(){
        return $this->hasMany('Todo','user_id');
    }




}
