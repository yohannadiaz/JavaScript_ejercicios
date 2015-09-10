<html>
    <head>
        <title>Vocales</title>
        <script>
        function calcular(){
            var palabra = document.getElementById("string").value;
            
            var vocales = 0;
            
            for(i=0; i<palabra.length; i++){
                if(palabra.charAt(i) == 'a'){
                    vocales++;
                }else if(palabra.charAt(i) == 'e'){
                    vocales++;
                }else if(palabra.charAt(i) == 'i'){
                    vocales++;
                }else if(palabra.charAt(i) == 'o'){
                    vocales++;
                }else if(palabra.charAt(i) == 'u'){
                    vocales++;
                }
            }
            
            document.getElementById('numero').innerHTML = "<h3>Numero de vocales : "+vocales+".</h3>";
        }
        </script>
    </head>
    <body>
        <div style="text-align: center;">
            <h1>Numero de Vocales</h1>
            <label for="string">String :</label>
            <input type="text" name="string" id="string" />
            <input type="submit" onclick="calcular();" value="Calcular" />
            <div id="numero">
                <h3>Numero de vocales : </h3>
            </div>
        </div>
    </body>
</html>