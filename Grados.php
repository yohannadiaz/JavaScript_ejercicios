<html>
    <head>
        <title>Convertir Grados</title>
        <script>
        function convCen(){
            var centigrados = document.getElementById("grados").value;
            var fahrenheit = (centigrados * 1.8000) + 32.00;
            var kelvin = (parseInt(centigrados) + 273.15);
            document.getElementById('convCen').innerHTML = "<h3>Centigrados : "+centigrados+"</h3>";
            document.getElementById('convFah').innerHTML = "<h3>Fahrenheit : "+fahrenheit+"</h3>";
            document.getElementById('convKel').innerHTML = "<h3>Kelvin : "+kelvin+"</h3>";
        }
        function convFah(){
            var fahrenheit = document.getElementById("grados").value;
            var centigrados = (parseInt(fahrenheit - 32)) / 1.8000;
            var kelvin = ((parseInt(fahrenheit - 32)) / 1.8000) + 273.15;
            document.getElementById('convCen').innerHTML = "<h3>Centigrados : "+centigrados+"</h3>";
            document.getElementById('convFah').innerHTML = "<h3>Fahrenheit : "+fahrenheit+"</h3>";
            document.getElementById('convKel').innerHTML = "<h3>Kelvin : "+kelvin+"</h3>";
        }
        function convKel(){
            var kelvin = document.getElementById("grados").value;
            var centigrados = (parseInt(kelvin) - 273.15);
            var fahrenheit = ((parseInt(kelvin) - 273.15) * 1.8000) + 32.00;
            document.getElementById('convCen').innerHTML = "<h3>Centigrados : "+centigrados+"</h3>";
            document.getElementById('convFah').innerHTML = "<h3>Fahrenheit : "+fahrenheit+"</h3>";
            document.getElementById('convKel').innerHTML = "<h3>Kelvin : "+kelvin+"</h3>";
        }
        </script>
    </head>
    <body>
        <div style="text-align: center;">
            <h1>Convertir Grados</h1>
            <label for="grados">Grados :</label>
            <input type="text" name="grados" id="grados" />
            <br />
            <br />
            <input type="submit" onclick="convCen();" value="Convertir a Fahrenheit y Kelvin" />
            <input type="submit" onclick="convFah();" value="Convertir a Centigrados y Kelvin" />
            <input type="submit" onclick="convKel();" value="Convertir a Centigrados y Fahrenheit" />
            <div id="convCen">
                <h3>Centigrados : </h3>
            </div>
            <div id="convFah">
                <h3>Fahrenheit : </h3>
            </div>
            <div id="convKel">
                <h3>Kelvin : </h3>
            </div>
        </div>
    </body>
</html>