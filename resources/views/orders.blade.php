
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Orders') }}
        </h2>
    </x-slot>

    <div class="container" style="display:flex; padding-top: 2px; padding-left:5%; justify-content: center;">
        <table class="table table-striped" style="background-color:#FFFF; text-align: left; border-radius: 5px;;
        border-collapse: collapse;
        margin: 0 0 1em 0;
        caption-side: top;
        padding: 50px 50px 50px 50px;
        width: 100%;">
            <thead class="thead-dark">
                <tr style="padding: 50px;text-align: center;">
                    <th style="padding: 2%;" scope="col">Room Number</th>
                    <th style="padding: 2%;" scope="col">Service</th>
                    <th style="padding: 2%;" scope="col">Description</th>
                    <th style="padding: 2%;" scope="col">Created At</th>
                    <th style="padding: 2%;" scope="col">Updated At</th>
                </tr>
            </thead>
            <tbody style="border-top: 1px solid #cbc6c6;">
                @if (!empty($orders))
                    @foreach ($orders as $order)
                        <tr style="text-align: center;">
                            <td style="padding: 2%;">{{ $order->roomNumber }}</td>
                            <td style="padding: 2%;">{{ $order->type }}</td>
                            <td style="padding: 2%;">{{ $order->description }}</td>
                            <td style="padding: 2%;">{{ $order->created_at }}</td>
                            <td style="padding: 2%;">{{ $order->updated_at }}</td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="5" class="text-center">No orders yet.</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</x-app-layout>
