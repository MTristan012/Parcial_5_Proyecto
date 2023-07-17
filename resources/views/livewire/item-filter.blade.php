<div class="w-full min-h-screen container mx-5 my-3">
    <section class="w-full flex justify-between">
        <div>
            <h1 class="text-2xl">
                <span class=" text-[#f9a109]">
                    Shoppingify
                </span>
                <span>
                    allows you take your shopping list wherever you go
                </span>
            </h1>
        </div>
        <div>
            <div class="relative me-6">
                <input wire:model="filterItem" type="text" id="hs-leading-icon" name="hs-leading-icon"
                    class="py-3 px-4 pl-11 block w-full rounded-md text-sm border-2 border-black"
                    placeholder="search item">
                <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none z-20 pl-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-search" viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                </div>
            </div>
        </div>
    </section>
    <section>
        @php
        $printedCategories = [];
        @endphp

        @foreach($items as $itemCategory)
        @if (!in_array($itemCategory->category, $printedCategories))
        <div>
            <h1 class="my-5 ps-7 font-bold text-xl">
                {{strtoupper($itemCategory->category)}}
            </h1>
            <div class="max-w-[85rem] px-6 mx-auto">
                <div class="grid sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4 sm:gap-6">
                    @foreach($items as $item)
                    @if ($item->category === $itemCategory->category)
                    <div class="group flex flex-col bg-white border shadow-md rounded-xl">
                        <div class="p-3 md:p-4">
                            <div class="flex justify-between items-center">
                                <div>
                                    <h3
                                        class="group-hover:text-blue-600 font-bold text-[#000]">
                                        {{$item->name}}
                                    </h3>
                                    <p class="text-sm text-gray-500">
                                        $ {{$item->price}}
                                    </p>
                                </div>
                                <button class="pl-3" onclick="addToCart({{$item}})">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000" class="bi bi-plus-lg"
                                        viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
        @php
        $printedCategories[] = $itemCategory->category;
        @endphp
        @endif
        @endforeach
    </section>
</div>

<script>
    function addToCart(item) {
    var cartList = document.getElementById("cart");
    var item = '<div class="font-bold">' +
        '<h4>' + item.name + '</h4>' 
        + '</div>';
    cartList.innerHTML += item;
    }
</script>