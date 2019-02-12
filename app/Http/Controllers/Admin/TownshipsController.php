<?php

namespace App\Http\Controllers\Admin;

use App\Township;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreTownshipsRequest;
use App\Http\Requests\Admin\UpdateTownshipsRequest;

class TownshipsController extends Controller
{
    /**
     * Display a listing of Township.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('township_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('township_delete')) {
                return abort(401);
            }
            $townships = Township::onlyTrashed()->get();
        } else {
            $townships = Township::all();
        }

        return view('admin.townships.index', compact('townships'));
    }

    /**
     * Show the form for creating new Township.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('township_create')) {
            return abort(401);
        }
        return view('admin.townships.create');
    }

    /**
     * Store a newly created Township in storage.
     *
     * @param  \App\Http\Requests\StoreTownshipsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTownshipsRequest $request)
    {
        if (! Gate::allows('township_create')) {
            return abort(401);
        }
        $township = Township::create($request->all());



        return redirect()->route('admin.townships.index');
    }


    /**
     * Show the form for editing Township.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('township_edit')) {
            return abort(401);
        }
        $township = Township::findOrFail($id);

        return view('admin.townships.edit', compact('township'));
    }

    /**
     * Update Township in storage.
     *
     * @param  \App\Http\Requests\UpdateTownshipsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTownshipsRequest $request, $id)
    {
        if (! Gate::allows('township_edit')) {
            return abort(401);
        }
        $township = Township::findOrFail($id);
        $township->update($request->all());



        return redirect()->route('admin.townships.index');
    }


    /**
     * Display Township.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('township_view')) {
            return abort(401);
        }
        $users = \App\User::where('township_id', $id)->get();$patients = \App\Patient::where('health_facility_id', $id)->get();

        $township = Township::findOrFail($id);

        return view('admin.townships.show', compact('township', 'users', 'patients'));
    }


    /**
     * Remove Township from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('township_delete')) {
            return abort(401);
        }
        $township = Township::findOrFail($id);
        $township->delete();

        return redirect()->route('admin.townships.index');
    }

    /**
     * Delete all selected Township at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('township_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Township::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Township from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('township_delete')) {
            return abort(401);
        }
        $township = Township::onlyTrashed()->findOrFail($id);
        $township->restore();

        return redirect()->route('admin.townships.index');
    }

    /**
     * Permanently delete Township from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('township_delete')) {
            return abort(401);
        }
        $township = Township::onlyTrashed()->findOrFail($id);
        $township->forceDelete();

        return redirect()->route('admin.townships.index');
    }
}
