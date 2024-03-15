<DOCTYPE html>
    <html lang="en">

    <head>
        <title>All Dashboard | BFAR - FARMC</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    </head>

    <body>

        <!-- side_navbar -->
        @include ('side_navbar')

        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">You did not meet the requirements</h5>
                </div>
                <div class="card-body">
                    <ul>
                        @if(in_array('municipality', $nullFields))
                        <li>Municipality is missing</li>
                        @endif
                        @if(in_array('name_sec', $nullFields))
                        <li>Name of Secretariat is missing</li>
                        @endif
                        @if(in_array('name_sec1', $nullFields))
                        <li>Name of Secretariat 1 is missing</li>
                        @endif
                        @if(in_array('name_sec2', $nullFields))
                        <li>Name of Secretariat 2 is missing</li>
                        @endif
                        @if(in_array('office_org', $nullFields))
                        <li>Office Organization is missing</li>
                        @endif
                        @if(in_array('office_org1', $nullFields))
                        <li>Office Organization 1 is missing</li>
                        @endif
                        @if(in_array('office_org2', $nullFields))
                        <li>Office Organization 2 is missing</li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>

    </body>

    </html>