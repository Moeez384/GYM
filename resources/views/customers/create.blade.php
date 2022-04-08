@include('includes.header')
<div class="row">
    <h4 class="card-title">Please Enter Customer Information</h4>
    <br>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <form class="form pt-3" method="post" enctype="multipart/form-data"
                    action="{{ route('Customers.store') }}">
                    @csrf
                    <div class="form-group col-lg-12">
                        <label for='Username'>Name</label>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon11"><i class="ti-user"></i></span>
                            </div>
                            <x-input id="name" type="text" name="name" :value="old('name')" placeholder="Name" required
                                autofocus class="@error('name') is-invalid @enderror form-control"
                                class="form-control" aria-describedby="basic-addon11" />

                        </div>
                    </div>


                    <div class="form-group col-lg-12">
                        <label for='Username'>Father Name</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon11"><i class="ti-user"></i></span>
                            </div>
                            <x-input id="fname" type="text" name="fname" :value="old('fname')"
                                class="@error('fname') is-invalid @enderror form-control" placeholder="Father Name"
                                required autofocus class="form-control" aria-describedby="basic-addon11" />

                        </div>
                    </div>


                    <div class="form-group col-lg-12">
                        <label for='Username'>Address</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon11"><i class="ti-user"></i></span>
                            </div>
                            <x-input id="name" type="text" name="address" :value="old('address')"
                                class="@error('address') is-invalid @enderror form-control" placeholder="Address"
                                required autofocus class="form-control" aria-describedby="basic-addon11" />

                        </div>
                    </div>


                    <div class="form-group col-lg-12">
                        <label for='Username'>Cnic</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon11"><i class="ti-user"></i></span>
                            </div>
                            <x-input id="name" type="text" maxlength="13" name="cnic" :value="old('cnic')"
                                placeholder="Cnic" class="@error('cnic') is-invalid @enderror form-control" required
                                autofocus class="form-control" aria-describedby="basic-addon11" />

                        </div>
                    </div>


                    <div class="form-group col-lg-12">
                        <label for='Username'>Locker Number</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon11"><i class="ti-user"></i></span>
                            </div>
                            <x-input id="lockerNumber" type="text" name="lockerNumber" :value="old('lockerNumber')"
                                placeholder="Locker Number"
                                class="@error('lockerNumber') is-invalid @enderror form-control" required autofocus
                                class="form-control" aria-describedby="basic-addon11" />

                        </div>
                    </div>

                    <div class="form-group  col-lg-12">
                        <label for="cnic">Timming</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon22"><i class="ti-id-badge"></i></span>
                            </div>
                            <x-input required name="timming" type="time" :value="old('timming')"
                                class="@error('timming') is-invalid @enderror form-control" class="form-control"
                                placeholder="Timming" aria-describedby="basic-addon22" />

                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card" style="height: 608px;">
            <div class="card-body">

                <div class="form-group  col-lg-12">
                    <label for="cnic">Contact Number</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon22"><i class="ti-id-badge"></i></span>
                        </div>
                        <x-input required name="contactNumber" type="text" maxlength="11" :value="old('contactNumber')"
                            class="form-control" placeholder="Contact Number" aria-label="CNIC"
                            aria-describedby="basic-addon22" />

                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="date">Training</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="ti-calendar"></i></span>
                            </div>
                            <select name="training" class="form-control custom-select">
                                <option value="">Training Type</option>
                                <option value="1" {{ '1' == old('training', '') ? 'selected' : '' }}>Normal</option>
                                <option value="2" {{ '2' == old('training', '') ? 'selected' : '' }}>Special</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group  col-lg-12">
                    <label for="cnic">Addmission Fee</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon22"><i class="ti-id-badge"></i></span>
                        </div>
                        <x-input required name="addmissionFee" type="number" :value="old('addmissionFee')"
                            class="@error('addmissionFee') is-invalid @enderror form-control" class="form-control"
                            placeholder="Addmission Fee" aria-label="CNIC" aria-describedby="basic-addon22" />
                    </div>
                </div>


                <div class="form-group  col-lg-12">
                    <label for="cnic">Monthly Fee</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon22"><i class="ti-id-badge"></i></span>
                        </div>
                        <x-input required name="monthlyFee" type="text" :value="old('monthlyFee')"
                            class="@error('monthlyFee') is-invalid @enderror form-control" class="form-control"
                            placeholder="Monthly Fee" aria-label="CNIC" aria-describedby="basic-addon22" />

                    </div>
                    @error('monthlyFee')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group  col-lg-12">
                    <label for="cnic">Image</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon22"><i class="ti-id-badge"></i></span>
                        </div>
                        <x-input required name="image" type="file" :value="old('image')"
                            class="@error('image') is-invalid @enderror form-control" class="form-control"
                            placeholder="File" aria-label="CNIC" aria-describedby="basic-addon22" />

                    </div>
                    @error('image')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <button id="submit" type="submit" class="btn btn-success mr-2" style="float: right;">Add
                        Customer</button>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
</div>
</div>
</div>

@include('includes.footer')
@include('includes.messages')
