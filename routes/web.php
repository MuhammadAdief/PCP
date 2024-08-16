<?php
use App\Http\Controllers\UserSheetController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FileUploadController;
use App\Exports\UserSheetsExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;



use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get('/verify-otp', [AuthenticatedSessionController::class, 'showOtpForm'])->name('user_sheet.verify-otp');
Route::post('/verify-otp', [AuthenticatedSessionController::class, 'verifyOtp']);


Route::get('/', function () {
    Auth::logout(); 
    return view('landingPage'); // Redirect to the login page
})->middleware('logout.guard.switch')
->name('homee');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'checkPermission:view user sheet'])->prefix('user_sheet')->group(function () {
    Route::get('/upload', [FileUploadController::class, 'showUploadForm'])->name('user_sheet.upload.form');
    Route::get('/user_sheets/export', function (Request $request) {
        $sheetCode = $request->query('sheet_code');
        $search = $request->query('snd');
        $includeStatus = $request->query('include_status', []);
        $excludeStatus = $request->query('exclude_status', []);
        $includeStatus2 = $request->query('include_status_2', []);
        $excludeStatus2 = $request->query('exclude_status_2', []);
    
        // Create a base filename
        $filename = 'user_sheets_';
        if ($sheetCode) $filename .= "sheet_code_" . sanitizeFilename($sheetCode) . "_";
        if ($search) $filename .= "search_" . sanitizeFilename($search) . "_";
        if (!empty($includeStatus)) $filename .= "include_status_" . sanitizeFilename(implode('_', $includeStatus)) . "_";
        if (!empty($excludeStatus)) $filename .= "exclude_status_" . sanitizeFilename(implode('_', $excludeStatus)) . "_";
        if (!empty($includeStatus2)) $filename .= "include_status_2_" . sanitizeFilename(implode('_', $includeStatus2)) . "_";
        if (!empty($excludeStatus2)) $filename .= "exclude_status_2_" . sanitizeFilename(implode('_', $excludeStatus2)) . "_";
    
        $filename = rtrim($filename, '_') . '.xlsx'; // Clean up any trailing underscores
    
        return Excel::download(new UserSheetsExport($sheetCode, $search, $includeStatus, $excludeStatus, $includeStatus2, $excludeStatus2), $filename);
    })->name('user_sheet.export');
    
    // Helper function to sanitize filenames
    function sanitizeFilename($filename) {
        return preg_replace('/[^a-zA-Z0-9_\-]/', '_', $filename); // Replace non-alphanumeric characters with underscores
    }
    
    
    Route::post('/upload', [FileUploadController::class, 'handleFileUpload'])->name('user_sheet.file.upload');
    Route::get('/', [UserSheetController::class, 'index'])->name('user_sheet.index');
    Route::get('create', [UserSheetController::class, 'create'])->name('user_sheet.create');
    Route::post('/', [UserSheetController::class, 'store'])->name('user_sheet.store');
    Route::get('{id}', [UserSheetController::class, 'show'])->name('user_sheet.show');
    Route::get('{id}/edit', [UserSheetController::class, 'edit'])->name('user_sheet.edit');
    Route::put('{id}', [UserSheetController::class, 'update'])->name('user_sheet.update');
    Route::delete('{id}', [UserSheetController::class, 'destroy'])->name('user_sheet.destroy');
});

/*CATEGORIES*/
Route::get('/goodhabit', function () {
    return view('goodhabit');
})->name('goodhabit');

Route::get('/badhabit', function () {
    return view('badhabit');
})->name('badhabit');

Route::get('/lunas', function () {
    return view('lunas');
})->name('lunas');

Route::get('/c3mr', function () {
    return view('c3mr');
})->name('c3mr');


/*BILLPER*/
Route::get('/billper', function () {
    return view('billper');
})->name('billper');

/*GUIDE*/
Route::get('/guide', function () {
    return view('guide');
})->name('guide');




require __DIR__.'/auth.php';

require __DIR__.'/admin-auth.php';
