<?php

namespace ChimeraRocks\LayoutConfig\Models;

use Illuminate\Database\Eloquent\Model;

class AppConfig extends Model
{
    protected $table = "chimerarocks_appconfig";

    protected $fillable = [
        'options',
    ];

    protected $casts = [
        'options' => 'array'
    ];

    protected $optionFields = [
        'frontLayout'
    ];

    public function __get($key)
    {
        if ($key != 'options' && in_array($key, $this->optionsFields)) {
            return parent::__get('options')[$key];
        }
        return parent::__get($key);
    }

    public function __set($key, $value)
    {
        if ($key != 'options' && in_array($key, $this->optionsFields)) {
            $options = $this->options;
            $options[$key] = $value;
            return parent::__set('options', $options);
        }
        parent::__set($key, $value);
    }

}
