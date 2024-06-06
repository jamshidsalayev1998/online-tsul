<?php

namespace Test\Model;

use Illuminate\Database\Eloquent\Model;

class Spec extends Model
{
    protected $table="tb_mvdir";

    public function langs()
    {
        return $this->belongsToMany(StudyLanguage::class, 'tb_mvdir_langs', 'tb_mvdir_id', 'tb_llang_id')
            ->where('type', 'bachelor');
    }
}
