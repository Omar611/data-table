<div>
    <section class="mt-10">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
            <!-- Start coding here -->
            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                <div class="flex items-center justify-between d p-4">
                    <div class="flex">
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                    fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input wire:model.live='search' type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 "
                                placeholder="Search" required="">
                        </div>
                    </div>
                    <div class="flex space-x-3">
                        <div class="flex space-x-3 items-center">
                            <label class="w-40 text-sm font-medium text-gray-900">User Type :</label>
                            <select wire:model.live='userType'
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                <option value="">All</option>
                                <option value="0">User</option>
                                <option value="1">Admin</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-4 py-3 cursor-pointer" wire:click='setOrderBy("name")'>
                                    <div class="flex items-center">
                                        <span>name</span>
                                        @if ($orderBy === 'name')
                                            @if ($orderDirection === 'asc')
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M10 3a1 1 0 00-.707.293L6.586 6.586a1 1 0 101.414 1.414L10 5.414l2.293 2.293a1 1 0 001.414-1.414L10.707 3.293A1 1 0 0010 3zm0 14a1 1 0 00.707-.293l2.293-2.293a1 1 0 00-1.414-1.414L10 14.586l-2.293-2.293a1 1 0 00-1.414 1.414l2.293 2.293A1 1 0 0010 17z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            @else
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M10 3a1 1 0 00-.707.293L6.586 6.586a1 1 0 101.414 1.414L10 5.414l2.293 2.293a1 1 0 001.414-1.414L10.707 3.293A1 1 0 0010 3zm0 14a1 1 0 00.707-.293l2.293-2.293a1 1 0 00-1.414-1.414L10 14.586l-2.293-2.293a1 1 0 00-1.414 1.414l2.293 2.293A1 1 0 0010 17z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            @endif
                                        @endif
                                    </div>
                                </th>
                                <th scope="col" class="px-4 py-3 cursor-pointer" wire:click='setOrderBy("email")'>
                                    <div class="flex items-center">
                                        <span>
                                            email
                                        </span>
                                        @if ($orderBy === 'email')
                                            @if ($orderDirection === 'asc')
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M10 3a1 1 0 00-.707.293L6.586 6.586a1 1 0 101.414 1.414L10 5.414l2.293 2.293a1 1 0 001.414-1.414L10.707 3.293A1 1 0 0010 3zm0 14a1 1 0 00.707-.293l2.293-2.293a1 1 0 00-1.414-1.414L10 14.586l-2.293-2.293a1 1 0 00-1.414 1.414l2.293 2.293A1 1 0 0010 17z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            @else
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M10 3a1 1 0 00-.707.293L6.586 6.586a1 1 0 101.414 1.414L10 5.414l2.293 2.293a1 1 0 001.414-1.414L10.707 3.293A1 1 0 0010 3zm0 14a1 1 0 00.707-.293l2.293-2.293a1 1 0 00-1.414-1.414L10 14.586l-2.293-2.293a1 1 0 00-1.414 1.414l2.293 2.293A1 1 0 0010 17z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            @endif
                                        @endif
                                    </div>
                                </th>
                                <th scope="col" class="px-4 py-3 cursor-pointer" wire:click='setOrderBy("is_admin")'>
                                    <div class="flex items-center">
                                        <span>
                                            Role
                                        </span>
                                        @if ($orderBy === 'is_admin')
                                            @if ($orderDirection === 'asc')
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M10 3a1 1 0 00-.707.293L6.586 6.586a1 1 0 101.414 1.414L10 5.414l2.293 2.293a1 1 0 001.414-1.414L10.707 3.293A1 1 0 0010 3zm0 14a1 1 0 00.707-.293l2.293-2.293a1 1 0 00-1.414-1.414L10 14.586l-2.293-2.293a1 1 0 00-1.414 1.414l2.293 2.293A1 1 0 0010 17z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            @else
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M10 3a1 1 0 00-.707.293L6.586 6.586a1 1 0 101.414 1.414L10 5.414l2.293 2.293a1 1 0 001.414-1.414L10.707 3.293A1 1 0 0010 3zm0 14a1 1 0 00.707-.293l2.293-2.293a1 1 0 00-1.414-1.414L10 14.586l-2.293-2.293a1 1 0 00-1.414 1.414l2.293 2.293A1 1 0 0010 17z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            @endif
                                        @endif
                                    </div>
                                </th>
                                <th scope="col" class="px-4 py-3 cursor-pointer"
                                    wire:click='setOrderBy("created_at")'>
                                    <div class="flex items-center">
                                        <span>
                                            Joined
                                        </span>
                                        @if ($orderBy === 'created_at')
                                            @if ($orderDirection === 'asc')
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M10 3a1 1 0 00-.707.293L6.586 6.586a1 1 0 101.414 1.414L10 5.414l2.293 2.293a1 1 0 001.414-1.414L10.707 3.293A1 1 0 0010 3zm0 14a1 1 0 00.707-.293l2.293-2.293a1 1 0 00-1.414-1.414L10 14.586l-2.293-2.293a1 1 0 00-1.414 1.414l2.293 2.293A1 1 0 0010 17z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            @else
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M10 3a1 1 0 00-.707.293L6.586 6.586a1 1 0 101.414 1.414L10 5.414l2.293 2.293a1 1 0 001.414-1.414L10.707 3.293A1 1 0 0010 3zm0 14a1 1 0 00.707-.293l2.293-2.293a1 1 0 00-1.414-1.414L10 14.586l-2.293-2.293a1 1 0 00-1.414 1.414l2.293 2.293A1 1 0 0010 17z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            @endif
                                        @endif
                                    </div>
                                </th>
                                <th scope="col" class="px-4 py-3 cursor-pointer"
                                    wire:click='setOrderBy("updated_at")'>
                                    <div class="flex items-center">
                                        <span>
                                            Last Update
                                        </span>
                                        @if ($orderBy === 'updated_at')
                                            @if ($orderDirection === 'asc')
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M10 3a1 1 0 00-.707.293L6.586 6.586a1 1 0 101.414 1.414L10 5.414l2.293 2.293a1 1 0 001.414-1.414L10.707 3.293A1 1 0 0010 3zm0 14a1 1 0 00.707-.293l2.293-2.293a1 1 0 00-1.414-1.414L10 14.586l-2.293-2.293a1 1 0 00-1.414 1.414l2.293 2.293A1 1 0 0010 17z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            @else
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M10 3a1 1 0 00-.707.293L6.586 6.586a1 1 0 101.414 1.414L10 5.414l2.293 2.293a1 1 0 001.414-1.414L10.707 3.293A1 1 0 0010 3zm0 14a1 1 0 00.707-.293l2.293-2.293a1 1 0 00-1.414-1.414L10 14.586l-2.293-2.293a1 1 0 00-1.414 1.414l2.293 2.293A1 1 0 0010 17z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            @endif
                                        @endif
                                    </div>
                                </th>
                                <th scope="col" class="px-4 py-3">
                                    <span class="sr-only">Actions</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr class="border-b dark:border-gray-700" wire:key="{{ $user->id }}">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $user->name }}</th>
                                    <td class="px-4 py-3">{{ $user->email }}</td>
                                    <td class="px-4 py-3 text-{{ $user->is_admin ? 'green-500' : 'blue-500' }}">
                                        {{ $user->is_admin ? 'Admin' : 'Member' }}</td>
                                    <td class="px-4 py-3">{{ $user->created_at }}</td>
                                    <td class="px-4 py-3">{{ $user->updated_at }}</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button
                                            onclick="confirm('Are you sure you want to delete user {{ $user->name }}?') || event.stopImmediatePropagation()"
                                            wire:click='deleteUser({{ $user->id }})'
                                            class="px-3 py-1 bg-red-500 text-white rounded">X</button>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

                <div class="py-4 px-3">
                    <div class="flex ">
                        <div class="flex space-x-4 items-center mb-3">
                            <label class="w-32 text-sm font-medium text-gray-900">Per Page</label>
                            <select wire:model.live='perPage'
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                        </div>
                    </div>
                    {{ $users->links('vendor.pagination.tailwind') }}
                </div>
            </div>
        </div>
    </section>

</div>
