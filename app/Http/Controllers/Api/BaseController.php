<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
   public  function __construct()
   {
//       解决跨越
       header('Access-Control-Allow-Origin:*');
   }
}
