<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    

</body>
    <script>
        $(document).ready(function(){
            table= $('#table').Datatable({
                processing: true,
                serverSide: true,


                ajax :{
                    url : '',
                    type : 'POST',


                }
                

            })
        })
    </script>
</html>
