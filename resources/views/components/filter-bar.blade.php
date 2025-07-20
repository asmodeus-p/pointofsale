<form method="GET" class="flex flex-wrap items-end gap-2 mb-4">
    <input type="text" name="search" placeholder="Search"
           value="{{ request('search') }}"
           class="px-2 py-1 border rounded-md" />

    <select name="sort_by" class="px-8 py-1 border rounded-md">
        @foreach ($sortFields as $field)
            <option value="{{ $field }}" {{ request('sort_by', $defaultSort) == $field ? 'selected' : '' }}>
                {{ ucfirst(str_replace('_', ' ', $field)) }}
            </option>
        @endforeach
    </select>

    <select name="order" class="px-8 py-1 border rounded-md">
        <option value="asc" {{ request('order') == 'asc' ? 'selected' : '' }}>Asc</option>
        <option value="desc" {{ request('order') == 'desc' ? 'selected' : '' }}>Desc</option>
    </select>

    <button type="submit" class="px-3 py-1 text-white bg-blue-600 rounded">Apply</button>

    <a href="{{ route(Route::currentRouteName()) }}"
       class="hover:bg-gray-400 px-3 py-1 text-white bg-red-700 rounded">
        Reset
    </a>
</form>
