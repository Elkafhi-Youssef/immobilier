export function getData(src,fun){
    // new xhr object
    let xhr = new XMLHttpRequest(); 
    // open req
    xhr.open('GET',src,true);
    let data;
    xhr.onload = function(){
        // check status
        if(xhr.status === 200){
        // get data (JSON format)
        data = JSON.parse(this.response);
        //data = this.response;
            console.log(data);
            fun(data); // handel data
        }
    }      
    xhr.send();
}