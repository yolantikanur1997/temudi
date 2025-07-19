<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Struk Transaksi #{{ $transaction->doc_num }}</title>
    <style>
        body {
            font-family: "Arial", sans-serif;
            font-size: 11px;
            color: #000;
            margin: 0;
            padding: 0;
        }
        .receipt {
            width: 260px; /* 58mm printer */
            margin: auto;
            text-align: center;
        }
       .logo {
            text-align: center;      /* Biar logo di tengah */
            margin-bottom: 5px;
        }

        .logo img {
            max-height: 50px;        /* Atur tinggi maksimal */
            max-width: 100px;        /* Atur lebar maksimal */
            object-fit: contain;     /* Jaga proporsi logo */
        }

        .shop-name {
            font-size: 14px;
            font-weight: bold;
        }
        .shop-info {
            font-size: 11px;
            line-height: 1.3;
        }
        .divider {
            border-top: 1px dashed #000;
            margin: 5px 0;
        }
        .left-right {
            width: 100%;
            display: flex;
            justify-content: space-between;
            font-size: 11px;
        }
        .items {
            text-align: left;
            margin-top: 5px;
        }
        .items .item {
            margin-bottom: 4px;
        }
        .items .item-name {
            font-weight: bold;
        }
        .items .item-detail {
            display: flex;
            justify-content: space-between;
        }
        .total {
            font-size: 12px;
            font-weight: bold;
        }
        .footer {
            margin-top: 8px;
            font-size: 10px;
        }
        .suggestion {
            border: 1px solid #000;
            padding: 3px;
            font-size: 9px;
            margin-top: 5px;
        }
        @media print {
            body { background: #fff; }
            .receipt { box-shadow: none; width: 100%; }
        }
    </style>
</head>
<body onload="window.print()">

<div class="receipt">
    <div class="logo">
        @php
            $logoPath = $transaction?->organization?->logo 
                ? public_path('storage/' . $transaction->organization->logo)
                : null;
        @endphp

        @if ($logoPath && file_exists($logoPath))
            <img src="{{ asset('storage/' . $transaction->organization->logo) }}" alt="Logo" class="logo">
        @else
            <!-- <img src="{{ asset('assets/images/image/no-image-default.png') }}" class="logo"> -->
        @endif
    </div>
    <div class="shop-name">{{$transaction?->organization?->name}}</div>
    <div class="shop-info">
        @if($transaction?->address)
        {{$transaction?->address}}
        <br>
        @endif
        {{$transaction?->organization?->province?->name}}, {{$transaction?->organization?->regency?->name}}, {{$transaction?->organization?->district?->name}}
        <br>
        {{$transaction?->phone_number}}
    </div>
    <div class="divider"></div>

    <div class="left-right">
        <div>{{ \Carbon\Carbon::parse($transaction->date)->format('d M Y') }}</div>
        <div>{{ \Carbon\Carbon::parse($transaction->created_at)->format('H:i:s') }}</div>
    </div>
    <div class="left-right">
        <div>No: {{ $transaction->doc_num }}</div>
        <div>{{ $transaction->customer->name ?? '-' }}</div>
    </div>
    <div class="divider"></div>

    <div class="items">
        @foreach($transaction->details as $i => $detail)
            <div class="item">
                <div class="item-name">{{ $i+1 }}. {{ $detail->product->name ?? '-' }}</div>
                <div class="item-detail">
                    <div>{{ $detail->qty }} x {{ number_format($detail->price, 0, ',', '.') }}</div>
                    <div> {{ number_format($detail->sub_total, 0, ',', '.') }}</div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="divider"></div>
    <div class="left-right">
        <div>Total QTY: {{ $transaction->details->sum('qty') }}</div>
        <div></div>
    </div>
    <div class="left-right">
        <div>Sub Total</div>
        <div> {{ number_format($transaction->total_amount, 0, ',', '.') }}</div>
    </div>
    <div class="left-right">
        <div>Diskon</div>
        <div>
            {{ 
                $transaction?->discount_type == 'percentage' ? $transaction->discount_value . '%' : ' ' . number_format($transaction->discount_value, 0, ',', '.') ??'' 
            }}</div>
    </div>
    @if($transaction?->discount_type == 'percentage')
    <div class="left-right">
        <div>Total Diskon</div>
        <div>{{ number_format($transaction->total_discount, 0, ',', '.')}}</div>
    </div>
    @endif
    <div class="left-right total">
          <div>Total Bayar</div>
         <div>{{ number_format($transaction->total_amount, 0, ',', '.') }}</div>
    </div>

    <div class="footer">
        Terimakasih Telah Berbelanja<br>
        Dicetak {{ \Carbon\Carbon::now()->translatedFormat('d M Y H:i') }}
    </div>

    <!-- <div class="suggestion">
        Link Kritik dan Saran:<br>
        {{ url('/e-receipt/'.$transaction->doc_num) }}
    </div> -->
</div>

</body>
</html>
