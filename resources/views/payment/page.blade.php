<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Payment Page | Professional book</title>
    <script src="https://khalti.com/static/khalti-checkout.js"></script>

    <style>
        /* ---- Base Styles ---- */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #e0e7ff, #f3e8ff);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow-x: hidden;
        }

        .container {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            width: 400px;
            padding: 30px;
            animation: fadeIn 1s ease-out;
        }

        /* ---- Header ---- */
        .header {
            text-align: center;
            margin-bottom: 20px;
            animation: slideDown 1s ease-out;
        }

        .header h1 {
            font-size: 1.8rem;
            color: #4b0082;
            margin-bottom: 5px;
        }

        .header p {
            color: #555;
            font-size: 0.9rem;
        }

        /* ---- Professional Info ---- */
        .professional {
            display: flex;
            align-items: center;
            background: linear-gradient(90deg, #f3e8ff, #ede9fe);
            padding: 10px;
            border-radius: 15px;
            margin-bottom: 15px;
            animation: fadeInUp 1.2s ease-out;
        }

        .professional img {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            animation: float 3s ease-in-out infinite;
        }

        .professional-info h2 {
            font-size: 1rem;
            color: #333;
            margin: 0;
        }

        .professional-info p {
            font-size: 0.85rem;
            color: #666;
            margin: 3px 0;
        }

        /* ---- book Details ---- */
        .details {
            font-size: 0.9rem;
            color: #444;
            animation: fadeInUp 1.4s ease-out;
        }

        .details div {
            display: flex;
            justify-content: space-between;
            padding: 6px 0;
        }

        .details span {
            font-weight: 600;
            color: #222;
        }

        /* ---- Divider ---- */
        .divider {
            margin: 15px 0;
            border-bottom: 1px solid #ccc;
            animation: fadeIn 1.5s ease-out;
        }

        /* ---- Total ---- */
        .total {
            text-align: center;
            animation: fadeInUp 1.6s ease-out;
        }

        .total h3 {
            font-size: 1.3rem;
            color: #4b0082;
            margin-bottom: 5px;
        }

        .total p {
            font-size: 0.85rem;
            color: #777;
        }

        /* ---- Buttons ---- */
        .buttons {
            margin-top: 20px;
            animation: fadeInUp 1.8s ease-out;
        }

        .pay-btn {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 10px;
            font-weight: bold;
            font-size: 1rem;
            color: white;
            background: linear-gradient(90deg, #7c3aed, #6d28d9);
            cursor: pointer;
            margin-bottom: 10px;
            transition: all 0.3s ease;
        }

        .pay-btn:hover {
            transform: scale(1.03);
            box-shadow: 0 0 15px rgba(124, 58, 237, 0.6);
        }

        .disabled-btn {
            background: linear-gradient(90deg, #10b981, #059669);
            opacity: 0.6;
            cursor: not-allowed;
        }

        /* ---- Footer ---- */
        .footer {
            text-align: center;
            font-size: 0.75rem;
            color: #777;
            margin-top: 15px;
            animation: fadeInUp 2s ease-out;
        }

        .footer span {
            color: #4b0082;
            font-weight: 600;
        }

        .khalti-pay {
            text-decoration: none;
            color: white;
        }

        /* ---- Animations ---- */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes slideDown {
            from {
                transform: translateY(-30px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-6px);
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1>Confirm Your book</h1>
            <p>Secure your book with an instant payment</p>
        </div>

        <!-- Professional -->
        <div class="professional">
            <img src="{{ asset(Storage::url($book->professional->profile)) }}" alt="Professional">
            <div class="professional-info">
                <h2>{{ $book->professional->name }}</h2>
                <p>{{ $book->professional->job_title }}</p>
                <p style="color: #6d28d9; font-size: 0.8rem;">Available for 48 hours</p>
            </div>
        </div>

        <!-- book Details -->
        <div class="details">
            <div><span>book ID:</span> #{{ $book->id }}</div>
            <div><span>Rate per Hour:</span> Rs {{ $rate }}</div>
            <div><span>Status:</span> <span style="color: #ca8a04;">{{ $book->status }}</span></div>
        </div>

        <div class="divider"></div>

        <!-- Total -->
        <div class="total">
            <h3>Total: Rs {{ $rate }}</h3>
            <p>Click pay to complete your book</p>
        </div>

        <!-- Payment Buttons -->
        <div class="buttons">
            <button id="khalti-button" class="pay-btn"><a
                    href="{{ route('payment.initiate', $book->professional->id) }}" class="khalti-pay">💜
                    Pay with
                    Khalti</a></button>
            <button class="pay-btn disabled-btn">💚 Pay with eSewa (Coming Soon)</button>
        </div>

        <!-- Footer -->
        <div class="footer">
            🔒 Payment secured by <span>Khalti</span>
        </div>
    </div>

    {{-- <script>
        var config = {
            "publicKey": "YOUR_KHALTI_PUBLIC_KEY",
            "productIdentity": "{{ $book->id }}",
            "productName": "book Payment",
            "productUrl": "{{ url('/') }}",
            "eventHandler": {
                onSuccess(payload) {
                    fetch("{{ route('payment.initiate') }}", {
                            method: "POST",
                            headers: {
                                "Content-Type": "application/json",
                                "X-CSRF-TOKEN": "{{ csrf_token() }}"
                            },
                            body: JSON.stringify({
                                token: payload.token,
                                amount: {{ $book->price * 100 }},
                                book_id: {{ $book->id }}
                            })
                        })
                        .then(res => res.json())
                        .then(data => {
                            if (data.success) {
                                alert("✅ Payment successful!");
                                window.location.href = "/user/books";
                            } else {
                                alert("❌ Payment failed!");
                            }
                        });
                },
                onError(error) {
                    console.error(error);
                },
                onClose() {
                    console.log("Payment widget closed");
                }
            }
        };

        var checkout = new KhaltiCheckout(config);
        document.getElementById("khalti-button").onclick = function() {
            checkout.show({
                amount: {{ $book->price * 100 }}
            });
        };
    </script> --}}
</body>

</html>
