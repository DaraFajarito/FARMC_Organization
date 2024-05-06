<!DOCTYPE html>
<html lang="en">

<head>
    <title>Organizational Membership | BFAR - FARMC</title>
    <link rel="icon" href="{{ asset('assets/images/icon.png') }}" type="image/png">

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="codedthemes">
    <meta name="keywords"
        content=", Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="codedthemes">
</head>

<style>
    input.form-control {
        border: 1px solid #AAAAAA;
    }
</style>

<body>
    <!-- side_navbar -->
    @include ('side_navbar')
    <!-- side_navbar -->

    <div class="wrapper">
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row">

                    <div class="main-header">
                        <a href="index.html" class="logo" style="display: inline-block; vertical-align: middle;">
                            <img src="{{ asset('assets/images/newlogo.png') }}" style="width: 40px;" alt="logo">
                        </a>
                        <span style="display: inline-block; vertical-align: middle; margin-top:10px">
                            <div>
                                <h4 style="margin: 0;">FARMC Membership</h4>
                            </div>
                        </span>

                        <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                            <li class="breadcrumb-item">
                                <a href="index.php">
                                    <i class="icofont icofont-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">FARMC Membership | Organizational
                                    Membership</a>
                            </li>
                        </ol>
                    </div>

                    <div class="col-lg-12 inline-forms">

                        {{-- <a class="btn btn-secondary"> <i class="icon-arrow-left"></i> Back</a>
                        <br> <br> --}}

                        <form class="form-inline" action="{{ url('/add-orgmembership/' . $data->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method ('PUT')
                            <div class="card">
                                <div class="card-block">
                                        <div class="card-header">
                                            <div class="col-sm--1 col-xs--1 waves-effect waves-light">
                                                <div class="grid-material bg-general">Organizational Membership</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <div class="form-group m-r-15">
                                                        <label for="inline3mail" class="block form-control-label">Name
                                                            of Association/Organization/Cooperative <em></em></label>
                                                        <input id="inline3mail" type="text" class="form-control"
                                                            name="org_mem_name" style="width: 1100px;" placeholder="">
                                                    </div>
                                                    <br><br>
                                                    <div class="form-group m-r-15">
                                                        <label for="inline3mail"
                                                            class="block form-control-label">Address of
                                                            Association/Organization/Cooperative <em></em></label>
                                                        <input id="inline3mail" type="text" class="form-control"
                                                            name="add_acc" style="width: 1100px;" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <!-- <div class="card-block"> -->
                                            <div class="row">
                                                <div class="col-md-4    ">
                                                    <div class="grid-material bg-general"><em>Composition of
                                                            Membership</em></div>
                                                    <br>
                                                    <div class="form-radio">
                                                        <div class="radio radio-inline">

                                                            <label>
                                                                <input type="radio" name="comp_mem"
                                                                    value="Municipal" /><i class="helper"></i>Municipal
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="comp_mem"
                                                                    value="Fishworker" /><i
                                                                    class="helper"></i>Fishworker
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="comp_mem"
                                                                    value="Cultural Community (IPs)" /><i
                                                                    class="helper"></i>Cultural Community (IP's)
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="comp_mem"
                                                                    value="Commercial" /><i
                                                                    class="helper"></i>Commercial
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="comp_mem"
                                                                    value="Women/Youth" /><i
                                                                    class="helper"></i>Women/Youth
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="grid-material bg-general"><em>Registration of
                                                            Association</em></div>
                                                    <br>
                                                    <div class="form-radio">
                                                        <div class="radio radio-inline">
                                                            <label>
                                                                <input type="radio" name="reg_ass"
                                                                    onclick="toggleTextBox('otherTextBox4')"
                                                                    value="Yes" />
                                                                <i class="helper"></i> Yes
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="reg_ass"
                                                                    value="No" />
                                                                <i class="helper"></i> No
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group" id="otherTextBox4" style="display:none;">
                                                        <label for="inline3mail"
                                                            class="block form-control-label"><small>If
                                                                Yes, please specify</small></label>
                                                        <input id="otherInput" type="text" name="reg_ass_yes"
                                                            value="" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-md-5">
                                                    <div class="grid-material bg-general"><em>LGU Accreditation</em>
                                                    </div>
                                                    <br>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-radio">
                                                                    <div class="radio radio-inline">
                                                                        <label>
                                                                            <input type="radio" name="lgu_accre"
                                                                                value="Yes"
                                                                                onclick="toggleTextBox('otherTextBox')" /><i
                                                                                class="helper"></i>Yes
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-radio">
                                                                    <div class="radio radio-inline">
                                                                        <label>
                                                                            <input type="radio" name="lgu_accre"
                                                                                value="No" /><i
                                                                                class="helper"></i>No
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br><br>
                                                    <div class="form-group row">
                                                        <div class="col-md-6">
                                                            <label for="reg_no">Reg. No.</label>
                                                            <input id="reg_no" type="text" class="form-control"
                                                                name="reg_no" placeholder="Reg. No.">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="date">Date</label>
                                                            <input id="date" type="text" class="form-control"
                                                                name="date" placeholder="Date">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="grid-material bg-general"><em>Officer of
                                                            Association</em></div>
                                                    <br>
                                                    <div class="form-radio">
                                                        <div class="radio radio-inline">
                                                            <label>
                                                                <input type="radio" name="officer_ass"
                                                                    onclick="toggleTextBox('otherTextBox5')"
                                                                    value="Yes" />
                                                                <i class="helper"></i> Yes
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="officer_ass"
                                                                    value="No" />
                                                                <i class="helper"></i> No
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="officer_ass"
                                                                    value="Member only" />
                                                                <i class="helper"></i> Member only
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group" id="otherTextBox5" style="display:none;">
                                                        <label for="inline3mail"
                                                            class="block form-control-label"><small>If
                                                                Yes, please specify</small></label>
                                                        <input id="otherInput" type="text" value=""
                                                            class="form-control" name="position">
                                                    </div>
                                                </div>



                                                <div class="col-md-4">
                                                    <div class="grid-material bg-general"><em>Involvement in
                                                            Mangingisdang Director Program</em></div>
                                                    <br>
                                                    <div class="radio-container">
                                                        <div class="form-group">
                                                            <input type="radio" class="form-check-input"
                                                                name="involvement_mdo"
                                                                value="Provincial Fisherfolk Representative"
                                                                id="pro_radio">
                                                            <label class="form-check-label" for="pro_radio">Provincial
                                                                Fisherfolk Representative</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="radio" class="form-check-input"
                                                                name="involvement_mdo"
                                                                value="Regional Fisherfolk Director" id="re_radio">
                                                            <label class="form-check-label" for="re_radio">Regional
                                                                Fisherfolk Director</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="radio" class="form-check-input"
                                                                name="involvement_mdo"
                                                                value="National Fisherfolk Director" id="na_radio">
                                                            <label class="form-check-label" for="na_radio">National
                                                                Fisherfolk Director</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="grid-material bg-general"><em>Year Elected</em></div>
                                                    <br>
                                                    <div class="form-inline" style="line-height: 0.3;">
                                                        <div>
                                                            <label>
                                                                <input type="text" class="form-control"
                                                                    name="year1" placeholder=""
                                                                    style="width:150px">
                                                            </label>
                                                            <br><br>
                                                            <label>
                                                                <input type="text" class="form-control"
                                                                    name="year2" placeholder=""
                                                                    style="width:150px">
                                                            </label>
                                                            <br><br>
                                                            <label>
                                                                <input type="text" class="form-control"
                                                                    name="year3" placeholder=""
                                                                    style="width:150px">
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div style="display: flex; justify-content: center;">
                                                    <div style="width: 300px; text-align: center;"
                                                        class="signature-container">
                                                        <p style="margin: 0;">I hereby certify that the above
                                                            information is true and correct to the best of my knowledge
                                                            and belief.</p>
                                                        <br><br>
                                                        <div
                                                            style="border-bottom: 1px solid black; margin-bottom: 10px;">
                                                        </div>
                                                        <label for="signatureFile" class="signature-line"
                                                            style="text-align: center;">Member's Signature</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div style="flex: 1; display: flex; padding-left:60px;">
                                                    <div
                                                        style="width: 120px; height: 110px; border: 1px solid black; margin-right: 20px;">
                                                    </div> <!-- First Thumbmarks box -->
                                                    <div style="width: 120px; height: 110px; border: 1px solid black;">
                                                    </div> <!-- Second Thumbmarks box -->
                                                </div>
                                                <div style="flex: 1; display: flex; align-items: center;">
                                                    <div style="width: 20px;"></div>
                                                    <!-- Add space between thumbmarks and photo box -->
                                                </div>
                                                <div style="text-align: center;">
                                                    <p>Thumbmarks</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div
                                                    style="margin-left: 100px; width: 130px; height: 120px; border: 1px solid black; display: flex; align-items: center; justify-content: center; margin-right: 20px;">
                                                    <input type="file" id="photo1x1" accept="image/*"
                                                        name="photo" style="display: none;">
                                                    <label for="photo1x1" id="label1x1" style="cursor: pointer;">1x1
                                                        Photo</label> <!-- 1x1 photo box -->
                                                    <img id="preview1x1" src="#" alt="Preview"
                                                        style="display: none; max-width: 100%; max-height: 100%; cursor: pointer;">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-primary">Submit<i
                                                    class="icon-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script>
        const photoInput = document.getElementById('photo1x1');
        const photoLabel = document.getElementById('label1x1');
        const photoPreview = document.getElementById('preview1x1');

        // Function to handle file input change
        function handleFileInputChange() {
            const file = photoInput.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    photoPreview.src = e.target.result;
                    photoPreview.style.display = 'block';
                    photoLabel.style.display = 'none';
                };
                reader.readAsDataURL(file);
            }
        }

        // Trigger file input click when the image is clicked
        photoPreview.addEventListener('click', function() {
            photoInput.click();
        });

        // Listen for file input change
        photoInput.addEventListener('change', handleFileInputChange);
    </script>

    <script>
        function toggleTextBox(radioId) {
            var textBoxGroup = document.getElementById('textBoxGroup');
            var radio = document.getElementById(radioId);
            if (radio.value === 'Yes') {
                textBoxGroup.style.display = 'block';
            } else {
                textBoxGroup.style.display = 'none';
            }
        }
    </script>

    <script>
        function toggleTextBox1(radioId) {
            var textBoxGroup1 = document.getElementById('textBoxGroup1');
            var radio = document.getElementById(radioId);
            if (radio.value === 'Yes') {
                textBoxGroup1.style.display = 'block';
            } else {
                textBoxGroup1.style.display = 'none';
            }
        }
    </script>

    <script>
        function toggleTextBox(textboxId) {
            var textBox = document.getElementById(textboxId);

            if (textBox) {
                textBox.style.display = 'block';
            }
        }
    </script>

    <script>
        function showTertiaryTextbox() {
            document.getElementById('tertiaryTextboxGroup').style.display = 'block';
            document.getElementById('tesdaTextboxGroup').style.display = 'none';
        }

        function showTesdaTextbox() {
            document.getElementById('tesdaTextboxGroup').style.display = 'block';
            document.getElementById('tertiaryTextboxGroup').style.display = 'none';
        }
    </script>


</body>

</html>
