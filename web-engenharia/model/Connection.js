class Connection{
    constructor(){
        this.start = (callback) => {
             $.ajax({
                url: 'http://localhost/chatapplication/api/app/controller/Connection.php',
                type: 'GET',
                success: function(data){
                    if(data == "true"){
                        callback();
                    }else{
                         console.log("Erro de Conexão!");
                    }   
                }
            }); 
        }   
    }
}