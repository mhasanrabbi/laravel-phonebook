<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{route('contacts.create')}}">
                <button type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add
                    Contact</button>
            </a>
            <form class="my-10" action="{{route('contacts.index')}}" method="GET">
                <label for="default-search"
                    class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">

                    <input type="search" id="default-search"
                        class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Mobile Number or Name" name="search" required>
                    <button type="submit"
                        class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                </div>
            </form>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="overflow-x-auto relative">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="py-3 px-6">
                                        Name
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Mobile Number
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        Email
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
                                @unless(count($contacts) == 0)
                                @foreach ($contacts as $contact)

                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="py-4 px-6">
                                        {{ $contact->name}}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $contact->mobile}}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $contact->email}}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $contact->group}}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $contact->created_at->format('d-m-Y H:i:s')}}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $contact->updated_at->format('d-m-Y H:i:s')}}
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <p>No Contacts Found</p>
                                @endunless

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <div class="mt-6 p-4">
                {{ $contacts->links()}}
            </div>
        </div>
    </div>
</x-app-layout>
