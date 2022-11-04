<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BaseModel
 * @package App\Models
 */
abstract class BaseModel extends Model
{
    /**
     * @param array $options
     * @return BaseModel
     * @throws Exception
     */
    public function save(array $options = []): static
    {
        if (!parent::save($options)){
            throw new Exception(sprintf(
               "Could not save %s",
               static::class
            ));
        }
        return $this->refresh();
    }
}
