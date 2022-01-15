@extends('layouts.dashboard')
@section('content')
    <div class="bg-white">
        <div class="max-w-7xl mx-auto py-2 sm:px-6 lg:px-8">
            <div class="max-w-none mx-auto">
                <div class="bg-white overflow-hidden sm:rounded-lg sm:shadow">
                    <div class="bg-gray-100 px-4 py-5 border-b border-gray-200 sm:px-6">
                        <div class="-ml-4 -mt-2 flex items-center justify-between flex-wrap sm:flex-nowrap">
                            <div class="ml-4 mt-2">
                                <h3 class="text-lg leading-6 font-medium text-gray-900">
                                    Attributes List
                                </h3>
                            </div>

                            <div class="ml-4 mt-2 flex-shrink-0">
                                <a href="{{ url('categories/create') }}">
                                    <button type="button"
                                        class="relative inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        Add
                                    </button></a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-100 py-6">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="flex flex-col">
                                <div class="-my-2 sm:overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                            <table class="min-w-full divide-y divide-gray-200">
                                                <thead class="bg-gray-50">
                                                    <tr>
                                                        <th scope="col"
                                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                            No
                                                        </th>
                                                        <th scope="col"
                                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                            Trait Type
                                                        </th>
                                                        <th scope="col"
                                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                            Value
                                                        </th>
                                                        <th scope="col"
                                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                            Action
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="bg-white divide-y divide-gray-100">
                                                    @foreach ($categories as $key => $category)
                                                        <tr>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                                {{ $categories->firstItem() + $key }}
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                                {{ $category->trait_type }}
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                                {{ $category->value }}
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                                <form
                                                                    action="{{ route('categories.destroy', $category->id) }}"
                                                                    class="px-3" method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button>
                                                                        <svg class=" h-6 w-6 text-red-500" fill="none"
                                                                            stroke="currentColor" viewBox="0 0 24 24"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path strokeLinecap="round"
                                                                                strokeLinejoin="round" strokeWidth={2}
                                                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                                        </svg>
                                                                    </button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            {{ $categories->links('vendor.pagination.tailwind') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
