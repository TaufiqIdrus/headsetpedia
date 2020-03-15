<style>
    .containerr {
        width: 30%;
        margin: 0 auto;
        padding: 40px;
    }

    button {
        width: 40%;
    }

    .input-group-text {
        width: 100px;
    }

    .alert {
        background: #e44e4e;
        color: white;
        padding: 10px;
        text-align: center;
        margin-top: 5%;
        border: 1px solid #b32929;
    }
</style>
<title>Login</title>
</head>

<body>

    <div class="containerr mt-5">
        
        <h4 class="text-center">Login</h4>
        <form method="POST" action="">
            <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="Password" name="password" class="form-control" placeholder="Password">
            </div>
            <button type="submit" name="aksi_login" class="btn btn-primary btn-block">Login</button>
        
        </form>

    </div>