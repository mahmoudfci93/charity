<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Donation;
use App\Report;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Yajra\DataTables\DataTables;

class AjaxDataController extends Controller
{
    public function showDonations()
    {
        return view('admin.donations.index');

    }
    public function getData()
    {

        $donation = Donation::all();
        return DataTables::of($donation)

            ->editColumn('confirm', function ($model) {
                return $model->confirm == 0 ? '<span class="badge badge-info">' . 'Not Confirmed' . '</span>' : '<span class="badge badge-warning">' . 'Confirmed' . '</span>';
            })
            ->editColumn('place', function ($model) {
                $place = places();
                return  '<input class="badge badge-info">'.$place[$model->place].'</input>';
            })
            ->editColumn('send_trans', function ($model) {
                return $model->send_trans == 0 ? '<span class="badge badge-info">' . 'Not sent' . '</span>' : '<span class="badge badge-warning">' . 'sent' . '</span>';
            })
            ->editColumn('received', function ($model) {
                return $model->received == 0 ? '<span class="badge badge-info">' . 'Not Received' . '</span>' : '<span class="badge badge-warning">' . 'Received' . '</span>';
            })

            ->editColumn('control', function ($model) {
                $all = '<a href="' . url('/admin-dashboard/donner/' . $model->id . '/edit') . '" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></a> ';

                return $all;
            })
            ->rawColumns(['send_trans','place','received','confirm','control'])
            ->make(true);

    }
    public function showReports()
    {
        return view('admin.reports.index');

    }
    public function getReports()
    {

        $donation = Report::all();
        return DataTables::of($donation)
            ->editColumn('accept', function ($model) {
                return $model->accept == null ? '<span class="badge badge-info">' . 'Not Accepted' . '</span>' : '<span class="badge badge-warning">' . 'Received' . '</span>';
            })
            ->editColumn('place', function ($model) {
                $place = places();
                return  '<input class="badge badge-info">'.$place[$model->place].'</input>';
            })
            ->editColumn('closed', function ($model) {
                return $model->closed == null ? '<span class="badge badge-info">' . 'Not Closed' . '</span>' : '<span class="badge badge-warning">' . 'Closed' . '</span>';
            })

            ->editColumn('control', function ($model) {
                $all = '<a href="' . url('/admin-dashboard/reporter/' . $model->id . '/edit') . '" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></a> ';

                return $all;
            })
            ->rawColumns(['accept','closed','place','control'])
            ->make(true);

    }
    public function getMessages()
    {

        $contacts = Contact::all();

        return Datatables::of($contacts)

            ->editColumn('name', function ($model) {

                return '<a href="' . route('contact.edit', $model->id) .'">' .$model->name. '</a>';

            })
            ->editColumn('view', function ($model) {
                return $model->view == 0 ? '<span class="badge badge-info">' . 'New Message' . '</span>' : '<span class="badge badge-warning">' . 'Old Message' . '</span>';
            })
            ->editColumn('type', function ($model) {
                return  '<span class="badge badge-info">'.\contact()[$model->type].'</span>';
            })

            ->editColumn('control', function ($model) {
                $all = '<a href="' . url('/admin-dashboard/contact/' . $model->id . '/edit') . '" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></a> ';
                return $all;
            })
            ->rawColumns(['name','type','control','view'])
            ->make(true);
    }
    public function getUsers()
    {
        $users = User::all();

        return Datatables::of($users)

            ->editColumn('name', function ($model) {

                return '<a href="' . route('users.edit', $model->id) .'">' .$model->name. '</a>';

            })
            ->editColumn('admin', function ($model) {
                return $model->admin == 0 ? '<span class="badge badge-info">' . 'User' . '</span>' : '<span class="badge badge-warning">' . 'Admin' . '</span>';
            })

            ->editColumn('control', function ($model) {
                $all = '<a href="' . url('/admin-dashboard/users/' . $model->id . '/edit') . '" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></a> ';
                return $all;
            })
            ->rawColumns(['name','admin','control'])
            ->make(true);

    }


}
