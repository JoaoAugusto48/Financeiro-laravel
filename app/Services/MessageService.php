<?php

namespace App\Services;

class MessageService
{
    public static string $mensagem = 'mensagem';

    public static function create(string $type, string $message)
    {
        return session()->flash(self::$mensagem.".".$type, $message);
    }

    public static function success(string $message)
    {
        return self::create('success', $message);
    }

    public static function error(string $message)
    {
        return self::create('error', $message);
    }

    public static function warning(string $message)
    {
        return self::create('warning', $message);
    }
}