@extends('welcome')

@push('title')
<title>Booked Futsals-Nepal Futsal Manager</title>
@endpush

@section('content')
    <section class="Futsal">
        <div class="container">
            
        @foreach($bookedFutsals  as $booking)
            <div class="futsal-post">
                <div class="row g-0 bg-body-secondary position-relative">
                    <div class="col-md-6 mb-md-0 p-md-4">
                        <div class="left-image">
                            <img src="/storeimg/{{ $booking->image }}" class="w-100" alt="...">
                        </div>
                    </div>
                    <div class="col-md-6 p-4 ps-md-0">
                        <h5 class="mt-0">{{ $booking->name }}</h5>

                        <h5 class="mt-0">Time Slot: {{ $booking->selected_timeslots }}</h5>
                        <h5 class="mt-0">Date: {{ $booking->selected_date }}</h5>
                        <p style="line-height: 35px;"><i class="fa fa-map-marker" aria-hidden="true"></i> Location:- {{ $booking->location }}</p>
                        <div class="price">
                            <p>Price: {{ $booking->price_per_hour }}</p>
                        </div>
                            
                        <button class="btn payment-button" data-amount="{{ $booking->price_per_hour }}"  data-id="{{ $booking->id }}">Pay Via Khalti</button>

                    </div>
                </div>
            </div>
        @endforeach

        </div>
    </section>
@endsection

<script src="https://khalti.s3.ap-south-1.amazonaws.com/KPG/dist/2020.12.17.0.0.0/khalti-checkout.iffe.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var paymentButtons = document.querySelectorAll(".payment-button");

        paymentButtons.forEach(function(button) {
            button.addEventListener("click", function() {
                var amount = parseFloat(button.getAttribute("data-amount"));
                var itemId = button.getAttribute("data-id");

                var config = {

                    'Authorization': 'Key <LIVE_SECRET_KEY>'
                    "publicKey": "b0a88707a86e4569a46bf090b3ead0c8",
                    "productIdentity": itemId,
                    "productName": "{{ $booking->name }}",
                    "productUrl": "http://gameofthrones.wikia.com/wiki/Dragons",
                    "paymentPreference": [
                        "KHALTI",
                        "EBANKING",
                        "MOBILE_BANKING",
                        "CONNECT_IPS",
                        "SCT",
                    ],
                    "eventHandler": {
                        onSuccess(payload) {
                            $.ajax({
                                type: 'POST',
                                url: "#",
                                data: {
                                    token: payload.token,
                                    amount: payload.amount,
                                    itemId: itemId,

                                    "_token": "{{ csrf_token() }}"
                                },
                                success: function(res) {
                                    $.ajax({
                                        type: "POST",
                                        url: "#",
                                        data: {
                                            response: res,
                                            itemId: itemId,
                                            "_token": "{{ csrf_token() }}"
                                        },
                                        success: function(res) {
                                            console.log(
                                                'transaction successful'
                                                );
                                            Swal.fire({
                                                icon: 'success',
                                                title: 'Transaction Successful',
                                                text: 'Your payment has been processed successfully!',
                                            });
                                            window.reload();
                                        }
                                    });
                                    console.log(res);
                                }
                            });
                            console.log(payload);
                        },
                        onError(error) {
                            console.log(error);
                        },
                        onClose() {
                            console.log('widget is closing');
                        }
                    }
                };

                var checkout = new KhaltiCheckout(config);
                checkout.show({
                    amount: amount * 100
                });
            });
        });
    });
</script>
