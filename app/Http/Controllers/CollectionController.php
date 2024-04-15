<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CollectionModel;
use Illuminate\Support\Facades\DB;

class CollectionController extends Controller
{
    public function getAllCollections() :object {
        
        $collection = CollectionModel::get();

        foreach($collection as $item){

            $item->products = DB::table('item_collection as ic')
                                    ->join('products as p', 'p.product_id', '=', 'ic.product_id')
                                    ->select('ic.collection_id',
                                             'p.product_id',
                                             'p.description',
                                             'p.category_id',
                                             'p.sale_value',
                                             'p.status')
                                    ->where('ic.collection_id', $item->collection_id)
                                    ->get();
        }

        return response()->json($collection, 200);

    }

    public function getCollectionById(int $id) :object {

        return response()->json(CollectionModel::find($id),200);

    }

    public function createCollection(Request $request) :object {

        $collection = CollectionModel::create([
            'description' => $request->description,
            'status' => 1,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);

        return response()->json($collection->collection_id, 200);

    }
}
