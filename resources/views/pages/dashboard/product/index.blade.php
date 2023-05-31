<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('product') }}
        </h2>
    </x-slot>

    <x-slot name="script">
        <script>
            var dataTable = $('#crudTable').dataTable({
                ajax: {
                    url: '{!! url()->current() !!}'
                },
                columns: [{
                        data: 'id',
                        name: 'id',
                        width: '5%'
                    },
                    {
                        data: 'title',
                        name: 'title'
                    },
                    {
                        data: 'price',
                        name: 'price'
                    },
                    {
                        data: 'qty',
                        name: 'qty'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: 'false',
                        seachable: 'false',
                        width: '25%'
                    }
                ]
            })
        </script>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-10">
                <a href="{{route('dashboard.product.create')}}" class="bg-green-500 py-2 px-4 rounded shadow-lg hover:bg-green-700 text-white font-bold ">+ Create Data</a>
            </div>
            <div class="shadow overflow-hidden sm-rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6 ">
                    <table id="crudTable">
                        <thead>
                            <th>
                                <tr>ID</tr>
                                <tr>nama</tr>
                                <tr>price</tr>
                                <tr>qty</tr>
                                <tr>Aksi</tr>
                            </th>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>




    </div>

</x-app-layout>