<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form 1 - Fisherfolk Organization | BFAR - FARMC</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            /* White background */
        }

        table {
            border-collapse: collapse;
            width: calc(300% - 10px);
            /* Adjusted width */
            margin: 20px auto;
            /* Centered horizontally */
        }

        th,
        td {
            border: none;
            /* Remove borders */
            padding: 0;
        }

        th {
            background-color: #f0f0f0;
            /* Light gray background for headers */
            padding: 8px;
        }

        .form-group {
            margin-right: 10px;
        }

        input[type="text"] {
            width: calc(105% - 10px);
            /* Adjusted width for text inputs */
            box-sizing: border-box;
            padding: 6px;
            margin-bottom: 10px;
        }

        button {
            margin-top: -5px;
            font-size: smaller;
        }
    </style>


</head>

<body>

    <!-- side_navbar -->
    @include ('side_navbar')
    <!-- side_navbar -->

    <div class="wrapper">
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="main-header">
                        <a href="index.html" class="logo"><img src="{{ asset('assets/images/Logo_BFAR.png') }}"
                                style=" width: 60px;" alt="logo"></a>
                        <h4>M/C FARMC Municipal | <small>Fisherfolk Association Profile</small></h4>
                        <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                            <li class="breadcrumb-item">
                                <a href="index.php">
                                    <i class="icofont icofont-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Fisherfolk Organization | Municipal </a>
                            </li>
                        </ol>
                        <hr>
                        {{-- <a href="{{ url('/FOform1_ListofMem') }}" class="btn btn-secondary"> <i
                                class="icon-arrow-left"></i>
                            Back</a> --}}
                    </div>
                </div>
                @foreach ($capcon as $capcons)
                    <form class="form-inline" method="POST" action="{{ url('/add_Capcon/' . $capcons->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method ('PUT')
                        <div class="card inline-form-style">
                            <div class="card-header">
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="" class="block form-control-label">6.
                                                Capitalization</em></label>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>1. Membership Fee:</td>
                                                        <td><input id="mem_fee" type="text" class="form-control"
                                                                placeholder="" name="capmem_fee"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>2. Monthly Contribution:</td>
                                                        <td><input id="monthly_cont" type="text" class="form-control"
                                                                placeholder="" name="capmonthly_cont"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>3. Donations:</td>
                                                        <td><input id="donation" type="text" class="form-control"
                                                                placeholder="" name="cap_donation"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>4. Others:</td>
                                                        <td><input id="others" type="text" class="form-control"
                                                                placeholder="" name="cap_others"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Total Capital:</td>
                                                        <td><input id="total_cap" type="text" class="form-control"
                                                                placeholder="" name="captotal_cap" readonly></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="" class="block form-control-label">7. Contact
                                                Information</em></label>
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <label for="" class="col-md-12 captions">Contact
                                                        Person</label>
                                                    <div class="col-md-12">
                                                        <div class="col-md-6">
                                                            <input id="" type="text" class="form-control"
                                                                placeholder="" style="width: 280px"
                                                                name="CIcontact_person">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-2">
                                                    <label for="" class="col-md-12 captions">Landline</label>
                                                    <br> <br>
                                                    <label for="" class="col-md-12 captions">Mobile
                                                        Phone</label>
                                                    <br> <br>
                                                    <label for="" class="col-md-12 captions">Messenger</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" id="" class="form-control"
                                                        style="width:300px" placeholder="" name="CIlandline">
                                                    <input type="text" id="" class="form-control"
                                                        style="width:300px" placeholder="" name="CIMobile">
                                                    <input type="text" id="" class="form-control"
                                                        style="width:300px" placeholder="" name="CIMess">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-md-12 text-right">
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#confirmationModal">SUBMIT</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to submit now?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">No</button>
                                        <button type="submit" class="btn btn-primary">Yes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                @endforeach
            </div>
        </div>
    </div>

    <script>
        const memFeeInput = document.getElementById('mem_fee');
        const monthlyContInput = document.getElementById('monthly_cont');
        const donationInput = document.getElementById('donation');
        const othersInput = document.getElementById('others');
        const totalCapInput = document.getElementById('total_cap');

        [memFeeInput, monthlyContInput, donationInput, othersInput].forEach(input => {
            input.addEventListener('input', calculateTotalCapital);
        });

        function calculateTotalCapital() {
            const memFee = parseFloat(memFeeInput.value) || 0;
            const monthlyCont = parseFloat(monthlyContInput.value) || 0;
            const donation = parseFloat(donationInput.value) || 0;
            const others = parseFloat(othersInput.value) || 0;

            const totalCapital = memFee + monthlyCont + donation + others;

            totalCapInput.value = isNaN(totalCapital) ? '' : '₱' + totalCapital.toFixed(2);
        }

        // Initial calculation
        calculateTotalCapital();
    </script>
</body>

</html>
