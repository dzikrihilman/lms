<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        h2{
            text-align:center;
            background-color:#2155CD;
            padding:20px 20px;
            border-radius: 10px;
            color:#fff;
        }
        p{
            text-align:center;
        }
        nav{
            text-align:center;
            background-color:#2155CD;
            padding:15px 20px;
            border-radius: 10px;
        }
        nav a{
            text-decoration:none;
            color:#fff;
            margin-left:20px;
        }
        nav a:hover{
            background-color:#EB5353;
            padding:8px;
            border-radius:10px;
        }
        /* CSS */
        .button-86 {
            all: unset;
            width: 100px;
            height: 30px;
            font-size: 16px;
            background: transparent;
            border: none;
            position: relative;
            color: #f0f0f0;
            cursor: pointer;
            z-index: 1;
            padding: 10px 20px;
            display: inline-block;
            align-self: center;
            justify-content: center;
            white-space: nowrap;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            margin-right:50px;
        }

        .button-86::after,
        .button-86::before {
            content: '';
            position: absolute;
            bottom: 0;
            right: 0;
            z-index: -99999;
            transition: all .4s;
        }

        .button-86::before {
            transform: translate(0%, 0%);
            width: 100%;
            height: 100%;
            background: #28282d;
            border-radius: 10px;
        }

        .button-86::after {
            transform: translate(10px, 10px);
            width: 35px;
            height: 35px;
            background: #ffffff15;
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border-radius: 50px;
        }

        .button-86:hover::before {
            transform: translate(5%, 20%);
            width: 110%;
            height: 110%;
        }

        .button-86:hover::after {
            border-radius: 10px;
            transform: translate(0, 0);
            width: 100%;
            height: 100%;
        }

        .button-86:active::after {
            transition: 0s;
            transform: translate(0, 5%);
        }
    </style>
</head>
<body>
    <nav>
        <a href="/">Home</a>
        <a href="/admin">Admin</a>
        <a href="/pelajar">Pelajar</a>
        <a href="/pengajar">Pengajar</a>
    </nav>
    <h2>Ini Adalah Halaman Home</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur aliquid officia quaerat iste possimus dolores aspernatur molestiae illum? Nesciunt, nostrum quis. Corrupti ad cumque necessitatibus aspernatur tenetur, deserunt est consectetur error repudiandae quasi sapiente optio enim iure nam harum laboriosam reprehenderit adipisci nihil eius nesciunt, a vero blanditiis, quos debitis.</p>
    <a href="/login"><button class="button-86" role="button">Login Bro</button></a>
    <a href="/register"><button class="button-86" role="button">Register</button></a>
</body>
</html>