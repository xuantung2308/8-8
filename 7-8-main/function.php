<!Doctype html>
<head>
    <script>
    function showhidden($pword,$bid){
        bid =""
        pword =""
        var upass = document.getElementById($pword);
        var sbtn = document.getElementById($bid);
        if(upass.type == "password"){
            upass.type = "text";
            sbtn.value = "Ẩn";
        }else{
            upass.type = "password";
            sbtn.value = "Hiện";
        }
    }
    </script>
</head>