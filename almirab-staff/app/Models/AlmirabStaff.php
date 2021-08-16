<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlmirabStaff extends Model
{
    use HasFactory;

    protected $table = 'staff';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'lastname',
        'firstname',
        'gender',
        'born',
        'phone_one',
        'phone_two',
        'address',
        'reference',
        'specialty',
        'work_activity',
        'lang',
        'salary',
        'marital_status',
        'status',
        'test_duration',
        'file1',
        'file2',
        'created_at',
        'update_at'
    ];
}
