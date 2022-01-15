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
                                NFT List
                            </h3>
                        </div>
                        <div class="ml-4 mt-2 flex-shrink-0">
                            <a href="{{ url('nfts/create') }}">
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
                                                        Name
                                                    </th>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        TokenId
                                                    </th>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Attributes
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="bg-white divide-y divide-gray-100">
                                                @foreach ($cryptos as $key => $crypto)
                                                <tr>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                        {{ $cryptos->firstItem() + $key }}
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                        {{ $crypto->name }}
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                        {{$crypto->tokenId}}
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                        {{ $crypto->categories->count()}}
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        {{ $cryptos->links('vendor.pagination.tailwind') }}
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
