<html>
    <head>
        <title>Area</title>
        <script>
        function areaTri(){
            var base = document.getElementById("base").value;
            var altura = document.getElementById("altura").value;
            var area = (parseInt(base) * parseInt(altura)) / 2;
            document.getElementById('Tri').innerHTML = "<h3>Area del Triangulo : "+area+" metro cuadrado.</h3>";
        }
        function areaCua(){
            var lado = document.getElementById("lado").value;
            var area = (parseInt(lado) * parseInt(lado));
            document.getElementById('Cua').innerHTML = "<h3>Area del Cuadrado : "+area+" metro cuadrado.</h3>";
        }
        function areaCir(){
            var radio = document.getElementById("radio").value;
            var area = Math.PI * (Math.pow(parseInt(radio),2));
            document.getElementById('Cir').innerHTML = "<h3>Area del Circulo : "+area+" metro cuadrado.</h3>";
        }
        </script>
    </head>
    <body>
        <div style="text-align: center;">
            <h1>Area</h1>
            
            <h2>Area Triangulo</h2>
            
            <label for="base">Base en metros : </label>
            <input type="text" name="base" id="base" />
            <label for="altura">Altura en metros : </label>
            <input type="text" name="altura" id="altura" />
            <input type="submit" onclick="areaTri();" value="Area Triangulo" />
            <div id="Tri">
                <h3>Area del Triangulo : </h3>
            </div>
            
            <h2>Area Cuadrado</h2>
            
            <label for="lado">lado en metros : </label>
            <input type="text" name="lado" id="lado" />
            <input type="submit" onclick="areaCua();" value="Area Cuadrado" />
            <div id="Cua">
                <h3>Area del Cuadrado : </h3>
            </div>
            
            <h2>Area Circulo</h2>
            
            <label for="radio">Radio en metros : </label>
            <input type="text" name="radio" id="radio" />
            <input type="submit" onclick="areaCir();" value="Area Triangulo" />
            <div id="Cir">
                <h3>Area del Circulo : </h3>
            </div>
        </div>
    </body>
</html>