i=1;
setInterval(function(){

    data=document.getElementById('task'+i).innerHTML;
    document.getElementById('box').innerHTML=data;
    if(i==total)
    {
        alert(i);
        i=1;
    }
    else
    {
        alert(i);
        i++;
    }
    
},2000) ;