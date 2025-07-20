<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/styles.css">
    <title>Document</title>
</head>
<body>
    <div class="bg-wrapper bg-blue-200/50">
      <div class="bg-image"></div>
    </div>

   <x-navbar />
   <x-sidepanel />

    <div class="sm:ml-64 p-8 mt-12">
        <h1 class="mb-4 text-2xl font-bold ">Admins</h1>
        
        <div class="flex justify-end">
            <x-filter-bar :sortFields="['name', 'created_at','email']" />
        </div>

    
      <div class="p-4" >
          <div class="border border-gray-400/50 bg-white sm:rounded-lg relative overflow-x-auto shadow-md">
              
              @if($admins->isEmpty())
                  <p class="text-gray-600">No admins found.</p>
              @else
                  <table class="rtl:text-right dark:text-gray-400 w-full text-sm text-left text-gray-500">
                      <thead class="text-xs text-gray-700 uppercase bg-gray-200">
                          <tr>
                              <th scope="col" class="px-6 py-3">
                                  Name
                              </th>
                              <th scope="col" class="px-6 py-3">
                                  Role
                              </th>
                              <th scope="col" class="px-6 py-3">
                                  Status
                              </th>
                              <th scope="col" class="px-6 py-3">
                                  Action
                              </th>
                          </tr>
                      </thead>
                      <tbody>

                          @foreach ($admins as $admin)
                              <tr class="hover:bg-gray-50 border-b">
                              <th scope="row" class="whitespace-nowrap dark:text-white flex items-center px-6 py-4 text-gray-900">
                                  
                                  <div class="ps-3">
                                      <div class="text-base font-semibold capitalize">{{ $admin->name }}</div>
                                      <div class="font-normal text-gray-500">{{ $admin->email }}</div>
                                  </div>  
                              </th>
                              <td class="px-6 py-4 capitalize">
                                  {{ $admin->role }}
                              </td>
                              <td class="px-6 py-4">
                                  <div class="flex items-center">
                                      <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div> Online
                                  </div>
                              </td>
                              <td class="px-6 py-4">
                                  @if(auth()->id() !== $admin->id)
                                      <form action="{{ route('admins.demote', $admin) }}"  {{-- pass the model, not just id --}}
                                          method="POST"
                                          onsubmit="return confirm('Demote {{ $admin->name }} to normal user?');">
                                          @csrf
                                          @method('PATCH')
                                          <button type="submit" class="hover:underline text-red-600">Demote</button>
                                      </form>
                                  @else
                                      <span class="px-6 py-2 font-bold text-white bg-gray-400 rounded">Demote</span>
                                  @endif
                              </td>
                          </tr>
                          @endforeach
                      </tbody>
                  </table>
              @endif
          </div>
      </div>


<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    
</body>
</html>