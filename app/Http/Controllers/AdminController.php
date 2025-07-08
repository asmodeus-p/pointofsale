<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = User::query()->where('role', 'admin');

        // Search by name or email
        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->search . '%')
                    ->orWhere('email', 'like', '%' . $request->search . '%');
            });
        }

        // Sort
        $sortField = $request->get('sort_by', 'created_at');
        $sortOrder = $request->get('order', 'desc');
        if (in_array($sortField, ['name', 'email', 'created_at']) && in_array($sortOrder, ['asc', 'desc'])) {
            $query->orderBy($sortField, $sortOrder);
        }

        $admins = $query->paginate(10)->withQueryString();

        return view('adminview', compact('admins'));
    }


    public function demote(Request $request, User $user)
    {
        // Log::info('Attempting to demote user ID: ' . $user->id);

        if ($request->user()->is($user)) {
            // Log::warning('Blocked self-demotion for user ID: ' . $user->id);
            return back()->with('error', 'You cannot demote yourself.');
        }

        $user->role = 'user';
        $user->save();

        // Log::info('Demotion success for user ID: ' . $user->id);

        return back()->with('success', 'Admin demoted to user.');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addadmin');
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
    public function update(Request $request, User $admin)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required',
            'role' => 'required|string',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
