<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BookAppointment;
use Illuminate\Support\Facades\Gate;

class BookAppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /**
         * @get('/admin/book-appointment')
         * @name('admin.book.appointment')
         * @middlewares('web', auth')
         */
        abort_if(Gate::denies('book_appointment'), 403);

        return view('pages.backend.book_appointment');
    }
}
