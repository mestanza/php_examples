<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Clasificacion</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>

    <script>
        $(document).ready(function(){
            var cont = 0;
            var name = [];
            var create = 0;
            // var textName = $("#textName").val();
            $("#textName").keypress(function(t){
                if ((t.charCode < 97 || t.charCode > 122) && (t.charCode < 65 || t.charCode >90) && (t.charCode != 45)) {
                    return false;
                }
            });

            $("#addName").click(function(){
                if ($("#textName").val() == "") {
                    $('#prizePopup').modal('show');
                } else {
                    name[cont] = $("#textName").val();
                    $("#menu").append('<li class="list-group-item" id="'+cont+'">'+$("#textName").val()+'</li>'); 
                    cont++;
                }
                $("#textName").val('');
            });
            $("#closeBtn").click(function(){ 
                $('#prizePopup').modal('hide');
            });

            //desordenar array
            $("#listName").click(function(){
                if (create == 0) {
                    name.sort(function(){
                        return Math.random() - 0.5
                    });
                    console.log(name);
                    create++;                  
                }

                for (let i = 0; i < name.length; i++) {
                    $("#resultado").append('<li class="list-group-item" id="'+cont+'">'+name[i]+'</li>');
                    console.log(name[i])
                }

                $("#listName").addClass("disabled");
            });

            $("#resetList").click(function(){ 
                $("#textName").val('');
                location.reload();
            });

            

            // $("#listName").click(function(){
            //     $("#menu li").each(function(){
            //         //alert($(this).text())
            //         alert(name[cont]);
            //     });
	        // });
            
        });
    </script>


</head>
<body>
    <div class="container">
        <form class="mt-2">
        <div class="form-group">
            <label for="exampleInputEmail1">Nombre</label>
            <input type="text" class="form-control" id="textName" placeholder="Ingresar Nombre">
        </div>
        
        <button type="button" id="addName" class="btn btn-primary mt-2">Agregar Nombre</button>
        <button type="button" id="listName" class="btn btn-success mt-2">Crear</button>
        <button type="button" id="resetList" class="btn btn-danger mt-2">Reset</button>
        </form>


        <div class="row">
            <ul class="list-group mt-4 col-xl-6" id="menu">
                <!-- <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Morbi leo risus</li>
                <li class="list-group-item">Porta ac consectetur ac</li>
                <li class="list-group-item">Vestibulum at eros</li> -->
            </ul>
            <ul class="list-group mt-4 col-xl-6" id="resultado">
                <!-- <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Morbi leo risus</li>
                <li class="list-group-item">Porta ac consectetur ac</li>
                <li class="list-group-item">Vestibulum at eros</li> -->
            </ul>
        </div>
        
        <div class="modal" id="prizePopup" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header alert alert-warning">
                    <h5 class="modal-title">Advertencia</h5>
                    
                </div>
                <div class="modal-body">
                    <p>Por favor ingrese un nombre</p>
                </div>
                <div class="modal-footer"> 
                    
                    <button type="button" id="closeBtn" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
        </div>

    <script src="js/jquery.js"></script>
</body>
</html>