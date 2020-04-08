<html>
    	<head>
	    	<title> Send push  </title>
	     
		 
		<script src = "js\main.js"> </script>
	    <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
		     <link rel="stylesheet" href="css/stayle.css">
			 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		</head>
		
		
	 
	
	<body>
	
	
	
	   <div class = "main">   
	   
	   
           <div class = "label">   Уведомления на телефон </div>
		  <div class="form-group">
		  
                
		    	<label for="msg">Ведите тему</label>
                <input type="emsg" class="form-control" id="tema" aria-describedby="emsg" placeholder="Введите тему">
                <small id="emsg" class="form-text text-muted">Тема сообщения</small>
          </div>
		  
		    <div class="form-group">
		  
                
		    	<label for="msg">Ведите сообщение</label>
                <input type="emsg" class="form-control" id="msg" aria-describedby="emsg" placeholder="Введите сообщения">
                <small id="emsg" class="form-text text-muted">Текст для отправки</small>
          </div>
		  
		    <div class="form-group">
		  
                
		    	<label for="msg">Ведите адрес переадресации</label>
                <input type="emsg" class="form-control" id="www" aria-describedby="emsg" placeholder="Введите адрес">
                <small id="emsg" class="form-text text-muted">например:http://google.com </small>
          </div>
		  
		  
		
		   <div class = "button">   
		  
                <button type="button" class="btn btn-primary" onclick="send()">Отправить</button>
				<hr>
				 <div class = "results">  </div>
				
				
		    </div>
			
			
			
         
       

        </div>
     
	
	
	
	
	
	</body>



</html>