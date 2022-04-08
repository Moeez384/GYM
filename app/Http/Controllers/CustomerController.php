<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index()
    {
        $customers = Customer::paginate(10);
        return view('customers.index', compact('customers'));
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'fname' => 'required|string|max:255',
            'cnic' => 'required|string|min:13|max:13|unique:customers',
            'contactNumber' => 'required|string|min:11|max:11',
            'address' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'training' => 'required|string',
            'lockerNumber' => 'required',
            'timming' => 'required',
            'addmissionFee' => 'required|numeric',
            'monthlyFee' => 'required|numeric',
        ]);

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        $save = new Customer();
        $save->name = $request->name;
        $save->fname = $request->fname;
        $save->cnic = $request->cnic;
        $save->contact_number = $request->contactNumber;
        $save->address = $request->address;
        $save->image = $input['image'];
        $save->training = $request->training;
        $save->locker_number = $request->lockerNumber;
        $save->timming = $request->timming;
        $save->addmission_fee = $request->addmissionFee;
        $save->monthly_fee = $request->monthlyFee;

        $save->save();

        $messages['success'] = "Customer Added Successfully";
        return redirect()->route('Customers.index')->with('messages', $messages);
    }

    public function show($id)
    {
        $customer = Customer::where('id', $id)->first();
        return view('customers.show', compact('customer'));
    }

    public function edit(Customer $customer)
    {
        $customer = $customer::first();
        return view('customers.edit', compact('customer'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'fname' => 'required|string|max:255',
            'cnic' => 'required|string|min:13|max:13|unique:customers,cnic,' . $request->id,
            'contactNumber' => 'required|string|min:11|max:11',
            'address' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'training' => 'required|string',
            'lockerNumber' => 'required',
            'timming' => 'required',
            'addmissionFee' => 'required|numeric',
            'monthlyFee' => 'required|numeric',
        ]);

        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";

            Customer::where('id', $request->id)->update([
                'name' => $request->name,
                'fname' => $request->fname,
                'cnic' => $request->cnic,
                'contact_number' => $request->contactNumber,
                'address' => $request->address,
                'training' => $request->training,
                'locker_number' => $request->lockerNumber,
                'timming' => $request->timming,
                'addmission_fee' => $request->addmissionFee,
                'monthly_fee' => $request->monthlyFee,
                'image' => $input['image']
            ]);
        } else {
            Customer::where('id', $request->id)->update([
                'name' => $request->name,
                'fname' => $request->fname,
                'cnic' => $request->cnic,
                'contact_number' => $request->contactNumber,
                'address' => $request->address,
                'training' => $request->training,
                'locker_number' => $request->lockerNumber,
                'timming' => $request->timming,
                'addmission_fee' => $request->addmissionFee,
                'monthly_fee' => $request->monthlyFee,
            ]);
        }


        $messages['success'] = "Customer Updated Successfully";
        return redirect()->route('Customers.index')->with('messages', $messages);
    }

    public function destroy(Customer $customer, Request $request)
    {
        Customer::where('id', $request->id)->delete();
        $messages['success'] = "Customer Deleted Successfully";
        return redirect()->back()->with('messages', $messages);
    }
}
