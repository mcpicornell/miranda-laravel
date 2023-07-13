
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Delete Order') }}
        </h2>
    </x-slot>


    @if (!empty($orders))
                    
        <div class="bg-white w-full max-w-md p-6 rounded-lg shadow-md" >
            <form method="POST" action="{{ route( 'deleteOrder.delete' )}}" >
                @csrf
                @method('DELETE')
                <div class=" gap-4" style="display: grid; grid-template-columns:1fr 3.7fr" >
                    <div>
                        <label style="text-align: right; margin-top:13px;" name="type" class="block text-gray-700">Select your order:</label>
                    </div>
                    <div>
                        <select style="max-width: 300px; border-radius: 10px;" type="text" name="order_id" class="form-input mt-1 w-full" required>
                            @foreach ($orders as $order)
                                <option value="{{ $order->id }}" selected>ID: {{ $order->id }} - Room: {{ $order->roomNumber }} - {{ $order->type }} - {{ $order->description }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div style="display:flex; justify-content: center; position: relative; right: 27%">
                    <button style="margin-top: 30px; border-radius:10px; background-color:#f0f1f2;"  type="submit" class=" bg-gray-300 hover:bg-gray-800 text-gray-800 font-semibold py-2 px-4 rounded border border-gray-400 background-color-gray ">
                        Delete Order
                    </button>
                </div>
                
            </form>
        </div>
        @else
        <tr>
            <td colspan="5" class="text-center">No orders yet.</td>
        </tr>
    @endif   
</x-app-layout>