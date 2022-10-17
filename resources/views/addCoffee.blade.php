@extends('layout')
@section('content')
    <title>Add New Coffee</title>
    <div class="container mt-4">
        <div class="header text-center fst-italic">
            <h3>Add New Coffee</h3>
            <p>fill in the name, quantity and price of the new coffee product</p>
        </div>
        <div class="form">
            <form action="/addCoffee/store" method="POST">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                {{-- Name of Coffee --}}
                <div class="row mb-3">
                    <label for="nameCoffee" class="col-form-label col-sm-4 col-md-3 col-xl-2"><strong>Name</strong></label>
                    <div class="col-sm-8 col-md-9 col-xl-10">
                        <input type="text" class="form-control" name="nameCoffee" id="nameCoffee"
                            placeholder="Name of Coffee" required
                            oninvalid="this.setCustomValidity('Nama tidak boleh Kosong')"
                            oninput="this.setCustomValidity('')" />
                        @if ($errors->has('nameCoffee'))
                            <div class="text-danger">
                                {{ $errors->first('nameCoffee') }}
                            </div>
                        @endif
                    </div>
                </div>
                {{-- Units in Stock --}}
                <div class="row mb-3">
                    <label for="stock" class="col-form-label col-sm-4 col-md-3 col-xl-2"><strong>Stok
                            (gr)</strong></label>
                    <div class="col-sm-8 col-md-9 col-xl-10">
                        <input type="number" class="form-control" min="0" max="99999" name="stock"
                            id="stock" placeholder="Units in Stock" autocomplete="off" required
                            oninvalid="this.setCustomValidity('Invalid input')"
                            oninput="this.setCustomValidity('')" />
                        @if ($errors->has('stock'))
                            <div class="text-danger">
                                {{ $errors->first('stock') }}
                            </div>
                        @endif
                    </div>
                </div>
                {{-- Units in Price --}}
                <div class="row mb-3">
                    <label for="price" class="col-form-label col-sm-4 col-md-3 col-xl-2"><strong>Harga
                            (Rp)</strong></label>
                    <div class="col-sm-8 col-md-9 col-xl-10">
                        <input type="number" class="form-control" min="0" max="9999999999" step="500"
                            name="price" id="price" placeholder="Units in Price" autocomplete="off"
                            required oninvalid="this.setCustomValidity('Invalid input')"
                            oninput="this.setCustomValidity('')" />
                        @if ($errors->has('price'))
                            <div class="text-danger">
                                {{ $errors->first('price') }}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row mb-3 justify-content-end mx-3 my-4">
                    <div class="col-sm-8 col-md-9 col-xl-10" style="text-align:end;">
                        <input type="submit" class="btn btn-primary mx-3" value="Tambah">
                        <a type="button" class="btn btn-secondary border" href="/home">
                            Batal
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
