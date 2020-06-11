<html>  
<body>
	<p id = "pid">  
    </p> 
      
    <button id = "button" onclick = "btnclick()">  
        click here  
    </button>  
      
    <p id = "selected">  
    </p>  
      
    <script>  
        var up = document.getElementById('pid');  
        var down = document.getElementById('selected');  
          
        var arr = ["Juan", "Pedro", "Mark", "Manuel"]; 
          
        up.innerHTML =  arr; 
          
        function btnclick() { 
            down.innerHTML =  
                arr[Math.floor(Math.random() * arr.length)]; 
                down.remove(x.selectedIndex);
        }  
    </script>  

</body>  
  
</html> 
