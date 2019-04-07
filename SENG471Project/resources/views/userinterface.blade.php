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


            if(value == 'form1' && vehicle == "Sedan")
            {
                document.getElementById('form1').style='display:block;';
            }

}

            </script>

            <div>
              Select Vehicle:<br>
              <select name="Vehicles">
                <option value="Sedan">Sedan</option>
                <option value="Truck">Truck</option>
                <option value="Hatchback">Hatchback</option>
              </select>
            </div>

            <div>
              Select Color:<br>
              <select name="Colors">
                <option value="#ff0000">Red</option>
                <option value="#0000ff">Blue</option>
                <option value="#ffffff">White</option>
                <option value="#000000">Black</option>
                <option value="#999999">Grey</option>
              </select>
            </div>

            <div>
            <label>Include Interior View</label>
            <select id="select1" onchange="setForm(this.value)">
            <option value="form2">No</option>
            <option value="form1">Yes</option>
            </select>
            </div>

            <div id="form1" style="display: none">
            Select Interior Color:<br>
              <select name="Colors">
                <option value="#ff0000">Dark Grey</option>
                <option value="#0000ff">Jet Black</option>
                <option value="#ffffff">Dark Wheat</option>
              </select>
            </div>


            
            <input type="submit" value="Submit">
            </form>

            <p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

            @if (isset($data))


            @if($data['Vehicles'] == 'Sedan')

            <p> We are in Sedan </p>

            @endif

            <p>{{dd($data)}}</p>


            @endif

                </div>
            </div>
        </div>
    </body>
</html>
