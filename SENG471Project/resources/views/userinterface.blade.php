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
                <option value="galvanized">Black Galvanized</option>
                <option value="umber">Black Umber</option>
              </select>
            </div>



            <input type="submit" value="Submit">
            </form>

            <p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

            @if (isset($data))


            @if($data['Vehicles'] == 'Sedan')
              <p>In Sedan </p>
              @if($data['Colors'] == 'red')
                <img src ='https://i.gyazo.com/a1c4ab4fc2f148b3088e6bc081a40e8d.png' >
              @endif

              @if($data['Colors'] == 'black')
                <img src ='https://i.gyazo.com/1b72fc9baf1617306314a74e5490652b.png' >
              @endif

              @if($data['Colors'] == 'white')
                <img src ='https://i.gyazo.com/6029bb45f312193d54bd0f9e3fe140d6.png' >
              @endif

              @if($data['Colors'] == 'grey')
                <img src ='https://i.gyazo.com/a12fbaf7b0793bdfd407d60d167f0655.png' >
              @endif

              @if($data['Colors'] == 'blue')
                <img src ='https://i.gyazo.com/b2535278e2a0f228d9a20be00c3f5e4c.png' >
              @endif

              @if($data['SedanInterior'] == 'darkgrey' && $data['IncludeInterior'] == 'Yes')
                <img src = 'https://i.gyazo.com/fdb0d37a1ba2fd60415e84acebf876ec.jpg'>
              @endif

              @if($data['SedanInterior'] == 'black' && $data['IncludeInterior'] == 'Yes')
                <img src = 'https://i.gyazo.com/f8572693b4be74fb878e7da45e07ccfc.jpg'>
              @endif

              @if($data['SedanInterior'] == 'wheat' && $data['IncludeInterior'] == 'Yes')
                <img src = 'https://i.gyazo.com/a1d774b69803fd72b32b4de66b3c6ed4.jpg'>
              @endif

            @endif

            @if($data['Vehicles'] == 'Truck')
              <p>In Truck </p>
              @if($data['Colors'] == 'red')
                <img src ='https://i.gyazo.com/f438ab27db0cb4326c346b53c565f22d.png' >
              @endif

              @if($data['Colors'] == 'black')
                <img src ='https://i.gyazo.com/13ec2535d8e7b3a7c46ddc8f35c47b89.png' >
              @endif

              @if($data['Colors'] == 'white')
                <img src ='https://i.gyazo.com/378f1a14b3cfd2ce46e0444acc7067ef.png' >
              @endif

              @if($data['Colors'] == 'grey')
                <img src ='https://i.gyazo.com/528ff04e2ca9eaa3c8dacef0f0eb5492.png' >
              @endif

              @if($data['Colors'] == 'blue')
                <img src ='https://i.gyazo.com/d8227365f766b442c017bc0ba2b0592d.png' >
              @endif

              @if($data['TruckInterior'] == 'black' && $data['IncludeInterior'] == 'Yes')
                <img src = 'https://i.gyazo.com/cb4d6ad12016acccae9d1074491fd76c.jpg'>
              @endif

            @endif

            @if($data['Vehicles'] == 'Hatchback')
              <p>In Hatchback </p>
              @if($data['Colors'] == 'red')
                <img src ='https://i.gyazo.com/9cdd2a52e039b0be911bcfb16cd28119.png' >
              @endif

              @if($data['Colors'] == 'black')
                <img src ='https://i.gyazo.com/9afacb69abd27d6b5b4e298fc18303b2.png' >
              @endif

              @if($data['Colors'] == 'white')
                <img src ='https://i.gyazo.com/18a8684972064fa721129471d1329897.png' >
              @endif

              @if($data['Colors'] == 'grey')
                <img src ='https://i.gyazo.com/ade7901cab9f87f97c98abbfb50a6aa6.png' >
              @endif

              @if($data['Colors'] == 'blue')
                <img src ='https://i.gyazo.com/b31a86a62135f4b7a85364e26881b1b4.png' >
              @endif

              @if($data['HatchbackInterior'] == 'black' && $data['IncludeInterior'] == 'Yes')
                <img src = 'https://i.gyazo.com/5ab46345f4ed7aae2057dd11737c869c.jpg'>
              @endif

              @if($data['HatchbackInterior'] == 'galvanized' && $data['IncludeInterior'] == 'Yes')
                <img src = 'https://i.gyazo.com/4c8a21e4f3861e684065ee37ee51472d.jpg'>
              @endif

              @if($data['HatchbackInterior'] == 'umber' && $data['IncludeInterior'] == 'Yes')
                <img src = 'https://i.gyazo.com/a99fd6a1e38fb2ee0cea258942c34527.jpg'>
              @endif

            @endif

            <p>{{dd($data)}}</p>


            @endif

                </div>
            </div>
        </div>
    </body>
</html>
