<div class="w-full min-h-screen container mx-5 my-3">
    <div>
        <h1 class="text-2xl font-bold">Shopping history</h1>
        <section>
            @php
            $dates = [];
            @endphp

            @foreach($shoppingLists as $date)
            @php
            $formattedDate = date('F Y', strtotime($date->created_at));
            @endphp
            @if(!in_array($formattedDate, $dates))
            <div>
                <h1 class="my-5 ps-7 font-bold text-md">
                    {{$formattedDate}}
                </h1>
                <div class="max-w-[85rem] px-6 mx-auto">
                    <div class="grid gap-4">
                        @foreach($shoppingLists as $shoppingList)
                        @if(date('F Y', strtotime($date->created_at)) === date('F Y',
                        strtotime($shoppingList->created_at)))
                        <div class="group flex flex-col bg-white border shadow-md rounded-xl">
                            <div class="p-3 md:p-4">
                                <div class="flex justify-between items-center">
                                    <h1 class="font-bold">
                                        {{$shoppingList->name}}
                                    </h1>
                                    <div class="flex">
                                        <div class="flex">
                                            <div class="my-auto me-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="#aeaeb1" class="bi bi-calendar2-range"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z" />
                                                    <path
                                                        d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4zM9 8a1 1 0 0 1 1-1h5v2h-5a1 1 0 0 1-1-1zm-8 2h4a1 1 0 1 1 0 2H1v-2z" />
                                                </svg>
                                            </div>
                                            <div class="text-[#aeaeb1]">
                                                {{date('l d.m.Y', strtotime($shoppingList->created_at))}}
                                            </div>
                                        </div>
                                        <a class="my-auto ms-3" href="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#f9a109" class="bi bi-chevron-right"
                                                viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
            @php
            $dates[] = $formattedDate;
            @endphp
            @endif
            @endforeach
        </section>
    </div>
</div>