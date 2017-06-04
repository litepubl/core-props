<?php

namespace LitePubl\Core\Props;

class Getter
{
    protected $get;
    protected $set;

    public function __construct(callable $get = null, callable $set = null)
    {
        $this->get = $get;
        $this->set = $set;
    }

    public function __get($name)
    {
        return call_user_func_array($this->get, [$name]);
    }

    public function __set($name, $value)
    {
        call_user_func_array($this->set, [$name, $value]);
    }
}
