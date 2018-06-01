<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Carbon\Carbon;  
use App\Stock;
use App\Patient;
use App\Medicine_inven;
use App\Medicine_inven_temp;
use App\Medicine_payment;
use Auth;
use Session;
use PDF;


class MedicineInvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carbon = Carbon::today();
        $user_id=Auth::guard('admin')->user()->id;
        $rantom_id=Session::get('random_id');
        Medicine_inven_temp::where('user_id',$user_id)->where('rantom_id',$rantom_id)->delete();
        $invoice_num=Medicine_inven::max('bill_number');
        if($invoice_num=="" || $invoice_num==0)
        {
           $billnumber=str_pad(1,5,"0",STR_PAD_LEFT);
        }
        else
        {
           $billnumber=str_pad(($invoice_num+1),5,"0",STR_PAD_LEFT);
        }
        $stock=Stock::get();
        return view('admin.bill.farmacyBill.medicineBill',compact('stock','billnumber','carbon'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        ////Payment Services Ajax Details
        if(isset($request->services_ajax))
        {
        $user_id=Auth::guard('admin')->user()->id;
        $rantom_id=Session::get('random_id');
        $datas = Medicine_inven_temp::where('user_id','=',$user_id)->where('patient_id','=',$request->services_ajax)->where('bill_number','=',$request->bill_number)->where('rantom_id','=',$rantom_id)->get();
        // $total_amount = Medicine_inven_temp::join('users','id','=','user_id')->where('users.id','=',$user_id)->where('medicine_inven_temps.patient_id','=',$request->services_ajax)->sum('total_amount');
        $total_gst=$gst_per=$discount_amount=$total_amount=$amount=0;
        foreach ($datas as $data)
        {
            $gst = $data->gst;
            $gst_per += $data->gst;
            $total_amount+=$data->total_amount;
            $amount +=($data->amount*$data->quantity);
            $total_gst += $total_amount*($gst/100);
            $discount = $data->discount;
            $discount_amount += ($data->amount * ($discount/100))*$data->quantity;
        }
        

        return view('admin.bill.farmacyBill.medicine_ajax',compact('datas','total_amount','amount','total_gst','gst_per','discount_amount'));

        }

        if (isset($request->patient_details))
          $data = Patient::join('bookings','bookings.p_id','=','Patients.id')
                                  ->join('doctors','doctors.id','=','bookings.doctor_id')
                                  ->select('Patients.*','doctors.name as doctor_name','bookings.id as b_id')
                                  ->where('Patients.patient_code',$request->patient_details)
                                  ->where('bookings.status','booked')->first();
        if(isset($request->medicine_id)) 
            $data = Stock::select('price','qty','tax')->where('id',$request->medicine_id)->first();
        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $medi_in = new Medicine_inven_temp;
        $user_id=Auth::guard('admin')->user()->id;
        $rantom_id=Session::get('random_id');
        $medi_in->bill_number = $request->bill_number;
        $medi_in->patient_id = $request->patientId;
        $medi_in->b_id = $request->b_id;
        $medi_in->stock_id = $request->medicines;
        $medi_in->amount = $request->cost;
        $medi_in->discount = $request->discount;
        $medi_in->gst = $request->gst;
        $medi_in->quantity = $request->quantity;
        $medi_in->total_amount = $request->total;
        $medi_in->user_id = $user_id;
        $medi_in->rantom_id = $rantom_id;
        $medi_in->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }
    public function viewBills(Request $request)
    {
        $medicine_details = medicine_inven::groupBy('bill_number')->get();
        return view('admin.bill.farmacyBill.medicineinventoryView',compact('medicine_details'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $invoice_num=Medicine_inven::max('bill_number');
        if($invoice_num=="" || $invoice_num==0)
        {
           $billnumber=str_pad(1,5,"0",STR_PAD_LEFT);
        }
        else
        {
           $billnumber=str_pad(($invoice_num+1),5,"0",STR_PAD_LEFT);
        }

        $user_id=Auth::guard('admin')->user()->id;
        $rantom_id=Session::get('random_id');
        $payment = new Medicine_payment;
        $payment->b_id = $request->b_id;
        $payment->bill_number = $request->bill_number;
        $payment->patient_id = $id;
        $payment->cash_payment = $request->total_amount;
        $payment->card_payment = '0';
        $payment->balance = '0';
        $payment->pay_mode = 'cash';
        $payment->total_amount = $request->total_amount;
        $payment->save();


        $stock_id = Medicine_inven_temp::where('user_id','=',$user_id)->where('patient_id','=',$id)->where('rantom_id','=',$rantom_id)->select('stock_id', 'quantity')->get();
        $sales_product = Medicine_inven_temp::where('user_id','=',$user_id)->where('patient_id','=',$id)->where('rantom_id','=',$rantom_id)->update(['bill_number'=>$billnumber]);
        foreach($stock_id as $ids)
        {
            $stock = Stock::where('id','=',$ids->stock_id)->first();
            $quantity = $stock->qty - $ids->quantity;
            $stock->qty = $quantity;
            $stock->save();
        }
     
        $data=Medicine_inven_temp::where('patient_id','=',$id)->where('rantom_id','=',$rantom_id)->get()->toArray(); 
        Medicine_inven::insert($data);
        $deleete=Medicine_inven_temp::where('user_id','=',$user_id)->where('patient_id','=',$id)->where('rantom_id','=',$rantom_id);
        $deleete->delete();

        return encrypt($billnumber);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Medicine_inven_temp::where('temp_id',$id);
        $data->delete();
    }

    public function invoice($id)
    {
        $id = decrypt($id);
        $carbon = Carbon::today();
        $datas = Medicine_inven::where('bill_number','=',$id)->get();
        // $total_amount = $datas->sum('total_amount');
        $cash_amount = Medicine_payment::where('bill_number','=',$id)->sum('cash_payment');
        $card_amount = Medicine_payment::where('bill_number','=',$id)->sum('card_payment');
        $balance = Medicine_payment::where('bill_number','=',$id)->sum('balance');
        $total_paid = $cash_amount+$card_amount;
        return view('admin.bill.farmacyBill.medicine_invoice',compact('id','datas','balance','total_paid','carbon'));
    }
    public function pdfview22($id)
    {
        $carbon = Carbon::today(); 
        $datas = Medicine_inven::where('bill_number','=',$id)->get();
        // $cash_amount = Medicine_payment::where('bill_number','=',$id)->sum('cash_payment');
        // $card_amount = Medicine_payment::where('bill_number','=',$id)->sum('card_payment');
        // $total_amount = $datas->sum('total_amount');
        $pdf = PDF::loadView('admin.bill.farmacyBill.pdf',['datas' => $datas,'carbon'=> $carbon]);
        return $pdf->download('MedicinesBill.pdf'); 
    }
}
