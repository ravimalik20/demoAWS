<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $table = "inventory";

    protected $fillable = ["name", "count"];

    public static function store($name, $count) {
      $obj = self::create([
        "name" => $name,
        "count" => $count
      ]);

      return $obj;
    }
}
