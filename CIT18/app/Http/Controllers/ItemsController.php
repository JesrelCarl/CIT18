<?php

namespace App\Http\Controllers;

use App\Models\Items;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    
    public function index()
    {
    

        $items = Items::all();
        return view('item', compact('items'));
    }

    public function create()
    {
        return view('itemForm');
    }

    
    public function store(Request $request)
    {
        $record = $request->all();
        $items = new Items;
        $items->addItem($record);
        return redirect('/items')
            ->with('success', 'successfully inserted record');
    }

   
    public function show($id)
    {
        $fetchedRecord = Items::where('id', $id)->first();
        return view('itemShow', $fetchedRecord->toArray());
    }

    public function edit($id)
    {
        $fetchedRecord = Items::where('id', $id)->first();
        return view('itemForm', $fetchedRecord->toArray());
    }


    public function update(Request $request, Items $itemsModel, $id)
    {
        $record = $request->all();
        $items = new Items;
        $items->updateItem($id, $record);
        return redirect('/items');
    }


    public function destroy(Items $itemsModel)
    {
        
        return 'destroy';
    }
}