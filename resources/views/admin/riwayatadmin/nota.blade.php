<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Invoice</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    .invoice-container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      background-color: #f8f8f8;
    }
    .invoice-header {
      text-align: center;
      margin-bottom: 20px;
    }
    .invoice-title {
      font-size: 28px;
      font-weight: bold;
      margin-bottom: 10px;
      color: #333;
    }
    .invoice-subtitle {
      font-size: 16px;
      color: #777;
      margin-bottom: 10px;
    }
    .invoice-details {
      display: flex;
      justify-content: space-between;
      text-align: left;
      margin-bottom: 30px;
    }
    .invoice-detail {
      font-size: 14px;
      color: #555;
    }
    .invoice-table {
      width: 100%;
      border-collapse: collapse;
    }
    .invoice-table th, .invoice-table td {
      border: 1px solid #ccc;
      padding: 10px;
      text-align: left;
    }
    .invoice-table th {
      background-color: #f2f2f2;
    }
    .invoice-total {
      text-align: right;
      padding-top: 10px;
      font-size: 18px;
      font-weight: bold;
      color: #333;
    }
  </style>
</head>
<body>
  <div class="invoice-container">
    <div class="invoice-header">
    <div class="invoice-details">
        <div class="invoice-detail">
            <div class="invoice-title">Invoice</div>
            <div class="invoice-subtitle">Nomor Transaksi: {{ $order->invoice_code }}</div>
            <div class="invoice-detail">Tanggal Transaksi: {{ date('d M Y', strtotime($order->created_at)) }}</div>
        </div>
        <div class="invoice-detail">
            <img src="{{ asset('assets/images/logo-resi.jpg') }}" style="width: 100px; height:100px">
        </div>
    </div>
      
      
    </div>

    <div class="invoice-details">
        <div class="invoice-detail">
            <h3>Informasi Pemesan</h3>
            <p>Atas Nama: {{ $order->customer_name }}</p>
            <p>Nama User: {{ $user->name }}</p>
            <p>Email: {{ $user->email }}</p>
            <p>Telepon : {{ $order->phone }}</p>

        </div>
       
    </div>

    <hr>
    <p><b>Total Harga : </b> {{ 'Rp '.number_format($order->total_price, 0, ',', '.') }}  (<b style="color: #166d00">Payment Success</b>)</p>

    <table class="invoice-table">
      <thead>
        <tr>
          <th>Nama Unit</th>
          <th>Durasi</th>
          <th>Tanggal Check - In</th>
          <th>Tanggal Check - Out</th>
          <th>Total</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{ $order->unit_name_snapshot }}</td>
          <td>{{ $order->qty }} {{ $typeTranslate[$order->type] }}</td>
          <td>{{ date('d M Y', strtotime($order->start_date)) }}</td>
          <td>{{ date('d M Y', strtotime($order->end_date)) }}</td>
          <td>{{ 'Rp '.number_format($order->total_price, 0, ',', '.') }}</td>
        </tr>
        
        <!-- Add more rows for additional products if needed -->
      </tbody>
    </table>
  </div>
</body>
</html>