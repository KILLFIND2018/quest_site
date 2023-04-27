<!DOCTYPE html>
<html lang="ru">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="HandheldFriendly" content="true">
    <title>Vertical Slider</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}?4" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css'>
    <link rel='stylesheet prefetch'
        href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css'>
</head>

<body>
    <div class="wrapper-content">
        <div class="container">
            <div class="row">
                <div class="slideshow">
                    <div class="slider">
                        <div class="item">
                            <div class="block-header">
                                <h1 class="main">Автомобильно-пешеходный <br>квест
                                    <br>
                                    «В поисках волшебного артефакта»
                                </h1>
                            </div>
                        </div>
                        <div class="item">
                            <p>Квест – приключенческая игра, требующая от игроков решения умственных задач для
                                продвижения по
                                сюжету.
                                <br>
                                <br>
                                С помощью игрового сюжета <span>квеста «В поисках волшебного артефакта»</span> игроки
                                будут
                                знакомиться с
                                архитектурными особенностями, культурными ценностями города Москвы и ближайшего
                                Подмосковья.
                                <br>
                                <br>
                                Количество участников не ограничено.
                            </p>
                            <img class = "footer" src="/images/home/svitok.jpg" alt="">
                        </div>
                        <div class="item">
                            <p>
                                <span>Цель игры – найти волшебный артефакт</span>, который способен сотворить
                                волшебство. О том, в чём
                                заключается волшебство, участники игры узнают, когда пройдут все испытания и прибудут в
                                финальную
                                точку для вручения сертификата в обмен на волшебный артефакт.
                            </p>
                            <img class = "footer" src="/images/home/svitok.jpg" alt="">
                        </div>
                        <div class="item">
                            <p>
                                <span>Квест «В поисках волшебного артефакта»</span> не только сплотит участников игры,
                                ведь командам
                                нужно будет
                                разгадать задания, прибыть на финальную точку вовремя и собрать части общего пазла для
                                получения
                                подробного плана к местонахождению артефакта, но также, откроет новые возможности для
                                неформального
                                общения между игроками, так как помимо постоянного взаимодействия игроков во время игры,
                                по
                                её
                                окончании и торжественному вручению сертификата, будет организован фуршет (чаепитие),
                                где
                                все игроки
                                смогут поделиться впечатлениями от прошедшей игры, обсудить её результаты и сделать
                                памятные
                                фотографии команд-участниц.
                            </p>
                            <img class = "footer" src="/images/home/svitok.jpg" alt="">
                            
    
                        </div>
                        <div class="item">
                            <div class="container-md">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h2 class="card-header">Заказать квест</h2>
                                        <div class="card-body">
                                            <form action="{{ url('send') }}" method="post">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="name"> Ваше имя</label>
                                                    <input name="name" value="{{ old('name') }}" type="text"
                                                        class="form-control" id="name" aria-describedby="name"
                                                        required>
                                                    @error('name')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="phone">Номер телефона</label>
                                                    <input name="phone" value="{{ old('phone') }}" type="text"
                                                        class="form-control" id="phone" required>
                                                    @error('phone')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Ваш Email</label>
                                                    <input name="email" value="{{ old('email') }}" type="email"
                                                        class="form-control" id="email" aria-describedby="email"
                                                        required>
                                                    @error('email')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="mount">Количество участников</label>
                                                    <input name="mount" value="{{ old('mount') }}"type="text"
                                                        class="form-control" id="mount" required>
    
                                                    @error('mount')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customControlValidation1" required>
                                                    <label class="custom-control-label" for="customControlValidation1"
                                                        style="font-size: 125%;">Я подтверждаю своё согласие с условиями
                                                        <a href="">Пользовательского соглашения</a> , политикой об
                                                        обработке персональных
                                                        данных и даю согласие на обработку персональных данных</label>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Отправить</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <h2 class="card-header">Запросить презентацию квеста</h2>
                                        <div class="card-body">
                                            <form action="{{ url('sendpresent') }}" method="post">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="name1"> Ваше имя</label>
                                                    <input name="name1" value="{{ old('name1') }}" type="name1"
                                                        class="form-control" id="name" aria-describedby="name1"
                                                        required>
                                                    @error('name1')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="phone1">Номер телефона</label>
                                                    <input name="phone1" value="{{ old('phone1') }}" type="phone1"
                                                        class="form-control" id="phone" required>
                                                    @error('phone1')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="email1">Ваш Email</label>
                                                    <input name="email1" value="{{ old('email1') }}" type="email1"
                                                        class="form-control" id="email" aria-describedby="email1"
                                                        required>
                                                    @error('email1')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customControlValidation2" required>
                                                    <label class="custom-control-label" for="customControlValidation2"
                                                        style="font-size: 125%;">Я подтверждаю своё согласие с условиями
                                                        <a href="">Пользовательского соглашения</a> , политикой об
                                                        обработке персональных
                                                        данных и даю согласие на обработку персональных данных</label>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Отправить запрос</button>
                                            </form>
                                        </div>
                                    </div>
                                    <br>
    
    
    
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="left col-6">
                                        <p>&#169; Все права защищены 2023</p>
                                    </div>
                                    <div class="right col-6">
                                        <p
                                            style="
                                        float: right;
                                    ">
                                            Разработка: <a href="#">Гуляев Мартинас</a></p>
                                    </div>
                                </div>
                            </div>
    
    
    
    
    
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <!-- Scripts -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.12/jquery.mousewheel.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js'></script>
    <script src="{{ asset('js/slide.js') }}?3"></script>
    <script type='text/javascript'>
        if (window.innerWidth < 600)
            location.href = 'http://site.ru/mobile/';
    </script>
</body>

</html>
