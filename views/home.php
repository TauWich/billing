<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <title>Billing</title>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/6f91e1345e.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="public/css/styles.css" rel="stylesheet">

    <script type="module">
        import { request } from './public/js/modules/request.js';
        import { error } from './public/js/modules/base.js';
        import { pageInject, historyPushState, activate } from './public/js/main.js';

        document.addEventListener("DOMContentLoaded", function()
        {
            const top = document.body;

            top.addEventListener("click", (event) => 
            {
                const target = event.target;
        	    event.preventDefault();
                if (target.localName == "a" )
                {
                    const page = target.getAttribute("page");
                    //if(window.history.state.page === page) return;
                    
                    request(page)
                        .then((data) =>{
                            if (data.hasOwnProperty("error"))
                            {
                                error(data);
                                return;
                            }
                            pageInject(data);
                            //historyPushState(page);
                            activate(target);
                        })
                        .catch(error);
                }
            });

            request("dashboard")
                .then((data)=>{
                    if (data.hasOwnProperty("error"))
                    {
                        error(data);
                        return;
                    }
                    pageInject(data);
                    //historyPushState("dashboard");
                })
                .catch(error);
            
        });
    </script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse p-0">
                <div class="d-flex flex-column flex-shrink-0 text-bg-dark">
                    <div class="fs-4 px-2 text-center">Billing</div>
                    <hr>
                    <ul class="nav nav-pills flex-column mb-auto" id="nav">
                        <li class="nav-item">
                            <a href="#" page="dashboard" class="nav-link active">
                                <i class="fa-solid fa-chart-line me-2"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" page="faktury" class="nav-link">
                                <i class="fa-regular fa-file-lines me-2"></i>
                                Faktury
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" page="clients" class="nav-link">
                                <i class="fa-regular fa-user me-2"></i>
                                Klienti
                            </a>
                        </li>
                    </ul>
                    <hr>
                    <div class="d-flex align-items-center text-white text-decoration-none">
                        <img src="public/resources/images/avatar.jpg" alt="" width="40" height="40" class="rounded-circle me-2">
                        <strong>TauWich</strong>
                    </div>
                </div>
            </nav>
            <main class="col-md-9 ms-sm-auto col-lg-10 p-5 text-bg-dark" id="main">
            </main>
        </div>
    </div>
</body>

</html>