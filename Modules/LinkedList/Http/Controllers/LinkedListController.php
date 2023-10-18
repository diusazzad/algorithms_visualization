<?php

namespace Modules\LinkedList\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\LinkedList\Entities\linkedList;

class LinkedListController extends Controller
{

    public function createLinkedList(){
        // Create a new linked list
        // $list = new linkedList();
        // $list->save();

        // return response()->json(['message' => 'Linked list created successfully']);

        $existingValues = linkedList::pluck('value')->all(); // Get existing values from the database
        return view('linkedlist::index', compact('existingValues'));
    }

    public function storeList(Request $request){
        $value = $request->input('value');
        $newNode = new LinkedList(['value' => $value]);
        $newNode->save();
        return redirect()->route('linkedlist.index');
    }
    public function addElement(Request $request, $listId)
    {
        $list = LinkedList::find($listId);

        if (!$list) {
            return response()->json(['message' => 'Linked list not found'], 404);
        }

        $data = $request->all();

        // Implement your code to add an element to the linked list here

        return response()->json(['message' => 'Element added successfully']);
    }

    public function removeElement(Request $request, $listId)
    {
        $list = LinkedList::find($listId);

        if (!$list) {
            return response()->json(['message' => 'Linked list not found'], 404);
        }

        $data = $request->all();

        // Implement your code to remove an element from the linked list here

        return response()->json(['message' => 'Element removed successfully']);
    }

    public function searchElement(Request $request, $listId)
    {
        $list = LinkedList::find($listId);

        if (!$list) {
            return response()->json(['message' => 'Linked list not found'], 404);
        }

        $data = $request->all();

        // Implement your code to search for an element in the linked list here

        return response()->json(['message' => 'Search results go here']);
    }

    public function traverseLinkedList($listId)
    {
        $list = LinkedList::find($listId);

        if (!$list) {
            return response()->json(['message' => 'Linked list not found'], 404);
        }

        // Implement your code to traverse the linked list and return the elements

        return response()->json(['message' => 'Linked list traversal goes here']);
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('linkedlist::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('linkedlist::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('linkedlist::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('linkedlist::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }



}
