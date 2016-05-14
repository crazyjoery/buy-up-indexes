<?php
/**
 * Created using PhpStorm.
 * User: Joery Pigmans
 * Date: 14-5-2016
 * Time: 13:26
 */
namespace jpigmans\bui\Controllers;

use Illuminate\Routing\Controller;

class BUIController extends Controller
{
    public function index()
    {
        return view('bui::index');
    }
}
