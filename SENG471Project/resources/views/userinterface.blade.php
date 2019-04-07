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
            
              First name:<br>
              <input type="text" name="firstname" value="Mickey">
              <br>
              Last name:<br>
              <input type="text" name="lastname" value="Mouse">
              <br><br>
              <input type="submit" value="Submit">
            </form> 

            <p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

            @if (isset($data))


            @if($data['firstname'] == 'Mickey')

            <p> Made it here! </p>
            @endif



            @endif

                </div>
            </div>
        </div>
    </body>
</html>
