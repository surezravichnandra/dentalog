<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Carbon\Carbon;  
use App\Service;
use App\Patient;
use App\Treat_inven;
use App\Treat_inven_temp;
use App\Treat_payment;
use Auth;
use Session;
use PDF;

class TreatmentInvoiceController extends Controller
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
        Treat_inven_temp::where('user_id',$user_id)->where('rantom_id',$rantom_id)->delete();
        $invoice_num=Treat_inven::max('bill_number');
        if($invoice_num=="" || $invoice_num==0)
        {
           $billnumber=str_pad(1,5,"0",STR_PAD_LEFT);
        }
        else
        {
           $billnumber=str_pad(($invoice_num+1),5,"0",STR_PAD_LEFT);
        }
        $service=Service::get();
        return view('admin.bill.treatmentBill.treatmentBill',compact('service','billnumber','carbon'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user_id=Auth::guard('admin')->user()->id;
        $rantom_id=Session::get('random_id');
        if(isset($request->services_ajax))
        {

        $datas =Treat_inven_temp::where('user_id','=',$user_id)->where('patient_id','=',$request->services_ajax)->where('bill_number','=',$request->bill_number)->where('rantom_id','=',$rantom_id)->get();
        $total_amount = Treat_inven_temp::where('user_id','=',$user_id)->where('patient_id','=',$request->services_ajax)->where('bill_number','=',$request->bill_number)->where('rantom_id','=',$rantom_id)->sum('total_amount');
        $total_discount = Treat_inven_temp::where('user_id','=',$user_id)->where('patient_id','=',$request->services_ajax)->where('bill_number','=',$request->bill_number)->where('rantom_id','=',$rantom_id)->sum('discount_amount');

        return view('admin.bill.treatmentBill.treatment_ajax',compact('datas','total_amount','total_discount'));

        }


        if(isset($request->service_id)) 
            $data = Service::select('cost')->where('id',$request->service_id)->first();

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
        $rantom_id=Session::get('random_id');
        $user_id=Auth::guard('admin')->user()->id;
        $reantom_id=Session('random_id');
        $treat_in = new Treat_inven_temp;
        $treat_in->bill_number = $request->bill_number;
        $treat_in->patient_id = $request->patientId;
        $treat_in->b_id = $request->b_id;
        $treat_in->treat_id = $request->service_id;
        $treat_in->amount = $request->amount;
        $treat_in->discount_amount = $request->discount;
        $treat_in->total_amount = $request->total;
        $treat_in->user_id = $user_id;
        $treat_in->rantom_id = $rantom_id;
        $treat_in->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//
    }
       public function viewBills(Request $request)
    {
        $treatment_details = Treat_inven::groupBy('bill_number')->get();
        $total_amount = $treatment_details->sum('total_amount');

        return view('admin.bill.treatmentBill.treatmentinventoryView',compact('treatment_details','total_amount'));
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
 

        $invoice_num=Treat_inven::max('bill_number');
        if($invoice_num=="" || $invoice_num==0)
        {
           $billnumber=str_pad(1,5,"0",STR_PAD_LEFT);
        }
        else
        {
           $billnumber=str_pad(($invoice_num+1),5,"0",STR_PAD_LEFT);
        }

        $payment = new Treat_payment;
        $payment->bill_number = $request->bill_number;
        $payment->b_id = $request->b_id;
        $payment->patient_id = $id;
        $payment->cash_payment = $request->total_amount ;
        $payment->card_payment = '0';
        $payment->balance = '0';
        $payment->pay_mode = 'cash';
        $payment->total_amount = $request->total_amount;
        $payment->save();
        
        $user_id=Auth::guard('admin')->user()->id;
        $rantom_id=Session::get('random_id');
        $treat_inven = Treat_inven_temp::where('user_id','=',$user_id)->where('patient_id','=',$id)->where('rantom_id','=',$rantom_id)->update(['bill_number'=>$billnumber]);
 
     
        $data=Treat_inven_temp::where('patient_id','=',$id)->where('rantom_id','=',$rantom_id)->get()->toArray(); 
        Treat_inven::insert($data);
        $deleete=Treat_inven_temp::where('user_id','=',$user_id)->where('patient_id','=',$id)->where('rantom_id','=',$rantom_id);
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
        $data = Treat_inven_temp::where('temp_id',$id);
        $data->delete();
    }
    public function invoice($id)
    {
        $id= decrypt($id);
        $carbon = Carbon::today();
        $datas = Treat_inven::where('bill_number','=',$id)->get();
        // $total_amount = $datas->sum('total_amount');
        $cash_amount = Treat_payment::where('bill_number','=',$id)->sum('cash_payment');
        $card_amount = Treat_payment::where('bill_number','=',$id)->sum('card_payment');
        $balance = Treat_payment::where('bill_number','=',$id)->sum('balance');
        $total_paid = $cash_amount+$card_amount;
        return view('admin.bill.treatmentBill.treatment_invoice',compact('id','datas','balance','total_paid','carbon'));
    }

     public function treat_pdfview($id)
    {
        $carbon = Carbon::today(); 
        $datas = Treat_inven::where('bill_number','=',$id)->get();
        //$cash_amount = Treat_payment::where('bill_number','=',$id)->sum('cash_payment');
        //$card_amount = Treat_payment::where('bill_number','=',$id)->sum('card_payment');
        //$total_amount = $datas->sum('total_amount');
        $pdf = PDF::loadView('admin.bill.treatmentBill.bill_pdf',['datas' => $datas,'carbon'=> $carbon]);
        return $pdf->download('TreatmentBill.pdf'); 
    }
}
