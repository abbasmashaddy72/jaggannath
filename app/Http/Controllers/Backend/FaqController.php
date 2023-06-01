<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFaqRequest;
use App\Http\Requests\UpdateFaqRequest;
use App\Models\Faq;
use Illuminate\Support\Facades\Gate;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /**
         * @get('/admin/faq')
         * @name('admin.faq.index')
         * @middlewares('web', auth')
         */
        abort_if(Gate::denies('faq_list'), 403);

        return view('pages.backend.faqs.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /**
         * @get('/admin/faq/create')
         * @name('admin.faq.create')
         * @middlewares('web', auth')
         */
        abort_if(Gate::denies('faq_add'), 403);

        $faq = null;

        return view('pages.backend.faqs.cev', compact('faq'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function show(Faq $faq)
    {
        /**
         * @get('/admin/faq/{faq}')
         * @name('admin.faq.show')
         * @middlewares('web', auth')
         */
        abort_if(Gate::denies('faq_view'), 403);

        $faq = $faq->id;

        return view('pages.backend.faqs.cev', compact('faq'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function edit(Faq $faq)
    {
        /**
         * @get('/admin/faq/{faq}/edit')
         * @name('admin.faq.edit')
         * @middlewares('web', auth')
         */
        abort_if(Gate::denies('faq_edit'), 403);

        $faq = $faq->id;

        return view('pages.backend.faqs.cev', compact('faq'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faq $faq)
    {
        //
    }
}
