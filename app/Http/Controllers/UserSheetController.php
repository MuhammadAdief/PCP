<?php

namespace App\Http\Controllers;

use App\Models\UserSheet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserSheetController extends Controller
{

    public function index(Request $request)
    {
        $query = UserSheet::query();
        $sheetCodes = UserSheet::distinct()->pluck('sheet_code')->sort()->values();
    
        // Initialize $snd to an empty string if not present in the request
        $snd = $request->has('snd') ? $request->input('snd') : '';
    
        if ($snd != '') {
            $query->where('snd', 'LIKE', "%{$snd}%");
        }
    
        // Filter by sheet code
        if ($request->has('sheet_code') && $request->input('sheet_code') != '') {
            $sheetCode = $request->input('sheet_code');
            $query->where('sheet_code', 'LIKE', "%{$sheetCode}%");
        }
    
        // Filter by status
        if ($request->has('include_status') && is_array($request->input('include_status'))) {
            $include_status = $request->input('include_status');
            $query->whereIn('status', $include_status);
        }
    
        if ($request->has('exclude_status') && is_array($request->input('exclude_status'))) {
            $exclude_status = $request->input('exclude_status');
            $query->whereNotIn('status', $exclude_status);
        }
    
        if ($request->has('include_status_2') && is_array($request->input('include_status_2'))) {
            $include_status_2 = $request->input('include_status_2');
            $query->whereIn('status_2', $include_status_2);
        }
    
        if ($request->has('exclude_status_2') && is_array($request->input('exclude_status_2'))) {
            $exclude_status_2 = $request->input('exclude_status_2');
            $query->whereNotIn('status_2', $exclude_status_2);
        }
    
        // Pagination or any other query modifications
        $user_sheet = $query->paginate(10);
    
        $userRoles = Auth::user()->roles->pluck('name');
        return view('user_sheet.index', compact('user_sheet', 'userRoles', 'sheetCodes', 'snd'));
    }
    

    

    

    public function create()
    {
        return view('user_sheet.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nper' => 'nullable|integer',
            'snd' => 'nullable|integer',
            'snd_group' => 'nullable|integer',
            'nama_cli' => 'nullable|string|max:255',
            'alamat' => 'nullable|string|max:255',
            'ubis' => 'nullable|string|max:255',
            'desc_newbill' => 'nullable|string|max:255',
            'usage_desc' => 'nullable|string|max:255',
            'lama_berlangganan' => 'nullable|integer',
            'saldo' => 'nullable|integer',
            'no_hp' => 'nullable|integer',
            'email' => 'nullable|string|max:255',
            'tanggal_caring_1' => 'nullable|string|max:255',
            'petugas' => 'nullable|string|max:255',
            'status' => 'nullable|string|in:jawab oke,Lunas/ paid,RNA,Tidak aktif,Reject',
            'tanggal_caring_2' => 'nullable|string|max:255',
            'petugas_2' => 'nullable|string|max:255',
            'status_2' => 'nullable|string|in:jawab oke,Lunas/ paid,RNA,Tidak aktif,Reject',
            'additional_info' => 'nullable|string|max:255',
            'sheet_code' => 'nullable|string|max:255',
        ]);

        UserSheet::create($request->all());

        return redirect('/user_sheet')->with('status', 'User Sheet Created Successfully');
    }


    public function show($id)
    {
        $userSheet = UserSheet::findOrFail($id);
        return view('user_sheet.show', compact('userSheet'));
    }
    

    public function edit($id)
    {
        $userSheet = UserSheet::findOrFail($id);
        return view('user_sheet.edit', compact('userSheet'));
    }
    

    public function update(Request $request, $id)
{
    $request->validate([
        'nper' => 'nullable|integer',
        'snd' => 'nullable|integer',
        'snd_group' => 'nullable|integer',
        'nama_cli' => 'nullable|string|max:255',
        'alamat' => 'nullable|string|max:255',
        'ubis' => 'nullable|string|max:255',
        'desc_newbill' => 'nullable|string|max:255',
        'usage_desc' => 'nullable|string|max:255',
        'lama_berlangganan' => 'nullable|integer',
        'saldo' => 'nullable|integer',
        'no_hp' => 'nullable|integer',
        'email' => 'nullable|string|max:255',
        'tanggal_caring_1' => 'nullable|string|max:255',
        'petugas' => 'nullable|string|max:255',
        'status' => 'nullable|string|in:jawab oke,Lunas/ paid,RNA,Tidak aktif,Reject',
        'tanggal_caring_2' => 'nullable|string|max:255',
        'petugas_2' => 'nullable|string|max:255',
        'status_2' => 'nullable|string|in:jawab oke,Lunas/ paid,RNA,Tidak aktif,Reject',
        'additional_info' => 'nullable|string|max:255',
        'sheet_code' => 'nullable|string|max:255',
    ]);

    $userSheet = UserSheet::findOrFail($id);
    $userSheet->update($request->all());

    return redirect('/user_sheet')->with('status', 'User Sheet Updated Successfully');
}

    public function destroy($id)
    {
        $userSheet = UserSheet::findOrFail($id);
        $userSheet->delete();
    
        return redirect('/user_sheet')->with('status', 'User Sheet Deleted Successfully');
    }
    
    
    
}