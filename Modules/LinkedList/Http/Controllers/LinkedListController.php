<?php

namespace Modules\LinkedList\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\LinkedList\Entities\linkedList;

class LinkedListController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $linkedLists = linkedList::all();

        return view('linkedlist::index', compact('linkedLists'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create(Request $request)
    {
    //   // Create a new linked list node
    //   $linkedList = new linkedList();

    //   // Save the linked list node to the database
    //   $linkedList->save();

    //   // Return the linked list node
    //   return response()->json(['message' => 'Linked list created successfully'], 201);
 // Validate the value parameter
    $request->validate([
        'value' => 'required',
    ]);

// Create a new linked list node
$linkedList = LinkedList::create([
    'value' => $request->input('value'),
]);

// Redirect to the index() function
return redirect()->route('linked-list.index');
}
    public function add($value)
    {
        // Find the linked list node to add the element to
        $linkedList = LinkedList::find($value);

        // If the linked list node does not exist, return an error
        if (!$linkedList) {
            return response()->json(['message' => 'Linked list not found'], 404);
        }

        // Create a new linked list node
        $newNode = new LinkedList([
            'value' => $value,
            'next_id' => $linkedList->id,
        ]);

        // Save the new linked list node to the database
        $newNode->save();

        // Return the new linked list node
        return response()->json(['message' => 'Element added successfully'], 201);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $linkedList = new linkedList($request->input('value'));
        $linkedList->save();

        return redirect()->route('linkedlist.index');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show(linkedList $linkedList)
    {
        return view('linkedlist::show', compact('linkedList'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('linkedlist::edit', compact('linkedList'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, linkedList $linkedList)
    {
        $linkedList->update($request->input('value'));
        $linkedList->save();

        return redirect()->route('linkedlist.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy(linkedList $linkedList)
    {
        $linkedList->delete();

        return redirect()->route('linkedlist.index');
    }
    public function search(Request $request)
    {
        $value = $request->input('value');
        $linkedList = linkedList::where('value', 'like', "%$value%")->first();

        return view('linkedlist::show', compact('linkedList'));
    }

    public function traverse(linkedList $linkedList)
    {
        $elements = [];

        $current = $linkedList;
        while ($current !== null) {
            $elements[] = $current->value;
            $current = $current->next;
        }

        return view('linkedlist::traverse', compact('elements'));
    }


}
