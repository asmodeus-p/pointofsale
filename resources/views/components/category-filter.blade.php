<form method="GET" action="{{ $action }}" class="flex flex-wrap items-center gap-4 mb-4">
    <input
        type="text"
        name="search"
        value="{{ request('search') }}"
        placeholder="Search products..."
        class="px-8 py-1 border rounded-md"
    >

    <select name="category_id" onchange="this.form.submit()" class="px-8 py-1 border rounded-md">
        <option value="">All Categories</option>
        @foreach($categories as $category)
            <option value="{{ $category->id }}" {{ request('category_id') == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select>

    <select name="sort_by" onchange="this.form.submit()" class="px-8 py-1 border rounded-md">
        <option value="created_at" {{ request('sort_by') == 'created_at' ? 'selected' : '' }}>Newest</option>
        <option value="name" {{ request('sort_by') == 'name' ? 'selected' : '' }}>Name</option>
    </select>

    <select name="order" onchange="this.form.submit()" class="px-8 py-1 border rounded-md">
        <option value="asc" {{ request('order') == 'asc' ? 'selected' : '' }}>Ascending</option>
        <option value="desc" {{ request('order') == 'desc' ? 'selected' : '' }}>Descending</option>
    </select>

    <button type="submit" class="px-8 py-1 border rounded-md bg-blue-600 text-white">Filter</button>
</form>
