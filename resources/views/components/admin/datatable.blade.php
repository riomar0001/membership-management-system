<div id="hs-datatable-with-hidden-columns" class="flex flex-col --prevent-on-load-init p-6"
    data-hs-datatable='{
    "pagingOptions": {
      "pageBtnClasses": "min-w-[40px] flex justify-center items-center text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 py-2.5 text-sm rounded-full disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:focus:bg-neutral-700 dark:hover:bg-neutral-700"
    },
    "selecting": true,
    "rowSelectingOptions": {
      "selectAllSelector": "#hs-datatable-hidden-columns-select-all-rows"
    },
    "language": {
      "zeroRecords": "<div class=\"py-10 px-5 flex flex-col justify-center items-center text-center\"><svg class=\"shrink-0 size-6 text-gray-500 dark:text-neutral-500\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><circle cx=\"11\" cy=\"11\" r=\"8\"/><path d=\"m21 21-4.3-4.3\"/></svg><div class=\"max-w-sm mx-auto\"><p class=\"mt-2 text-sm text-gray-600 dark:text-neutral-400\">No search results</p></div></div>"
    }
  }'>
    <div class="flex items-center space-x-2 mb-4">
        <div class="flex-0">
            <div class="relative max-w-xs">
                <label for="hs-table-hidden-columns-search" class="sr-only">Search</label>
                <input type="text" name="hs-table-hidden-columns-search" id="hs-table-hidden-columns-search"
                    class="py-2 px-3 ps-9 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                    placeholder="Search for items" data-hs-datatable-search="">
                <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-3">
                    <svg class="size-4 text-gray-400 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="11" cy="11" r="8"></circle>
                        <path d="m21 21-4.3-4.3"></path>
                    </svg>
                </div>
            </div>
        </div>

        <div class="flex-1 flex items-center justify-end space-x-2">
            <!-- Select -->
            <select id="hs-datatable-with-hidden-columns-select" multiple=""
                data-hs-select='{
          "placeholder": "Hide Columns",
          "toggleCountText": "selected",
          "toggleTag": "<button type=\"button\" aria-expanded=\"false\"></button>",
          "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative min-w-[150px] py-2 px-3 pe-9 flex text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 before:absolute before:inset-0 before:z-[1] dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800",
          "dropdownClasses": "mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg shadow-md overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-neutral-900 dark:border-neutral-700",
          "optionClasses": "py-2 px-3 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-md focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800",
          "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"shrink-0 size-3.5 text-blue-600 dark:text-blue-500\" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>",
          "extraMarkup": "<div class=\"absolute top-1/2 end-3 -translate-y-1/2\"><svg class=\"shrink-0 size-3.5 text-gray-500 dark:text-neutral-500\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"m7 15 5 5 5-5\"/><path d=\"m7 9 5-5 5 5\"/></svg></div>"
        }'
                class="hidden">
                <option value="">Choose</option>
                <option value="1">Name</option>
                <option value="2">Age</option>
                <option value="3">Address</option>
            </select>
            <!-- End Select -->

            <!-- Select -->
            <select class="hidden"
                data-hs-select='{
          "toggleTag": "<button type=\"button\" aria-expanded=\"false\"></button>",
          "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-2 px-3 pe-9 flex text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 before:absolute before:inset-0 before:z-[1] dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800",
          "dropdownClasses": "mt-2 z-50 w-20 max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg shadow-md overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-neutral-900 dark:border-neutral-700",
          "optionClasses": "py-2 px-3 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-md focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800",
          "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"shrink-0 size-3.5 text-blue-600 dark:text-blue-500\" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>",
          "extraMarkup": "<div class=\"absolute top-1/2 end-3 -translate-y-1/2\"><svg class=\"shrink-0 size-3.5 text-gray-500 dark:text-neutral-500\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"m7 15 5 5 5-5\"/><path d=\"m7 9 5-5 5 5\"/></svg></div>"
        }'
                data-hs-datatable-page-entities="">
                <option value="10" selected="">10</option>
                <option value="15">15</option>
                <option value="20">20</option>
                <option value="25">25</option>
                <option value="50">50</option>
            </select>
            <!-- End Select -->
        </div>
    </div>

    <div class="overflow-x-auto min-h-[523px] ">
        <div class="min-w-full inline-block align-middle">
            <div class="overflow-hidden">
                <table class="min-w-full">
                    <thead class="border-y border-gray-200 dark:border-neutral-700">
                        <tr>
                            <th data-hs-datatable-col-index="0" scope="col"
                                class="py-1 px-3 pe-0 --exclude-from-ordering">
                                <div class="flex items-center h-5">
                                    <input id="hs-datatable-hidden-columns-select-all-rows" type="checkbox"
                                        class="border-gray-300 rounded text-blue-600 focus:ring-blue-500 dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                                    <label for="hs-datatable-hidden-columns-select-all-rows"
                                        class="sr-only">Checkbox</label>
                                </div>
                            </th>

                            <th data-hs-datatable-col-index="1" scope="col"
                                class="py-1 group text-start font-normal focus:outline-none">
                                <div
                                    class="py-1 px-2.5 inline-flex items-center border border-transparent text-sm text-gray-500 rounded-md hover:border-gray-200 dark:text-neutral-500 dark:hover:border-neutral-700">
                                    Name
                                    <svg class="size-3.5 ms-1 -me-0.5 text-gray-400 dark:text-neutral-500"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path
                                            class="hs-datatable-ordering-desc:text-blue-600 dark:hs-datatable-ordering-desc:text-blue-500"
                                            d="m7 15 5 5 5-5"></path>
                                        <path
                                            class="hs-datatable-ordering-asc:text-blue-600 dark:hs-datatable-ordering-asc:text-blue-500"
                                            d="m7 9 5-5 5 5"></path>
                                    </svg>
                                </div>
                            </th>

                            <th data-hs-datatable-col-index="2" scope="col"
                                class="py-1 group text-start font-normal focus:outline-none">
                                <div
                                    class="py-1 px-2.5 inline-flex items-center border border-transparent text-sm text-gray-500 rounded-md hover:border-gray-200 dark:text-neutral-500 dark:hover:border-neutral-700">
                                    Age
                                    <svg class="size-3.5 ms-1 -me-0.5 text-gray-400 dark:text-neutral-500"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path
                                            class="hs-datatable-ordering-desc:text-blue-600 dark:hs-datatable-ordering-desc:text-blue-500"
                                            d="m7 15 5 5 5-5"></path>
                                        <path
                                            class="hs-datatable-ordering-asc:text-blue-600 dark:hs-datatable-ordering-asc:text-blue-500"
                                            d="m7 9 5-5 5 5"></path>
                                    </svg>
                                </div>
                            </th>

                            <th data-hs-datatable-col-index="3" scope="col"
                                class="py-1 group text-start font-normal focus:outline-none">
                                <div
                                    class="py-1 px-2.5 inline-flex items-center border border-transparent text-sm text-gray-500 rounded-md hover:border-gray-200 dark:text-neutral-500 dark:hover:border-neutral-700">
                                    Address
                                    <svg class="size-3.5 ms-1 -me-0.5 text-gray-400 dark:text-neutral-500"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path
                                            class="hs-datatable-ordering-desc:text-blue-600 dark:hs-datatable-ordering-desc:text-blue-500"
                                            d="m7 15 5 5 5-5"></path>
                                        <path
                                            class="hs-datatable-ordering-asc:text-blue-600 dark:hs-datatable-ordering-asc:text-blue-500"
                                            d="m7 9 5-5 5 5"></path>
                                    </svg>
                                </div>
                            </th>

                            <th data-hs-datatable-col-index="4" scope="col"
                                class="py-2 px-3 text-end font-normal text-sm text-gray-500 --exclude-from-ordering dark:text-neutral-500">
                                Action</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                        <tr>
                            <td class="py-3 ps-3">
                                <div class="flex items-center h-5">
                                    <input id="hs-table-hidden-columns-checkbox-1" type="checkbox"
                                        class="hs-datatable-select-row border-gray-300 rounded text-blue-600 focus:ring-blue-500 dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                        data-hs-datatable-row-selecting-individual="">
                                    <label for="hs-table-hidden-columns-checkbox-1" class="sr-only">Checkbox</label>
                                </div>
                            </td>
                            <td class="p-3 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                Christina Bersh</td>
                            <td class="p-3 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">45</td>
                            <td class="p-3 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">4222 River
                                Rd, Columbus</td>
                            <td class="p-3 whitespace-nowrap text-end text-sm font-medium">
                                <button type="button"
                                    class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400">Delete</button>
                            </td>
                        </tr>

                        <tr>
                            <td class="py-3 ps-3">
                                <div class="flex items-center h-5">
                                    <input id="hs-table-hidden-columns-checkbox-2" type="checkbox"
                                        class="border-gray-300 rounded text-blue-600 focus:ring-blue-500 dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                        data-hs-datatable-row-selecting-individual="">
                                    <label for="hs-table-hidden-columns-checkbox-2" class="sr-only">Checkbox</label>
                                </div>
                            </td>
                            <td class="p-3 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                David Harrison</td>
                            <td class="p-3 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">27</td>
                            <td class="p-3 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">2952 S Peoria
                                Ave, Tulsa</td>
                            <td class="p-3 whitespace-nowrap text-end text-sm font-medium">
                                <button type="button"
                                    class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400">Delete</button>
                            </td>
                        </tr>

                        <tr>
                            <td class="py-3 ps-3">
                                <div class="flex items-center h-5">
                                    <input id="hs-table-hidden-columns-checkbox-3" type="checkbox"
                                        class="border-gray-300 rounded text-blue-600 focus:ring-blue-500 dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                        data-hs-datatable-row-selecting-individual="">
                                    <label for="hs-table-hidden-columns-checkbox-3" class="sr-only">Checkbox</label>
                                </div>
                            </td>
                            <td class="p-3 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                Anne Richard</td>
                            <td class="p-3 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">31</td>
                            <td class="p-3 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">255 Dock Ln,
                                New Tazewell</td>
                            <td class="p-3 whitespace-nowrap text-end text-sm font-medium">
                                <button type="button"
                                    class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400">Delete</button>
                            </td>
                        </tr>



                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="flex items-center mt-4">
        <div class="flex items-center space-x-1" data-hs-datatable-paging="">
            <button type="button"
                class="p-2.5 min-w-[40px] inline-flex justify-center items-center gap-x-2 text-sm rounded-full text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                data-hs-datatable-paging-prev="">
                <span aria-hidden="true">«</span>
                <span class="sr-only">Previous</span>
            </button>
            <div class="flex items-center space-x-1 [&>.active]:bg-gray-100 dark:[&>.active]:bg-neutral-700"
                data-hs-datatable-paging-pages=""></div>
            <button type="button"
                class="p-2.5 min-w-[40px] inline-flex justify-center items-center gap-x-2 text-sm rounded-full text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                data-hs-datatable-paging-next="">
                <span class="sr-only">Next</span>
                <span aria-hidden="true">»</span>
            </button>
        </div>
        <div class="text-xs text-gray-500 ms-auto dark:text-neutral-400" data-hs-datatable-info="">
            Showing
            <span data-hs-datatable-info-from=""></span>
            to
            <span data-hs-datatable-info-to=""></span>
            of
            <span data-hs-datatable-info-length=""></span>
            users
        </div>
    </div>
</div>

<script src="./assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="./assets/vendor/datatables.net/js/dataTables.min.js"></script>


