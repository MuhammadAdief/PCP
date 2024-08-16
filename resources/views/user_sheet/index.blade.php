@extends('user_sheet.layouts')

@section('sidebar')
    @include('layouts.sidebar')
@endsection

@section('content')

    <head>
        <link href='https://unpkg.com/css.gg@2.0.0/icons/css/trash.css' rel='stylesheet'>

        <link href='https://unpkg.com/css.gg@2.0.0/icons/css/pen.css' rel='stylesheet'>
        <style>
            .form-group {
                position: relative;
            }

            .form-control {
                padding-right: 40px;
                /* Space for reset button */
            }

            .reset-button {
                position: absolute;
                right: 10px;
                /* Distance from the right edge */
                top: 50%;
                transform: translateY(-50%);
                border: none;
                background: none;
                cursor: pointer;
                color: #6c757d;
            }

            .reset-button svg {
                width: 16px;
                height: 16px;
            }

            .btn-custom {
                width: 40px;
                /* Adjust width as needed */
                height: 40px;
                /* Adjust height as needed */
                display: flex;
                align-items: center;
                justify-content: center;
                border-radius: 0rem;
            }

            .card-table-container {
                display: flex;
                flex-direction: column;
            }

            .card-table-container .card,
            .card-table-container .table {
                flex: 1;
                width: 100%;
                border-radius: 0;
            }

            .table-responsive {
                width: 100%;
                overflow-x: auto;
            }

            table {
                width: 100%;
            }

            .table td,
            .table th {
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
                max-width: 150px;
                /* Adjust the max-width as needed */
            }
        </style>

    </head>

    <div class="container">

        <div class="row">
            <div class="col-md-12">

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="card" style="border-radius: 0;">
                        <div class="card-header">
                            <h4>{{ request()->query('sheet_code') }} User List

                                <a href="{{ route('user_sheet.create') }}" class="btn float-end" title="Create">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path
                                            d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6 13h-5v5h-2v-5h-5v-2h5v-5h2v5h5v2z" />
                                    </svg>
                                </a>
                                <a href="{{ route('user_sheet.upload.form') }}" class="btn float-end" title="Upload">
                                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.5 3H12H8C6.34315 3 5 4.34315 5 6V18C5 19.6569 6.34315 21 8 21H12M13.5 3L19 8.625M13.5 3V7.625C13.5 8.17728 13.9477 8.625 14.5 8.625H19M19 8.625V11.8125"
                                            stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M17.5 21L17.5 15M17.5 15L20 17.5M17.5 15L15 17.5" stroke="#000000"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <!-- Export Button -->
                                <a href="{{ route('user_sheet.export', [
                                    'sheet_code' => request('sheet_code'),
                                    'snd' => request('snd'),
                                    'include_status' => request('include_status', []),
                                    'exclude_status' => request('exclude_status', []),
                                    'include_status_2' => request('include_status_2', []),
                                    'exclude_status_2' => request('exclude_status_2', []),
                                ]) }}"
                                    class="btn float-end" title="Download">
                                    <svg width="35" height="35" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">

                                        <path
                                            d="M5.625 15C5.625 14.5858 5.28921 14.25 4.875 14.25C4.46079 14.25 4.125 14.5858 4.125 15H5.625ZM4.875 16H4.125H4.875ZM19.275 15C19.275 14.5858 18.9392 14.25 18.525 14.25C18.1108 14.25 17.775 14.5858 17.775 15H19.275ZM11.1086 15.5387C10.8539 15.8653 10.9121 16.3366 11.2387 16.5914C11.5653 16.8461 12.0366 16.7879 12.2914 16.4613L11.1086 15.5387ZM16.1914 11.4613C16.4461 11.1347 16.3879 10.6634 16.0613 10.4086C15.7347 10.1539 15.2634 10.2121 15.0086 10.5387L16.1914 11.4613ZM11.1086 16.4613C11.3634 16.7879 11.8347 16.8461 12.1613 16.5914C12.4879 16.3366 12.5461 15.8653 12.2914 15.5387L11.1086 16.4613ZM8.39138 10.5387C8.13662 10.2121 7.66533 10.1539 7.33873 10.4086C7.01212 10.6634 6.95387 11.1347 7.20862 11.4613L8.39138 10.5387ZM10.95 16C10.95 16.4142 11.2858 16.75 11.7 16.75C12.1142 16.75 12.45 16.4142 12.45 16H10.95ZM12.45 5C12.45 4.58579 12.1142 4.25 11.7 4.25C11.2858 4.25 10.95 4.58579 10.95 5H12.45ZM4.125 15V16H5.625V15H4.125ZM4.125 16C4.125 18.0531 5.75257 19.75 7.8 19.75V18.25C6.61657 18.25 5.625 17.2607 5.625 16H4.125ZM7.8 19.75H15.6V18.25H7.8V19.75ZM15.6 19.75C17.6474 19.75 19.275 18.0531 19.275 16H17.775C17.775 17.2607 16.7834 18.25 15.6 18.25V19.75ZM19.275 16V15H17.775V16H19.275ZM12.2914 16.4613L16.1914 11.4613L15.0086 10.5387L11.1086 15.5387L12.2914 16.4613ZM12.2914 15.5387L8.39138 10.5387L7.20862 11.4613L11.1086 16.4613L12.2914 15.5387ZM12.45 16V5H10.95V16H12.45Z"
                                            fill="#000000" />

                                    </svg>

                                </a>



                            </h4>
                        </div>

                    <div class="card-body">
                        <form action="{{ route('user_sheet.index') }}" method="GET" class="mb-3">
                            <input type="hidden" name="sheet_code" value="{{ request('sheet_code') }}">

                            <div class="d-flex align-items-center">
                                <!-- Search Container -->
                                <div class="search-container" style="position: relative; flex: 1;">
                                    <input type="text" name="snd" class="form-control pe-5"
                                        placeholder="Search by Snd" style="padding-right: 40px; border-radius: 0;">
                                    <button type="button" id="reset-search" class="btn btn-secondary"
                                        style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); border: none; background: transparent; color: red; padding: 0; font-size: 16px; z-index: 10;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            viewBox="0 0 24 24" style="fill: rgb(172, 168, 168);">
                                            <path
                                                d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z" />
                                        </svg>
                                    </button>
                                </div>

                                <!-- Apply & Show Filters Buttons -->
                                <div class="ms-2 d-flex">
                                    <button type="submit" class="btn btn-primary"
                                        style="border-radius: 9; margin-right: 3px; height: 38px;background-color:#f0f0f0; color: #191970; border: 2px solid #191970; font-weight:500;">
                                        Apply
                                    </button>
                                    <button class="btn btn-primary btn-sm" type="button" id="show-filters-btn"
                                        style="border-radius: 9; height: 38px; background-color:#03346E">
                                        Show Filters
                                    </button>
                                </div>

                            </div>

                            <!-- Filters Layout (Hidden by Default) -->
                            <div id="filters" class="card-body d-none mt-3">
                                <div class="row">
                                    <!-- Status Filters -->
                                    <div class="col-md-6">
                                        <div class="card" style="border-radius: 0;" >
                                            <div class="card-header" style="background-color: #191970; color: white;">
                                                Status Filters
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <!-- Include Section -->
                                                    <div class="col-md-6">
                                                        <h7>Include</h7>
                                                        <div class="form-check">
                                                            <input type="checkbox" name="include_status[]" value="jawab oke"
                                                                id="include_status_jawab_oke"
                                                                {{ in_array('jawab oke', request('include_status', [])) ? 'checked' : '' }}>
                                                            <label for="include_status_jawab_oke"
                                                                class="form-check-label">Jawab Oke</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" name="include_status[]"
                                                                value="Lunas/paid" id="include_status_lunas_paid"
                                                                {{ in_array('Lunas/ paid', request('include_status', [])) ? 'checked' : '' }}>
                                                            <label for="include_status_lunas_paid"
                                                                class="form-check-label">Lunas/Paid</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" name="include_status[]" value="RNA"
                                                                id="include_status_rna"
                                                                {{ in_array('RNA', request('include_status', [])) ? 'checked' : '' }}>
                                                            <label for="include_status_rna"
                                                                class="form-check-label">RNA</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" name="include_status[]"
                                                                value="Tidak aktif" id="include_status_tidak_aktif"
                                                                {{ in_array('Tidak aktif', request('include_status', [])) ? 'checked' : '' }}>
                                                            <label for="include_status_tidak_aktif"
                                                                class="form-check-label">Tidak Aktif</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" name="include_status[]" value="Reject"
                                                                id="include_status_reject"
                                                                {{ in_array('Reject', request('include_status', [])) ? 'checked' : '' }}>
                                                            <label for="include_status_reject"
                                                                class="form-check-label">Reject</label>
                                                        </div>
                                                    </div>

                                                    <!-- Exclude Section -->
                                                    <div class="col-md-6">
                                                        <h7>Exclude</h7>
                                                        <div class="form-check">
                                                            <input type="checkbox" name="exclude_status[]"
                                                                value="jawab oke" id="exclude_status_jawab_oke"
                                                                {{ in_array('jawab oke', request('exclude_status', [])) ? 'checked' : '' }}>
                                                            <label for="exclude_status_jawab_oke"
                                                                class="form-check-label">Jawab Oke</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" name="exclude_status[]"
                                                                value="Lunas/paid" id="exclude_status_lunas_paid"
                                                                {{ in_array('Lunas/ paid', request('exclude_status', [])) ? 'checked' : '' }}>
                                                            <label for="exclude_status_lunas_paid"
                                                                class="form-check-label">Lunas/Paid</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" name="exclude_status[]" value="RNA"
                                                                id="exclude_status_rna"
                                                                {{ in_array('RNA', request('exclude_status', [])) ? 'checked' : '' }}>
                                                            <label for="exclude_status_rna"
                                                                class="form-check-label">RNA</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" name="exclude_status[]"
                                                                value="Tidak aktif" id="exclude_status_tidak_aktif"
                                                                {{ in_array('Tidak aktif', request('exclude_status', [])) ? 'checked' : '' }}>
                                                            <label for="exclude_status_tidak_aktif"
                                                                class="form-check-label">Tidak Aktif</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" name="exclude_status[]" value="Reject"
                                                                id="exclude_status_reject"
                                                                {{ in_array('Reject', request('exclude_status', [])) ? 'checked' : '' }}>
                                                            <label for="exclude_status_reject"
                                                                class="form-check-label">Reject</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Status 2 Filters -->
                                    <div class="col-md-6">
                                        <div class="card" style="border-radius: 0;">
                                            <div class="card-header" style="background-color: #191970; color: white;">
                                                Status 2 Filters
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <!-- Include Section -->
                                                    <div class="col-md-6">
                                                        <h7>Include</h7>
                                                        <div class="form-check">
                                                            <input type="checkbox" name="include_status_2[]"
                                                                value="jawab oke" id="include_status2_jawab_oke"
                                                                {{ in_array('jawab oke', request('include_status_2', [])) ? 'checked' : '' }}>
                                                            <label for="include_status2_jawab_oke"
                                                                class="form-check-label">Jawab Oke</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" name="include_status_2[]"
                                                                value="Lunas/paid" id="include_status2_lunas_paid"
                                                                {{ in_array('Lunas/ paid', request('include_status_2', [])) ? 'checked' : '' }}>
                                                            <label for="include_status2_lunas_paid"
                                                                class="form-check-label">Lunas/Paid</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" name="include_status_2[]"
                                                                value="RNA" id="include_status2_rna"
                                                                {{ in_array('RNA', request('include_status_2', [])) ? 'checked' : '' }}>
                                                            <label for="include_status2_rna"
                                                                class="form-check-label">RNA</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" name="include_status_2[]"
                                                                value="Tidak aktif" id="include_status2_tidak_aktif"
                                                                {{ in_array('Tidak aktif', request('include_status_2', [])) ? 'checked' : '' }}>
                                                            <label for="include_status2_tidak_aktif"
                                                                class="form-check-label">Tidak Aktif</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" name="include_status_2[]"
                                                                value="Reject" id="include_status2_reject"
                                                                {{ in_array('Reject', request('include_status_2', [])) ? 'checked' : '' }}>
                                                            <label for="include_status2_reject"
                                                                class="form-check-label">Reject</label>
                                                        </div>
                                                    </div>

                                                    <!-- Exclude Section -->
                                                    <div class="col-md-6">
                                                        <h7>Exclude</h7>
                                                        <div class="form-check">
                                                            <input type="checkbox" name="exclude_status_2[]"
                                                                value="jawab oke" id="exclude_status2_jawab_oke"
                                                                {{ in_array('jawab oke', request('exclude_status_2', [])) ? 'checked' : '' }}>
                                                            <label for="exclude_status2_jawab_oke"
                                                                class="form-check-label">Jawab Oke</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" name="exclude_status_2[]"
                                                                value="Lunas/paid" id="exclude_status2_lunas_paid"
                                                                {{ in_array('Lunas/ paid', request('exclude_status_2', [])) ? 'checked' : '' }}>
                                                            <label for="exclude_status2_lunas_paid"
                                                                class="form-check-label">Lunas/Paid</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" name="exclude_status_2[]"
                                                                value="RNA" id="exclude_status2_rna"
                                                                {{ in_array('RNA', request('exclude_status_2', [])) ? 'checked' : '' }}>
                                                            <label for="exclude_status2_rna"
                                                                class="form-check-label">RNA</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" name="exclude_status_2[]"
                                                                value="Tidak aktif" id="exclude_status2_tidak_aktif"
                                                                {{ in_array('Tidak aktif', request('exclude_status_2', [])) ? 'checked' : '' }}>
                                                            <label for="exclude_status2_tidak_aktif"
                                                                class="form-check-label">Tidak Aktif</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" name="exclude_status_2[]"
                                                                value="Reject" id="exclude_status2_reject"
                                                                {{ in_array('Reject', request('exclude_status_2', [])) ? 'checked' : '' }}>
                                                            <label for="exclude_status2_reject"
                                                                class="form-check-label">Reject</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Additional Filters -->
                                    <!-- Add other filters as needed -->
                                </div>
                            </div>
                        </form>

                        <div class="card-body table-responsive">

                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Snd</th>
                                        <th>Nama Cli</th>
                                        <th>Saldo</th>
                                        <th>No HP</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Status 2</th>
                                        <th>Additional Info</th>
                                        <th>Sheet Code</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user_sheet as $userSheet)
                                        <tr>
                                            <td>{{ $userSheet->snd }}</td>
                                            <td>{{ $userSheet->nama_cli }}</td>
                                            <td>{{ $userSheet->saldo }}</td>
                                            <td>{{ $userSheet->no_hp }}</td>
                                            <td>{{ $userSheet->email }}</td>
                                            <td>{{ $userSheet->status }}</td>
                                            <td>{{ $userSheet->status_2 }}</td>
                                            <td>{{ $userSheet->additional_info }}</td>
                                            <td>{{ $userSheet->sheet_code }}</td>
                                            <td style="padding: 0;">
                                                <!-- Button Container -->
                                                <div class="btn-group" role="group"
                                                    style="margin: 0; padding: 0; display: flex; gap: 0;">
                                                    <!-- Show Link -->
                                                    <a href="{{ route('user_sheet.show', ['id' => $userSheet->id]) }}"
                                                        class="btn btn-info btn-custom"
                                                        style="margin: 0; padding: 0; border: none; display: flex; align-items: center; justify-content: center; background-color:#f1f0f1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                            width="16" height="16">
                                                            <path
                                                                d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z" />
                                                        </svg>
                                                    </a>


                                                    <!-- Edit Link -->
                                                    @can('update user sheet')
                                                        <a href="{{ route('user_sheet.edit', ['id' => $userSheet->id]) }}"
                                                            class="btn btn-warning btn-custom"
                                                            style="margin: 0; padding: 0; border: none; display: flex; align-items: center; justify-content: center; background-color:#b1b0b1">
                                                            <i class="gg-pen" style="font-size: 24px;"></i>
                                                        </a>
                                                    @endcan

                                                    <!-- Delete Form -->
                                                        <form method="POST"
                                                            action="{{ route('user_sheet.destroy', $userSheet) }}"
                                                            class="d-inline"
                                                            style="margin: 0; padding: 0; border: none; display: flex; align-items: center; justify-content: center;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-custom"
                                                                style="margin: 0; padding: 0; border: none; background-color: #c3241c; color: white; display: flex; align-items: center; justify-content: center; font-size: 24px;"
                                                                onclick="return confirm('Are you sure you want to delete this item?');">
                                                                <i class="gg-trash" style="font-size: 24px;"></i>
                                                            </button>
                                                        </form>
                                                </div>
                                            </td>



                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{ $user_sheet->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz4fnFO9yquXh0W+MHjt/qJH6rY5w5U5Qd4f79B6sU8OCk9Ykkf6DPlAmz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-13f+G0dr4oX6xkjKgW9pCEesrdK2pfTiSiE9cA7VS3w6cS0xZZ2Q75ar7dAG5DBM" crossorigin="anonymous">
    </script>

    <script>
        document.querySelectorAll('[data-bs-toggle="collapse"]').forEach(button => {
            button.addEventListener('click', function() {
                const isExpanded = this.getAttribute('aria-expanded') === 'true';
                this.querySelector('.toggle-text').classList.toggle('d-none', isExpanded);
                this.querySelector('.toggle-text.d-none').classList.toggle('d-none', !isExpanded);
            });
        });
    </script>
    <script>
        document.getElementById('reset-search').addEventListener('click', function() {
            const searchInput = document.querySelector('input[name="search"]');
            searchInput.value = ''; // Clear the input value
            document.getElementById('search-form').submit(); // Submit the form to reset the search
        });
        document.getElementById('show-filters-btn').addEventListener('click', function() {
            var filters = document.getElementById('filters');
            var button = this;
            if (filters.classList.contains('d-none')) {
                filters.classList.remove('d-none');
                button.textContent = 'Hide Filters';
            } else {
                filters.classList.add('d-none');
                button.textContent = 'Show Filters';
            }
        });
        document.addEventListener('DOMContentLoaded', function() {
            var deleteButtons = document.querySelectorAll('.delete-button');

            deleteButtons.forEach(function(button) {
                button.addEventListener('click', function(event) {
                    var confirmed = confirm('Are you sure you want to delete this item?');
                    if (!confirmed) {
                        event.preventDefault();
                    }
                });
            });
        });
    </script>
@endsection