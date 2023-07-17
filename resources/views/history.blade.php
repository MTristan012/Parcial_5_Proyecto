@extends('layouts.app')

@section('main')
@livewire('history')
@endsection

@section('sidebar')
<section class="min-h-screen pt-3 flex flex-col justify-center">
    <h1 class="text-3xl mb-10 font-bold">
        Add a new item
    </h1>
    <form action="" method="post" class="px-3">
        @csrf
        <div class="mb-5">
            <label for="hs-inline-add-on" class="block text-sm font-medium mb-2">Name</label>
            <div class="relative">
                <input type="text" name="newItemName"
                    class="py-3 px-4 block w-full border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500"
                    placeholder="Enter a name" required>
            </div>
        </div>
        <div class="mb-5">
            <label for="hs-inline-add-on" class="block text-sm font-medium mb-2">Note (optional)</label>
            <div class="relative">
                <input type="text" name="newItemNote"
                    class="py-3 px-4 pb-32 block w-full border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500"
                    placeholder="Enter a note">
            </div>
        </div>
        <div class="mb-5">
            <label for="hs-inline-add-on" class="block text-sm font-medium mb-2">Image (optional)</label>
            <div class="relative">
                <input type="url" name="newItemImage"
                    class="py-3 px-4 block w-full border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500"
                    placeholder="Enter a url">
            </div>
        </div>
        <div class="mb-5">
            <label for="hs-select-label" class="block text-sm font-medium mb-2">Category</label>
            <select id="hs-select-label"
                class="py-3 px-4 pr-9 block w-full border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500"
                required>
                <option selected>miscellaneous</option>
                @php
                $printedCategories = [];
                @endphp
                @foreach($categories as $category)
                @if (!in_array($category['category'], $printedCategories))
                <option>{{$category['category']}}</option>
                @php
                $printedCategories[] = $category['category'];
                @endphp
                @endif
                @endforeach
            </select>
        </div>
        <div>
            <a type="button" href="{{url('/')}}" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm">
                Cancel
            </a>
            <input class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-[#f9a109] text-gray-700 shadow-sm align-middle hover:bg-[#d28707] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm" type="submit" value="Save" name="saveNewItem">
        </div>
    </form>
</section>
@endsection