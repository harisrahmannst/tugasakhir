@extends('layouts.boostrap5')
<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('List Rooms') }}
        </h2>
    </x-slot>
    <div class="container">
        <h1>Reservasi</h1>
        <form>
            <div class="mb-3">
                <label for="transcode" class="form-label">Transcode</label>
                <input type="text" class="form-control" id="transcode" readonly>
            </div>

            <div class="col-md-12">
                <label for="room" class="form-label">Room</label>
                <select class="form-select" id="room" name="room" onchange="calculateTotal()">
                    @foreach ($rooms as $room)
                        <option value="{{ $room->price }}">
                            {{ $room->roomname }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="roomQuantity" class="form-label">Room Quantity</label>
                <input type="number" class="form-control" id="roomQuantity" value="1" onchange="calculateTotal()">
            </div>

            <div class="mb-3">
                <label for="extraCharge" class="form-label">Extra Charge</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="20000" id="soda"
                        onchange="calculateTotal()">
                    <label class="form-check-label" for="soda">
                        Soda (20.000)
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="15000" id="airPutih"
                        onchange="calculateTotal()">
                    <label class="form-check-label" for="airPutih">
                        Air Putih (15.000)
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="100000" id="jasaLaundry"
                        onchange="calculateTotal()">
                    <label class="form-check-label" for="jasaLaundry">
                        Jasa Laundry (100.000)
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="25000" id="snack"
                        onchange="calculateTotal()">
                    <label class="form-check-label" for="snack">
                        Snack (25.000)
                    </label>
                </div>
            </div>

            <div class="mb-3">
                <label for="extraChargeQuantity" class="form-label">Extra Charge Quantity</label>
                <input type="number" class="form-control" id="extraChargeQuantity" value="1"
                    onchange="calculateTotal()">
            </div>

            <div class="mb-3">
                <label for="totalRoomPrice" class="form-label">Total Room Price</label>
                <input type="text" class="form-control" id="totalRoomPrice" readonly>
            </div>

            <div class="mb-3">
                <label for="totalExtraCharge" class="form-label">Total Extra Charge</label>
                <input type="text" class="form-control" id="totalExtraCharge" readonly>
            </div>

            <div class="mb-3">
                <label for="finalTotal" class="form-label">Final Total</label>
                <input type="text" class="form-control" id="finalTotal" readonly>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

            <script>
                function calculateTotal() {
                    // Ambil nilai dari input room dan quantity
                    const roomPrice = document.getElementById("room").value;
                    const roomQuantity = document.getElementById("roomQuantity").value;
                    const extraChargeQuantity = document.getElementById("extraChargeQuantity").value;

                    //Berikut adalah kode lanjutan untuk perhitungan quantity pada room dan extra charge:

                    // Hitung total harga kamar
                    const totalRoomPrice = roomPrice * roomQuantity;

                    // Hitung total extra charge
                    let totalExtraCharge = 0;
                    if (document.getElementById("soda").checked) {
                        totalExtraCharge += (parseInt(document.getElementById("soda").value) * extraChargeQuantity);
                    }
                    if (document.getElementById("airPutih").checked) {
                        totalExtraCharge += (parseInt(document.getElementById("airPutih").value) * extraChargeQuantity);
                    }
                    if (document.getElementById("jasaLaundry").checked) {
                        totalExtraCharge += (parseInt(document.getElementById("jasaLaundry").value) * extraChargeQuantity);
                    }
                    if (document.getElementById("snack").checked) {
                        totalExtraCharge += (parseInt(document.getElementById("snack").value) * extraChargeQuantity);
                    }

                    // Hitung final total
                    const finalTotal = totalRoomPrice + totalExtraCharge;

                    // Masukkan nilai ke dalam input yang sesuai
                    document.getElementById("totalRoomPrice").value = totalRoomPrice;
                    document.getElementById("totalExtraCharge").value = totalExtraCharge;
                    document.getElementById("finalTotal").value = finalTotal;
                }

                // Generate transcode yang random saat halaman dimuat
                document.getElementById("transcode").value = Math.floor(Math.random() * 100000);
            </script>
    </div>
</x-app-layout>
