<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Example 2</title>
  <style type="text/css">
    @font-face {
  font-family: SourceSansPro;
  src: url(SourceSansPro-Regular.ttf);
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}

a {
  color: #0087C3;
  text-decoration: none;
}


body{


}


header {
  padding: 10px 0;
  margin-bottom: 20px;
  border-bottom: 1px solid #AAAAAA;
}

#logo {
  float: left;
  margin-top: 8px;
}

#logo img {
  height: 70px;
}

#company {
  float: right;
  text-align: right;
  margin-right: 270px;
}


#details {
  margin-bottom: 50px;
}

#client {
  padding-left: 6px;
  border-left: 6px solid #0087C3;
  float: left;
}

#client .to {
  color: #777777;
}

h2.name {
  font-size: 1.4em;
  font-weight: normal;
  margin: 0;
}

#invoice {
  float: right;
  text-align: right;
  margin-right: 270px;
}

#invoice h1 {
  color: #0087C3;
  font-size: 2.4em;
  line-height: 1em;
  font-weight: normal;
  margin: 0  0 10px 0;
}
#invoice h6 {
  color: #0087C3;
  font-size: 1.4em;
  line-height: 1em;
  font-weight: normal;
  margin: 0  0 10px 0;
}

#invoice .date {
  font-size: 1.1em;
  color: #777777;
}

table {
  width: 100%;
  border-collapse: collapse;
  border-spacing: 0;
  margin-bottom: 20px;
}

table th,
table td {
  padding: 20px;
  background: #EEEEEE;
  text-align: center;
  border-bottom: 1px solid #FFFFFF;
}

table th {
  white-space: nowrap;        
  font-weight: normal;
}

table td {
  text-align: right;
}

table td h3{
  color: #57B223;
  font-size: 1.2em;
  font-weight: normal;
  margin: 0 0 0.2em 0;
}

table .desc {
  text-align: center;
}

table .unit {
  background: #DDDDDD;
  text-align: center;
}

table tbody tr:last-child td {
  border: none;
}

table tfoot td {
  padding: 10px 20px;
  background: #FFFFFF;
  border-bottom: none;
  font-size: 1.2em;
  white-space: nowrap; 
  border-top: 1px solid #AAAAAA; 
}

table tfoot tr:first-child td {
  border-top: none; 
}

table tfoot tr:last-child td {
  color: #57B223;
  font-size: 1.4em;
  border-top: 1px solid #57B223; 

}

table tfoot tr td:first-child {
  border: none;
}

#thanks{
  font-size: 2em;
  margin-bottom: 50px;
}

#notices{
  padding-left: 6px;
  border-left: 6px solid #0087C3;  
}

#notices .notice {
  font-size: 1.2em;
}

footer {
  color: #777777;
  width: 100%;
  height: 30px;
  position: absolute;
  bottom: 0;
  border-top: 1px solid #AAAAAA;
  padding: 8px 0;
  text-align: center;
}


  </style>
  </head>
  <body>
@foreach($datas as $data)
    @endforeach

    <header class="clearfix">
      <div id="logo">
        <img src="logo.png">
      </div>
      <div id="company">
        <h2 class="name"> Dr.{{ $data->patient_detail->booking->doctor->name }} {{ $data->patient_detail->booking->doctor->degree }}.</h2>
        <div>795 Folsom Ave, Suite 600</div>
        <div>San Francisco, CA 94107</div>
        <div>(804) 123-5432</div>
        <div>infohsfghfgshgf@gmail.com</div>
      </div>
    </header>
    <main>
      <div id="details" class="clearfix">
        <div id="client">
          <div class="to">Patient Details:</div>
          <h2 class="name">{{ $data->patient_detail->name }}</h2>
          <div class="address">{{ $data->patient_detail->address }}</div>
          <div> {{ $data->patient_detail->mobile }} </div>
          <div class="email">{{ $data->patient_detail->email }}</div>
        </div>
        <div id="invoice">
          <h6>INVOICE # : {{ $data->bill_number }}</h6>
          <div class="date">Date :{{ $carbon->format('d/m/Y') }}</div>
        </div>
      </div>
      <table  border="0" cellspacing="0" cellpadding="0" >
        <thead>
          <tr>
            <th class="unit">#</th>
            <th class="desc">Medicines</th>
            <th class="unit">Quantity</th>
            <th class="desc">Mrp</th>
            <th class="unit">Total</th>
          </tr>
        </thead>
        <tbody>
          @php $sl=1; $discount_amount=0; @endphp
          @foreach($datas as $data)
          <tr>
            <td class="unit">{{ $sl++ }}</td>
            <td class="desc">{{ $data->stock->name }}</td>
            <td class="unit">{{ $data->quantity }}</td>
            <td class="desc">{{ $data->amount }}</td>
            <td class="unit">{{ $data->total_amount }}</td>
            @php $discount_amount += ($data->amount * ($data->discount/100))*$data->quantity;@endphp
            </tr>
          @endforeach
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2"></td>
            <td colspan="2">Saving Amount : </td>
            <td style="font-family: DejaVu Sans, sans-serif;"> ₹ {{ $discount_amount }}</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td colspan="2"> Grand Total : </td>
            <td style="font-family: DejaVu Sans, sans-serif;"> ₹ {{ $data->payment->total_amount }}</td>
          </tr>
        </tfoot>
      </table>
      {{-- <div id="thanks">Thank you!</div> --}}
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">Online Appoiment as www.hospitalManagement.com .</div>
      </div>
    </main>
    <footer>
      Invoice was created on a computer and is valid without the signature and seal.
    </footer>
  </body>
</html>