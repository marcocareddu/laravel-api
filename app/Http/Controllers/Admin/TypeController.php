<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = Type::all();
        return view('admin.types.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $type = new Type();
        return view('admin.types.create', compact('type'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // !VALIDATION
        $request->validate([], []);

        $data = $request->all();
        $type = new Type();
        $type->fill($data);
        $type->save();

        return to_route('admin.types.show', $type);
    }

    /**
     * Display the specified resource.
     */
    public function show(Type $type)
    {
        return view('admin.types.show', compact('type'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Type $type)
    {
        return view('admin.types.edit', compact('type'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Type $type)
    {
        // !VALIDATION
        $request->validate([], []);

        $data = $request->all();
        $type->update($data);

        return to_route('admin.types.show', $type);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Type $type)
    {
        $type->delete();
        return to_route('admin.types.index');
    }

    // Trash Project
    public function trash()
    {
        $types = Type::onlyTrashed()->get();
        return view('admin.types.trash', compact('types'));
    }

    // Restore Project
    public function restore(string $id)
    {
        $type = Type::onlyTrashed()->findOrFail($id);
        $type->restore();
        return to_route('admin.types.trash');
    }

    // Drop Project
    public function drop(string $id)
    {
        $type = Type::onlyTrashed()->findOrFail($id);
        $type->forceDelete();
        return to_route('admin.types.trash');
    }
}
