
//var opdrachten=[];

window.addEventListener("load",function()
    {
        var form=document.getElementById("formid");
        form.style.display="none";
        document.getElementById("add").addEventListener("click", function ()
            {
                console.log( "Open het formpje!" );
                form.style.display="block";
            });
        document.getElementById("annuleer").addEventListener("click", function ()
            {
                console.log( "sluit het formpje!" );
                form.style.display="none";    
            });
    
        var sendButton = document.getElementById("voegtoe");
        sendButton.addEventListener("click", function (){
            var title = $('#title').val();
            var text = $('#text').val();
            
            
            $.post('scripts/validate.php', {posttitle:title,posttext:text},
                function(data){
                    $('#results').html(data);
                }
            )
            
        });
    
        /*var deleteButton = document.getElemetById("delete");
        deleteButton.addEventListener("click", function(){
            
        })*/
    })
    
    




    
    
    /*
    var voegtoe = document.getElementById("voegtoe");
    voegtoe.addEventListener("click", toevoegen);
    function toevoegen(){*/
        /* Hier komen variables in plaats van title en dfgdfg*/
        //var title = ;
        //var text = ;
        /*opdrachten.push({title: "title", text:"dfgdfg"});
        updateView();
//        toPHP();
    }
    function updateView()
    {
        var container=document.getElementById("results");
        container.innerHTML="";
        for(var i=0;i<opdrachten.length;i++)
        {
            var new_el=document.createElement("div");
            var span=document.createElement("span");
            span.innerHTML=opdrachten[i].title;
            new_el.appendChild(span);
            
            var span=document.createElement("span");
            span.innerHTML=opdrachten[i].text;
            new_el.appendChild(span);
            container.appendChild(new_el);
        }

    
    }
    
    function toPHP()
    {
        var verzenden=JSON.stringify(opdrachten);
        console.log("ik verzend nu :"+verzenden);
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'scripts/opdracht.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        console.log(this.responseText);
      }
        };
        xhr.send("opdrachten="+verzenden);
    }
    
    
});

/*var button=document.getElementById("add");

button.addEventListener("click", clickButton);
   function clickButton(){
        var div = document.createElement("div");
        div.style.width = "250px";
        div.style.height = "200px";
        div.style.background = "gray";
       div.style.display = "inline-block";
       div.style.marginLeft = "25px";
       div.style.marginTop = "25px";
        div.style.color = "white";
        var container = document.getElementById("container");
        container.appendChild(div);
   }   */   
                        
