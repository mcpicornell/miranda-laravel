
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Order Changes') }}
        </h2>
    </x-slot>


    @if (!empty($orders))
                    
        <div class="bg-white w-full max-w-md p-6 rounded-lg shadow-md" >
            <form method="POST" action="{{ route( 'orderChanges.update' )}}" >
                @csrf
                @method('PUT')
                <div class=" gap-4" style="display: grid; grid-template-columns:1fr 3.7fr" >
                    <div>
                        <label style="text-align: right; margin-top:13px;" name="type" class="block text-gray-700">Select your order:</label>
                    </div>
                    <div>
                        <select style="max-width: 300px; border-radius: 10px;" type="text" name="order_id" class="form-input mt-1 w-full" required>
                            @foreach ($orders as $order)
                            <option value="{{ $order->id }}"
                                data-room-number="{{ $order->roomNumber }}"
                                data-type="{{ $order->type }}"
                                data-description="{{ $order->description }}">
                            ID: {{ $order->id }} - Room: {{ $order->roomNumber }} - {{ $order->type }} - {{ $order->description }}
                            </option>

                            @endforeach
                        </select>  
                    </div>
                    <div>
                        <label style="text-align: right; margin-top:13px;" name="roomNumber" class="block text-gray-700">Room Number:</label>
                    </div>
                    <div>
                        <input placeholder="" id="roomNumberInput" style="max-width: 300px; border-radius: 10px;" type="number" name="roomNumber" class="form-input mt-1 w-full" required>
                    </div>
                    <div>
                        <label style="text-align: right; margin-top:13px;" name="type" class="block text-gray-700">Service:</label>
                    </div>
                    <div>
                        <select id="typeSelect" style="max-width: 300px; border-radius: 10px;" type="text" name="type" class="form-input mt-1 w-full" required>
                            <option value="food" selected>Food</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div>
                        <label style="text-align: right; margin-top:13px;" name="description" class="block text-gray-700">Description:</label>
                    </div>
                    <div>
                        <input placeholder="" id="descriptionInput" style="max-width: 300px; border-radius: 10px;" type="text" name="description" class="form-input mt-1 w-full" required>
                    </div>
                </div>
                <div style="display:flex; justify-content: center; position: relative; right: 27%">
                    <button style="margin-top: 30px; border-radius:10px; background-color:#f0f1f2;"  type="submit" class=" bg-gray-300 hover:bg-gray-800 text-gray-800 font-semibold py-2 px-4 rounded border border-gray-400 background-color-gray ">
                        Update Order
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
<script>
    const orderSelect = document.getElementById('orderSelect');
    const roomNumberInput = document.getElementById('roomNumberInput');
    const descriptionInput = document.getElementById('descriptionInput');

    orderSelect.addEventListener('change', function() {
        var selectedOption = this.options[this.selectedIndex];
        roomNumberInput.placeholder = selectedOption.dataset.roomNumber;
        descriptionInput.placeholder = selectedOption.dataset.description;
    });
</script>  