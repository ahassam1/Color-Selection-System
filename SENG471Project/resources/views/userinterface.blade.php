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
                <div>
                  Select Vehicle:<br>
                  <select name="Vehicle">
                    <option value="GMC Sierra">GMC Sierra</option>
                    <option value="Chevy">Chevy</option>
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

            </form>

            <p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>


                </div>
            </div>
        </div>
    </body>
</html>
