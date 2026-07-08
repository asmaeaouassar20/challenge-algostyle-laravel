<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet" href="{{ asset('assets/bootstrap/bootstrap.min.css') }}"/>
    <title>Algostyle-challenges</title>
    <style>
        *{
            margin: 0;
            padding:0;
        }
        /* layout */
        header{
            height: 180px;
            position: relative;
            width: calc(100% - 200px);
            margin-left: 200px;
        }
        .banniere{
            height: 100%;
            width: 100%;
            object-fit: cover;
        }
        .title-layout{
            position: absolute;
            top: 50px;
            margin-left: 220px;
        }
        aside {
            background-color: #D4E6FE;
            position: fixed;
            top: 0;
            bottom: 0;
            width: 200px;
        }
        aside nav{
            margin-top: 15px;
        }
        aside nav li {
            list-style: none;
            padding: 6px 0;
            margin-right: 32px;
            cursor: pointer;
            border-bottom: 3px solid transparent;
        }
        aside nav li:hover{
            border-bottom: 3px solid blue;
        }
        aside nav a{
            font-size: 20px;
            text-decoration: none;
        }
        main{
            margin-left: 220px;
            background-color: yellow;
            margin-top:15px;
        }

        .user-photo{
            width: 80px;
            height: 80px;
        }
    </style>
</head>
<body>
    <header>
        <img class="banniere" src="{{ asset('icons/my-icons/banniere.png') }}"alt="banniere" />
        <h1 class="text-primary title-layout">Students Management challenge</h1>
    </header>
    <div>
        <aside>
            <nav>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="{{ route('students.index') }}">Students</a></li>
                    <li><a href="{{ route('students.create') }}">Add student</a></li>
                </ul>
            </nav>
        </aside>
        <main>
            @yield('content')
        </main>
    </div>
    
</body>
</html>