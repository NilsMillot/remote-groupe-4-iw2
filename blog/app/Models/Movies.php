<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    private $name;
    private $type;

    public function getName()
    {
      return $this->name = $request->name;
    }

    public function getType()
    {
      return $this->type = $request->type;
    }
}    