<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{route('contacts.create')}}">
                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add Contact</button>
            </a>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

<div class="overflow-x-auto relative">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    SN
                </th>
                <th scope="col" class="py-3 px-6">
                    Name
                </th>
                <th scope="col" class="py-3 px-6">
                    Mobile Number
                </th>
                <th scope="col" class="py-3 px-6">
                    Group
                </th>
                <th scope="col" class="py-3 px-6">
                    Created At
                </th>
                <th scope="col" class="py-3 px-6">
                    Updated At
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $key => $contact)

            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $key + 1}}
                </th>
                <td class="py-4 px-6">
                    {{ $contact->name}}
                </td>
                <td class="py-4 px-6">
                    {{ $contact->mobile}}
                </td>
                <td class="py-4 px-6">
                    {{ $contact->group}}
                </td>
                <td class="py-4 px-6">
                    {{ $contact->created_at}}
                </td>
                <td class="py-4 px-6">
                    {{ $contact->updated_at}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
