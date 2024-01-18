<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfflineCustomer extends Model
{
    use HasFactory;
    protected $fillable =['name','address','phone','email','accountUserName','accountNumber'];

}
