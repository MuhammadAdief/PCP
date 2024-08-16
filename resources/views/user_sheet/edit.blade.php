@extends('user_sheet.layouts')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card" style="border-radius: 0;">

                <div class="card-body">
                    <a href="{{ url('user_sheet') }}" class="btn btn-primary float-end"
                        style="border-radius: 0; background-color:#191970">Back</a>

                    <form action="{{ route('user_sheet.update', ['id' => $userSheet->id]) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="customer-info-tab" data-bs-toggle="tab"
                                    data-bs-target="#customer-info" type="button" role="tab"
                                    aria-controls="customer-info" aria-selected="true">Edit Customer Info</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="editing-tab" data-bs-toggle="tab" data-bs-target="#editing"
                                    type="button" role="tab" aria-controls="editing" aria-selected="false">Edit Customer
                                    Status</button>
                            </li>
                        </ul>

                        <div style="margin-top: 30px;"></div> <!-- 3 lines gap -->

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="customer-info" role="tabpanel"
                                aria-labelledby="customer-info-tab">
                                <div class="row">
                                    <div class="col-md-6 column-divider">
                                        <!-- Customer Info Left Column -->

                                        <div class="mb-3">
                                            <label class="label-colon">Nper</label>
                                            @can('delete user sheet')
                                                <input type="number" name="nper" class="form-control"
                                                    value="{{ old('nper', $userSheet->nper) }}" />
                                                @error('nper') <span class="text-danger">{{ $message }}</span> @enderror
                                            @endcan
                                        </div>
                                        <div class="mb-3">
                                            <label class="label-colon">Snd</label>
                                            @can('delete user sheet')
                                                <input type="number" name="snd" class="form-control"
                                                    value="{{ old('snd', $userSheet->snd) }}" />
                                                @error('snd') <span class="text-danger">{{ $message }}</span> @enderror
                                            @endcan
                                        </div>
                                        <div class="mb-3">
                                            <label class="label-colon">Snd Group</label>
                                            @can('delete user sheet')
                                                <input type="number" name="snd_group" class="form-control"
                                                    value="{{ old('snd_group', $userSheet->snd_group) }}" />
                                                @error('snd_group') <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            @endcan
                                        </div>
                                        <div class="mb-3">
                                            <label class="label-colon">Nama Cli</label>
                                            @can('delete user sheet')
                                                <input type="text" name="nama_cli" class="form-control"
                                                    value="{{ old('nama_cli', $userSheet->nama_cli) }}" />
                                                @error('nama_cli') <span class="text-danger">{{ $message }}</span> @enderror
                                            @endcan
                                        </div>
                                        <div class="mb-3">
                                            <label class="label-colon">Alamat</label>
                                            @can('delete user sheet')
                                                <input type="text" name="alamat" class="form-control"
                                                    value="{{ old('alamat', $userSheet->alamat) }}" />
                                                @error('alamat') <span class="text-danger">{{ $message }}</span> @enderror
                                            @endcan
                                        </div>

                                        <div class="mb-3">
                                            <label class="label-colon">Ubis</label>
                                            @can('delete user sheet')
                                                <input type="text" name="ubis" class="form-control"
                                                    value="{{ old('ubis', $userSheet->ubis) }}" />
                                                @error('ubis') <span class="text-danger">{{ $message }}</span> @enderror
                                            @endcan
                                        </div>

                                        <div class="mb-3">
                                            <label class="label-colon">Desc Newbill</label>
                                            @can('delete user sheet')
                                                <input type="text" name="desc_newbill" class="form-control"
                                                    value="{{ old('desc_newbill', $userSheet->desc_newbill) }}" />
                                                @error('desc_newbill') <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            @endcan
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Customer Info Right Column -->
                                        <div class="mb-3">
                                            <label class="label-colon">Usage Desc</label>
                                            @can('delete user sheet')
                                                <input type="text" name="usage_desc" class="form-control"
                                                    value="{{ old('usage_desc', $userSheet->usage_desc) }}" />
                                                @error('usage_desc') <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            @endcan
                                        </div>
                                        <div class="mb-3">
                                            <label class="label-colon">Lama Berlangganan</label>
                                            @can('delete user sheet')
                                                <input type="number" name="lama_berlangganan" class="form-control"
                                                    value="{{ old('lama_berlangganan', $userSheet->lama_berlangganan) }}" />
                                                @error('lama_berlangganan') <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            @endcan
                                        </div>
                                        <div class="mb-3">
                                            <label class="label-colon">Saldo</label>
                                            @can('delete user sheet')
                                                <input type="number" name="saldo" class="form-control"
                                                    value="{{ old('saldo', $userSheet->saldo) }}" />
                                                @error('saldo') <span class="text-danger">{{ $message }}</span> @enderror
                                            @endcan
                                        </div>
                                        <div class="mb-3">
                                            <label class="label-colon">No HP</label>
                                            @can('delete user sheet')
                                                <input type="number" name="no_hp" class="form-control"
                                                    value="{{ old('no_hp', $userSheet->no_hp) }}" />
                                                @error('no_hp') <span class="text-danger">{{ $message }}</span> @enderror
                                            @endcan
                                        </div>
                                        <div class="mb-3">
                                            <label class="label-colon">Email</label>
                                            @can('delete user sheet')
                                                <input type="email" name="email" class="form-control"
                                                    value="{{ old('email', $userSheet->email) }}" />
                                                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                            @endcan
                                        </div>
                                        <div class="mb-3">
                                            <label class="label-colon">Sheet Code</label>
                                            @can('delete user sheet')
                                                <input type="text" name="sheet_code" class="form-control"
                                                    value="{{ old('sheet_code', $userSheet->sheet_code) }}" />
                                                @error('sheet_code') <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            @endcan
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="editing" role="tabpanel" aria-labelledby="editing-tab">
                                <div class="row">
                                    <div class="col-md-6 column-divider">
                                        <!-- Customer Edit Status Left Column -->
                                        <div class="mb-3">
                                            <label class="label-colon">Tanggal Caring</label>
                                            <input type="text" name="tanggal_caring" class="form-control"
                                                value="{{ old('tanggal_caring', $userSheet->tanggal_caring_1) }}" />
                                            @error('tanggal_caring') <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="label-colon">Petugas</label>
                                            <input type="text" name="petugas" class="form-control"
                                                value="{{ old('petugas', $userSheet->petugas) }}" />
                                            @error('petugas') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="label-colon">Status</label>
                                            <select name="status" class="form-control">
                                                <option value="jawab oke" {{ old('status', $userSheet->status) == 'jawab oke' ? 'selected' : '' }}>Jawab Oke</option>
                                                <option value="Lunas/ paid" {{ old('status', $userSheet->status) == 'Lunas/paid' ? 'selected' : '' }}>Lunas/Paid
                                                </option>
                                                <option value="RNA" {{ old('status', $userSheet->status) == 'RNA' ? 'selected' : '' }}>RNA</option>
                                                <option value="Salah sambung" {{ old('status', $userSheet->status) == 'Salah sambung' ? 'selected' : '' }}>Salah
                                                    Sambung</option>
                                                <option value="Telp tidak diangkat" {{ old('status', $userSheet->status) == 'Telp tidak diangkat' ? 'selected' : '' }}>Telp
                                                    tidak diangkat</option>
                                            </select>
                                            @error('status') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Customer Edit Status Right Column -->
                                        <div class="mb-3">
                                            <label class="label-colon">Tanggal Caring 2</label>
                                            <input type="text" name="tanggal_caring_2" class="form-control"
                                                value="{{ old('tanggal_caring_2', $userSheet->tanggal_caring_2) }}" />
                                            @error('tanggal_caring_2') <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="label-colon">Petugas 2</label>
                                            <input type="text" name="petugas_2" class="form-control"
                                                value="{{ old('petugas_2', $userSheet->petugas_2) }}" />
                                            @error('petugas_2') <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="label-colon">Status 2</label>
                                            <select name="status_2" class="form-control">
                                                <option value="jawab oke" {{ old('status_2', $userSheet->status_2) == 'jawab oke' ? 'selected' : '' }}>Jawab Oke
                                                </option>
                                                <option value="Lunas/ paid" {{ old('status_2', $userSheet->status_2) == 'Lunas/paid' ? 'selected' : '' }}>Lunas/Paid
                                                </option>
                                                <option value="RNA" {{ old('status_2', $userSheet->status_2) == 'RNA' ? 'selected' : '' }}>RNA</option>
                                                <option value="Salah sambung" {{ old('status_2', $userSheet->status_2) == 'Salah sambung' ? 'selected' : '' }}>Salah
                                                    Sambung</option>
                                                <option value="Telp tidak diangkat" {{ old('status_2', $userSheet->status_2) == 'Telp tidak diangkat' ? 'selected' : '' }}>
                                                    Telp tidak diangkat</option>
                                            </select>
                                            @error('status_2') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div style="text-align: center; margin-top: 10px;">
                                <button type="submit" class="btn btn-primary"
                                    style="border-radius: 0; border: 0; background-color: #191970; width: 120px; display: inline-block;">Update</button>
                            </div>

                        </div>
                </div>
                </form>

            </div>

        </div>
    </div>
</div>
</div>

<style>
    .label-colon {
        font-weight: bold;
    }

    .column-divider {
        border-right: 1px solid #ccc;
    }

    .nav-tabs .nav-link {
        color: black;
    }

    .nav-tabs .nav-link.active {
        color: #191970;
        font-weight: bold;
    }
</style>

@endsection