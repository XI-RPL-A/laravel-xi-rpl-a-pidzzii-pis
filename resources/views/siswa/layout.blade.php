<html>
<head>
    <title>Sistem Informasi Akademik</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <style>
    .dark-mode{
        background-color:#212529;
        color:white;
    }

    .dark-mode .table{
        color:white;
    }

    .dark-mode .card{
        background:#343a40;
        color:white;
    }
</style>
</head>
<body>
    <div class="text-right mt-3">
    <button class="btn btn-secondary" onclick="ubahTema()">
        Ubah Tema
    </button>
</div>

<div class="container">
    @yield('content')

    <script>
    setTimeout(function () {
    let success = document.getElementById('success-alert');
    if (success) success.style.display = 'none';

    let error = document.getElementById('error-alert');
    if (error) error.style.display = 'none';
    }, 3000);
</script>
<script>
function ubahTema(){
    document.body.classList.toggle("dark-mode");

    if(document.body.classList.contains("dark-mode")){
        localStorage.setItem("tema","dark");
    }else{
        localStorage.setItem("tema","light");
    }
}

window.onload = function(){
    if(localStorage.getItem("tema")=="dark"){
        document.body.classList.add("dark-mode");
    }
}
</script>
</body>

</html>