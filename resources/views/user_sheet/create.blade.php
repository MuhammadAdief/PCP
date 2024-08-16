@extends('user_sheet.layouts')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card" style="border-radius: 0;">
                <div class="card-header">
                    <h4>Create User Sheet
                        <a href="{{ url('user_sheet') }}" class="btn btn-primary float-end"
                            style="background-color: #191970; border-radius:0;">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('user_sheet.store') }}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Nper</label>
                                    <input type="number" name="nper" class="form-control" />
                                    @error('nper') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <label>Snd</label>
                                    <input type="number" name="snd" class="form-control" />
                                    @error('snd') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <label>Snd Group</label>
                                    <input type="number" name="snd_group" class="form-control" />
                                    @error('snd_group') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <label>Nama Cli</label>
                                    <input type="text" name="nama_cli" class="form-control" />
                                    @error('nama_cli') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <label>Alamat</label>
                                    <input type="text" name="alamat" class="form-control" />
                                    @error('alamat') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <label>Ubis</label>
                                    <input type="text" name="ubis" class="form-control" />
                                    @error('ubis') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <label>Desc Newbill</label>
                                    <input type="text" name="desc_newbill" class="form-control" />
                                    @error('desc_newbill') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <label>Usage Desc</label>
                                    <input type="text" name="usage_desc" class="form-control" />
                                    @error('usage_desc') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <label>Lama Berlangganan</label>
                                    <input type="number" name="lama_berlangganan" class="form-control" />
                                    @error('lama_berlangganan') <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label>Saldo</label>
                                    <input type="number" name="saldo" class="form-control" />
                                    @error('saldo') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>No HP</label>
                                    <input type="number" name="no_hp" class="form-control" />
                                    @error('no_hp') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" />
                                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <label>Tanggal Caring 1</label>
                                    <input type="text" name="tanggal_caring_1" class="form-control" />
                                    @error('tanggal_caring_1') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <label>Petugas</label>
                                    <input type="text" name="petugas" class="form-control" />
                                    @error('petugas') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <label>Status</label>
                                    <select name="status" class="form-control">
                                        <option value="jawab oke">Jawab Oke</option>
                                        <option value="Lunas/paid">Lunas/Paid</option>
                                        <option value="RNA">RNA</option>
                                        <option value="Tidak aktif">Tidak Aktif</option>
                                        <option value="Reject">Reject</option>
                                    </select>
                                    @error('status') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <label>Tanggal Caring 2</label>
                                    <input type="text" name="tanggal_caring_2" class="form-control" />
                                    @error('tanggal_caring_2') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <label>Petugas 2</label>
                                    <input type="text" name="petugas_2" class="form-control" />
                                    @error('petugas_2') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <label>Status 2</label>
                                    <select name="status_2" class="form-control">
                                        <option value="jawab oke">Jawab Oke</option>
                                        <option value="Lunas/paid">Lunas/Paid</option>
                                        <option value="RNA">RNA</option>
                                        <option value="Tidak aktif">Tidak Aktif</option>
                                        <option value="Reject">Reject</option>
                                    </select>
                                    @error('status_2') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <label>Additional Info</label>
                                    <input type="text" name="additional_info" class="form-control" />
                                    @error('additional_info') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <label>Sheet Code</label>
                                    <input type="text" name="sheet_code" class="form-control" />
                                    @error('sheet_code') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary"
                                style="background-color: #191970; border-radius:0%; border:0;">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection