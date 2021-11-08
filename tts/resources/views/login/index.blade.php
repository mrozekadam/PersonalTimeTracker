<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login • TimeTracker</title>

    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" type="text/css" >
</head>
<body>

    <div class="flex justify-center items-center login-form-wrapper" style="width: 100vw; height: 100vh">
        <div class="split">
            <div class="flex justify-center items-center">
                <img src="{{ URL::asset('images/ttlogo.png') }}" alt="">
            </div>

           <div>
                <div> 
                    <div class="tss-label">Username</div>
                    <input class="tss-input"/>
                </div>    

                <div> 
                    <div class="tss-label">Password</div>
                    <input class="tss-input" type="password"/>
                </div> 

                <div>
                    <button class="tss-button">Login</button>
                </div>
           </div>
        </div>
    </div>

</body>
</html>