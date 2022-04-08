@include('includes.header')

<section class="content">
    <div class="container-fluid">
        <div class="card card-default">
            <div class="card-header">
                <h1 style="text-align: center;">Customer Detail</h1>
            </div>
            <div class="card-body">

                <div id="patient_data" class="row">
                    <div class="col-lg-4 text-center">
                        <center><img
                                style="width: 300px; height:300px; border-radius: 18px; text-shadow: 2px 2px 5px red;"
                                class="img-thumnail patient-image" src="{{ asset('/image/' . $customer->image) }}">
                        </center>
                    </div>
                    <div class="col-lg-6">
                        <center>
                            <table class="table">
                                <tr>
                                    <td style="text-align: center;"><strong>Name</strong></td>
                                    <td>{{ $customer->name }}</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;"><strong>Father Name</strong></td>
                                    <td>{{ $customer->fname }}</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;"><strong>Cnic</strong></td>
                                    <td>{{ $customer->cnic }}</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;"><strong>Address</strong></td>
                                    <td>{{ $customer->address }}</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;"><strong>Locker Number</strong></td>
                                    <td>{{ $customer->locker_number }}</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;"><strong>Timming</strong></td>
                                    <td>{{ $customer->timming }}</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;"><strong>Contact Number</strong></td>
                                    <td>{{ $customer->contact_number }}</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;"><strong>Addmission Fee</strong></td>
                                    <td>{{ $customer->addmission_fee }}</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;"><strong>Monthly Fee</strong></td>
                                    <td>{{ $customer->monthly_fee }}</td>
                                </tr>

                                <tr>
                                    <td style="text-align: center;"><strong>Training Type</strong></td>
                                    <td>
                                        @if ($customer->training == 1)
                                            Normal
                                        @endif
                                        @if ($customer->training == 2)
                                            Special
                                        @endif
                                    </td>
                                </tr>
                            </table>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('includes.footer')
