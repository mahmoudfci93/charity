<?php

namespace App\Http\Controllers;

use App\Donation;
use App\Report;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function editDonations($id)
    {
        $donner = Donation::findOrFail($id);
        $donnerUser =User::findOrFail( $donner->user_id);
        return view('admin.donations.edit',compact('donner','donnerUser'));
    }
    public function updateDonation(Request $request,$id)
    {
        $donner = Donation::findOrFail($id);
        if($request->has('confirm')){
            $donner->confirm=$request->confirm;
        }else{
            $donner->confirm="0";
        }
        if($request->has('trans')){
            $donner->send_trans=$request->trans;
        }else{
            $donner->send_trans="0";
        }
        if($request->has('received')){
            $donner->received=$request->received;
        }else{
            $donner->received="0";
        }
        $donner->save();

        return back();
    }
    public function editReport($id)
    {
        $reporter = Report::findOrFail($id);
        return view('admin.reports.edit',compact('reporter'));
    }
    public function updateReport(Request $request,$id)
    {
       $report = Report::findOrFail($id);
       if ($request->has('accept')){
           $report->accept = $request->accept;
       }else{
           $report->accept = "0";
       }
       if ($request->has('closed')&&$request->has('accept')){
           $report->closed = $request->closed;
       }else{
           $report->closed = "0";
       }
       $report->save();
       return back();

    }
}
