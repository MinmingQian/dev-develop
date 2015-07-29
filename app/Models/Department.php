<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\SearchIndex\Searchable;

class Department extends Model implements Searchable
{
    //



    /**
     * Returns an array with properties which must be indexed
     *
     * @return array
     */
    public function getSearchableBody()
    {
        $searchableProperties = [
            'name' => $this->name,
            'description' => $this->description,
        ];

        return $searchableProperties;

    }

    /**
     * Return the type of the searchable subject
     *
     * @return string
     */
    public function getSearchableType()
    {
        return 'department';
    }

    /**
     * Return the id of the searchable subject
     *
     * @return string
     */
    public function getSearchableId()
    {
        return $this->id;
    }
}
