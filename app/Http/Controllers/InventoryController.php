<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;

class InventoryController extends Controller
{
    public function index(){
        $inventories = Inventory::all();
        return view('admin.inventory.index', ['inventories'=>$inventories]);
        // return view('admin.inventory.index');
    }

    public function create(){
        return view('admin.inventory.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'author' => 'required',  
            'title' => 'required',
        ]);

        $newInventory = Inventory::create($data);

        return redirect(route('inventory'));
    }

    public function edit(Inventory $inventory){
        return view('admin.inventory.edit', ['inventory'=> $inventory]);
    }

    public function update(Inventory $inventory, Request $request){
        $data = $request->validate([
            'author' => 'required',
            'title' => 'required',
        ]);

        $inventory->update($data);

        return redirect(route('inventory'))->with('success', 'Book inventory item updated successfully');
    }

    public function destroy(Inventory $inventory){
        $inventory->delete();
        return redirect(route('inventory'))->with('success', 'Inventory item deleted successfully');
    }
}