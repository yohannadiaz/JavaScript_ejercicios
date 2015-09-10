<html>
    <head>
        <title>Luna</title>
        <script>
        function convPeso(){
            var peso = document.getElementById("peso").value;
            var luna = parseInt(peso) * 0.17;
            document.getElementById('Pesoluna').innerHTML = "<h3>Peso en la Luna : "+luna+" Kg.</h3>";
        }
        </script>
    </head>
    <body>
        <div style="text-align: center;">
            <h1>Tu peso en la Luna</h1>
            <label for="peso">Peso Kg :</label>
            <input type="text" name="peso" id="peso" />
            <input type="submit" onclick="convPeso();" value="Convertir" />
            <div id="Pesoluna">
                <h3>Peso en la Luna : </h3>
            </div>
        </div>
    </body>
</html>