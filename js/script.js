(function(){
   
    var textArea = document.getElementById('floatingTextarea')
    var text_counter = document.getElementById('msg-count')
    textArea.addEventListener('input', updateCounter);
   
    textArea.addEventListener('blur', function(){
        if (textArea.value.length == 0){
            text_counter.className = 'hide';
        }
    })

    function updateCounter(e){
        console.log("method")
        var target = e.target || e.srcElement;
        var count = 5 - target.value.length;
        if(count < 0){
            text_counter.className = 'error';
            e.preventDefault();
        } else if (count <= 15){
            text_counter.className = 'warn';
        } else {
            text_counter.className = 'good';
        }

        var charMsg = '<b>' + count + '</b>' + ' characters';
        text_counter.innerHTML = charMsg;
    
    }

}());


