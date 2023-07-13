
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Orders') }}
        </h2>
    </x-slot>

    <div class="container" style="margin: 0 auto;">
        <table class="table table-striped" style="background-color:#FFFF; text-align: left; border-radius: 5px;;
        border-collapse: collapse;
        margin: 0 0 1em 0;
        caption-side: top;
        padding: 50px 50px 50px 50px;
        width: 100%;
        border: 1px solid #cbc6c6;">
            <thead class="thead-dark">
                <tr style="padding: 50px;text-align: center;">
                    <th style="padding: 1.5%;" scope="col">Order ID</th>
                    <th style="padding: 1.5%;" scope="col">Room Number</th>
                    <th style="padding: 1.5%;" scope="col">Service</th>
                    <th style="padding: 1.5%;" scope="col">Description</th>
                    <th style="padding: 1.5%;" scope="col">Created At</th>
                    <th style="padding: 1.5%;" scope="col">Updated At</th>
                </tr>
            </thead>
            <tbody style="border-top: 1px solid #cbc6c6;">
                @if (!empty($orders))
                    @foreach ($orders as $order)
                        <tr style="text-align: center;">
                            <td style="padding: 1.5%; border-bottom: 1px solid #cbc6c6;">{{ $order->id }}</td>
                            <td style="padding: 1.5%; border-bottom: 1px solid #cbc6c6;">{{ $order->roomNumber }}</td>
                            <td style="padding: 1.5%; border-bottom: 1px solid #cbc6c6;">{{ $order->type }}</td>
                            <td style="padding: 1.5%; border-bottom: 1px solid #cbc6c6;">{{ $order->description }}</td>
                            <td style="padding: 1.5%; border-bottom: 1px solid #cbc6c6;">{{ $order->created_at }}</td>
                            <td style="padding: 1.5%; border-bottom: 1px solid #cbc6c6;">{{ $order->updated_at }}</td>
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
