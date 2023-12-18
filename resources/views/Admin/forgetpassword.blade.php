<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from adminlte.io/themes/v3/pages/examples/forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Dec 2023 12:39:01 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Forgot Password</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">


    <link rel="stylesheet" href="{{url('assets/plugins/fontawesome-free/css/all.min.css')}}">

    <link rel="stylesheet" href="{{url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{url('assets/css/adminlte.min2167.css?v=3.2.0')}}">
    <script nonce="d5c846b8-1f64-4817-b4b5-0e0a51a8b7fd">
        (function(w, d) {
            ! function(L, M, N, O) {
                L[N] = L[N] || {};
                L[N].executed = [];
                L.zaraz = {
                    deferred: [],
                    listeners: []
                };
                L.zaraz.q = [];
                L.zaraz._f = function(P) {
                    return async function() {
                        var Q = Array.prototype.slice.call(arguments);
                        L.zaraz.q.push({
                            m: P,
                            a: Q
                        })
                    }
                };
                for (const R of ["track", "set", "debug"]) L.zaraz[R] = L.zaraz._f(R);
                L.zaraz.init = () => {
                    var S = M.getElementsByTagName(O)[0],
                        T = M.createElement(O),
                        U = M.getElementsByTagName("title")[0];
                    U && (L[N].t = M.getElementsByTagName("title")[0].text);
                    L[N].x = Math.random();
                    L[N].w = L.screen.width;
                    L[N].h = L.screen.height;
                    L[N].j = L.innerHeight;
                    L[N].e = L.innerWidth;
                    L[N].l = L.location.href;
                    L[N].r = M.referrer;
                    L[N].k = L.screen.colorDepth;
                    L[N].n = M.characterSet;
                    L[N].o = (new Date).getTimezoneOffset();
                    if (L.dataLayer)
                        for (const Y of Object.entries(Object.entries(dataLayer).reduce(((Z, $) => ({
                                ...Z[1],
                                ...$[1]
                            })), {}))) zaraz.set(Y[0], Y[1], {
                            scope: "page"
                        });
                    L[N].q = [];
                    for (; L.zaraz.q.length;) {
                        const ba = L.zaraz.q.shift();
                        L[N].q.push(ba)
                    }
                    T.defer = !0;
                    for (const bb of [localStorage, sessionStorage]) Object.keys(bb || {}).filter((bd => bd.startsWith("_zaraz_"))).forEach((bc => {
                        try {
                            L[N]["z_" + bc.slice(7)] = JSON.parse(bb.getItem(bc))
                        } catch {
                            L[N]["z_" + bc.slice(7)] = bb.getItem(bc)
                        }
                    }));
                    T.referrerPolicy = "origin";
                    T.src = "../../../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(L[N])));
                    S.parentNode.insertBefore(T, S)
                };
                ["complete", "interactive"].includes(M.readyState) ? zaraz.init() : L.addEventListener("DOMContentLoaded", zaraz.init)
            }(w, d, "zarazData", "script");
        })(window, document);
    </script>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="../../index2.html"><b>Admin</b>LTE</a>
        </div>

        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>
                <form action="{{Route('recoverpass')}}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Request new password</button>
                        </div>

                    </div>
                </form>
                <p class="mt-3 mb-1">
                    <a href="{{Route('login')}}">Login</a>
                </p>
                <p class="mb-0">
                    <a href="{{Route('registration')}}" class="text-center">Register a new membership</a>
                </p>
            </div>

        </div>
    </div>

    <script src="{{url('assets/plugins/jquery/jquery.min.js')}}"></script>

    <script src="{{url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{url('assets/js/adminlte.min2167.js?v=3.2.0')}}"></script>
</body>

<!-- Mirrored from adminlte.io/themes/v3/pages/examples/forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Dec 2023 12:39:01 GMT -->

</html>