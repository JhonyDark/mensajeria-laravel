<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
{{--    <script src="https://cdn.tailwindcss.com"></script>--}}
    <link rel="stylesheet" href="css/gestoru.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/23150b6b10.js" crossorigin="anonymous"></script>
</head>

<body>
<x-navbar/>
<section class="section1">
    <!--		Izquierda-->
    <div class="d1">
        <h3 class="h3">
            <i class="fas fa-comments"></i>
            Sistema de mensajeria
        </h3>
        <img src="img/Gestoru-Logo-Negativo-Iso-Color.png" class="img2" alt="logo de gestoru">
        <!-- 			Usuarios horizontal -->
        <div class="dp">
            @foreach($users as $user)
            <div class="d2">
                <div class="d1-1">
                    <img src="img/juan.png" class="img1" alt="imagen de usuario">
                    <div class="d1-2"></div>
                </div>
                <small class="small-uh">{{$user->name}}</small>
            </div>
            @endforeach
        </div>
        <!-- 				end Usuarios -->

        <!-- 			lista de mensajes -->
        <div class="lm">
            <div class="d1-l">
                <img src="img/juan.png" class="img-l" alt="imagen listade de ususarios">
                <div class="d2-l">
                    <div class="d3-l">
                        <p class="p1-l">Juan Parra</p>
                        <small>09:00 AM</small>
                    </div>
                    <small class="small1">Lorem ipsum dolor, sit amet consectetur adipisicing elit. In, nostrum praesentium
                        perspiciatis vel
                        voluptatum.</small>
                </div>
            </div>
            <div class="d1-l">
                <img src="img/juan.png" class="img-l" alt="imagen listade de ususarios">
                <div class="d2-l">
                    <div class="d3-l">
                        <p class="p1-l">Juan Parra</p>
                        <small>09:00 AM</small>
                    </div>
                    <small class="small1">Lorem ipsum dolor, sit amet consectetur adipisicing elit. In, nostrum praesentium
                        perspiciatis vel
                        voluptatum.</small>
                </div>
            </div>
            <div class="d1-l">
                <img src="img/juan.png" class="img-l" alt="imagen listade de ususarios">
                <div class="d2-l">
                    <div class="d3-l">
                        <p class="p1-l">Juan Parra</p>
                        <small>09:00 AM</small>
                    </div>
                    <small class="small1">Lorem ipsum dolor, sit amet consectetur adipisicing elit. In, nostrum praesentium
                        perspiciatis vel
                        voluptatum.</small>
                </div>
            </div>
            <div class="d1-l">
                <img src="img/juan.png" class="img-l" alt="imagen listade de ususarios">
                <div class="d2-l">
                    <div class="d3-l">
                        <p class="p1-l">Juan Parra</p>
                        <small>09:00 AM</small>
                    </div>
                    <small class="small1">Lorem ipsum dolor, sit amet consectetur adipisicing elit. In, nostrum praesentium
                        perspiciatis vel
                        voluptatum.</small>
                </div>
            </div>
            <div class="d1-l">
                <img src="img/juan.png" class="img-l" alt="imagen listade de ususarios">
                <div class="d2-l">
                    <div class="d3-l">
                        <p class="p1-l">Juan Parra</p>
                        <small>09:00 AM</small>
                    </div>
                    <small class="small1">Lorem ipsum dolor, sit amet consectetur adipisicing elit. In, nostrum praesentium
                        perspiciatis vel
                        voluptatum.</small>
                </div>
            </div>
            <div class="d1-l">
                <img src="img/juan.png" class="img-l" alt="imagen listade de ususarios">
                <div class="d2-l">
                    <div class="d3-l">
                        <p class="p1-l">Juan Parra</p>
                        <small>09:00 AM</small>
                    </div>
                    <small class="small1">Lorem ipsum dolor, sit amet consectetur adipisicing elit. In, nostrum praesentium
                        perspiciatis vel
                        voluptatum.</small>
                </div>
            </div>
            <div class="d1-l">
                <img src="img/juan.png" class="img-l" alt="imagen listade de ususarios">
                <div class="d2-l">
                    <div class="d3-l">
                        <p class="p1-l">Juan Parra</p>
                        <small>09:00 AM</small>
                    </div>
                    <small class="small1">Lorem ipsum dolor, sit amet consectetur adipisicing elit. In, nostrum praesentium
                        perspiciatis vel
                        voluptatum.</small>
                </div>
            </div>
            <div class="d1-l">
                <img src="img/juan.png" class="img-l" alt="imagen listade de ususarios">
                <div class="d2-l">
                    <div class="d3-l">
                        <p class="p1-l">Juan Parra</p>
                        <small>09:00 AM</small>
                    </div>
                    <small class="small1">Lorem ipsum dolor, sit amet consectetur adipisicing elit. In, nostrum praesentium
                        perspiciatis vel
                        voluptatum.</small>
                </div>
            </div>
            <div class="d1-l">
                <img src="img/juan.png" class="img-l" alt="imagen listade de ususarios">
                <div class="d2-l">
                    <div class="d3-l">
                        <p class="p1-l">Juan Parra</p>
                        <small>09:00 AM</small>
                    </div>
                    <small class="small1">Lorem ipsum dolor, sit amet consectetur adipisicing elit. In, nostrum praesentium
                        perspiciatis vel
                        voluptatum.</small>
                </div>
            </div>
            <div class="d1-l">
                <img src="img/juan.png" class="img-l" alt="imagen listade de ususarios">
                <div class="d2-l">
                    <div class="d3-l">
                        <p class="p1-l">Juan Parra</p>
                        <small>09:00 AM</small>
                    </div>
                    <small class="small1">Lorem ipsum dolor, sit amet consectetur adipisicing elit. In, nostrum praesentium
                        perspiciatis vel
                        voluptatum.</small>
                </div>
            </div>
        </div>
    </div>
    <!--		Derecha-->
    <div class="d3">
        <div class="d3-head">
            <div class="dp-head">
                <div class="pd-head">
                    <div class="d1-1">
                        <img src="img/juan.png" class="img1" alt="imagen de usuario">
                        <div class="d1-2"></div>
                    </div>
                    <div class="d3-1-head">
                        <p class="p1-head">Juan Parra</p>
                        <small class="small1-head">En Linea</small>
                    </div>
                </div>
                <div class="d3-2-head">
                    <i class="fa-solid fa-magnifying-glass search"></i>
                    <i class="fa-solid fa-ellipsis-vertical search"></i>
                </div>
            </div>
        </div>
        <!--			Messages-->
        <div class="d3-messages">
            <div class="d3-3-message">
                <img src="img/juan.png" class="img3" alt="foto de perfil">
                <div class="d3-1-message">
                    <div class="d3-2-message">
                        <small class="txt-message">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi dolorum enim eveniet expedita praesentium vitae voluptas voluptatibus! Amet dolorem eligendi id qui quisquam.</small>
                    </div>
                    <small>09:55 AM</small>
                </div>
            </div>
            <div class="flex-reverse">
                <img src="img/juan.png" class="img4" alt="foto de perfil">
                <div class="d3-1-message">
                    <div class="reverse">
                        <small class="txt-message">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi dolorum enim eveniet expedita praesentium vitae voluptas voluptatibus! Amet dolorem eligendi id qui quisquam.</small>
                    </div>
                    <small class="time">09:55 AM</small>
                </div>
            </div>
            <div class="d3-3-message">
                <img src="img/juan.png" class="img3" alt="foto de perfil">
                <div class="d3-1-message">
                    <div class="d3-2-message">
                        <small class="txt-message">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi dolorum enim eveniet expedita praesentium vitae voluptas voluptatibus! Amet dolorem eligendi id qui quisquam.</small>
                    </div>
                    <small>09:55 AM</small>
                </div>
            </div>
            <div class="flex-reverse">
                <img src="img/juan.png" class="img4" alt="foto de perfil">
                <div class="d3-1-message">
                    <div class="reverse">
                        <small class="txt-message">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi dolorum enim eveniet expedita praesentium vitae voluptas voluptatibus! Amet dolorem eligendi id qui quisquam.</small>
                    </div>
                    <small class="time">09:55 AM</small>
                </div>
            </div>
        </div>
        <!--			BTN-Mensaje-->
        <div class="btn-content">
            <i class="fa-solid fa-paperclip fa-lg icon"></i>
            <i class="fa-solid fa-camera-retro fa-lg icon"></i>
            <input placeholder="Escribe tu mensaje..." class="input1" type="text">
            <button type="submit" class="enviar">
                <i class="fas fa-paper-plane fa-2x icon-e"></i>
            </button>
        </div>
    </div>
</section>
</body>
</html>
