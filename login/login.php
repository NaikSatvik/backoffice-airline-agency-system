<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/images/airplane.png">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <title>Login Page</title>
    <style>
    body {
        background-image: url("../assets/images/bg_air.jpg");
        background-size:cover;
    }

    .flex {
        -webkit-box-flex: 1;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto
    }

    @media (max-width:991.98px) {
        .padding {
            padding: 1.5rem
        }
    }

    @media (max-width:767.98px) {
        .padding {
            padding: 1rem
        }
    }

    .padding {
        padding: 5rem
    }

    .card {
        background: #fff;
        border-width: 0;
        border-radius: .25rem;
        box-shadow: 0 1px 3px rgba(0, 0, 0, .05);
        margin-bottom: 1.5rem
    }

    .card-header {
        background-color: transparent;
        border-color: rgba(160, 175, 185, .15);
        background-clip: padding-box
    }

    .card-body p:last-child {
        margin-bottom: 0
    }

    .card-hide-body .card-body {
        display: none
    }

    .form-check-input.is-invalid~.form-check-label,
    .was-validated .form-check-input:invalid~.form-check-label {
        color: #f54394
    }


    /* Radio btns */

    $color1: #f4f4f4;
    $color2: #3197EE;

    .radio {
        margin: 0.5rem;

        input[type="radio"] {
            position: absolute;
            opacity: 0;

            +.radio-label {
                &:before {
                    content: '';
                    background: $color1;
                    border-radius: 100%;
                    border: 1px solid darken($color1, 25%);
                    display: inline-block;
                    width: 1.4em;
                    height: 1.4em;
                    position: relative;
                    top: -0.2em;
                    margin-right: 1em;
                    vertical-align: top;
                    cursor: pointer;
                    text-align: center;
                    transition: all 250ms ease;
                }
            }

            &:checked {
                +.radio-label {
                    &:before {
                        background-color: $color2;
                        box-shadow: inset 0 0 0 4px $color1;
                    }
                }
            }

            &:focus {
                +.radio-label {
                    &:before {
                        outline: none;
                        border-color: $color2;
                    }
                }
            }

            &:disabled {
                +.radio-label {
                    &:before {
                        box-shadow: inset 0 0 0 4px $color1;
                        border-color: darken($color1, 25%);
                        background: darken($color1, 25%);
                    }
                }
            }

            +.radio-label {
                &:empty {
                    &:before {
                        margin-right: 0;
                    }
                }
            }
        }
    }
    </style>
</head>

<body>
    <div id="content" class="flex">
        <div class="">
            <div class="page-content page-container" id="page-content">
                <div class="padding">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header"><strong>Login to your account</strong></div>
                                <div class="card-body">
                                    <form action="login-auth.php" method="post">
                                        <label class="text-muted" for="exampleInputEmail1">Who Are You ?</label><br>
                                        <div class="radio" style="display:inline;">
                                            <input id="radio-1" name="desig" type="radio" checked value="admin">
                                            <label for="radio-1" class="radio-label">Admin</label>
                                        </div>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <div class="radio" style="display:inline;">
                                            <input id="radio-2" name="desig" type="radio" value="hoe">
                                            <label  for="radio-2" class="radio-label">H.O.E</label>
                                            <small></small>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label class="text-muted" for="exampleInputEmail1">Email address</label>
                                            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"> 
                                                <small id="emailHelp"class="form-text text-muted">We don't share email with anyone</small>
                                        </div>
                                        <div class="form-group">
                                            <label class="text-muted" for="exampleInputPassword1">Password</label>
                                            <input name="pass" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                            <small id="passwordHelp" class="form-text text-muted">your password is saved in encrypted form</small>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Login</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>