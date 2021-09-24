        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://cdn.tiny.cloud/1/raq6kbm1mjkn31mifyj2n2sij7pofb625yd2r49bv2f5jb2r/tinymce/5/tinymce.min.js"></script>
        <script>
            for(var i in jQ){
                jQ[i]();
            }
            $('#sideNav').show();
            $('#main').show();            
            if (localStorage.getItem('clicked') === 'on') {
                $('#sideNav').hide();
                $('#main').toggleClass('col-md-12 mt-5 float-md-right pt-5');
            }
            $('.navbar-brand').click(function () {
                if (localStorage.getItem('clicked') === 'on') {
                    localStorage.setItem('clicked', 'off');
                    $('#sideNav').toggle();
                    $('#main').toggleClass('col-md-12 mt-5 float-md-right pt-5');
                } else {
                    localStorage.setItem('clicked', 'on');
                    $('#sideNav').toggle();
                    $('#main').toggleClass('col-md-12 mt-5 float-md-right pt-5');
                }
            });
        </script>
    </body>
</html>