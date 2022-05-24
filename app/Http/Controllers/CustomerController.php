<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Store;
use App\Models\Product;
use App\Models\cart_list;
use Validator;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $customers = Customer::paginate(10);
        $customers  = DB::table('customers')->orderBy('id', 'desc')->paginate(10);
        $stores  = DB::table('stores')->orderBy('id', 'desc')->select("id","store_name")->get();

        return view('pages\admin\customer\index',compact("customers","stores"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = new customer;
            $customer->first_name = $request->input('fname');
            $customer->last_name = $request->input('lname');
            $customer->gender = $request->input('gender');
            $customer->birthdate = $request->input('birthdate');
            $customer->email = $request->input('email');
            $customer->mobile = $request->input('mobile');
            $customer->approval = $request->input('approval');
            $customer->status = $request->input('status');
            $customer->is_verified = $request->input('is_verified2');
            $customer->address = $request->input('address2');
            $customer->lat = $request->input('location_lat2');
            $customer->lng = $request->input('location_lang2');
            if($request->hasfile('prof_image')){
                $file1 = $request->file('prof_image');
                $extension1 = $file1->getClientOriginalExtension();
                $origname = $file1->getClientOriginalName();
                $user1 = auth()->user()->name.'-'.auth()->user()->id;
                $filename1 = $user1.'customer-prof_image'.time().'.'.$extension1;
                $file1->move('uploads/customer/', $filename1);
                $customer->profile_image = $filename1;
            }
            $customer->save();

            return redirect('/customer')->with('success','Customer Information Successfully Added!');
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
        $customer = customer::findOrFail($id);
        $customer->first_name = $request->input('fname2');
        $customer->last_name = $request->input('lname2');
        $customer->gender = $request->input('gender2');
        $customer->birthdate = $request->input('birthdate2');
        $customer->email = $request->input('email2');
        $customer->mobile = $request->input('mobile2');
        $customer->approval = $request->input('approval2');
        $customer->status = $request->input('status2');
        $customer->is_verified = $request->input('is_verified2');
        $customer->address = $request->input('address');
        if($request->input('location_lat')){
            $customer->lat = $request->input('location_lat');
        }
        if($request->input('location_lang')){
            $customer->lng = $request->input('location_lang');
        }
            if($request->hasfile('prof_image2')){
                $file1 = $request->file('prof_image2');
                $extension1 = $file1->getClientOriginalExtension();
                $origname = $file1->getClientOriginalName();
                $user1 = auth()->user()->name.'-'.auth()->user()->id;
                $filename1 = $user1.'customer-prof_image2'.time().'.'.$extension1;
                $file1->move('uploads/customer/', $filename1);
                $customer->profile_image = $filename1;
            }
        $customer->save();
        return redirect('/customer')->with('success','Customer Information Successfully Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function search(Request $request)
    {
        if (isset($_GET['query'])) {
            $search_text = $_GET['query'];
            $customers = DB::table('customers')
            ->orderBy('id', 'desc')
            ->where('first_name','LIKE','%'.$search_text.'%')
            ->paginate(10)
            ->withQueryString();

            $stores  = DB::table('stores')->orderBy('id', 'desc')->select("id","store_name")->get();

            return view('pages\admin\customer\index',compact("customers","stores"));
        }else{
            echo "Error 404|Page Not Found!";
        }

    }

    public function getProducts(Request $request, $id)
    {
        // $data = Product::where('store_id',$id)->get();



        $cart_lists = DB::table('cart_lists')
        ->where('customer_id',$request->input('customer_id'))
        ->first();

        if($cart_lists !=null){
            $data = DB::table('products')
            ->whereNotIn('id', DB::table('cart_lists')->select('product_id')->where('customer_id', '=', $request->input('customer_id')))
            ->where('store_id',$id)
            ->get();
        }
        else{
            $data = DB::table('products')
            ->where('store_id',$id)
            ->get();
        }

        return response()->json(['data' => $data]);
    }

    public function getCartList($customer_id)
    {
        // $data = cart_list::where('customer_id',$customer_id)->get();
        // Log::info(json_encode($data));
        $data = DB::table('cart_lists')
            ->join('products', 'products.id', '=', 'cart_lists.product_id')
            ->join('customers', 'customers.id', '=', 'cart_lists.customer_id')
            ->join('stores', 'stores.id', '=', 'cart_lists.store_id')
            ->select('cart_lists.id as c_id','products.product_name as p_name','products.amount as p_amt','cart_lists.quantity as c_qty','cart_lists.store_id as c_store_id')
            ->where('customer_id',$customer_id)
            ->get();
        return response()->json(['data' => $data]);

        // $data = cart_list::all();
        // return response()->json([
        //     'data'=>$data,
        // ]);
    }

}
