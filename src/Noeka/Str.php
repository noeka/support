<?php

namespace Noeka\Support;

class Str {
  public static function upper(string $value): string
  {
    return mb_strtoupper($value, 'UTF-8');
  }

  public static function lower(string $value): string
  {
    return mb_strtolower($value, 'UTF-8');
  }
}

