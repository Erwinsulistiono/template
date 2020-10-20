<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <link rel="canonical" href="">

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= base_url() ?>assets/css/dashboard.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Company name</a>
        <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="#">Sign out</a>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="dashboard">
                                <span data-feather="home"></span>
                                Dashboard <span class="sr-only">(current)</span>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file"></span>
                                Sidenav 1
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="shopping-cart"></span>
                                Sidenav 2
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="users"></span>
                                Sidenav 3
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="bar-chart-2"></span>
                                Sidenav 4
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="layers"></span>
                                Sidenav 5
                            </a>
                        </li>
                    </ul>

                    <a class="text-secondary" data-toggle="collapse" href="#collapseMenu1" aria-expanded="false" aria-controls="collapseMenu1">
                        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                            Dropdown
                            <a class="d-flex align-items-center text-muted" href="#">
                                <span data-feather="plus-circle"></span>
                            </a>
                        </h6>
                    </a>
                    <div class="collapse" id="collapseMenu1">
                        <ul class="nav flex-column mb-2">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="file-text"></span>
                                    Sidenav
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="file-text"></span>
                                    Sidenav
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="file-text"></span>
                                    Sidenav
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="file-text"></span>
                                    Sidenav
                                </a>
                            </li>
                        </ul>
                    </div>
                    <a class="text-secondary" data-toggle="collapse" href="#collapseMenu2" aria-expanded="false" aria-controls="collapseMenu2">
                        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                            User
                            <a class="d-flex align-items-center text-muted" href="#">
                                <span data-feather="plus-circle"></span>
                            </a>
                        </h6>
                    </a>
                    <div class="collapse" id="collapseMenu2">
                        <ul class="nav flex-column mb-2">
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('user/user') ?>">
                                    <span data-feather="file-text"></span>
                                    User
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="file-text"></span>
                                    Level
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <main role="main" id="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                <?php $this->load->view($landing_page) ?>
            </main>
        </div>
    </div>
    <script src="<?= base_url(); ?>assets/js/jquery-3.5.1.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>

    <!-- Icons -->
    <script src="<?= base_url(); ?>assets/js/feather.min.js"></script>

    <script>
        let target = document.getElementById('main')
        let baseurl = '<?= base_url() ?>'
        let modalButton = document.querySelectorAll('.modal-button')
        let tableBody;
        let table;
        let tableReff;
        let destTh;
        let tableAct;
        let destAct;
        let newCell;
        let newText;
        let pathUrl;
        let activeClass;
        let activeMethod;
        let url;
        let data;

        const navBtn = document.querySelectorAll(".nav-link")
        navBtn.forEach(el => {
            el.addEventListener('click', function(e) {
                e.preventDefault()
                url = e.target.href
                navBtn.forEach(rm => rm.classList.remove("active"))
                fetch_page(url)
                el.classList.add("active");
            })
        })

        let fetch_page = url => {
            fetch(url)
                .then((response) => {
                    response.json().then((result) => {
                        data = result;
                        target.innerHTML = data.html
                        isLoadedAttachDataTable(data.data)
                    })
                })
                .catch((err) => {
                    alert("failed to fetch")
                })
        }

        let isLoadedAttachDataTable = result => {
            tableBody = document.querySelector('#target')
            table = document.querySelector('.table')
            tableReff = table.querySelectorAll('th[data-field]')
            destTh = [...tableReff].map(t => t.getAttribute('data-field'))
            tableAct = table.querySelector('th[data-action]').getAttribute('data-action')
            destAct = tableAct.split('-')
            pathUrl = url.split('/')
            activeClass = pathUrl[pathUrl.length - 2]
            activeMethod = pathUrl[pathUrl.length - 1]

            result
                .forEach((val, key) => {
                    let newRow = tableBody.insertRow()
                    newCell = newRow.insertCell()
                    newText = document.createTextNode(key + 1)
                    newCell.appendChild(newText)
                    destTh
                        .forEach(th => {
                            newCell = newRow.insertCell()
                            newText = document.createTextNode(val[th])
                            newCell.appendChild(newText)
                        })
                    newCell = newRow.insertCell()
                    newCell.innerHTML = `<a data-id="${Object.values(val)[0]}" data-toggle="modal" data-target="#modal_1" class="btn modal-button text-secondary pt-0">
                            <span data-feather="edit-2"></span></a>
                            <a href="${baseurl}${activeClass}/hapus_${activeMethod}/${Object.values(val)[0]}" class="btn deleteRow text-secondary pt-0">
                            <span data-feather="x"></span></a>`
                })
            feather.replace()
        }

        $(document).on('submit', '#form_add_edit', function(e) {
            e.preventDefault()
            let form = $(this)
            console.log(form[0])
            const data = new FormData(form[0])
            fetch(e.action, {
                    method: e.method,
                    body: data,
                })
                .then(response => response.json())
                .then(data => {
                    target.innerHTML = data.html
                    isLoadedAttachDataTable(data.data)
                })
                .catch(error => {
                    alert('Error Couldn\'t fetch data')
                })
        })

        function AutoFillForm(form) {
            this.form = form
            $(document).on('show.bs.modal', `#${form}`, function(event) {
                let button = $(event.relatedTarget)
                let key_val = button.data('id')
                let modal_data = data.data.filter(d => Object.values(d)[0] == key_val)
                const form = $(this)[0]

                if (key_val) {
                    Array.from(form).forEach(assignVal => {
                        let nameInput = assignVal.name
                        if (nameInput) {
                            $.each(modal_data, function(key, entry) {
                                document.getElementsByName(nameInput)[key].value = entry[nameInput]

                            })
                        }
                    })
                } else {
                    Array.from(form).forEach(assignVal => {
                        let nameInput = assignVal.name
                        if (nameInput) {
                            document.getElementsByName(nameInput)[0].value = ""
                        }
                    })
                }
            })
            let pass1 = document.querySelector('input[name="user_password"]')
            let pass2 = document.querySelector('input[name="user_password2"]')
            console.log(pass1)
            console.log(pass2)
        }

        $(document).on('click', '.deleteRow', function(e) {
            e.preventDefault();
            fetch(e.href)
                .then((response) => {
                    response.json().then((result) => {
                        data = result
                        target.innerHTML = data.html
                        isLoadedAttachDataTable(data.data)
                    })
                })
        })
    </script>

    <script>
        feather.replace()
        const form1 = new AutoFillForm('form_add_edit')
    </script>

</body>

</html>