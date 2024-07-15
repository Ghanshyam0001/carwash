<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LMS</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css?v=3.2.0">

    <script nonce="b017961a-28a9-4ee0-a829-4ce1658354a0">
        try {
            (function(w, d) {
                ! function(bS, bT, bU, bV) {
                    bS[bU] = bS[bU] || {};
                    bS[bU].executed = [];
                    bS.zaraz = {
                        deferred: [],
                        listeners: []
                    };
                    bS.zaraz._v = "5629";
                    bS.zaraz.q = [];
                    bS.zaraz._f = function(bW) {
                        return async function() {
                            var bX = Array.prototype.slice.call(arguments);
                            bS.zaraz.q.push({
                                m: bW,
                                a: bX
                            })
                        }
                    };
                    for (const bY of ["track", "set", "debug"]) bS.zaraz[bY] = bS.zaraz._f(bY);
                    bS.zaraz.init = () => {
                        var bZ = bT.getElementsByTagName(bV)[0],
                            b$ = bT.createElement(bV),
                            ca = bT.getElementsByTagName("title")[0];
                        ca && (bS[bU].t = bT.getElementsByTagName("title")[0].text);
                        bS[bU].x = Math.random();
                        bS[bU].w = bS.screen.width;
                        bS[bU].h = bS.screen.height;
                        bS[bU].j = bS.innerHeight;
                        bS[bU].e = bS.innerWidth;
                        bS[bU].l = bS.location.href;
                        bS[bU].r = bT.referrer;
                        bS[bU].k = bS.screen.colorDepth;
                        bS[bU].n = bT.characterSet;
                        bS[bU].o = (new Date).getTimezoneOffset();
                        if (bS.dataLayer)
                            for (const ce of Object.entries(Object.entries(dataLayer).reduce(((cf, cg) => ({
                                    ...cf[1],
                                    ...cg[1]
                                })), {}))) zaraz.set(ce[0], ce[1], {
                                scope: "page"
                            });
                        bS[bU].q = [];
                        for (; bS.zaraz.q.length;) {
                            const ch = bS.zaraz.q.shift();
                            bS[bU].q.push(ch)
                        }
                        b$.defer = !0;
                        for (const ci of [localStorage, sessionStorage]) Object.keys(ci || {}).filter((ck => ck.startsWith("_zaraz_"))).forEach((cj => {
                            try {
                                bS[bU]["z_" + cj.slice(7)] = JSON.parse(ci.getItem(cj))
                            } catch {
                                bS[bU]["z_" + cj.slice(7)] = ci.getItem(cj)
                            }
                        }));
                        b$.referrerPolicy = "origin";
                        b$.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(bS[bU])));
                        bZ.parentNode.insertBefore(b$, bZ)
                    };
                    ["complete", "interactive"].includes(bT.readyState) ? zaraz.init() : bS.addEventListener("DOMContentLoaded", zaraz.init)
                }(w, d, "zarazData", "script");
            })(window, document)
        } catch (e) {
            throw fetch("/cdn-cgi/zaraz/t"), e;
        };
    </script>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
               
            </ul>
        </nav>


        <aside class="main-sidebar sidebar-dark-primary elevation-4">
           
            <div style="text-align: center;">
                <span class="brand-text font-weight-light" style="display: inline-block; color: white; padding: 5px;"><h2>Clean Wash</h2></span>
            </div>
            
            </a>

            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                    <li class="nav-item">
                        <a href="/admin/index" class="nav-link {{ Route::currentRouteName() == 'index' ? 'active' : ''}}">
                            {{-- <i class="fas fa-circle nav-icon"></i> --}}
                            {{-- <p>dashboard</p> --}}
                        </a>
                    </li>
                    {{-- <li class="nav-item">
                        <a href="/deshboard" class="nav-link" style="display:none"></a>
                    </li> --}}
                    <li class="nav-item">
                        <a href="/admin/customers" class="nav-link {{ Route::currentRouteName() == 'customers' ? 'active' : ''}}">
                            <i class="fas fa-circle nav-icon"></i>
                            <p>Customres</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/washingplans" class="nav-link {{ Route::currentRouteName() == 'washingplans' ? 'active' : ''}}">
                            <i class="fas fa-circle nav-icon"></i>
                            <p>Washing Plans</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/assignments" class="nav-link {{ Route::currentRouteName() == 'assignments' ? 'active' : ''}}">
                            <i class="fas fa-circle nav-icon"></i>
                            <p>Assignments</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/co_po_attainment" class="nav-link {{ Route::currentRouteName() == 'co_po_attainment' ? 'active' : ''}}">
                            <i class="fas fa-circle nav-icon"></i>
                            <p>CO-PO Attainment</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/attendance" class="nav-link {{ Route::currentRouteName() == 'attendance' ? 'active' : ''}}">
                            <i class="fas fa-circle nav-icon"></i>
                            <p>Attendance</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/logout" class="nav-link {{ Route::currentRouteName() == 'admin_logout' ? 'active' : ''}}">
                            <i class="fas fa-circle nav-icon"></i>
                            <p>logout</p>
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>

        <div class="content-wrapper">
            @yield('content')
        </div>

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.2.0
            </div>
            <strong>Copyright &copy; 2014-2021 <a href=""></a>.</strong> All rights reserved.
        </footer>

        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>

    <script src="../../plugins/jquery/jquery.min.js"></script>
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../dist/js/adminlte.min.js?v=3.2.0"></script>
</body>

</html>
