<html>
    <head>
        <title>Convertir Galones</title>
        <script>
        function convertir(){
            var galones = document.getElementById("galones").value;
            var litros = galones * 3.7854;
            document.getElementById('litros').innerHTML = "<h3>Litros : "+litros+"</h3>";
        }
        </script>
    </head>
    <body>
        <div style="text-align: center;">
            <h1>Convertir Galones a Litros</h1>
            <label for="galones">Galones :</label>
            <input type="text" name="galones" id="galones" />
            <input type="submit" onclick="convertir();" value="Convertir" />
            <div id="litros">
                <h3>Litros : </h3>
            </div>
        </div>
    </body>
</html>