<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
class InventoryController extends Controller{
    public function index(): View{
        return view(view: 'inventory.inventory');
    }
}