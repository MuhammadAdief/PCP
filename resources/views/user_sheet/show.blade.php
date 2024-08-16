@extends('user_sheet.layouts')

@section('content')
<style>
    .tab-content .row {
        margin-bottom: 1rem;
    }

    .tab-content label {
        font-weight: bold;
        display: inline-block;
        width: 200px; /* Adjust the width as needed to align colons */
        text-align: left;
        padding-right: 10px;
        position: relative;
    }

    .tab-content .value {
        display: inline-block;
    }

    .tab-content .section-divider {
        border-top: 1px solid #ccc;
        margin: 2rem 0; /* Add margin to ensure proper spacing */
    }

    .tab-content .column-divider {
        border-right: 1px solid #ccc;
        padding-right: 2rem;
    }

    .tab-content .mb-3 {
        margin-bottom: 1.5rem; /* Add margin to create gap between items */
    }

    .tab-content .label-colon::after {
        content: ":";
        position: absolute;
        right: 10px; /* Adjust as needed */
    }

    /* Removed margin-top from .nav-tabs to remove the gap above tab headers */
    .nav-tabs {
        margin-top: 0; /* Ensure no extra gap above the tab headers */
    }

    /* Add margin-top to create a gap below the tab headers */
    .tab-content {
        margin-top: 2rem; /* Gap between tab headers and the tab content */
    }
    .nav-tabs .nav-link {
        color: black;
    }
    .nav-tabs .nav-link.active {
        color: #191970;
        font-weight: bold;
    }
</style>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="border-radius: 0;">

                    <div class="card-body">
                            <a href="{{ url('user_sheet') }}" class="btn btn-primary float-end" style="border-radius: 0;background-color:#191970">Back</a>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="customer-info-tab" data-bs-toggle="tab" data-bs-target="#customer-info" type="button" role="tab" aria-controls="customer-info" aria-selected="true">Customer Info</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="editing-tab" data-bs-toggle="tab" data-bs-target="#editing" type="button" role="tab" aria-controls="editing" aria-selected="false">Customer Status</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="customer-info" role="tabpanel" aria-labelledby="customer-info-tab">
                                <!-- Customer Info Tab Content -->
                                <div class="row">
                                    <div class="col-md-6 column-divider">
                                        <div class="mb-3">
                                            <label class="label-colon">Nper</label>
                                            <span class="value">{{ $userSheet->nper }}</span>
                                        </div>
                                        <div class="mb-3">
                                            <label class="label-colon">Snd</label>
                                            <span class="value">{{ $userSheet->snd }}</span>
                                        </div>
                                        <div class="mb-3">
                                            <label class="label-colon">Snd Group</label>
                                            <span class="value">{{ $userSheet->snd_group }}</span>
                                        </div>
                                        <div class="mb-3">
                                            <label class="label-colon">Nama Cli</label>
                                            <span class="value">{{ $userSheet->nama_cli }}</span>
                                        </div>
                                        <div class="mb-3">
                                            <label class="label-colon">Alamat</label>
                                            <span class="value">{{ $userSheet->alamat }}</span>
                                        </div>
                                        <div class="mb-3">
                                            <label class="label-colon">Ubis</label>
                                            <span class="value">{{ $userSheet->ubis }}</span>
                                        </div>
                                        <div class="mb-3">
                                            <label class="label-colon">Desc Newbill</label>
                                            <span class="value">{{ $userSheet->desc_newbill }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="label-colon">Usage Desc</label>
                                            <span class="value">{{ $userSheet->usage_desc }}</span>
                                        </div>
                                        <div class="mb-3">
                                            <label class="label-colon">Lama Berlangganan</label>
                                            <span class="value">{{ $userSheet->lama_berlangganan }}</span>
                                        </div>
                                        <div class="mb-3">
                                            <label class="label-colon">Saldo</label>
                                            <span class="value">{{ $userSheet->saldo }}</span>
                                        </div>
                                        <div class="mb-3">
                                            <label class="label-colon">No HP</label>
                                            <span class="value">{{ $userSheet->no_hp }}</span>
                                        </div>
                                        <div class="mb-3">
                                            <label class="label-colon">Email</label>
                                            <span class="value">{{ $userSheet->email }}</span>
                                        </div>
                                        <div class="mb-3">
                                            <label class="label-colon">Sheet Code</label>
                                            <span class="value">{{ $userSheet->sheet_code }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="editing" role="tabpanel" aria-labelledby="editing-tab">
                                <!-- Editing Tab Content -->
                                <div class="row">
                                    <div class="col-md-6 column-divider">
                                        <div class="mb-3">
                                            <label class="label-colon">Tanggal Caring 1</label>
                                            <span class="value">{{ $userSheet->tanggal_caring_1 }}</span>
                                        </div>
                                        <div class="mb-3">
                                            <label class="label-colon">Petugas</label>
                                            <span class="value">{{ $userSheet->petugas }}</span>
                                        </div>
                                        <div class="mb-3">
                                            <label class="label-colon">Status</label>
                                            <span class="value">{{ $userSheet->status }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="label-colon">Tanggal Caring 2</label>
                                            <span class="value">{{ $userSheet->tanggal_caring_2 }}</span>
                                        </div>
                                        <div class="mb-3">
                                            <label class="label-colon">Petugas 2</label>
                                            <span class="value">{{ $userSheet->petugas_2 }}</span>
                                        </div>
                                        <div class="mb-3">
                                            <label class="label-colon">Status 2</label>
                                            <span class="value">{{ $userSheet->status_2 }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="section-divider"></div>
                                <div class="mb-3">
                                    <label class="label-colon">Additional Info</label>
                                    <span class="value">{{ $userSheet->additional_info }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var myTab = new bootstrap.Tab(document.querySelector('#myTab button[data-bs-target="#customer-info"]'))
        myTab.show()
    });
</script>
@endpush
