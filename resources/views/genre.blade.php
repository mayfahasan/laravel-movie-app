@extends('_layouts.main') 

@section('content')
<main>
    <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
        <!-- Breadcrumb Start -->
        <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
            <h2 class="text-title-md2 font-bold text-black">
                Movie Table
            </h2>

            <nav>
                <a
                    href="/movies/create"
                    class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                >
                    Create
                </a>
            </nav>
        </div>
        <!-- Breadcrumb End -->

        <!-- ====== Table Section Start -->
        <div class="flex flex-col gap-10">
            <!-- ====== Table Start -->
            <div class="rounded-sm border border-stroke bg-white shadow-default">
                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 sm:grid-cols-8 md:px-6 2xl:px-7.5">
                    <div class="col-span-1 flex items-center">
                        <p class="font-medium">ID</p>
                    </div>
                    <div class="col-span-2 flex items-center">
                        <p class="font-medium">Name</p>
                    </div>
                    <div class="col-span-3 flex items-center">
                        <p class="font-medium">Description</p>
                    </div>
                    <div class="col-span-1 flex items-center">
                        <p class="font-medium">Actions</p>
                    </div>
                </div>

                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 sm:grid-cols-8 md:px-6 2xl:px-7.5">
                    <div class="col-span-1 flex items-center">
                        <p class="text-sm font-medium text-black">
                            1
                        </p>
                    </div>
                    <div class="col-span-2 flex items-center">
                        <p class="text-sm font-medium text-black">
                            Jojo's Bizarre Adventure
                        </p>
                    </div>
                    <div class="col-span-3 flex items-center">
                        <p class="text-sm font-medium text-black">
                            Jojo's Bizarre Adventure is a story about the Joestar family, who are possessed with intense psychic strength.
                        </p>
                    </div>
                    <div class="col-span-1 flex items-center">
                        <div class="flex items-center space-x-1">
                            <a href="" class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">Edit</a>
                            <a href="" class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-800 ring-1 ring-inset ring-red-600/20">Delete</a>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 sm:grid-cols-8 md:px-6 2xl:px-7.5">
                    <div class="col-span-1 flex items-center">
                        <p class="text-sm font-medium text-black">
                            2
                        </p>
                    </div>
                    <div class="col-span-2 flex items-center">
                        <p class="text-sm font-medium text-black">
                            Noragami
                        </p>
                    </div>
                    <div class="col-span-3 flex items-center">
                        <p class="text-sm font-medium text-black">
                            Noragami is an anime series that follows a poor deity named Yato, who desires to become a famous god.
                        </p>
                    </div>
                    <div class="col-span-1 flex items-center">
                        <div class="flex items-center space-x-1">
                            <a href="" class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">Edit</a>
                            <a href="" class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-800 ring-1 ring-inset ring-red-600/20">Delete</a>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 sm:grid-cols-8 md:px-6 2xl:px-7.5">
                    <div class="col-span-1 flex items-center">
                        <p class="text-sm font-medium text-black">
                            3
                        </p>
                    </div>
                    <div class="col-span-2 flex items-center">
                        <p class="text-sm font-medium text-black">
                            Wind Breaker
                        </p>
                    </div>
                    <div class="col-span-3 flex items-center">
                        <p class="text-sm font-medium text-black">
                            Haruka Sakura wants nothing to do with weaklings—he's only interested in the strongest of the strong.
                        </p>
                    </div>
                    <div class="col-span-1 flex items-center">
                        <div class="flex items-center space-x-1">
                            <a href="" class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">Edit</a>
                            <a href="" class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-800 ring-1 ring-inset ring-red-600/20">Delete</a>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 sm:grid-cols-8 md:px-6 2xl:px-7.5">
                    <div class="col-span-1 flex items-center">
                        <p class="text-sm font-medium text-black">
                            4
                        </p>
                    </div>
                    <div class="col-span-2 flex items-center">
                        <p class="text-sm font-medium text-black">
                            Spy x Family
                        </p>
                    </div>
                    <div class="col-span-3 flex items-center">
                        <p class="text-sm font-medium text-black">
                            Corrupt politicians, frenzied nationalists and other seditious forces continue to jeopardize the thin veneer of peace.
                        </p>
                    </div>
                    <div class="col-span-1 flex items-center">
                        <div class="flex items-center space-x-1">
                            <a href="" class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">Edit</a>
                            <a href="" class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-800 ring-1 ring-inset ring-red-600/20">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ====== Table End -->
        </div>
        <!-- ====== Table Section End -->
    </div>
</main>
@endsection
