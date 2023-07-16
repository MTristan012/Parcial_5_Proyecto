@extends('layouts.app')

@section('main')
@livewire('item-filter')
@endsection

@section('sidebar')
<form action="" method="post">
    <input type="text"
        class="py-3 px-4 block w-full border-gray-200 rounded-md text-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-[#fff0de] dark:border-gray-700 dark:text-gray-400 font-bold"
        placeholder="Shopping List..." style="color: black;">
    <div id="cart">
    </div>
</form>
@endsection