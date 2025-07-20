<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = User::query()->where('role', 'user');

        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->search . '%')
                    ->orWhere('email', 'like', '%' . $request->search . '%');
            });
        }

        $sortField = $request->get('sort_by', 'created_at');
        $sortOrder = $request->get('order', 'desc');

        if (
            in_array($sortField, ['name', 'email', 'created_at']) &&
            in_array($sortOrder, ['asc', 'desc'])
        ) {
            $query->orderBy($sortField, $sortOrder);
        }

        $customers = $query->paginate(10)->withQueryString();
        return view('customerlist', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addcustomer');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function promoteToAdmin(User $user)
    {
        if ($user->role !== 'admin') {
            $user->update(['role' => 'admin']);
            return back()->with('success', "User #{$user->id} has been promoted to admin.");
        }

        return back()->with('info', "User #{$user->id} is already an admin.");
    }
}
