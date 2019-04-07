<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>User Interface</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


    </head>
    <body>
            <div class="content">
                <div class="title m-b-md">
                    User Interface



            <h2>HTML Forms</h2>

            <form Method = "POST" action = '/userinterface'>

            {{csrf_field()}}

            <script type="text/javascript">

            function setForm(value) {

            var vehicle = document.getElementsByName("Vehicles")[0].value;


            if(value == 'Yes' && vehicle == "Sedan")
            {
                document.getElementById('SedanInterior').style='display:block;';
                document.getElementById('TruckInterior').style='display:none;';
                document.getElementById('HatchbackInterior').style='display:none;';
            }

            if(value == 'Yes' && vehicle == "Truck")
            {
                document.getElementById('SedanInterior').style='display:none;';
                document.getElementById('TruckInterior').style='display:block;';
                document.getElementById('HatchbackInterior').style='display:none;';
            }

            if(value == 'Yes' && vehicle == "Hatchback")
            {
                document.getElementById('SedanInterior').style='display:none;';
                document.getElementById('TruckInterior').style='display:none;';
                document.getElementById('HatchbackInterior').style='display:block;';
            }

        }

            function setFormVehicle(vehicle) {

            var value = document.getElementsByName("IncludeInterior")[0].value;


            if(value == 'Yes' && vehicle == "Sedan")
            {
                document.getElementById('SedanInterior').style='display:block;';
                document.getElementById('TruckInterior').style='display:none;';
                document.getElementById('HatchbackInterior').style='display:none;';
            }

            if(value == 'Yes' && vehicle == "Truck")
            {
                document.getElementById('SedanInterior').style='display:none;';
                document.getElementById('TruckInterior').style='display:block;';
                document.getElementById('HatchbackInterior').style='display:none;';
            }

            if(value == 'Yes' && vehicle == "Hatchback")
            {
                document.getElementById('SedanInterior').style='display:none;';
                document.getElementById('TruckInterior').style='display:none;';
                document.getElementById('HatchbackInterior').style='display:block;';
            }

        }

            </script>

            <div>
              Select Vehicle:<br>
              <select name="Vehicles" onchange="setFormVehicle(this.value)">
                <option value="Sedan">Sedan</option>
                <option value="Truck">Truck</option>
                <option value="Hatchback">Hatchback</option>
              </select>
            </div>

            <div>
              Select Color:<br>
              <select name="Colors">
                <option value="red">Red</option>
                <option value="blue">Blue</option>
                <option value="white">White</option>
                <option value="black">Black</option>
                <option value="grey">Grey</option>
              </select>
            </div>

            <div>
            <label>Include Interior View</label>
            <select id="select1" name= "IncludeInterior" onchange="setForm(this.value)">
            <option value="No">No</option>
            <option value="Yes">Yes</option>
            </select>
            </div>

            <div id="SedanInterior" style="display: none">
            Select Interior Color:<br>
              <select name="SedanInterior">
                <option value="darkgrey">Dark Grey</option>
                <option value="black">Jet Black</option>
                <option value="wheat">Dark Wheat</option>
              </select>
            </div>

            <div id="TruckInterior" style="display: none">
            Select Interior Color:<br>
              <select name="TruckInterior">
                <option value="black">Black</option>
              </select>
            </div>

            <div id="HatchbackInterior" style="display: none">
            Select Interior Color:<br>
              <select name="HatchbackInterior">
                <option value="black">Black</option>
                <option value="Galvanized">Black Galvanized</option>
                <option value="Umber">Black Umber</option>
              </select>
            </div>



            <input type="submit" value="Submit">
            </form>

            <p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

            @if (isset($data))


            @if($data['Vehicles'] == 'Sedan')


            @endif

            <p>{{dd($data)}}</p>


            @endif

                </div>
            </div>
        </div>
    </body>
</html>
